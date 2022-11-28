<?php
$themeArr = array("dark", "light");
$defaultTheme = "light";
$theme = addslashes($_GET['theme']);

if (!isset($_COOKIE['currTheme'])){
    if(in_array($theme, $themeArr)){
        $_COOKIE['currTheme'] = $theme;
    }
    else {
        $_COOKIE['currTheme'] = $defaultTheme;
    }
    setcookie('currTheme', $_COOKIE['currTheme'], time()+60*60*24);
}

else {
    if(in_array($theme, $themeArr)){
        $_COOKIE['currTheme'] = $theme;
        setcookie('currTheme', $_COOKIE['currTheme'], time()+60*60*24);
    }
}

$finalTheme = addslashes($_COOKIE['currTheme']);
$finalTheme = $finalTheme.".css";

$username = $_COOKIE['username'];

?>