<?php 
  include("php/weatherCode.php");
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags always come first -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    
    <title>The Weather Project</title>
    <link rel="shortcut icon" href="res/favicon.ico" type="image/x-icon">
    <link rel="icon" href="res/favicon.ico" type="image/x-icon">
     <!--Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.5/css/bootstrap.min.css" integrity="sha384-AysaV+vQoT3kOAXZkl02PThvDr8HYKPZhNT5h/CXfBThSRXQ6jW5DO2ekP5ViFdi" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Josefin+Slab:700|Open+Sans+Condensed:300" rel="stylesheet">
    <link rel="stylesheet" href="src/fa/css/font-awesome.min.css">
    <link rel="stylesheet" href="src/css/bootstrap-horizon.css">
    <link rel="stylesheet" href="css/styling.css">
    
    <style>
    
      .toBeDiv {
        display:<?php echo ($error || $startError) ? 'none':'block' ?>;
      }
      
      #errorDiv {
        display:<?php echo $error ? 'block':'none' ?>;
        
      }
      
      #footerFront {
        display:<?php echo ($error || $startError) ? 'block':'none' ?>;
      }
    
    </style>
    
  </head>
  <body>
    <div id="firstPage" class="container-fluid">
       <div id="titleText">
         <div class="row">
           <div class="col-md-6 offset-md-3">
            <h1>The Weather Project</h1>
           </div>
         </div>
         <div class="row">
           <div class="col-md-6 offset-md-3">
            <h3>All About Weather!</h3>
           </div>
         </div>
       </div>
       <div id="inputForm">
         <div class="row">
           <div class="col-md-8 offset-md-2">
            <form method="get">
              <p>My
              <label for="cityName">City</label> is
              <input type="text" name="cityName" id="cityName" minlength="3" placeholder="(your City here)" value="<?php if(isset($_GET['cityName']) && $_GET['cityName'] != 'Mumbai') echo $cCityName; ?>" required>
              <button type="submit" class="btn grey-button" id="weatherButton">Weather, Please!</button>
             </p>
            </form>
           </div>
         </div>
       </div>
              
       <div id="errorDiv" class="row" style="position:absolute;">
         <div class="col-md-4 offset-md-4">
           <div class="alert alert-danger" role="alert" >
             Sorry, the City could not be found. Please give it another try!
           </div>
         </div>
       </div>
       
       
       
       <div id="currentForecastDiv" class="toBeDiv">
         
         <div class="row">
           <div class="col-md-6 offset-md-3">
             <div id="currentForecast">
               
               <div id="forecastText">
                 
                <p>
                  City Name&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: &nbsp;<span class="cityName"><?php if(isset($_GET['cityName'])) echo $cCityName; ?></span>, <span class="countryName"><?php if(isset($_GET['cityName'])) echo $cCountryName; ?></span><br>
                  Weather&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: &nbsp;<span class="weatherName"><?php if(isset($_GET['cityName'])) echo $cWeatherName; ?></span><br>
                  
                  Current Temperature&nbsp;&nbsp;&nbsp;: &nbsp;<span class="currentTemp"><?php if(isset($_GET['cityName'])) echo $cTemp; ?> &#8451;</span><br>
                  Pressure&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: &nbsp;<span class="pressure"><?php if(isset($_GET['cityName'])) echo $cPressure; ?> </span><span class="units">hPa</span><br>
                  
                  Humidity&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: &nbsp;<span class="humidity"><?php if(isset($_GET['cityName'])) echo $cHumidity; ?> </span> <span class="units">%</span><br>
                  <!--Wind&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: &nbsp;<span class="windName">Gentle Breeze</span><br>-->
                  
                  Wind Speed &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: &nbsp;<span class="windSpeed"><?php if(isset($_GET['cityName'])) echo $cWindSpeed; ?> </span><span class="units">m/s</span><br>
                </p>
                 
               </div>
               
             </div>
           </div>
         </div>
         
       </div>
       
       <div id="navButton" class="toBeDiv">
         <div class="row">
           <div class="col-md-2 offset-md-5">
             <a href="#secondPage" class="btn btn-circle page-scroll" data-toggle="tooltip" data-placement="right" title="Click for more Weather Info">
              <i class="fa fa-angle-double-down animated"></i>
             </a>
           </div>
         </div>
       </div>
         
      <footer id="footerFront" class="footer-distributed">

        <div class="footer-right">

          <a href="mailto:bhavikjoshi29@gmail.com"><i class="fa fa-envelope"></i></a>
          <a href="https://twitter.com/BhavikJoshi07"><i class="fa fa-twitter"></i></a>

        </div>

        <div class="footer-left">

          <p class="footer-links">
            Developed with <i class="fa fa-heart" aria-hidden="true"></i> in India by <a href="https://www.facebook.com/BhavikJoshi07">Bhavik Joshi</a>
          </p>
        </div>

      </footer>

          
    </div>
    
    
    <div id="secondPage" class="toBeDiv">
      
      <div class="row">
        <div id="exForecastText">
          Here's 7 Days forecast for Weather in <span class="cityName"><?php if(isset($_GET['cityName'])) echo $daysArray['city']['name']; ?></span>, <span class="countryName"><?php if(isset($_GET['cityName'])) echo $daysArray['city']['country']; ?></span>
        </div>
      </div>
      <div class="row outerCardsDiv">
        <div class="col-md-10 offset-md-1">
          <div class="row row-horizon">
           
            <!--Forecast Card 1-->             
             <div class="col-md-4">
              <div class="card">
                <div class="card-block">
                  <div class="blockContents">
                    <img class="card-img-top" src="http://openweathermap.org/img/w/<?php if(isset($_GET['cityName'])) echo $daysArray['list'][1]['weather'][0]['icon']; ?>.png" height="75px" width="75px" alt="Card image cap">
                    <h3 class="card-title"><span class="cityName"><?php if(isset($_GET['cityName'])) echo $daysArray['city']['name']; ?></span></h3>
                    <h5 class="dateLi"><span class="time"><?php if(isset($_GET['cityName'])) echo date('jS M, l', $daysArray['list'][1]['dt']); ?></span> </h5>
                  </div>
                </div>
                <ul class="list-group list-group-flush">
                  <li class="list-group-item">Weather : <span class="weather"><?php if(isset($_GET['cityName'])) echo  $daysArray['list'][1]['weather'][0]['description']; ?></span> </li>
                  <li class="list-group-item">Min Temperature : <span class="minTemp"><?php if(isset($_GET['cityName'])) echo  $daysArray['list'][1]['temp']['min']; ?> &#8451;</span> </li>
                  <li class="list-group-item">Max Temperature : <span class="maxTemp"><?php if(isset($_GET['cityName'])) echo  $daysArray['list'][1]['temp']['max']; ?> &#8451;</span> </li>
                  <li class="list-group-item">Pressure : <span class="pressure"><?php if(isset($_GET['cityName'])) echo  $daysArray['list'][1]['pressure']; ?> </span><span class="units">hPa</span></li>
                  <li class="list-group-item">Humidity : <span class="humidity"><?php if(isset($_GET['cityName'])) echo  $daysArray['list'][1]['humidity']; ?> </span><span class="units">%</span></li>
                  <!--<li class="list-group-item">Wind : <span class="windName">Gentle Breeze</span></li>-->
                  <li class="list-group-item">Wind Speed : <span class="windSpeed"><?php if(isset($_GET['cityName'])) echo  $daysArray['list'][1]['speed']; ?> </span><span class="units">m/s</span></li>
                </ul>
              </div>
            </div>
            
            <!--Forecast Card 2-->             
             <div class="col-md-4">
              <div class="card">
                <div class="card-block">
                  <div class="blockContents">
                    <img class="card-img-top" src="http://openweathermap.org/img/w/<?php if(isset($_GET['cityName'])) echo $daysArray['list'][2]['weather'][0]['icon']; ?>.png" height="75px" width="75px" alt="Card image cap">
                    <h3 class="card-title"><span class="cityName"><?php if(isset($_GET['cityName'])) echo $daysArray['city']['name']; ?></span></h3>
                    <h5 class="dateLi"><span class="time"><?php if(isset($_GET['cityName'])) echo date('jS M, l', $daysArray['list'][2]['dt']); ?></span> </h5>
                  </div>
                </div>
                <ul class="list-group list-group-flush">
                  <li class="list-group-item">Weather : <span class="weather"><?php if(isset($_GET['cityName'])) echo  $daysArray['list'][2]['weather'][0]['description']; ?></span> </li>
                  <li class="list-group-item">Min Temperature : <span class="minTemp"><?php if(isset($_GET['cityName'])) echo  $daysArray['list'][2]['temp']['min']; ?> &#8451;</span> </li>
                  <li class="list-group-item">Max Temperature : <span class="maxTemp"><?php if(isset($_GET['cityName'])) echo  $daysArray['list'][2]['temp']['max']; ?> &#8451;</span> </li>
                  <li class="list-group-item">Pressure : <span class="pressure"><?php if(isset($_GET['cityName'])) echo  $daysArray['list'][2]['pressure']; ?> </span><span class="units">hPa</span></li>
                  <li class="list-group-item">Humidity : <span class="humidity"><?php if(isset($_GET['cityName'])) echo  $daysArray['list'][2]['humidity']; ?> </span><span class="units">%</span></li>
                  <!--<li class="list-group-item">Wind : <span class="windName">Gentle Breeze</span></li>-->
                  <li class="list-group-item">Wind Speed : <span class="windSpeed"><?php if(isset($_GET['cityName'])) echo  $daysArray['list'][2]['speed']; ?> </span><span class="units">m/s</span></li>
                </ul>
              </div>
            </div>
            
            <!--Forecast Card 3-->             
             <div class="col-md-4">
              <div class="card">
                <div class="card-block">
                  <div class="blockContents">
                    <img class="card-img-top" src="http://openweathermap.org/img/w/<?php if(isset($_GET['cityName'])) echo $daysArray['list'][3]['weather'][0]['icon']; ?>.png" height="75px" width="75px" alt="Card image cap">
                    <h3 class="card-title"><span class="cityName"><?php if(isset($_GET['cityName'])) echo $daysArray['city']['name']; ?></span></h3>
                    <h5 class="dateLi"><span class="time"><?php if(isset($_GET['cityName'])) echo date('jS M, l', $daysArray['list'][3]['dt']); ?></span> </h5>
                  </div>
                </div>
                <ul class="list-group list-group-flush">
                  <li class="list-group-item">Weather : <span class="weather"><?php if(isset($_GET['cityName'])) echo  $daysArray['list'][3]['weather'][0]['description']; ?></span> </li>
                  <li class="list-group-item">Min Temperature : <span class="minTemp"><?php if(isset($_GET['cityName'])) echo  $daysArray['list'][3]['temp']['min']; ?> &#8451;</span> </li>
                  <li class="list-group-item">Max Temperature : <span class="maxTemp"><?php if(isset($_GET['cityName'])) echo  $daysArray['list'][3]['temp']['max']; ?> &#8451;</span> </li>
                  <li class="list-group-item">Pressure : <span class="pressure"><?php if(isset($_GET['cityName'])) echo  $daysArray['list'][3]['pressure']; ?> </span><span class="units">hPa</span></li>
                  <li class="list-group-item">Humidity : <span class="humidity"><?php if(isset($_GET['cityName'])) echo  $daysArray['list'][3]['humidity']; ?> </span><span class="units">%</span></li>
                  <!--<li class="list-group-item">Wind : <span class="windName">Gentle Breeze</span></li>-->
                  <li class="list-group-item">Wind Speed : <span class="windSpeed"><?php if(isset($_GET['cityName'])) echo  $daysArray['list'][3]['speed']; ?> </span><span class="units">m/s</span></li>
                </ul>
              </div>
            </div>
            
            <!--Forecast Card 4-->             
             <div class="col-md-4">
              <div class="card">
                <div class="card-block">
                  <div class="blockContents">
                    <img class="card-img-top" src="http://openweathermap.org/img/w/<?php if(isset($_GET['cityName'])) echo $daysArray['list'][4]['weather'][0]['icon']; ?>.png" height="75px" width="75px" alt="Card image cap">
                    <h3 class="card-title"><span class="cityName"><?php if(isset($_GET['cityName'])) echo $daysArray['city']['name']; ?></span></h3>
                    <h5 class="dateLi"><span class="time"><?php if(isset($_GET['cityName'])) echo date('jS M, l', $daysArray['list'][4]['dt']); ?></span> </h5>
                  </div>
                </div>
                <ul class="list-group list-group-flush">
                  <li class="list-group-item">Weather : <span class="weather"><?php if(isset($_GET['cityName'])) echo  $daysArray['list'][4]['weather'][0]['description']; ?></span> </li>
                  <li class="list-group-item">Min Temperature : <span class="minTemp"><?php if(isset($_GET['cityName'])) echo  $daysArray['list'][4]['temp']['min']; ?> &#8451;</span> </li>
                  <li class="list-group-item">Max Temperature : <span class="maxTemp"><?php if(isset($_GET['cityName'])) echo  $daysArray['list'][4]['temp']['max']; ?> &#8451;</span> </li>
                  <li class="list-group-item">Pressure : <span class="pressure"><?php if(isset($_GET['cityName'])) echo  $daysArray['list'][4]['pressure']; ?> </span><span class="units">hPa</span></li>
                  <li class="list-group-item">Humidity : <span class="humidity"><?php if(isset($_GET['cityName'])) echo  $daysArray['list'][4]['humidity']; ?> </span><span class="units">%</span></li>
                  <!--<li class="list-group-item">Wind : <span class="windName">Gentle Breeze</span></li>-->
                  <li class="list-group-item">Wind Speed : <span class="windSpeed"><?php if(isset($_GET['cityName'])) echo  $daysArray['list'][4]['speed']; ?> </span><span class="units">m/s</span></li>
                </ul>
              </div>
            </div>
            
            <!--Forecast Card 5-->             
             <div class="col-md-4">
              <div class="card">
                <div class="card-block">
                  <div class="blockContents">
                    <img class="card-img-top" src="http://openweathermap.org/img/w/<?php if(isset($_GET['cityName'])) echo $daysArray['list'][5]['weather'][0]['icon']; ?>.png" height="75px" width="75px" alt="Card image cap">
                    <h3 class="card-title"><span class="cityName"><?php if(isset($_GET['cityName'])) echo $daysArray['city']['name']; ?></span></h3>
                    <h5 class="dateLi"><span class="time"><?php if(isset($_GET['cityName'])) echo date('jS M, l', $daysArray['list'][5]['dt']); ?></span> </h5>
                  </div>
                </div>
                <ul class="list-group list-group-flush">
                  <li class="list-group-item">Weather : <span class="weather"><?php if(isset($_GET['cityName'])) echo  $daysArray['list'][5]['weather'][0]['description']; ?></span> </li>
                  <li class="list-group-item">Min Temperature : <span class="minTemp"><?php if(isset($_GET['cityName'])) echo  $daysArray['list'][5]['temp']['min']; ?> &#8451;</span> </li>
                  <li class="list-group-item">Max Temperature : <span class="maxTemp"><?php if(isset($_GET['cityName'])) echo  $daysArray['list'][5]['temp']['max']; ?> &#8451;</span> </li>
                  <li class="list-group-item">Pressure : <span class="pressure"><?php if(isset($_GET['cityName'])) echo  $daysArray['list'][5]['pressure']; ?> </span><span class="units">hPa</span></li>
                  <li class="list-group-item">Humidity : <span class="humidity"><?php if(isset($_GET['cityName'])) echo  $daysArray['list'][5]['humidity']; ?> </span><span class="units">%</span></li>
                  <!--<li class="list-group-item">Wind : <span class="windName">Gentle Breeze</span></li>-->
                  <li class="list-group-item">Wind Speed : <span class="windSpeed"><?php if(isset($_GET['cityName'])) echo  $daysArray['list'][5]['speed']; ?> </span><span class="units">m/s</span></li>
                </ul>
              </div>
            </div>
            
            <!--Forecast Card 6-->             
             <div class="col-md-4">
              <div class="card">
                <div class="card-block">
                  <div class="blockContents">
                    <img class="card-img-top" src="http://openweathermap.org/img/w/<?php if(isset($_GET['cityName'])) echo $daysArray['list'][6]['weather'][0]['icon']; ?>.png" height="75px" width="75px" alt="Card image cap">
                    <h3 class="card-title"><span class="cityName"><?php if(isset($_GET['cityName'])) echo $daysArray['city']['name']; ?></span></h3>
                    <h5 class="dateLi"><span class="time"><?php if(isset($_GET['cityName'])) echo date('jS M, l', $daysArray['list'][6]['dt']); ?></span> </h5>
                  </div>
                </div>
                <ul class="list-group list-group-flush">
                  <li class="list-group-item">Weather : <span class="weather"><?php if(isset($_GET['cityName'])) echo  $daysArray['list'][6]['weather'][0]['description']; ?></span> </li>
                  <li class="list-group-item">Min Temperature : <span class="minTemp"><?php if(isset($_GET['cityName'])) echo  $daysArray['list'][6]['temp']['min']; ?> &#8451;</span> </li>
                  <li class="list-group-item">Max Temperature : <span class="maxTemp"><?php if(isset($_GET['cityName'])) echo  $daysArray['list'][6]['temp']['max']; ?> &#8451;</span> </li>
                  <li class="list-group-item">Pressure : <span class="pressure"><?php if(isset($_GET['cityName'])) echo  $daysArray['list'][6]['pressure']; ?> </span><span class="units">hPa</span></li>
                  <li class="list-group-item">Humidity : <span class="humidity"><?php if(isset($_GET['cityName'])) echo  $daysArray['list'][6]['humidity']; ?> </span><span class="units">%</span></li>
                  <!--<li class="list-group-item">Wind : <span class="windName">Gentle Breeze</span></li>-->
                  <li class="list-group-item">Wind Speed : <span class="windSpeed"><?php if(isset($_GET['cityName'])) echo  $daysArray['list'][6]['speed']; ?> </span><span class="units">m/s</span></li>
                </ul>
              </div>
            </div>
            
            <!--Forecast Card 7-->             
             <div class="col-md-4">
              <div class="card">
                <div class="card-block">
                  <div class="blockContents">
                    <img class="card-img-top" src="http://openweathermap.org/img/w/<?php if(isset($_GET['cityName'])) echo $daysArray['list'][7]['weather'][0]['icon']; ?>.png" height="75px" width="75px" alt="Card image cap">
                    <h3 class="card-title"><span class="cityName"><?php if(isset($_GET['cityName'])) echo $daysArray['city']['name']; ?></span></h3>
                    <h5 class="dateLi"><span class="time"><?php if(isset($_GET['cityName'])) echo date('jS M, l', $daysArray['list'][7]['dt']); ?></span> </h5>
                  </div>
                </div>
                <ul class="list-group list-group-flush">
                  <li class="list-group-item">Weather : <span class="weather"><?php if(isset($_GET['cityName'])) echo  $daysArray['list'][7]['weather'][0]['description']; ?></span> </li>
                  <li class="list-group-item">Min Temperature : <span class="minTemp"><?php if(isset($_GET['cityName'])) echo  $daysArray['list'][7]['temp']['min']; ?> &#8451;</span> </li>
                  <li class="list-group-item">Max Temperature : <span class="maxTemp"><?php if(isset($_GET['cityName'])) echo  $daysArray['list'][7]['temp']['max']; ?> &#8451;</span> </li>
                  <li class="list-group-item">Pressure : <span class="pressure"><?php if(isset($_GET['cityName'])) echo  $daysArray['list'][7]['pressure']; ?> </span><span class="units">hPa</span></li>
                  <li class="list-group-item">Humidity : <span class="humidity"><?php if(isset($_GET['cityName'])) echo  $daysArray['list'][7]['humidity']; ?> </span><span class="units">%</span></li>
                  <!--<li class="list-group-item">Wind : <span class="windName">Gentle Breeze</span></li>-->
                  <li class="list-group-item">Wind Speed : <span class="windSpeed"><?php if(isset($_GET['cityName'])) echo  $daysArray['list'][7]['speed']; ?> </span><span class="units">m/s</span></li>
                </ul>
              </div>
            </div>
            
          </div>
        </div>
      </div>
      
      <footer class="footer-distributed">

        <div class="footer-right">

          <a href="mailto:bhavikjoshi29@gmail.com"><i class="fa fa-envelope"></i></a>
          <a href="https://twitter.com/BhavikJoshi07"><i class="fa fa-twitter"></i></a>

        </div>

        <div class="footer-left">

          <p class="footer-links">
            Developed with <i class="fa fa-heart" aria-hidden="true"></i> in India by <a href="https://www.facebook.com/BhavikJoshi07">Bhavik Joshi</a>
          </p>
        </div>

      </footer>

      
    </div>
    

    <!-- jQuery first, then Tether, then Bootstrap JS. -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js" integrity="sha384-3ceskX3iaEnIogmQchP8opvBy3Mi7Ce34nWjpBIwVTHfGYWQS9jwHDVRnpKKHJg7" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.3.7/js/tether.min.js" integrity="sha384-XTs3FgkjiBgo8qjEjBk0tGmf3wPrWtA6coPfQDfFEY8AnYJwjalXCiosYRBIBZX8" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.5/js/bootstrap.min.js" integrity="sha384-BLiI7JTZm+JWlgKa0M0kGRpJbF2J8q+qreVrKBC47e3K6BW78kGLrCkeRX6I9RoK" crossorigin="anonymous"></script>
    
    <script type="text/javascript" src="js/scripting.js"></script>
    
  </body>
</html>