<?php
class DBController {
    private $host = "localhost";
    private $user = "root";
    private $password = "";
    private $database = "gneiss";
    private $from_email='business@gneiss.com';
    private $notification_email='admin@gneiss.com';
    private $conn;

    function __construct() {
        if($_SERVER['SERVER_NAME']=="www.gneisslab.com"||$_SERVER['SERVER_NAME']=="gneisslab.com"){
            $this->host = "localhost";
            $this->user = "up3y8uzgvdd9g";
            $this->password = "@j3Qb1Rc%u+5";
            $this->database = "dbwrqlpxrz6vtb";
        }

        $this->conn = $this->connectDB();
    }

    function connectDB() {
        $conn = mysqli_connect($this->host,$this->user,$this->password,$this->database);
        return $conn;
    }

    function checkValue($value) {
        $value=mysqli_real_escape_string($this->conn, $value);
        return $value;
    }

    function runQuery($query) {
        $result = mysqli_query($this->conn,$query);
        while($row=mysqli_fetch_assoc($result)) {
            $resultset[] = $row;
        }
        if(!empty($resultset))
            return $resultset;
    }

    function insertQuery($query) {
        $result = mysqli_query($this->conn,$query);
        return $result;
    }

    function from_email(){
        return $this->from_email;
    }

    function numRows($query) {
        $result  = mysqli_query($this->conn,$query);
        $rowcount = mysqli_num_rows($result);
        return $rowcount;
    }

    function notify_email(){
        return $this->notification_email;
    }
}
