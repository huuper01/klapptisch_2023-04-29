<?php
/* ESZ Klapptisch GmbH
 * erstellt von Kevin Duss & Benjamin Emmenegger - projekt@ajato.ch
 */
//kein direkter Zugriff
//defined('_JEXEC') or die('Zugriff verboten')
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>Klapptisch</title>
<jdoc:include type="head" />
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta http-equiv="X-UA-Compatible" content="IE=edge" />
<meta charset="utf-8" />
<meta name="description" content="" />
<meta name="author" content="" />
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
<link rel='stylesheet' type='text/css' href='css/style.css'>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
</head>
<body onload="init()">
<nav class="navbar navbar-inverse navbar-fixed-top hidden-lg hidden-md hidden-sm">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle navbar-left" data-toggle="collapse" data-target="#myNavbar"> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
        <!-- <li class="active"><a href="#">Home</a></li> -->
        <li class="dropdown"> <a class="dropdown-toggle" data-toggle="dropdown" href="#">Zelt<span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="#">Klappzelte</a></li>
          </ul>
        </li>
        <li class="dropdown"> <a class="dropdown-toggle" data-toggle="dropdown" href="#">Tisch<span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="#">Klapptisch rechteckig</a></li>
            <li><a href="#">Klapptisch rund</a></li>
            <li><a href="#">Steh- und Bistrotische</a></li>
            <li><a href="#">Tischgarnituren</a></li>
          </ul>
        </li>
        <li class="dropdown"> <a class="dropdown-toggle" data-toggle="dropdown" href="#">Stuhl<span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="#">Klappstühle</a></li>
            <li><a href="#">Stapelstühle</a></li>
            <li><a href="#">Diverse Stühle</a></li>
            <li><a href="#">Holzstühle</a></li>
          </ul>
        </li>
        <li class="dropdown"> <a class="dropdown-toggle" data-toggle="dropdown" href="#">Diverses<span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="#">Tisch- und Stuhlhussen</a></li>
            <li><a href="#">Spezial Design Möbel</a></li>
            <li><a href="#">Verschiedenes</a></li>
          </ul>
        </li>
      </ul>
    </div>
  </div>
</nav>
<!-- TODO
		<div id='bg_container'>
			<div id='outer'></div>
			<div id='inner'>
				<a href='.'><img src='img/logo.png'></a>
			</div>
		</div>
		-->

<div id='content_container'>
  <div id='menu_left'class='hidden-xs'>
    <ul>
      <li>Zelt</li>
      <li>Tisch</li>
      <li>Stuhl</li>
      <li>Diverses</li>
    </ul>
  </div>
  <div id='wrapper'>
    <div id='background'>
      <div id='radius'>
        <div id='cc'>
          <div id='content'>
            <div id='tisch' class='pages'>
              <div class='intro'>
                <h1><!--Mögliche--> <b><i>Darstellung</i></b> der Inhalte</h1>
                <br />
                <p>Wir führen Klapp- und Stehtische in verschiedenen Ausführungen und Grössen. Klicken Sie unten auf die gewünschte Form um unsere Modelle anzusehen...</p>
              </div>
              <div class='row'>
                <div class='col-md-6'>
                  <h4>Klapptisch rechteckig</h4>
                  <table>
                    <tr>
                      <td><ul>
                        <li>Recheckige Klapptische</li>
                        <li>Transportwagen</li>
                        <ul></td>
                      <td><img src='img/klapptisch_rechteckig.jpg' class='img-responsive'></td>
                    </tr>
                  </table>
                </div>
                <div class='col-md-6'>
                  <h4>Klapptisch rund</h4>
                  <table>
                    <tr>
                      <td><ul>
                          <li>Runde Klapptische</li>
                          <li>Transportwagen</li>
                        </ul></td>
                      <td><img src='img/klapptisch_rund.jpg' class='img-responsive'></td>
                    </tr>
                  </table>
                </div>
              </div>
              <div class='row'>
                <div class='col-md-6'>
                  <h4>Tischgarnituren</h4>
                  <table>
                    <tr>
                      <td><ul>
                          <li>Brauerei-Garnituren</li>
                          <li>Garnituren mit Rückenlehne</li>
                          <li>Bambus-Set</li>
                          <li>Transportwagen</li>
                        </ul></td>
                      <td><img src='img/tischgarnituren.jpg' class='img-responsive'></td>
                    </tr>
                  </table>
                </div>
                <div class='col-md-6'>
                  <h4>Steh- und Bistrotische</h4>
                  <table>
                    <tr>
                      <td><ul>
                          <li>Stehtische rund und eckig</li>
                          <li>Bistrotische</li>
                          <li>Transportwagen</li>
                        </ul></td>
                      <td><img src='img/stehtische.jpg' class='img-responsive'></td>
                    </tr>
                  </table>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div id='dropdown_left' class='hidden-xs'></div>
      <div id='dropdown_right' class='hidden-xs'>
        <p>ESZ-Klapptisch<br />
          Maiengrün 3<br />
          6206 Neuenkirch</p>
        <!-- <p><i class="fa fa-phone"></i>
					&nbsp 041 467 04 10</p>
					<p>041 467 04 11</p> -->
        <p><i class="fa fa-mobile"></i> &nbsp 079 340 82 06</p>
        <p> &nbsp <a href='mailto:info@klapptisch.ch' target='_blank'><i class="fa fa-envelope-o fa-2x"></i></a></p>
      </div>
    </div>
  </div>
  <!-- TODO
			<div id='menu_right' class='hidden-xs'>
				<div>
					<ul>
						<li>Kontakt</li>
					</ul>
				</div>
			</div>
			--> 
</div>

<!-- <script src='https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js'></script>
		<script src='js/jquery-1.10.1.min.js'></script> --> 

<script src='js/jquery-ui.min.js'></script> 
<script src='js/script.js'></script> 
<!-- Bootstrap 
		<link rel='stylesheet' href='http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css'>
		<script src='http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js'></script>
		<script src='js/bootstrap.min.js'></script>
		<link rel='stylesheet' type='text/css' href='css/bootstrap.min.css'> --> 

<script type="text/javascript" src="js/underscore-min.js"></script>
</body>
</html>