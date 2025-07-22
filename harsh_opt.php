<!doctype html>
<html>
    <head>
        <title>Opticalearn Admission Form</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4Q6Gf2aSP4eDXB8Miphtr37CMZZQ5oXLH2yaXMJ2w8e2ZtHTl7GptT4jmndRuHDT" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.bundle.min.js" integrity="sha384-j1CDi7MgGQ12Z7Qab0qlWQ/Qqz24Gc6BM0thvEMVjHnfYGF0rmFCozFSxQBxwHKO" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="harsh_optcss.css"/>
        <script src="harsh_optjs.js"></script>    
    </head>
    <body class="boody">

        <form onsubmit="return all_checker();">
            
            <div class="container">
            <div class="text-center md_ad_form wid">
                <h2 class="bg-white border border-3 border-black rounded-pill">Admission Form</h2>
            </div>
                
            <div class="row mt-5">
                <div class="col-sm-3">
                    <input class="md_ad_form wid col-sm-12 bg-transparent border-top-0 border-start-0 border-end-0" type="text" placeholder="First Name" name="fn" id="fn">
                    <div id="ferror" class="error-design"></div>
                </div>

                <div class="col-sm-3">
                    <input class="md_ad_form wid col-sm-12 bg-transparent border-top-0 border-start-0 border-end-0" type="text" placeholder="Middle Name" name="mn" id="mn">
                    <div id="merror" class="error-design"></div>
                </div>

                <div class="col-sm-3">
                    <input class="md_ad_form wid col-sm-12 bg-transparent border-top-0 border-start-0 border-end-0" type="text" placeholder="Last Name" name="ln" id="ln">
                    <div id="lerror" class="error-design"></div>
                </div>

                <div class="col-sm-3">
                    <input class="md_ad_form wid col-sm-12 bg-transparent border-top-0 border-start-0 border-end-0" type="text" placeholder="Phone Number" name="pn" id="pn">
                    <div id="perror" class="error-design"></div>
                </div>
            </div>

            <div class="row mt-3">
                <div class="col-sm-6">
                    <input class="md_ad_form wid col-sm-12 bg-transparent border-top-0 border-start-0 border-end-0" type="email" placeholder="Email Address" name="email" id="email">
                    <div id="eerror" class="error-design"></div>
                </div>

                <div class="col-sm-6" class="md_ad_form">
                    <b>Select Gender:</b>
                    <br>
                    <span class="col-sm mt-2 me-2">
                        <input type="radio" name="gen" value="male" id="m">Male
                    </span>
                    
                    <span class="col-sm mt-2 me-2">
                    <input type="radio" name="gen" value="female" id="f">Female
                    </span>
                    
                    <span class="col-sm mt-2 me-2">
                    <input type="radio" name="gen" value="other" id="o">Other
                    </span>
                    <div id="gerror" class="error-design"></div>
                </div>
            </div>

            <div class="row mt-3">
                <div class="col-lg-3 mb_a_form">
                    <b>Education</b><br>
                    <select class="col-lg-12 bg-transparent wid" name="edu" id="edu">
                        <option value="" disabled selected>Education</option>
                        <option>SSC</option>
                        <option>HSC</option>
                        <option>Graduation</option>
                        <option>Diploma</option>
                        <option>Post-Graduation</option>
                    </select>
                    <div id="eduerror" class="error-design"></div>
                </div>

                <div class="col-lg-3 mb_a_form">
                    <b>Language</b><br>
                    <select class="col-lg-12 bg-transparent wid" name="lan" id="lan">
                        <option value="" disabled selected>Language</option>
                        <option>Marathi</option>
                        <option>Hindi</option>
                        <option>Gujarati</option>
                        <option>English</option>
                        <option>Others</option>
                    </select>
                    <div id="lanerror" class="error-design"></div>
                </div>

                <div class="col-lg-3 mb_a_form">
                    <b>%Percentage</b><br>
                    <select class="col-lg-12 bg-transparent wid" name="per" id="per">
                        <option value="" disabled selected>Percentage</option>
                        <?php
                        for ($i = 1; $i <= 100; $i++) {
                            echo '<option>' . $i . '</option>';
                        }
                        ?>
                    </select>
                    <div id="pererror" class="error-design"></div>
                </div>

                <div class="col-lg-3 mb_a_form">
                    <b>Passing Year</b><br>
                    <select class="col-lg-12 bg-transparent wid" name="py" id="py">
                        <option value="" disabled selected>Year</option>
                        <?php
                        for ($i = 2015; $i <= 2025; $i++) {
                            echo '<option>' . $i . '</option>';
                        }
                        ?>
                    </select>
                    <div id="pyerror" class="error-design"></div>
                </div>
            </div>

            <div class="row mt-3">
                <div class="col-lg-3 md_ad_form ">
                    <input class="col-lg-12 wid bg-transparent border-top-0 border-start-0 border-end-0" type="text" placeholder="Wing/Flat no" name="flat" id="flat">
                    <div id="wingerror" class="error-design"></div>
                </div>

                <div class="col-lg-3 md_ad_form ">
                    <input class="col-lg-12 wid bg-transparent border-top-0 border-start-0 border-end-0" type="text" placeholder="Building/Society" name="bldg" id="bldg">
                    <div id="bldgerror" class="error-design"></div>
                </div>

                <div class="col-lg-3 md_ad_form ">
                    <input class="col-lg-12 wid bg-transparent border-top-0 border-start-0 border-end-0" type="text" placeholder="Area" name="area" id="area">
                    <div id="areaerror" class="error-design"></div>
                </div>

                <div class="col-lg-3 md_ad_form ">
                    <input class="col-lg-12 wid bg-transparent border-top-0 border-start-0 border-end-0" type="text" placeholder="City" name="city" id="city">
                    <div id="cityerror" class="error-design"></div>
                </div>
            </div>

            <div class="row mt-3">
                <div class="col-sm-6 md_ad_form ">
                    <input class="col-sm-12 wid bg-transparent border-top-0 border-start-0 border-end-0" type="text" placeholder="Landmark" name="land" id="land">
                    <div id="landerror" class="error-design"></div>
                </div>

                <div class="col-sm-6 md_ad_form ">
                    <input class="col-sm-12 wid bg-transparent border-top-0 border-start-0 border-end-0" type="text" placeholder="Enter PIN Code" name="pin" id="pin">
                    <div id="pinerror" class="error-design"></div>
                </div>
            </div>

            <div class="row mt-3">
                <div class="col-lg-3 mb_a_form">
                    <b>Date of birth</b><br>
                    <input class="col-lg-12 bg-transparent wid border-start-0 border-top-0 border-end-0" type="date" name="dob" id="dob" >
                    <div id="doberror" class="error-design"></div>
                </div>


                <div class="col-lg-3 mb_a_form">
                    <b>Blood Grp</b><br>
                    <select class="col-lg-12 bg-transparent wid" name="bg" id="bg">
                        <option value="" disabled selected>Select Blood Grp</option>
                        <option>O+</option>
                        <option>O-</option>
                        <option>A+</option>
                        <option>A-</option>
                        <option>B+</option>
                        <option>B-</option>
                        <option>AB+</option>
                        <option>AB-</option>
                    </select>
                    <div id="bgerror" class="error-design"></div>
                </div>

                <div class="col-lg-3 mb_a_form">
                    <b>Country</b><br>
                    <select class="col-lg-12 bg-transparent wid" name="cou" id="cou">
                        <option value="" disabled selected>Select Country</option>
                        <option>India</option>
                    </select>
                    <div id="couerror" class="error-design"></div>
                </div>

                <div class="col-lg-3 mb_a_form">
                    <b>State</b><br>
                    <select class="col-lg-12 bg-transparent wid" name="state" id="state">
                        <option value="" disabled selected>Select State</option>
                        <option>Andhra Pradesh</option>
                        <option>Arunachal Pradesh</option>
                        <option>Assam</option>
                        <option>Bihar</option>
                        <option>Chattisgarh</option>
                        <option>Delhi</option>
                        <option>Goa</option>
                        <option>Gujarat</option>
                        <option>Haryana</option>
                        <option>Himachal Pradesh</option>
                        <option>Jarkhand</option>
                        <option>Karnataka</option>
                        <option>Kerala</option>
                        <option>Madhya Pradesh</option>
                        <option>Maharashtra</option>
                        <option>Manipur</option>
                        <option>Meghalaya</option>
                        <option>Mizoram</option>
                        <option>Nagaland</option>
                        <option>Odisha</option>
                        <option>Punjab</option>
                        <option>Rajasthan</option>
                        <option>Sikkim</option>
                        <option>Tamil Nadu</option>
                        <option>Telangana</option>
                        <option>Tripura</option>
                        <option>Uttarakhand</option>
                        <option>Uttar Pradesh</option>
                        <option>West Bengal</option>
                    </select>
                    <div id="stateerror" class="error-design"></div>
                </div>
            </div>

            <div class="row mt-3">
                <div class="col-sm-6 md_ad_form ">
                    <input class="col-sm-12 wid bg-transparent border-top-0 border-start-0 border-end-0" type="text" placeholder="Reference By" name="ref" id="ref">
                    <div id="referror" class="error-design"></div>
                </div>

                <div class="col-sm-6 md_ad_form ">
                    <input class="col-sm-12 wid" type="file" name="photo" id="photo">
                    <div id="photoerror" class="error-design"></div>
                </div>
            </div>

            <div class="mt-3 text-center">
                <button class="col-lg-6 rounded-pill border border-2 border-black" type="submit" name="sub" id="sub">Submit</button>
            </div>
            
            <div class="mt-2 text-white">
                <label class="md_ad_form" name="note" id="note"><b>*Fill the Details as Asked</b></label>
            </div>
            </div>
        </form>
    </body>
</html>

