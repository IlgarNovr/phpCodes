<?php    
    require_once "trans.php";
    require_once "function.php";
    
    $lang =  getParam("lang", "", "/".implode("|", array_keys($menu))."/");
    $lang = $lang ? $lang : (isset($_COOKIE["lang"]) ? $_COOKIE["lang"] : "az");
    
    setcookie("lang", $lang, time() + (86400 * 30), "/");
    
    $page = getParam("page", "main", "/^((?!^index$).)*$/");
    $file = "$lang/$page.php";

    
    include "header.php";
    include file_exists($file) ? $file : "404.php";
    include "footer.php";
?>