<?php
       


    function fetchitems() {
        require_once 'dbh.inc.php'; 
        $result;

        $sql = "SELECT name, description, link, kurse FROM links";
        $result = mysqli_query($con, $sql);

        $array = mysqli_fetch_all($result, MYSQLI_ASSOC);
        mysqli_free_result($result);
        mysqli_close($con);

        return $array;
    }
