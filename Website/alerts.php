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
 <div class="col s12"><p style="text-align: center; text-decoration: underline; font-size: 30px; font-weight: bold; margin: 5px 0px 0px 0px">Your Alerts</p></div>
 
 <div class="col s12 m5 l4"><p style="font-weight: bold;text-align: center;">Anafenza, Kin-Tree Spirit</p></div>
 <div class="col s12 m4 l4"><p style="font-style: italic;text-align: center;">Dragons of Tarkir</p></div>
 <div class="col s12 m3 l4"><p><span style="color: red;">0.40 TCGLow</span><span style="color: blue;"> 0.66 TCGMid</span><span style="color: green;"> 3.30 TCGHigh </span></p></div>
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
 <label>Price Guide High</label>
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
 <label>Price Guide Low</label>
 </div>
 <div class="col s8 m6 l3 switch" style="text-align: center; padding-top: 20px;"><label>
      Deactivated
      <input type="checkbox">
      <span class="lever"></span>
      Activated
    </label></div>
 <div class="col s4 m6 l1" style="text-align: center; padding-top: 11px;"><img src="img/delete-icon.png" alt="Delete Alert"/></div>
 
 <div class="col s12" style="width: 94%; margin-left: 2%;padding: 10px 0 10px 0px;"><div style="border-bottom: 4px solid gainsboro;"></div></div>
 
 <div class="col s12 m5 l4"><p style="font-weight: bold;text-align: center;">Tarmogoyf</p></div>
 <div class="col s12 m4 l4"><p style="font-style: italic;text-align: center;">Future Sight</p></div>
 <div class="col s12 m3 l4"><p><span style="color: red;">149.99 TCGLow</span><span style="color: blue;"> 189.99 TCGMid</span><span style="color: green;"> 222.19 TCGHigh </span></p></div>
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
 <label>Price Guide High</label>
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
 <label>Price Guide Low</label>
 </div>
 <div class="col s8 m6 l3 switch" style="text-align: center; padding-top: 20px;"><label>
      Deactivated
      <input type="checkbox">
      <span class="lever"></span>
      Activated
    </label></div>
 <div class="col s4 m6 l1" style="text-align: center; padding-top: 11px;"><img src="img/delete-icon.png" alt="Delete Alert"/></div>
</div>
</body>
</html>
