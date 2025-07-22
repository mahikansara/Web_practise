let isvalid = true;
function fn_checker()
{
    const val_fn = document.getElementById("fn").value;
    const ferror = document.getElementById("ferror");

    if (val_fn === "" || val_fn.includes(" ")|| (!(isNaN(val_fn))))
    {
        val_fn === ""?(ferror.textContent = "Cannot be Blank"):val_fn.includes(" ")?(ferror.textContent = "Cannot include Spaces"):(ferror.textContent = "Cannot include Number");
        ferror.style.display = 'block';
        isvalid = false;
    }
    else
    {
        ferror.textContent = "";
        ferror.style.display = 'none';
    }
}
function mn_checker()
{
    const val_mn = document.getElementById("mn").value;
    const merror = document.getElementById("merror");
    
     if (val_mn === "" || val_mn.includes(" ") || (!(isNaN(val_mn))))
    {
        val_mn === ""?(merror.textContent = "Cannot be Blank"):val_mn.includes(" ")?(merror.textContent = "Cannot include Spaces"):(merror.textContent = "Cannot include Number");
        merror.style.display = 'block';
        isvalid = false;
    }
    else
    {
        merror.textContent = "";
        merror.style.display = 'none';
    }
}
function ln_checker()
{
    const val_ln = document.getElementById("ln").value;
    const lerror = document.getElementById("lerror");
    
     if (val_ln === "" || val_ln.includes(" ") || (!(isNaN(val_ln))))
    {
        val_ln === ""?(lerror.textContent = "Cannot be Blank"):val_ln.includes(" ")?(lerror.textContent = "Cannot include Spaces"):(lerror.textContent = "Cannot include Number");
        lerror.style.display = 'block';
        isvalid = false;
    }
    else
    {
        lerror.textContent = "";
        lerror.style.display = 'none';
    }
}
function pn_checker()
{
    {
    const val_pn = document.getElementById("pn").value;
    const perror = document.getElementById("perror");
    
     if (val_pn === "" || val_pn.includes(" ") || (isNaN(val_pn)))
    {
        val_pn === ""?(perror.textContent = "Cannot be Blank"):val_pn.includes(" ")?(perror.textContent = "Cannot include Spaces"):(perror.textContent = "Can only be a Number");
        perror.style.display = 'block';
        isvalid = false;
    }
    else
    {
        perror.textContent = "";
        perror.style.display = 'none';
    }
}
}
function email_checker()
{
    const val_email = document.getElementById("email").value;
    const eerror = document.getElementById("eerror");
    
    const chkemail = /^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/;
    
    if(val_email === "" ||val_email.includes(" ")|| !(chkemail.test(val_email)))
    {
        val_email === ""?eerror.textContent = "Cannot be blank":(val_email.includes(" "))?eerror.textContent = "Cannot include spaces":eerror.textContent = "Please input a valid email";
        eerror.style.display = 'block';
        isvalid = false;
    }
    else
    {
        eerror.textContent = "";
        eerror.style.display = 'none';
    }
    
}
function gender_checker()
{
    const val_male = document.getElementById("m").checked;
    const val_female = document.getElementById("f").checked;
    const val_other = document.getElementById("o").checked;
    const gerror = document.getElementById("gerror");

    if (!val_male && !val_female && !val_other)
    {
        gerror.textContent = "Please choose a Gender";
        gerror.style.display = 'block';
        isvalid=false;
    } 
    else
    {
        gerror.textContent = "";
        gerror.style.display = 'none';
    }
}
function edu_checker()
{
    const val_edu = document.getElementById("edu").value;
    const eduerror = document.getElementById("eduerror");

    if (val_edu === "")
    {
        eduerror.textContent = "Select an Option";
        eduerror.style.display = 'block';
        isvalid=false;
    } 
    else
    {
        eduerror.textContent = "";
        eduerror.style.display = 'none';
    }
}
function lan_checker()
{
    const val_lan = document.getElementById("lan").value;
    const lanerror = document.getElementById("lanerror");

    if (val_lan === "")
    {
        lanerror.textContent = "Select an Option";
        lanerror.style.display = 'block';
        isvalid=false;
    } 
    else
    {
        lanerror.textContent = "";
        lanerror.style.display = 'none';
    }
}
function per_checker()
{
    const val_per = document.getElementById("per").value;
    const pererror = document.getElementById("pererror");

    if (val_per === "")
    {
        pererror.textContent = "Select an Option";
        pererror.style.display = 'block';
        isvalid=false;
    } 
    else
    {
        pererror.textContent = "";
        pererror.style.display = 'none';
    }
}
function py_checker()
{
    const val_py = document.getElementById("py").value;
    const pyerror = document.getElementById("pyerror");

    if (val_py === "")
    {
        pyerror.textContent = "Select an Option";
        pyerror.style.display = 'block';
        isvalid=false;
    } 
    else
    {
        pyerror.textContent = "";
        pyerror.style.display = 'none';
    }
}
function wing_checker()
{
    const val_wing = document.getElementById("flat").value;
    const wingerror = document.getElementById("wingerror");

    if (val_wing === "")
    {
        wingerror.textContent = "Cannot be Blank";
        wingerror.style.display = 'block';
        isvalid=false;
    } 
    else
    {
        wingerror.textContent = "";
        wingerror.style.display = 'none';
    }
}
function bldg_checker()
{
    const val_bldg = document.getElementById("bldg").value;
    const bldgerror = document.getElementById("bldgerror");

    if (val_bldg === "")
    {
        bldgerror.textContent = "Cannot be Blank";
        bldgerror.style.display = 'block';
        isvalid = false;
    } 
    else
    {
        bldgerror.textContent = "";
        bldgerror.style.display = 'none';
    }
}
function area_checker()
{
    const val_area = document.getElementById("area").value;
    const areaerror = document.getElementById("areaerror");

    if (val_area === "")
    {
        areaerror.textContent = "Cannot be Blank";
        areaerror.style.display = 'block';
        isvalid = false;
    } 
    else
    {
        areaerror.textContent = "";
        areaerror.style.display = 'none';
    }
}
function city_checker()
{
    const val_city = document.getElementById("city").value;
    const cityerror = document.getElementById("cityerror");

    if (val_city === "")
    {
        cityerror.textContent = "Cannot be Blank";
        cityerror.style.display = 'block';
        isvalid = false;
    } 
    else
    {
        cityerror.textContent = "";
        cityerror.style.display = 'none';
    }
}
function land_checker()
{
    const val_land = document.getElementById("land").value;
    const landerror = document.getElementById("landerror");

    if (val_land === "")
    {
        landerror.textContent = "Cannot be Blank";
        landerror.style.display = 'block';
        isvalid = false;
    } 
    else
    {
        landerror.textContent = "";
        landerror.style.display = 'none';
    }
}
function pincode_checker()
{
    const val_pin = document.getElementById("pin").value;
    const pinerror = document.getElementById("pinerror");

    if (val_pin === "" || val_pin.includes(" ") || (isNaN(val_pin)) || !(val_pin.length === 6))
    {
        val_pin === ""?(pinerror.textContent = "Cannot be Blank"):(val_pin.includes(" "))?( pinerror.textContent = "Cannot contain white space"):(isNaN(val_pin))?(pinerror.textContent = "Please Enter a Number"):(pinerror.textContent = "Number should be of 6 digits");
        pinerror.style.display = 'block';
        isvalid = false;
    } 
    else
    {
        pinerror.textContent = "";
        pinerror.style.display = 'none';
    }
}
function dob_checker()
{
    const val_dob = document.getElementById("dob").value;
    const doberror = document.getElementById("doberror");

    if (val_dob === "")
    {
        doberror.textContent = "Select an Option";
        doberror.style.display = 'block';
        isvalid = false;
    } 
    else
    {
        doberror.textContent = "";
        doberror.style.display = 'none';
    }
}
function bg_checker()
{
    const val_bg = document.getElementById("bg").value;
    const bgerror = document.getElementById("bgerror");

    if (val_bg === "")
    {
        bgerror.textContent = "Select an Option";
        bgerror.style.display = 'block';
        isvalid = false;
    } 
    else
    {
        bgerror.textContent = "";
        bgerror.style.display = 'none';
    }
}
function cou_checker()
{
    const val_cou = document.getElementById("cou").value;
    const couerror = document.getElementById("couerror");

    if (val_cou === "")
    {
        couerror.textContent = "Select an Option";
        couerror.style.display = 'block';
        isvalid = false;
    } 
    else
    {
        couerror.textContent = "";
        couerror.style.display = 'none';
    }
}
function state_checker()
{
    const val_state = document.getElementById("state").value;
    const stateerror = document.getElementById("stateerror");

    if (val_state === "")
    {
        stateerror.textContent = "Select an Option";
        stateerror.style.display = 'block';
        isvalid = false;
    } 
    else
    {
        stateerror.textContent = "";
        stateerror.style.display = 'none';
    }
}
function ref_checker()
{
    const val_ref = document.getElementById("ref").value;
    const referror = document.getElementById("referror");

    if (val_ref === "")
    {
        referror.textContent = "Cannot be Blank";
        referror.style.display = 'block';
        isvalid = false;
    } 
    else
    {
        referror.textContent = "";
        referror.style.display = 'none';
    }
}
function file_checker()
{
    const val_file = document.getElementById("photo").value;
    const fileerror = document.getElementById("photoerror");

    if (val_file === "")
    {
        fileerror.textContent = "Please choose a file";
        fileerror.style.display = 'block';
        isvalid = false;
    } 
    else
    {
        fileerror.textContent = "";
        fileerror.style.display = 'none';
    }
}
function all_checker() 
{
    fn_checker();
    mn_checker();
    ln_checker();
    pn_checker();
    email_checker();
    gender_checker();
    edu_checker();
    lan_checker();
    per_checker();
    py_checker();
    wing_checker();
    bldg_checker();
    area_checker();    
    city_checker();
    land_checker();
    pincode_checker();
    dob_checker();
    bg_checker();
    cou_checker();
    state_checker();
    ref_checker();
    file_checker();

    return isvalid;
}
