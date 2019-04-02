<?php

class info {

    public $name;
    public $id;
    private $conn;
    private $host = 'localhost';
    private $user = 'root';
    private $password = '';
    private $database = 'person_info';

    function __construct() {
        echo 'Crud Started.<br/>';
        $this->conn = mysqli_connect($this->host, $this->user, $this->password);

        /* DB conncetion check */
        if (!$this->conn) {
            echo 'Faild to connect DB';
        } else {
            echo 'Successfully connected.';
        }

        /* create DB */
        // Create database
        $sql = "CREATE DATABASE $this->database";
        if ($this->conn->query($sql) === TRUE) {
            echo "Database created successfully";
        }
        /* select db */
        mysqli_select_db($this->conn, $this->database);

        /* Create table if not */
        $table_sql = "CREATE TABLE info (
id INT(11) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
name VARCHAR(30) NOT NULL,
person_id int(11) NOT NULL
)";
        if ($this->conn->query($table_sql) === TRUE) {
            echo "Table info  created successfully";
        }




        echo '<br/>';
    }

    public function create_info($name, $id) {

        if ($name != '' && $id != '') {
            $sql = "INSERT INTO info (person_id,name) VALUES ($id,'$name');";

            if ($this->conn->query($sql)) {
                echo 'Inserted successfully';
            } else {
                echo 'Not inserted' . $this->conn->error;
            }
        }
    }

    public function read_info() {

        $sql = "SELECT * FROM info";
        $result = $this->conn->query($sql);

        return $result = mysqli_fetch_all($result);
    }

    public function update_info($name = null, $id = null) {
        
    }

    public function delete($id) {
        
    }

    function __destruct() {
        echo '<br/>' . 'Destroy DB connection.';
    }

}

?>
