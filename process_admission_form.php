<?php

class Accept_data {

    public $fname, $mname, $lname, $num, $em, $gend, $edu, $lan, $per, $pass;
    public $wing, $bldg, $area, $city, $land, $pin, $dob, $bg, $coun, $state, $ref;
    public $localhost, $dbname, $conn, $query;

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
    }
}

$acpt_data = new Accept_data();
$acpt_data->read_data();
$acpt_data->display();
$acpt_data->upload_data();
?>

