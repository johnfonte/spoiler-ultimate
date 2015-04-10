<?php
session_start();
$pwd = "a2spoilera2";
$services_json = json_decode(getenv("VCAP_SERVICES"),true);
$mysql_config = $services_json["mysql-5.1"][0]["credentials"];

$username = $mysql_config["username"];
$password = $mysql_config["password"];
$hostname = $mysql_config["hostname"];
$port = $mysql_config["port"];
$db = $mysql_config["name"];

$link = mysql_connect("$hostname:$port", $username, $password);
$db_selected = mysql_select_db($db, $link);

if($_POST["pwd"] == $pwd || $_SESSION["pwd"] == "accepted") {
	$_SESSION["pwd"] = "accepted";
	$sqltext = $_POST["sql_text"];
	if(!empty($sqltext)) {
		$_SESSION["query_result"] = mysql_query($sqltext);
		$_SESSION["last_query"] = $sqltext;
	} else {
		$_SESSION["query_result"] = "NO_RESULTS";
		$_SESSION["last_query"] = "NO_QUERY";
	}
}
header("Location: /sql");
die();
?>