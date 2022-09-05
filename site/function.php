<?php
    function getParam($name, $value) {
        return (isset($_REQUEST[$name]) && $_REQUEST[$name] != "") ? $_REQUEST[$name] : $value;
    }

    function checkParams($pararr) {
        for ($i=0; $i < count($pararr); $i++)
            if(!$pararr[$i])return false;
        return true;
    }
?>