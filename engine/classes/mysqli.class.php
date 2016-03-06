<?php
class database{
    function setHost($hostname, $username, $password, $basename){
        $connectHost = new mysqli($hostname, $username, $password, $basename);

        return $connectHost;
    }

    function queryExecute($link, $query){
        $result = $mysqli->query($link, $query);

        return $result;
    }

    function fetchRow($link, $query){
        $result = mysqli_query($link, $query);
        $row = array();

        while ($item = mysqli_fetch_array($result)){
            $row[] = $item;
        }

        return $row;
    }

    function fetchAssoc($link, $query){
        $result = mysqli_query($link, $query);
        $fetch = mysqli_fetch_assoc($result);

        return $fetch;
    }

    function closeHost($link){
        mysqli_close($link);

        return true;
    }
}
