<!doctype html>
<html>
    <head>
        <title>display</title>
    </head>
    <body bgcolor="mistyrose">
        <?php
        $fn=$_POST['fn'];
        $mn=$_POST['mn'];
        $ln=$_POST['ln'];
        $date=$_POST['dob'];
        $gen=$_POST['opt'];
        $addr=$_POST['add'];
        $edu=$_POST['eq'];
        $cont=$_POST['contact'];
        $em=$_POST['eml'];
        $height=$_POST['height'];
        $hei=$_POST['hei'];
        $wei=$_POST['wei'];
        $weight=$_POST['weight'];
        $hobbies=$_POST['hob'];
        $college=$_POST['col'];
        $aadhar=$_POST['adn'];
        $passport=$_POST['pn'];
        $examyear=$_POST['ey'];
        $examname=$_POST['en'];
        $percent=$_POST['per'];
        $class=$_POST['class'];
        ?>
        <h1 style="text-align: center">ADMISSION FORM</h1><br><br>
        <span> Name: </span> <?php echo $fn ?> <?php echo $mn ?> <?php echo $ln ?><br><br><!-- comment -->
        <span> Date of Birth: </span> <?php echo $date ?><br><br><!-- comment -->
        <span> Gender: </span> <?php echo $gen ?><br><br><!-- comment -->
        <span> Address: </span> <?php echo $addr ?><br><br><!-- comment -->
        <span> Education Qualification: </span> <?php echo $edu ?><br><br><!-- comment -->
        <span> Contact Number: </span> <?php echo $cont ?><br><br><!-- comment -->
        <span> Email ID: </span> <?php echo $em ?><br><br><!-- comment -->
        <span> Height: </span> <?php echo $height ?> <?php echo $hei?><br><br><!-- comment -->
        <span> Weight: </span> <?php echo $weight ?> <?php echo $wei?><br><br><!-- comment -->
        <span> Hobbies: </span> <?php echo $hobbies ?><br><br><!-- comment -->
        <span> College: </span> <?php echo $college ?><br><br><!-- comment -->
        <span> Aadhar No: </span> <?php echo $aadhar ?><br><br><!-- comment -->
        <span> Passport No: </span> <?php echo $passport ?><br><br><!-- comment -->
        <table border="3px">
                <tr>
                    <th>Exam Year</th>
                    <th>Exam Name</th>
                    <th>Percentage</th>
                    <th>Class</th>
                </tr>
                <tr>
                    <td> <?php echo $examyear ?></td>
                    <td><?php echo $examname ?></td>
                    <td><?php echo $percent ?></td>
                    <td><?php echo $class ?></td>
                </tr>

    </body>
</html>


