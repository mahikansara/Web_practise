<!doctype html>
<html>
    <head>
        <title>thankyou</title>
    </head>
    <body>
        <div>
            
        </div>
    </body>
</html>


<?php

class Accept_data {

    public $fname, $mname, $lname, $num, $em, $gend, $edu, $lan, $per, $pass;
    public $wing, $bldg, $area, $city, $land, $pin, $dob, $bg, $coun, $state, $ref;
    public $localhost, $dbname, $conn, $query;
    public $target_dir, $target_file, $uploadOk, $imgfiletype, $check, $sanitize_name, $sanitize_email;
        function upload_data() {
        $this->localhost = "127.0.0.1";
        $this->dbname = "stu_data";
        try {
            $this->datapdo = new PDO("mysql:host=$this->localhost;dbname=$this->dbname;","root","mahi171006");
            $this->query = "insert into admission_form(fname,mname,lname,mob,email,gender,education,languages,percentage,passyear,wing,bldg,areas,city,landmark,pin,dates,blood_grp,country,state,ref) values('" . $this->fname . "','" . $this->mname . "','" . $this->lname . "'," . $this->num . ",'" . $this->em . "','" . $this->gend . "','" . $this->edu . "','" . $this->lan . "'," . $this->per . "," . $this->pass . ",'" . $this->wing . "','" . $this->bldg . "','" . $this->area . "','" . $this->city . "','" . $this->land . "'," . $this->pin . ",'" . $this->dob . "','" . $this->bg . "','" . $this->coun . "','" . $this->state . "','" . $this->ref . "'".")";
            
            $this->datapdo->exec($this->query);
            
            } catch (Exception $e) {
            echo $e;
        }
    }

