<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" type="text/css" href="css/style.css" />
<title>Test Groups Event Attendances Index</title>
</head>

<body>
<?php
require_once('test-util.php'); 
require_once(dirname(__FILE__) . '/../lib/ca-main.php'); 

echo '<div class="apitest">';
echo '<h1>groups_event_attendances_index</h1>';

$ca = new CityApi();
$ca->debug = true;
$ca->json = true;
$groupid = 71957; // 2nd Grade
$results = $ca->groups_event_attendances_index($groupid); 

echo '<h2>Formatted JSON results: </h2>';
echo '<pre>';
echo format_json($results);
echo '</pre>';

$args = array('page' => 3);
$results = $ca->groups_event_attendances_index($groupid, $args); 

echo '<h2>Formatted JSON results: </h2>';
echo '<pre>';
echo format_json($results);
echo '</pre>';

echo '</div>';
?>

</body>
</html>
