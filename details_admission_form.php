<!doctype html>
<html>
    <head>
        <title>details</title>
    </head>
    <style>
       @media (max-width: 460px)
       {
           table{
               width: 100%;
               overflow: hidden;
           }
           th,td,tr{
               display: block;
           }
       }
    </style>
    
    <body>
        <form action="single_details.php" method="POST">
        <?php
class Accep_data {

    public $localhost, $dbname, $conn, $query, $result, $row, $target_dir, $target_file, $uploadsok, $imgfiletype;

    function fetch_data() {
        $this->localhost = "127.0.0.1";             //server IP address
        $this->dbname = "stu_data";
        try {
            $this->datapdo = new PDO("mysql:host=$this->localhost;dbname=$this->dbname;","root","mahi171006");      //create object for connection
            $this->datapdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);            //error message
            $this->query = "SELECT fname, mname, lname, mob, email FROM admission_form"; 
            //$this->datapdo->exec($this->query);
            $this->result = $this->datapdo->query($this->query);            //execute and store in result 
            if($this->result->rowCount() > 0)
        {
                echo '<table border=2 align=center><tr><th>Name</th><th>Contact</th><th>Email</th><th>Details</th></tr>';
            while ($row = $this->result->fetch( PDO::FETCH_ASSOC)){       //fetch each row as column name as key
                echo '<tr><td>'. $row["fname"]. ' '. $row["mname"].' '. $row["lname"].'</td><td>'  . ''. $row["mob"].'</td><td>'  .''. $row["email"].'</td><td><td><button onclick='.'fetchdata('.$row['roll_no'].') id='.'onedata'.'>More Details</button></td></tr>';
            }
            echo "</table>";
        } else {
            echo "0 results";    
        }
             } catch (Exception $e) {
            echo $e;
        }
        
    }
    
    
}

$accept_data = new Accep_data();
$accept_data->fetch_data();
//$accept_data->uploadphoto();
//$accept_data->displaynames();
?>
        </form>
    </body>
</html>




