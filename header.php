<?php 
ob_start();
session_start(); /// initialize session

// $pagePath = ($_REQUEST['pages']); //everything is mapped to the pages variable, unless the page exists.
// $queryString = explode("?", $_SERVER['REQUEST_URI']); //if there is a ? in string, isolate that part of string
// parse_str($queryString[1], $url_vars); //explode the ? variables (querystring) into individual variables named $url_vars
// $pagePathParts = explode("/", $pagePath); // explode page path into parts /lineup-cruncher/fanduel/mlb => array([0]=>'lineup-cruncher',[2]=>'fanduel',[3]=>'mlb')

// $path = ($_REQUEST['pagedds'])
$queryString = explode("?", $_SERVER['REQUEST_URI']); //if there is a ? in string, isolate that part of string
// $pagePathParts = explode("/", $path); // explode page path into parts /lineup-cruncher/fanduel/mlb => array([0]=>'lineup-cruncher',[2]=>'fanduel',[3]=>'mlb')
?>