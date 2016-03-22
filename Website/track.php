<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title>Track A Card</title>
		<link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
		<link rel="stylesheet" href="css/materialize.css" media="screen,projection"/>
		<link rel="stylesheet" href="css/easy-autocomplete.min.css"/>
		<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
	</head>
	<body>
		<script src="js/jquery-2.2.1.min.js"></script>
		<script src="js/jquery.easy-autocomplete.min.js"></script>
		<script src="js/mtgtracker.js"></script>
		<script src="js/materialize.js"></script>
		<nav>
			<div class="light-blue accent-3 nav-wrapper">
				<a href="" class="brand-logo">MtgTracker</a>
				<a href="" data-activates="mobile-demo" class="button-collapse"><i class="material-icons">menu</i></a>
				<ul id="nav-mobile" class="light-blue accent-3 right hide-on-med-and-down">
					<li class="active"><a href="track.php">Track A Card</a></li>
					<li><a href="bySet.php">Cards By Set</a></li>
					<li><a href="alerts.php">Your Alerts</a></li>
					<li><a href="profile.php">Profile</a></li>
					<li><a href="about.php">About</a></li>
				</ul>
				<ul class="light-blue accent-3 side-nav" id="mobile-demo">
					<li class="active"><a href="track.php">Track A Card</a></li>
					<li><a href="bySet.php">Cards By Set</a></li>
					<li><a href="alerts.php">Your Alerts</a></li>
					<li><a href="profile.php">Profile</a></li>
					<li><a href="about.php">About</a></li>
				</ul>
			</div>
		</nav>
		<input id="cardSet" type="hidden" />
		<input id="cardMultiverseID" type="hidden" />
		<input id="searchCards" style="width: 95%;" placeholder="Search for a Card"/>
		<div class="row" id="displaySection" style="display: none">
			<div class="col s12 m4 l4"> 
				<img id="cardImage"/> 
			</div>
			<div class="col s12 m8 l8"> 
				<div style="text-align: center;"> 
					<span style="font-style: italic">Card: </span><p id="cardInfoName" style="white-space: pre; display: inline;"></p><span style="font-style: italic">Set: </span><p id="cardInfoSet" style="white-space: pre;display: inline"></p>
				</div>
			</div>
		</div>	
		
		
	</body>
</html>
