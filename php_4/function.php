<?php
    function getParam($name, $default, $regex = "//") {
        return (isset($_REQUEST[$name]) && $_REQUEST[$name] != "" && preg_match($regex, $_REQUEST[$name])) ? $_REQUEST[$name] : $default;
    }
?>