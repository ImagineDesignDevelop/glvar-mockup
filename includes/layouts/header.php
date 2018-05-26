<?php 
ob_start();
session_start(); /// initialize session

$urlPath = $_SERVER['REQUEST_URI']; // Get entire url for parsing
$pagePath = ltrim(substr($urlPath, 0, strpos($urlPath, "?")), '/'); // Remove all variables from $urlPath
$queryString = explode("?", $urlPath); // Split $urlPath by ?
parse_str($queryString[1], $url_vars); // Add $urlPath variables into $url_vars array
$pagePathParts = (!empty($pagePath)) ? explode("/", $pagePath) : explode("/", $urlPath); // Add page path into parts /page/events/mlb => array([0]=>'pager',[2]=>'events')

echo $urlPath."<br>";
echo $pagePath."<br>";
print_r($queryString);
echo "<br>";
print_r($pagePathParts);
echo "<br>";
print_r($url_vars);

?>