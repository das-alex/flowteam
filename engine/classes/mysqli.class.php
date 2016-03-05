<?php
class database{
    function setHost($hostname, $username, $password, $basename){
        $connectHost = new mysqli($hostname, $username, $password, $basename)

        if ( mysql_connect_errno() ){
            exit();
            return false;
        }

        return $connectHost;
    }

    function queryExecute($query){
        $result = $mysqli->query($query);

        return $result;
    }

    function queryPrepare($query){
        $result = mysql->prepare($query);

        return $result;
        }

        return true;
    }

    function valueArray($query){
        $result = $mysql->query($query);

        while($row = $result->fetch_row()){
            $array[] = $row;
        }

        return $array;
    }

    function closeHost(){
        $mysqli_close();

        return true;
    }
}