    function read_data() {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $this->fname = empty(filter_input(INPUT_POST, 'fname', FILTER_SANITIZE_SPECIAL_CHARS)) ? "NO NAME" : (filter_input(INPUT_POST, 'fname', FILTER_SANITIZE_SPECIAL_CHARS));
            $this->mname = empty(filter_input(INPUT_POST, 'mname', FILTER_SANITIZE_SPECIAL_CHARS)) ? "NO NAME" : (filter_input(INPUT_POST, 'mname', FILTER_SANITIZE_SPECIAL_CHARS));
            $this->lname = empty(filter_input(INPUT_POST, 'lname', FILTER_SANITIZE_SPECIAL_CHARS)) ? "NO NAME" : (filter_input(INPUT_POST, 'lname', FILTER_SANITIZE_SPECIAL_CHARS));
            $this->num = empty(filter_input(INPUT_POST, 'no', FILTER_SANITIZE_NUMBER_INT)) ? "NO NUMBER" : (filter_input(INPUT_POST, 'no', FILTER_SANITIZE_NUMBER_INT));
            $this->em = empty(filter_input(INPUT_POST, 'em', FILTER_SANITIZE_EMAIL)) ? "NO EMAIL" : (filter_input(INPUT_POST, 'em', FILTER_SANITIZE_EMAIL));
            $this->gend = empty(filter_input(INPUT_POST, 'opt', FILTER_SANITIZE_SPECIAL_CHARS)) ? "NO GENDER" : (filter_input(INPUT_POST, 'opt', FILTER_SANITIZE_SPECIAL_CHARS));
            $this->edu = empty(filter_input(INPUT_POST, 'education', FILTER_SANITIZE_STRING)) ? "NOT DEFINED" : (filter_input(INPUT_POST, 'education', FILTER_SANITIZE_STRING));
            $this->lan = empty(filter_input(INPUT_POST, 'language', FILTER_SANITIZE_STRING)) ? "NOT DEFINED" : (filter_input(INPUT_POST, 'language', FILTER_SANITIZE_STRING));
            $this->per = empty(filter_input(INPUT_POST, 'percentage', FILTER_SANITIZE_STRING)) ? "NOT DEFINED" : (filter_input(INPUT_POST, 'percentage', FILTER_SANITIZE_STRING));
            $this->pass = empty(filter_input(INPUT_POST, 'pass', FILTER_SANITIZE_STRING)) ? "NOT DEFINED" : (filter_input(INPUT_POST, 'pass', FILTER_SANITIZE_STRING));
            $this->wing = empty(filter_input(INPUT_POST, 'wing', FILTER_SANITIZE_SPECIAL_CHARS)) ? "NOT DEFINED" : (filter_input(INPUT_POST, 'wing', FILTER_SANITIZE_SPECIAL_CHARS));
            $this->bldg = empty(filter_input(INPUT_POST, 'bldg', FILTER_SANITIZE_SPECIAL_CHARS)) ? "NOT DEFINED" : (filter_input(INPUT_POST, 'bldg', FILTER_SANITIZE_SPECIAL_CHARS));
            $this->area = empty(filter_input(INPUT_POST, 'area', FILTER_SANITIZE_SPECIAL_CHARS)) ? "NOT DEFINED" : (filter_input(INPUT_POST, 'area', FILTER_SANITIZE_SPECIAL_CHARS));
            $this->city = empty(filter_input(INPUT_POST, 'city', FILTER_SANITIZE_SPECIAL_CHARS)) ? "NOT DEFINED" : (filter_input(INPUT_POST, 'city', FILTER_SANITIZE_SPECIAL_CHARS));
            $this->land = empty(filter_input(INPUT_POST, 'landmark', FILTER_SANITIZE_SPECIAL_CHARS)) ? "NOT DEFINED" : (filter_input(INPUT_POST, 'landmark', FILTER_SANITIZE_SPECIAL_CHARS));
            $this->pin = empty(filter_input(INPUT_POST, 'pin', FILTER_SANITIZE_NUMBER_INT)) ? "NOT DEFINED" : (filter_input(INPUT_POST, 'pin', FILTER_SANITIZE_SPECIAL_CHARS));
            $this->dob = empty(filter_input(INPUT_POST, 'dob', FILTER_SANITIZE_STRING)) ? "NOT DEFINED" : (filter_input(INPUT_POST, 'dob', FILTER_SANITIZE_SPECIAL_CHARS));
            $this->bg = empty(filter_input(INPUT_POST, 'bg', FILTER_SANITIZE_STRING)) ? "NOT DEFINED" : (filter_input(INPUT_POST, 'bg', FILTER_SANITIZE_SPECIAL_CHARS));
            $this->coun = empty(filter_input(INPUT_POST, 'coun', FILTER_SANITIZE_STRING)) ? "NOT DEFINED" : (filter_input(INPUT_POST, 'coun', FILTER_SANITIZE_SPECIAL_CHARS));
            $this->state = empty(filter_input(INPUT_POST, 'state', FILTER_SANITIZE_STRING)) ? "NOT DEFINED" : (filter_input(INPUT_POST, 'state', FILTER_SANITIZE_SPECIAL_CHARS));
            $this->ref = empty(filter_input(INPUT_POST, 'ref', FILTER_SANITIZE_SPECIAL_CHARS)) ? "NOT DEFINED" : (filter_input(INPUT_POST, 'ref', FILTER_SANITIZE_SPECIAL_CHARS));
        }
    }
    
    function uploadphoto()
    {
        if($_SERVER['REQUEST_METHOD'] == 'POST')
        {
        $this->target_dir = "uploads/";
        $this->target_file = $this->target_dir.basename($_FILES["filesend"]["name"]);
        $this->sanitize_name = $_FILES["filesend"]["name"];
        $this->sanitize_email = str_replace(['@','.'], '_', $this->em);
        $uploadOk = 1;
        $imgfiletype = strtolower(pathinfo($this->target_file, PATHINFO_EXTENSION));
        $this->newname = $this->sanitize_email.'.'.$imgfiletype;
        if(isset($_POST["submit"]))
        {
            $check = getimagesize($_FILES["filesend"]["tmp_name"]);
            if($check !== false)
            {
                echo "File is an image - ".$check["mime"].".";  
                $uploadOk = 1;
            }
        else {
                echo "File is not an image";
                $uploadOk = 0;
        }
        }
        
        if(file_exists($this->newname))
        {
            echo "File already exists";
            $uploadOk = 0;
        }
        
        if($_FILES["filesend"]["size"] > 100000)
        {
            echo "Your file is too large"; 
            $uploadOk = 0;
        }
        
        if($imgfiletype!="jpg" && $imgfiletype!="jpeg" && $imgfiletype!="png")
        {
            echo "Please get correct file extension";
            $uploadOk = 0;
        }
        
        if($uploadOk == 0)
        {
            echo "Sorry your file is not uploaded";
        } else {
            if(move_uploaded_file($_FILES["filesend"]["tmp_name"], $this->target_file))
            {
                 echo "The file ". htmlspecialchars( basename( $_FILES["filesend"]["name"])). " has been uploaded.";
            } else {
                echo "Sorry, there was an error in uploading your file.";
            }
        }
//        mkdir($this->target_dir, 0755, true);
//        echo basename($_FILES["filesend"]["name"]);
        }
    }

    function display() {
        echo $this->fname;
        echo '<br>';
        echo $this->mname;
        echo '<br>';
        echo $this->lname;
        echo '<br>';
        echo $this->num;
        echo '<br>';
        echo $this->em;
        echo '<br>';
        echo $this->gend;
        echo '<br>';
        echo $this->edu;
        echo '<br>';
        echo $this->lan;
        echo '<br>';
        echo $this->per;
        echo '<br>';
        echo $this->pass;
        echo '<br>';
        echo $this->wing;
        echo '<br>';
        echo $this->bldg;
        echo '<br>';
        echo $this->area;
        echo '<br>';
        echo $this->city;
        echo '<br>';
        echo $this->land;
        echo '<br>';
        echo $this->pin;
        echo '<br>';
        echo $this->dob;
        echo '<br>';
        echo $this->bg;
        echo '<br>';
        echo $this->coun;
        echo '<br>';
        echo $this->state;
        echo '<br>';
        echo $this->ref;
        echo '<br>';
    }
    
    
}

$acpt_data = new Accept_data();
$acpt_data->upload_data();
$acpt_data->read_data();
$acpt_data->display();
$acpt_data->uploadphoto();
?>

