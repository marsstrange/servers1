<?php
$langArr = array("ru", "en");
$defaultLang = "en";

$language = addslashes($_GET['lang']);

if (!isset($_COOKIE['currLang'])){
    if(in_array($language, $langArr)){
            $_COOKIE['currLang'] = $language;
        }
        else {
            $_COOKIE['currLang'] = $defaultLang;
        }
    setcookie('currLang', $_COOKIE['currLang'], time()+60*60*24);
}

else {
    if(in_array($language, $langArr)){
        $_COOKIE['currLang'] = $language;
        setcookie('currLang', $_COOKIE['currLang'], time()+60*60*24);
    }
}

    
$finalLang = addslashes($_COOKIE['currLang']);
include_once ("lang/lang_".$finalLang.".php");

?>