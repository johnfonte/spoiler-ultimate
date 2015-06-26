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
				<h1>SCINNY 2015</h1>
				<div class="description">
					<span class="info">Lebanon, OH - June 27/28</span>
					https://www.google.com/maps/place/Super+8+3553+Commerce+Drive+I-75+at+Exit+32+SR+122+Middletown,+OH+45005-5232+US/
					<span class="info"><a href="https://www.google.com/maps/place/900+Mcclure+Rd,+Lebanon,+OH+45036/">Fields (Google Maps)</a></span>
					<span class="info"><a href="http://scorereport.net/2015/open/event15150">Score Reporter</a></span>
					<span class="info"><a href="https://cincyultimate.org/tournament/scinny/2015">Event Info (CUPA)</a></span>
					<span class="info"><a href="https://twitter.com/SpoilerUltimate">Follow us on Twitter!</a></span>
				</div>
			</div>
			<div id="results">
				<div class="description">
					<span class="info"><h2>Saturday</h2></span>
					<table>
						<thead>
							<th>Time</th>
							<th>Field</th>
							<th>Opponent</th>
						</thead>
						<tbody>
							<tr><td>9am</td><td>9</td><td>#7 HuSTLe</td></tr>
							<tr><td>12pm</td><td>8</td><td>#9 CHASM</td></tr>
							<tr><td>1:30pm</td><td>9</td><td>#5 Black Sheep</td></tr>
							<tr><td>3pm</td><td>8</td><td>#1 Kentucky Flying Circus</td></tr>
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
