<?php
    function dbSelect($select, $from, $status, $orderby) {
    global $conn;
    $txt = '';
    $txt = select[0] == '*' ? '*' : implode(",", $select);
    $sql = "SELECT". $txt. "FROM". $from."". ($status ? "WHERE". $status : ""). ($orderby ? "ORDER BY". $orderby : "");
    
    return mysqli_query($conn,$sql);
    }
?>