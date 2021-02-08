<?php

class Cars {
    private $conn;

    public function __construct() {
        $servername = "localhost";
        $username = "root";
        $password = "root";
        $dbname = "test";
        
        // Create connection
        $this->conn = new mysqli($servername, $username, $password, $dbname);
        // Check connection
        if ($this->conn->connect_error) {
          die("Connection failed: " . $this->conn->connect_error);
        }
    }

    public function getData () {
        $sql = "SELECT id, model, color FROM cars";
        $result = $this->conn->query($sql);
      
        if ($result->num_rows > 0) {
       
          while($row = $result->fetch_assoc()) {
            echo "id: " . $row["id"]. " - Name: " . $row["model"]. " " . $row["color"]. "<br>";
          }
        } else {
          echo "0 results";
        }
      }
      
      public function setData () {
        $sql = "INSERT INTO cars (model, color) VALUES ('volvo', 'grey')";
        $result = $this->conn->query($sql);
      
        if ($result === true) {
          echo "ieraksts veiksmīgi pievienots";
        }
        else {
          echo "neizdevās";
        }
      
      }
      
    public function __destruct() {
        $this->conn->close();
    }
}



