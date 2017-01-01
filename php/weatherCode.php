<?php 
    if(!isset($_GET['cityName'])) {
      $startError = true;
      $error = false;
    }
    if(isset($_GET['cityName'])) {
    
      $getCity = $_GET['cityName'];
      $city = str_replace(' ','',$getCity);

      $urlCurrent = "http://api.openweathermap.org/data/2.5/weather?q=".$city."&units=metric&appid=e7711d593fc3e402bf48f5c09b0cbfb1";

      $currentContents = file_get_contents($urlCurrent);
      $currentArray = json_decode($currentContents, true);
  $urlDays = "http://api.openweathermap.org/data/2.5/forecast/daily?q=".$city."&mode=json&units=metric&cnt=8&appid=e7711d593fc3e402bf48f5c09b0cbfb1";

      $daysContents = file_get_contents($urlDays);
      $daysArray = json_decode($daysContents, true);
      
      $cod = $currentArray['cod'];
      
      if($cod != 200) {
        $error = true;
      }
      
      $cCityName = $currentArray['name'];
      $cCountryName = $currentArray['sys']['country'];
      $cWeatherName = $currentArray['weather'][0]['description'];
      $cTemp = $currentArray['main']['temp'];
      $cPressure = $currentArray['main']['pressure'];
      $cHumidity = $currentArray['main']['humidity'];
      $cWindSpeed = $currentArray['wind']['speed'];
  }

?>