<?php ?>
<!doctype html>
<html>
    <head>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4Q6Gf2aSP4eDXB8Miphtr37CMZZQ5oXLH2yaXMJ2w8e2ZtHTl7GptT4jmndRuHDT" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.bundle.min.js" integrity="sha384-j1CDi7MgGQ12Z7Qab0qlWQ/Qqz24Gc6BM0thvEMVjHnfYGF0rmFCozFSxQBxwHKO" crossorigin="anonymous"></script>
        
        <title>opticalearn</title>
        <style>
            .container{
                margin: 100px auto;
                background: linear-gradient(30deg, deeppink, pink);
                max-width: 700px;
                padding: 50px;
                box-shadow: 5px 5px 8px black;
                
            }

            @media (min-width: 576px) and (max-width: 992px)
            {
                .flex-container{
                    flex-direction: column;
                    
                }
                
                .flex-row{
                    display: flex;
                    flex-direction: row;
                }
                .md_ad_form{
                    margin: 20px 20px 20px 0px;
                    
                }

                .mb_ad_form{
                    margin-bottom: 20px;
                    
                }

                div+input{
                    width: 100px;
                    border: 100px;
                }
                
                .widt{
                    width: 100%;
                }
                
                
                }

            

            @media (min-width: 425px) and (max-width: 575px)
            {
               .widt
               {
                   width: 100%;
               }
               
               .md_ad_form{
                    margin: 20px 20px 20px 0px;
                    
                }

                .mb_ad_form{
                    margin-bottom: 20px;
                    
                }
            }
            
            @
            
            
            input{
                outline: none;
            }
            
            body{
                background: linear-gradient(45deg, pink, deeppink);
            }
            
            input::placeholder{
                color: black;
            }
            
            h2{
                    overflow: hidden;
                    
                }
            
            

        </style>
    </head>
    <body bgcolor="#a83264">

        <form class="container" id="adform" onsubmit="return checkform();">
            <div class="text-center">
                <h2  class="display-5 border border-5 border-dark rounded-pill bg-white">Admission Form</h2>
            </div>

            <div class="row">
                <div class="col-sm-3">
                    <input class="flex-container md_ad_form border-top-0 border-start-0 border-end-0 col-sm-12 bg-transparent widt" type="text" id="fsn" name="fname " placeholder="First Name">
                </div>

                <div class="col-sm-3">
                    <input class="flex-container md_ad_form border-top-0 border-start-0 border-end-0 col-sm-12 bg-transparent widt" type="text" id="mdn" name="mname" placeholder="Middle Name">
                </div>

                <div class="col-sm-3">
                    <input class="flex-container md_ad_form border-top-0 border-start-0 border-end-0 col-sm-12 bg-transparent widt" type="text" id="lsn" name="fname" placeholder="Last Name">
                </div>

                <div class="col-sm-3">
                    <input class="flex-container md_ad_form border-top-0 border-start-0 border-end-0 col-sm-12 bg-transparent widt" type="number" id="no" name="no" placeholder="Enter mobile no">
                </div>
            </div>

            <div class="row">
                <div class="flex-row col-sm-6"> 
                    <input class="mt-3 col-sm-12 md_ad_form border-top-0 border-start-0 border-end-0 bg-transparent widt" type="text" id="em" name="em" placeholder=" Enter email address"><!--  -->
                </div>
                <div class="mt-3 col-sm-6">Select Gender:
                    <br>
                    <span class="col-sm-1 mt-3 me-3">
                    <input type="radio" name="opt" value="male">Male
                    </span>
                    
                    <span class="col-sm-1 mt-3 me-3">
                    <input type="radio" name="opt" value="female">Female
                    </span>
                    
                    <span class="col-sm-1 mt-3 me-3">
                    <input type="radio" name="opt" value="other">Other
                    </span>
                </div>
            </div>

            <div class="row mt-3">
                <div class="col-lg-3 ">
                    <span class="mt-3 col-lg-12 auto">Education:</span><br>

                    <select id="edu" name="education"  class="col-sm-12 mb_ad_form bg-transparent widt" required>
                        <option value="Education">Education</option>
                        <option value="SSC">SSC</option>
                        <option value="HSC">HSC</option>
                        <option value="Gradution">Graduation</option>
                        <option value="Diploma">Diploma</option>
                        <option value="Education">Education</option>
                        <option value="Post">Post Graduation</option>
                    </select>
                </div>


                <div class="col-lg-3 ">
                    <span class="mt-3 col-lg-12">Language:</span><br>

                    <select id="lan" name="language"  class="col-sm-12 bg-transparent mb_ad_form widt" required>
                        <option value="Language">Language</option>
                        <option value="Marathi">Marathi</option>
                        <option value="Hindi">Hindi</option>
                        <option value="Gujarati">Gujarati</option>
                        <option value="English">English</option>
                        <option value="Others">Others</option>
                    </select>
                </div>


                <div class="col-lg-3">
                    <span class="mt-3 col-lg-12">Percentage:</span><br>
                    <select id="per" name="percentage" class="col-sm-12 bg-transparent mb_ad_form widt" required>
                        <?php
                        for ($i = 1; $i <= 100; $i++) {
                            echo '<option value="$i">' . $i . '</option>';
                        }
                        ?>
                    </select>
                </div>


                <div class="col-lg-3">
                    <span class="mt-3 col-lg-12">Pass Year:</span><br>
                    <select id="pas" name="pass" class="col-sm-12 bg-transparent mb_ad_form widt" required>
                        <?php
                        for ($i = 1800; $i <= 2024; $i++) {
                            echo '<option value="$i">' . $i . '</option>';
                        }
                        ?>
                    </select>
                </div>

            </div>



            <div class="row">
                <div class="col-sm-3">
                    <input class="flex-container md_ad_form border-top-0 border-start-0 border-end-0 col-sm-12 bg-transparent mt-3 widt" type="text" id="wing" name="wing" placeholder="Wing/Flat No">
                </div>

                <div class="col-sm-3">
                    <input class="flex-container md_ad_form border-top-0 border-start-0 border-end-0 col-sm-12 bg-transparent mt-3 widt" type="text" id="bldg" name="bldg" placeholder="Building/Society">
                </div>

                <div class="col-sm-3">
                    <input class="flex-container md_ad_form border-top-0 border-start-0 border-end-0 col-sm-12 bg-transparent mt-3 widt" type="text" id="area" name="area" placeholder="Area">
                </div>

                <div class="col-sm-3">
                    <input class="flex-container md_ad_form border-top-0 border-start-0 border-end-0 col-sm-12 bg-transparent mt-3 widt" type="text" id="city" name="city" placeholder="City">
                </div>
            </div>

            <div class="row">
                <div class="flex-row col-sm-6">
                    <input class="col-sm-12 mt-3 md_ad_form border-top-0 border-start-0 border-end-0 bg-transparent grid widt" type="text" id="landmark" name="landmark" placeholder="Landmark"><!-- comment -->
                </div>

                <div class="flex-row col-sm-6">
                    <input class="col-sm-12 mt-3 md_ad_form border-top-0 border-start-0 border-end-0 bg-transparent grid widt" type="text" id="pin" name="pin" placeholder="Enter PIN code">
                </div>
            </div><!-- comment -->

            <div class="row mt-3">

                <div class="col-lg-3">
                    <span class="col-lg-12 mt-3">Date of Birth:</span><br>
                    <input class="col-sm-12 border-top-0 border-start-0 border-end-0 bg-transparent mb_ad_form widt" type="date" name="dob" required>
                </div>

                <div class="col-lg-3">
                    <span class="col-lg-12 mt-3">Blood Group:</span><br>
                    <select class="col-sm-12 bg-transparent mb_ad_form widt" id="bg" name="bg" required>
                        <option value="a+">A+</option>
                        <option value="a-">A-</option>
                        <option value="b+">B+</option>
                        <option value="b-">B-</option>
                        <option value="ab+">AB+</option>
                        <option value="ab-">AB-</option>
                        <option value="o+">O+</option>
                        <option value="o-">O-</option>
                    </select>
                </div>

                <div class="col-lg-3">
                    <span class="col-lg-12 mt-3">Country:</span><br>
                    <select class="col-sm-12 bg-transparent mb_ad_form widt" id="con" name="coun" required>
                        <option value="coun">Country</option>
                        <option value="india">India</option>
                    </select>
                </div>

                <div class="col-lg-3">
                    <span class="col-lg-12 mt-3">State:</span><br>
                    <select class="col-sm-12 bg-transparent mb_ad_form widt" id="state" name="state" required>
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
                    </select>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-6">
                    <input class="col-sm-12 mt-3 md_ad_form border-top-0 border-start-0 border-end-0 bg-transparent widt" type="text" id="ref" name="ref" placeholder="Reference by">
                </div>

                <div class="col-lg-6">
                    <input class="col-lg-12 border-1 mt-3 bg-transparent" type="file" placeholder="Upload your photo"><!-- comment -->
                </div>
            </div>


            <div class="mt-3 mb-3 text-center">
                <button type="submit" class="border border-dark rounded-pill col-lg-6 bg-white">Submit</button>
            </div>
            <div class="error fw-bold" id="error">* Please enter valid detail as mentioned.</div>


        </form>



    </body>
</html>
