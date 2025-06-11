<?php ?>
<!doctype html>
<html>
    <head>
        <title>opticalearn</title>
        <style>
            .container{
                max-width: 500px;
                margin: 40px auto;
                background: darkviolet;
                padding: 30px;
                box-shadow: 0 4px 10px rgba(0,0,0,0.1);
                border-radius: 8px;

            }

            h2{
                text-align: center;
                border: 3px solid black;
                border-radius: 7px;
            }

            button{
                border: 2px;
                border-radius: 10px;
                display: block;
                margin: auto;

            }

            .error{
                color: red;
                font-size: 0.9rem;
                display: none;
            }
        </style>
    </head>
    <body bgcolor="#CF9FFF">
        <div class="container">
            <h2>Admission Form</h2>
            <form id="adform" class="underline-input" onsubmit="return checkform();">

                <div><input type="text" id="fsn" name="fname" placeholder="First Name">
                    <input type="text" id="mdn" name="mname" placeholder="Middle Name">
                    <input type="text" id="lsn" name="fname" placeholder="Last Name">
                    <input type="number" id="no" name="no" placeholder="Enter mobile no"><br><br>
                    <input type="text" id="em" name="em" placeholder=" Enter email address">
                    <label>Select Gender:</label><pre> 
                    <input type="radio" name="opt" value="male">Male <input type="radio" name="opt" value="female">Female <input type="radio" name="opt" value="other">Other</pre><br>
                    <label>Education:</label>
                    <select id="edu" name="education" required>
                        <option value="Education">Education</option>
                        <option value="SSC">SSC</option>
                        <option value="HSC">HSC</option>
                        <option value="Gradution">Graduation</option>
                        <option value="Diploma">Diploma</option>
                        <option value="Education">Education</option>
                        <option value="Post">Post Graduation</option>
                    </select>

                    <label>Language:</label>
                    <select id="lan" name="language" required>
                        <option value="Language">Language</option>
                        <option value="Marathi">Marathi</option>
                        <option value="Hindi">Hindi</option>
                        <option value="Gujarati">Gujarati</option>
                        <option value="English">English</option>
                        <option value="Others">Others</option>
                    </select>

                    <label>Percentage:</label>
                    <select id="per" name="percentage" required>
                        <?php
                        for ($i = 1; $i <= 100; $i++) {
                            echo '<option value="$i">' . $i . '</option>';
                        }
                        ?>
                    </select>

                    <label>Pass Year:</label>
                    <select id="pas" name="pass" required>
<?php
for ($i = 1800; $i <= 2024; $i++) {
    echo '<option value="$i">' . $i . '</option>';
}
?>
                    </select><br><br><!-- comment -->
                    <input type="text" id="wing" name="wing" placeholder="Wing/Flat No">
                    <input type="text" id="bldg" name="bldg" placeholder="Building/Society">
                    <input type="text" id="area" name="area" placeholder="Area">
                    <input type="text" id="city" name="city" placeholder="City"><br><br>
                    <input type="text" id="landmark" name="landmark" placeholder="Landmark">
                    <input type="text" id="pin" name="pin" placeholder="Enter PIN code"><br><br><!-- comment -->
                    <label>Date of Birth:</label>
                    <input type="date" name="dob" required>
                    <label>Blood Group:</label>
                    <select id="bg" name="bg" required>
                        <option value="a+">A+</option>
                        <option value="a-">A-</option>
                        <option value="b+">B+</option>
                        <option value="b-">B-</option>
                        <option value="ab+">AB+</option>
                        <option value="ab-">AB-</option>
                        <option value="o+">O+</option>
                        <option value="o-">O-</option>
                    </select>
                    <label>Country:</label>
                    <select id="con" name="coun" required>
                        <option value="coun">Country</option>
                        <option value="india">India</option>
                    </select>
                    <label>State:</label>
                    <select id="state" name="state" required>
                        <option>Andhra Pradesh</option>
                        <option>Arunachal Pradesh</option>
                        <option>Assam</option>
                        <option>Bihar</option>
                        <option>Chattishghar</option>
                        <option>Delhi</option>
                        <option>Goa</option>
                        <option>Gujarat</option>
                        <option>Haryana</option>
                        <option>Himachal Pradesh</option>
                        <option>Jarkhand</option>
                        <option>Karnataka</option>
                        <option>Kerela</option>
                        <option>Madhya Pradesh</option>
                        <option>Maharashtra</option>
                        <option>Manipur</option>
                        <option>Meghalaya</option>
                        <option>Mizoram</option>
                        <option>Nagaland</option>
                        <option>Orissa</option>
                        <option>Punjab</option>
                        <option>Rajasthan</option>
                        <option>Sikkim</option>
                        <option>Tamil Nadu</option>
                        <option>Telangana</option>
                        <option>Tripura</option>
                        <option>Uttrakhand</option>
                        <option>Uttar Pradesh</option>
                        <option>West Bengal</option>
                    </select><br><br>
                    <input type="text" id="ref" name="ref" placeholder="Reference by"><br><br>
                    <label>Borivali Branch:</label><br>
                    <input type="radio" name="time" value="opts" required>08:00 AM - 09:00 AM (3 months 0 days)<br>
                    <input type="radio" name="time" value="opts" required>11:00 AM - 01:00 AM (1 months 15 days)<br><!-- comment -->
                    <input type="radio" name="time" value="opts" required>11:00 AM - 01:00 PM (1 months 15 days)<br><!-- comment -->
                    <input type="radio" name="time" value="opts" required>09:00 AM - 10:00 AM (3 months 0 days)<br><!-- comment -->
                    <input type="radio" name="time" value="opts" required>11:00 AM - 01:00 PM (1 months 15 days)<br><!-- comment -->
                    <input type="radio" name="time" value="opts" required>09:00 AM - 10:00 AM (3 months 0 days)<br><br><!-- comment -->
                    <label>Mulund Branch [Only for Sundays]:</label><br>
                    <input type="radio" name="time" value="optss" required>10:30 AM - 01:30 PM (5 months 0 days)<br><!-- comment -->
                    <input type="radio" name="time" value="optss" required>02:30 PM - 05:30 PM (5 months 0 days)<br><br><br><br><!-- comment -->
                    <button type="submit">Submit</button>
                    <div class="error" id="error">Please enter valid detail as mentioned</div>
                </div>
                </pre>  
            </form>
        </div>

        <script>
            function checkform()
            {
                let isvalid=true;
                const input1 = document.getElementById('fsn');
                const input2 = document.getElementById('mdn');
                const input3 = document.getElementById('lsn');
                const input4 = document.getElementById('em');
                const input5 = document.getElementById('wing');
                const input6 = document.getElementById('bldg');
                const input7 = document.getElementById('area');
                const input8 = document.getElementById('city');
                const input9 = document.getElementById('landmark');
                
                const num = document.getElementById('no');
                const num1 = document.getElementById('pin');
                
                const error = document.getElementById('error');
                const value = parseInt(input1.value);
                const value1 = parseInt(input2.value);
                const value2 = parseInt(input3.value);
                const value3 = parseInt(input8.value);
                if(value || value1 || value2 || value3 === isNan)
                {
                    error.style.display='none';
                }
                else{
                    error.style.display='block';
                    isvalid=false;
                }
                return isvalid;
            }
        </script>
    </body>
</html>
