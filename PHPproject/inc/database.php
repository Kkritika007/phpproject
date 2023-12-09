<?php

class database
{
    private $servername = "172.31.22.43";
    private $username   = "Harlin200510664";
    private $password   = "zRRLsxOEFN";
    private $database   = "Harlin200510664";
    public  $con;


    // Database Connection
    public function __construct()
    {
        $this->con = new mysqli($this->servername, $this->username, $this->password, $this->database);
        if (mysqli_connect_error()) {
            trigger_error("Failed to connect to MySQL: " . mysqli_connect_error());
        } else {
            return $this->con;
        }
    }

    // Insert customer data into customer table
    public function insertData($post)
    {
        $fname = $this->con->real_escape_string($_POST['fname']);
        $lname = $this->con->real_escape_string($_POST['lname']);
        $pass = $this->con->real_escape_string($_POST['pass']);
        $email = $this->con->real_escape_string($_POST['email']);
       
        $query = "INSERT INTO users(fname,lname,email,pass) VALUES('$fname','$lname','$email','$pass')";
        
        $sql = $this->con->query($query);
        if ($sql == true) {
            echo "Login Details Added!";
        }
    }

    


    // Fetch customer records for show listing
    public function displayData()
    {
        $query = "SELECT * FROM users";
        $result = $this->con->query($query);
        if ($result->num_rows > 0) {
            $data = array();
            while ($row = $result->fetch_assoc()) {
                $data[] = $row;
            }
            return $data;
        } else {
            echo "No found records";
        }
    }

    // Fetch single data for edit from customer table
    public function displyaRecordById($id)
    {
        $query = "SELECT * FROM users WHERE ID = '$id'";
        $result = $this->con->query($query);
        if ($result->num_rows > 0) {
            $row = $result->fetch_assoc();
            return $row;
        } else {
            echo "Record not found";
        }
    }

    

    // Update customer data into customer table
    public function updateRecord($postData)
    {
        $fname = $this->con->real_escape_string($_POST['ufname']);
        $lname = $this->con->real_escape_string($_POST['ulname']);
        $email = $this->con->real_escape_string($_POST['uemail']);
        $pass = $this->con->real_escape_string($_POST['upass']);
        $id = $this->con->real_escape_string($_POST['id']);

        $query = "UPDATE users SET fname = '$fname',lname = '$lname',email = '$email',pass = '$pass' WHERE ID = '$id'";
        $sql = $this->con->query($query);
        if ($sql == true) {
            echo "Record Updated!";
        }
    }

    

    // Delete customer data from customer table
    public function deleteRecord($id)
    {
        $query = "DELETE FROM users WHERE ID = '$id'";
        $sql = $this->con->query($query);
        $sql = $this->con->query($query);
        if ($sql == true) {
            echo "Deletion Completed!";
        }
    }
}
