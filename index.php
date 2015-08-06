<html class="">
	<head>
		<title>Spoiler Ultimate</title>
		<link rel="shortcut icon" href="./favicon.ico" type="image/x-icon"/>
	    <meta charset="utf-8">
	    <meta name="viewport" content="width=device-width, initial-scale=1.0">
		<style type="text/css">
			@font-face {
			  font-family: 'Generica Bold';
			  src: url('Generica Bold.otf');
			}
			@font-face {
			  font-family: 'DINBek-Regular';
			  src: url('DINBek-Regular.ttf');
			}
			html, body {
				margin: 0;
				font-family: 'DINBek-Regular';
				color: orange;
				height: 100%;
				background-color: black;
				/*width: 100%;*/
			}
			a {
				color: orange;
			}
			/*.wrapper {
				width: 100%;
				height: 100%;
			}*/
			.diagonal-gradient {
				background: #131313; /* Old browsers */
				background: -moz-linear-gradient(-45deg, #131313 0%, #1c1c1c 12%, #2b2b2b 25%, #111111 39%); /* FF3.6+ */
				background: -webkit-gradient(linear, left top, right bottom, color-stop(0%,#131313), color-stop(12%,#1c1c1c), color-stop(25%,#2b2b2b), color-stop(39%,#111111)); /* Chrome,Safari4+ */
				background: -webkit-linear-gradient(-45deg, #131313 0%,#1c1c1c 12%,#2b2b2b 25%,#111111 39%); /* Chrome10+,Safari5.1+ */
				background: -o-linear-gradient(-45deg, #131313 0%,#1c1c1c 12%,#2b2b2b 25%,#111111 39%); /* Opera 11.10+ */
				background: -ms-linear-gradient(-45deg, #131313 0%,#1c1c1c 12%,#2b2b2b 25%,#111111 39%); /* IE10+ */
				background: linear-gradient(135deg, #131313 0%,#1c1c1c 12%,#2b2b2b 25%,#111111 39%); /* W3C */
				filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#131313', endColorstr='#131313',GradientType=1 ); /* IE6-9 fallback on horizontal gradient */
			}
			#header {
				width: 80%;
				margin: 0 auto;
			}
			#logo {
				background-image: url('./newspoiler.png');
				background-size: cover;
				width: 150px;
				height: 80px;
				display: inline-block;
			}
			#splash {
				background-image: url('./team.jpg');
				background-repeat: no-repeat;
				background-size: cover;
				background-position: 0px 30%;
				width: 100%;
				height: 400px;
				display: inline-block;
			}
			#header span {
				font-family: 'Generica Bold';
				color: orange;
				text-transform: uppercase;
				font-size: 20px;
				padding: 30px 5px 25px 5px;
				top: 0;
				position: absolute;
				letter-spacing: 1px;
			}
			#tourney, #results {
				width: 80%;
				margin: 5px auto;
			}
			h1, h2 {
				color: orange;
				margin: 0;
				font-family: 'Generica Bold';
				text-transform: uppercase;
				letter-spacing: 2px;
			}
			span.info {
				display: block;
			}
			th {
				font-weight: normal;
				font-family: 'Generica Bold';
				text-align: left;
			}
			table {
				border-spacing: 5px;
			}
			@media (max-width: 760px) {
				#splash {
					/*width: 80%;*/
					height: 150px;
				}
			}
		</style>
	</head>
	<body>
		<!-- <div class="diagonal-gradient"></div> -->
		<div class="wrapper">
			<div id="header"><div id="logo"></div><span>Spoiler Ultimate</span></div>
			<div id="splash"></div>
			<div id="tourney">
				<h1>Motown Throwdown 2015</h1>
				<div class="description">
					<span class="info">Sylvania, OH - July 25/26</span>
 					<span class="info"><a href="https://www.google.com/maps/place/Sylvania+Pacesetter+Park/">Fields (Google Maps)</a></span>
					<span class="info"><a href="http://play.usaultimate.org/events/Motown-Throwdown-2015/schedule/Mens/Club-Men/">USAU Scores</a></span>
					<span class="info"><a href="http://play.usaultimate.org/events/Motown-Throwdown-2015/">USAU Event Info</a></span>
					<span class="info"><a href="https://twitter.com/SpoilerUltimate">Follow us on Twitter!</a></span>
				</div>
			</div>
			<div id="results">
				<h1>SCINNY 2015 - 4th Place</h1>
				<div class="description">
					<span class="info"><h2>Saturday Round Robin - Pool A</h2></span>
					<table>
						<thead>
							<th>Win/Loss</th>
							<th>Score</th>
							<th>Opponent</th>
						</thead>
						<tbody>
							<tr><td>W</td><td>13-7</td><td>HuSTLe</td></tr>
							<tr><td>W</td><td>13-9</td><td>CHASM</td></tr>
							<tr><td>W</td><td>13-9</td><td>Black Sheep</td></tr>
							<tr><td>L</td><td>8-9</td><td>Kentucky Flying Circus</td></tr>
						</tbody>
					</table>
					<span class="info"><h2>Sunday Championship Bracket</h2></span>
					<table>
						<thead>
							<th>Win/Loss</th>
							<th>Score</th>
							<th>Opponent</th>
						</thead>
						<tbody>
							<tr><td>W</td><td>14-7</td><td>Flying Pig</td></tr>
							<tr><td>L</td><td>13-7</td><td>Enigma</td></tr>
							<tr><td>L</td><td>9-11</td><td>Kentucky Flying Circus</td></tr>
						</tbody>
					</table>
				</div>
			</div>
			<div id="roster"></div>
			<!-- <a class="twitter-timeline" href="https://twitter.com/SpoilerUltimate" data-widget-id="550801592719777792">Tweets by @SpoilerUltimate</a> -->
		</div>
		<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+"://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>
	</body>
</html>
