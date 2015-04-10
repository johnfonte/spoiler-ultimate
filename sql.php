<?php
session_start();
$services_json = json_decode(getenv("VCAP_SERVICES"),true);
$mysql_config = $services_json["mysql-5.1"][0]["credentials"];

$username = $mysql_config["username"];
$password = $mysql_config["password"];
$hostname = $mysql_config["hostname"];
$port = $mysql_config["port"];
$db = $mysql_config["name"];

$link = mysql_connect("$hostname:$port", $username, $password);
$db_selected = mysql_select_db($db, $link);
?>
<html>
	<head>
		<title>Spoiler Ultimate</title>
	</head>
	<body>
		<form action="submitsql.php" id="sqlform" method="POST">
			<textarea name="sql_text" height="5"></textarea><br>
			<?php if($_SESSION["pwd"] != "accepted") { ?>
			<input placeholder="password" type="text" name="pwd" size="20"><br>
			<? } ?>
			<input type="submit" value="Go" name="submit"><br>
		</form>
		<?=$username?><br>
		<?=$password?><br>
		<?=$hostname?><br>
		<?=$port?><br>
		<?=$db?><br>
		<?=$link?><br>
		<?=$db_selected?><br>
		<?=$_SESSION["query_result"]?><br>
		<?=$_SESSION["last_query"]?><br>
	</body>
</html>
