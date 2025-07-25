<?php
class Single_detail{
   public $localhost, $dbname, $conn, $query, $result, $row;

    function single_data() {
        $this->localhost = "127.0.0.1";             //server IP address
        $this->dbname = "stu_data";
        if(($_SERVER["REQUEST_METHOD"] == "POST"){
            if(isset($_POST['roll_no']))
            {
               $this->roll = $_GET['roll_no'];
            try{
            $this->datapdo = new PDO("mysql:host=$this->localhost;dbname=$this->dbname;","root","mahi171006");      //create object for connection
            $this->datapdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);            //error message
            $this->query = "SELECT * FROM admission_form WHERE roll_no = ".$this->roll; 
            echo $this->roll;
           // $this->result = $this->datapdo->query($this->query); 
            } catch (Exception $ex) {
                echo $ex;
        } 
            }
            
        }
        
    } 
        }
        
        

$single_detail = new Single_detail();
$single_detail->single_data();

?>

