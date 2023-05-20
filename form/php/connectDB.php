<?php
class connectDB
{
    private $serverName, $username, $password, $dbName;

    public function connect()
    {
        $this->serverName = "localhost";
        $this->username = "root";
        $this->password = "";
        $this->dbName = "formTutorial";

        $conn = new mysqli($this->serverName, $this->username, $this->password, $this->dbName);
        return $conn;
    }

    public function queryResult($sql)
    {
        $conn = $this->connect();
        mysqli_query($conn, "SET NAMES 'utf8'");
        $query = mysqli_query($conn, $sql);
        mysqli_close($conn);
        return $query;
    }

    public function queryNonResult($sql)
    {
        $conn = $this->connect();
        mysqli_query($conn, "SET NAMES 'utf8'");
        $query = mysqli_query($conn, $sql);
        if ($query && mysqli_affected_rows($conn) > 0) {
            mysqli_close($conn);
            return true; // Câu truy vấn thành công và có ít nhất một hàng bị ảnh hưởng
        } else {
            mysqli_close($conn);
            return false; // Câu truy vấn thất bại hoặc không có hàng nào bị ảnh hưởng
        }
    }
}
