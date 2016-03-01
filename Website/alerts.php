<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Your Alerts</title>
<link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
<link rel="stylesheet" href="css/materialize.css" media="screen,projection"/>
<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
</head>
<body>
<script src="js/jquery-2.2.1.min.js"></script>
<script src="js/mtgtracker.js"></script>
<script src="js/materialize.js"></script>
  <nav>
    <div class="light-blue accent-3 nav-wrapper">
      <a href="" class="brand-logo">MtgTracker</a>
	  <a href="" data-activates="mobile-demo" class="button-collapse"><i class="material-icons">menu</i></a>
      <ul id="nav-mobile" class="light-blue accent-3 right hide-on-med-and-down">
        <li><a href="track.php">Track A Card</a></li>
        <li><a href="bySet.php">Cards By Set</a></li>
		<li class="active"><a href="alerts.php">Your Alerts</a></li>
        <li><a href="profile.php">Profile</a></li>
		<li><a href="about.php">About</a></li>
      </ul>
	  <ul class="light-blue accent-3 side-nav" id="mobile-demo">
        <li><a href="track.php">Track A Card</a></li>
        <li><a href="bySet.php">Cards By Set</a></li>
		<li class="active"><a href="alerts.php">Your Alerts</a></li>
        <li><a href="profile.php">Profile</a></li>
		<li><a href="about.php">About</a></li>
      </ul>
    </div>
  </nav>
<div class="row">
 <div class="col s12 m5 l4"><p style="font-weight: bold">Evil eye of orms by gore</p></div>
 <div class="col s12 m4 l4"><p style="font-style: italic">Champions of Kamigawa Kamigawa</p></div>
 <div class="col s12 m3 l4"><p>210.21 TCGHigh 125.12 TCGMid 101.23 TCGLow</p></div>
 <div class="input-field col s6 m3 l2">
          <input id="target_high" type="text" onkeypress='return (event.charCode >= 48 && event.charCode <= 57) || event.charCode == 46'>
          <label for="target_high">Price Alert High</label>
        </div>
 <div class="input-field col s6 m3 l2">
 <select id="highmidlow-high">
  <option value="0">TCG Low</option>
  <option value="1" selected>TCG Mid</option>
  <option value="2">TCG High</option>
 </select>
 <label>Price Guide</label>
 </div>
 <div class="input-field col s6 m3 l2">
          <input id="target_low" type="text" onkeypress='return (event.charCode >= 48 && event.charCode <= 57) || event.charCode == 46'>
          <label for="target_low">Price Alert Low</label>
        </div>
 <div class="input-field col s6 m3 l2">
 <select id="highmidlow-low">
  <option value="0">TCG Low</option>
  <option value="1" selected>TCG Mid</option>
  <option value="2">TCG High</option>
 </select>
 <label>Price Guide</label>
 </div>
 <div class="col s8 m6 l2 switch" style="text-align: center"><label>
      Deactivated
      <input type="checkbox">
      <span class="lever"></span>
      Activated
    </label></div>
 <div class="col s4 m6 l2" style="text-align: center"><a class="waves-effect waves-light btn red lighten-1">Delete</a></div>
</div>
</body>
</html>
