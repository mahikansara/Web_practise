
<!doctype html>
<html>
    <head>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4Q6Gf2aSP4eDXB8Miphtr37CMZZQ5oXLH2yaXMJ2w8e2ZtHTl7GptT4jmndRuHDT" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.bundle.min.js" integrity="sha384-j1CDi7MgGQ12Z7Qab0qlWQ/Qqz24Gc6BM0thvEMVjHnfYGF0rmFCozFSxQBxwHKO" crossorigin="anonymous"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>

        <meta name="viewport" content="width=device-width, initial-scale=1.0" >
        <title>opticalearn</title>
        <link rel="stylesheet" href="opticalearn_css.css"/>
        <script src="opticalearn_js.js"></script>
    </head>
    <body class="bodyclass">

        <form id="adform" onsubmit="return testerror();" action="process_admission_form.php" method="post" enctype="application/x-www-form-urlencoded">
            <div class="container">  

                <div class="text-center upside-an">
                    <h2  class="display-5 border border-5 border-dark rounded-pill bg-white h2class">Admission Form</h2>
                </div>

                <div class="row">
                    <div class="col-sm-3 left-an" tabindex="1">
                        <input class="focus-error inputt inputclass md_ad_form border-top-0 border-start-0 border-end-0 col-sm-12 bg-transparent widt" type="text" id="fsn" name="fname" placeholder="First Name">
                        <div id="error" class="blink"></div>
                    </div>

                    <div class="col-sm-3 left-an" tabindex="2">
                        <input class="focus-error inputt inputclass md_ad_form border-top-0 border-start-0 border-end-0 col-sm-12 bg-transparent widt" type="text" id="mdn" name="mname" placeholder="Middle Name">
                        <div id="merror" class="blink"></div>
                    </div>

                    <div class="col-sm-3  right-an" tabindex="3">
                        <input class="focus-error inputt inputclass md_ad_form border-top-0 border-start-0 border-end-0 col-sm-12 bg-transparent widt" type="text" id="lsn" name="lname" placeholder="Last Name">
                        <div id="lerror" class="blink"></div>
                    </div>


                    <div class="col-sm-3  right-an" tabindex="4">
                        <input class="focus-error inputt inputclass md_ad_form border-top-0 border-start-0 border-end-0 col-sm-12 bg-transparent widt" type="text" id="numb" name="no" placeholder="Enter mobile no">
                        <div id="perror" class="blink"></div>
                    </div>
                </div>

                <div class="row">
                    <div class="flex-row col-lg-6 left-an" tabindex="5"> 
                        <input class="focus-error inputt inputclass mt-3 col-sm-12 md_ad_form border-top-0 border-start-0 border-end-0 bg-transparent widt" type="text" id="em" name="em" placeholder=" Enter email address"><!--  -->
                        <div id="emerror" class="blink error-none"></div>
                    </div>
                    <div class="mt-3 col-lg-6 right-an focus-error" id="gend">Select Gender:
                        <br>
                        <span class="col-sm-1 mt-3 me-3">
                            <input type="radio" name="opt" value="male" id="m" class="chkgen">Male
                        </span>

                        <span class="col-sm-1 mt-3 me-3">
                            <input type="radio" name="opt" value="female" id="f" class="chkgen">Female
                        </span>

                        <span class="col-sm-1 mt-3 me-3">
                            <input type="radio" name="opt" value="other" id="o" class="chkgen">Other
                        </span> 
                        <div id="generror" class="blink"></div>
                    </div>
                </div>

                <div class="row mt-3">
                    <div class="col-lg-3 left-an" tabindex="7">
                        <span class="mt-3 col-lg-12 auto focus-error">Education:</span><br>

                        <select id="edu" name="education"  class="col-sm-12 mb_ad_form bg-transparent widt" >
                            <option value="" disabled selected>Education</option>
                            <option value="SSC">SSC</option>
                            <option value="HSC">HSC</option>
                            <option value="Gradution">Graduation</option>
                            <option value="Diploma">Diploma</option>
                            <option value="Post">Post Graduation</option>
                        </select>
                        <div id="eduerror" class="blink"></div>
                    </div>


                    <div class="col-lg-3 left-an" tabindex="8">
                        <span class="mt-3 col-lg-12 focus-error">Language:</span><br>

                        <select id="lan" name="language"  class="col-sm-12 bg-transparent mb_ad_form widt">
                            <option value="" disabled selected>Language</option>
                            <option value="Marathi">Marathi</option>
                            <option value="Hindi">Hindi</option>
                            <option value="Gujarati">Gujarati</option>
                            <option value="English">English</option>
                            <option value="Others">Others</option>
                        </select>
                        <div id="lanerror" class="blink"></div>
                    </div>


                    <div class="col-lg-3 right-an" tabindex="9">
                        <span class="mt-3 col-lg-12 focus-error">Percentage:</span><br>
                        <select id="per" name="percentage" class="col-sm-12 bg-transparent mb_ad_form widt">
                            <option value="" disabled selected>Percentage</option>
                            <script>
                                for (let i = 1; i <= 100; i++) {
                                    document.write('<option>' + i + '</option>');
                                }
                            </script>
                        </select>
                        <div id="pererror" class="blink"></div>
                    </div>


                    <div class="col-lg-3 right-an" tabindex="10">
                        <span class="mt-3 col-lg-12 focus-error">Pass Year:</span><br>
                        <select id="pas" name="pass" class="col-sm-12 bg-transparent mb_ad_form widt">
                            <option value="" disabled selected>Pass Year</option>
                            <script>
                                for (let i = 1800; i <= 2024; i++) {
                                    document.write('<option>' + i + '</option>');
                                }
                            </script>
                        </select>
                        <div id="passerror" class="blink"></div>
                    </div>

                </div>

                <div class="row">
                    <div class="col-sm-3 left-an" tabindex="11">
                        <input class="focus-error inputt inputclass flex-container md_ad_form border-top-0 border-start-0 border-end-0 col-sm-12 bg-transparent mt-3 widt" type="text" id="wing" name="wing" placeholder="Wing/Flat No">
                        <div id="werror" class="blink"></div>
                    </div>

                    <div class="col-sm-3 left-an" tabindex="12">
                        <input class="focus-error inputt inputclass flex-container md_ad_form border-top-0 border-start-0 border-end-0 col-sm-12 bg-transparent mt-3 widt" type="text" id="bldg" name="bldg" placeholder="Building/Society">
                        <div id="berror" class="blink"></div>
                    </div>

                    <div class="col-sm-3 right-an" tabindex="13">
                        <input class="focus-error inputt inputclass flex-container md_ad_form border-top-0 border-start-0 border-end-0 col-sm-12 bg-transparent mt-3 widt" type="text" id="area" name="area" placeholder="Area">
                        <div id="aerror" class="blink"></div>
                    </div>

                    <div class="col-sm-3 right-an" tabindex="14">
                        <input class="focus-error inputt inputclass flex-container md_ad_form border-top-0 border-start-0 border-end-0 col-sm-12 bg-transparent mt-3 widt" type="text" id="city" name="city" placeholder="City">
                        <div id="cierror" class="blink"></div>
                    </div>
                </div>

                <div class="row">
                    <div class="flex-row col-sm-6 left-an" tabindex="15">
                        <input class="focus-error inputt inputclass col-sm-12 mt-3 md_ad_form border-top-0 border-start-0 border-end-0 bg-transparent grid widt" type="text" id="landmark" name="landmark" placeholder="Landmark"><!-- comment -->
                        <div id="lmerror" class="blink"></div>
                    </div>


                    <div class="flex-row col-sm-6 right-an" tabindex="16">
                        <input class="focus-error inputt inputclass col-sm-12 mt-3 md_ad_form border-top-0 border-start-0 border-end-0 bg-transparent grid widt" type="text" id="pin" name="pin" placeholder="Enter PIN code">
                        <div id="pinerror" class="blink"></div>
                    </div>
                </div><!-- comment -->

                <div class="row mt-3">

                    <div class="col-lg-3 left-an" tabindex="17">
                        <span class="col-lg-12 mt-3 focus-error">Date of Birth:</span><br>
                        <input class="inputclass col-sm-12 border-top-0 border-start-0 border-end-0 bg-transparent mb_ad_form widt" id="dt" type="date" name="dob">
                        <div id="dterror" class="blink"></div>
                    </div>

                    <div class="col-lg-3 left-an" tabindex="18">
                        <span class="col-lg-12 mt-3 focus-error">Blood Group:</span><br>
                        <select class="col-sm-12 bg-transparent mb_ad_form widt" id="bg" name="bg">
                            <option value="" disabled selected>Blood Group</option>
                            <option value="a+">A+</option>
                            <option value="a-">A-</option>
                            <option value="b+">B+</option>
                            <option value="b-">B-</option>
                            <option value="ab+">AB+</option>
                            <option value="ab-">AB-</option>
                            <option value="o+">O+</option>
                            <option value="o-">O-</option>
                        </select>
                        <div id="blderror" class="blink"></div>
                    </div>

                    <div class="col-lg-3 right-an" tabindex="19">
                        <span class="col-lg-12 mt-3 focus-error">Country:</span><br>
                        <select class="col-sm-12 bg-transparent mb_ad_form widt" id="con" name="coun">
                            <option value="" disabled selected>Country</option>
                            <option value="india">India</option>
                        </select>
                        <div id="conerror" class="blink"></div>
                    </div>

                    <div class="col-lg-3 right-an" tabindex="20">
                        <span class="col-lg-12 mt-3 focus-error">State:</span><br>
                        <select class="col-sm-12 bg-transparent mb_ad_form widt" id="state" name="state">
                            <option value="" disabled selected>State</option>
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
                        <div id="sterror" class="blink"></div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-6 left-an">
                        <input class="inputt inputclass col-sm-12 mt-3 md_ad_form border-top-0 border-start-0 border-end-0 bg-transparent widt" type="text" id="ref" name="ref" placeholder="Reference by">

                    </div>

                    <div class="col-lg-6 right-an">
                        <input class="focus-error inputclass col-lg-12 border-1 mt-3 bg-transparent" type="file" id="fle" accept=".jpg, .jpeg, .png"><!-- comment -->
                        <div id=filerror" class="blink"></div>
                    </div>
                </div>


                <div class="mt-3 mb-3 text-center downside-an">
                    <button type="submit" class="boun border border-dark rounded-pill col-sm-6">Submit</button>
                </div>
                <div class="err fw-bold" id="err">* Please enter valid detail as mentioned.</div>
            </div>
        </form>
    </body>
</html>
