<?php
/**
 * @Description: This handles the database connection
 * and server as a mini query builder
 */

class Database
{
    public $conn;

    //This is a constructor function and runs immediately(creates a database connection) an object is declared for this class
    public function __construct()
    {

        $hostname = 'localhost';
        $username = 'root';
        $password = '';
        $database = "internship_manager";

        // Create connection
        $this->conn = new mysqli($hostname, $username, $password, $database);

        // Check connection
        if ($this->conn->connect_error) {
            die("Connection failed: " . $this->conn->connect_error);
        }
    }

    /*This function runs the query passed to it i.e $sql and returns true upon success and false upon failure
    This saves time having to do this over and over again
    Use it for queries like insert.
     */
    public function query($sql)
    {
        if ($this->conn->query($sql) === true) {
            return true;
        }
        return false;
    }

    public function select($sql)
    {
        $result = $this->conn->query($sql);

        if ($result->num_rows > 0) {
            $resultToReturn = [];
            while ($row = $result->fetch_assoc()) {
                array_push($resultToReturn, $row);
            }
            return $resultToReturn;
        }
        return 0;
    }

    public function close()
    {
        $this->conn->close();
    }
}