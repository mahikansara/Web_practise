$(document).ready(function (){
    const today = new Date();
            const eighteen = new Date(today.getFullYear() - 18, today.getMonth(), today.getDate()+1);
            const format = eighteen.toISOString().split('T')[0];
            document.getElementById('dt').setAttribute('max', format);
});
function testerror()
{
    let isvalid = true;
    const pattern = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
    const sym_pat = /^[a-zA-Z\\s]*$/;
    $("input").each(function (index, element) {
        const val_to_check = $(this).val();
        if (val_to_check === '')
        {
            const mess = 'Plese fill the input field';
            $(this).next().text(mess);
            $(this).next().css('display', 'block');
            $(this).next().focus();
            isvalid = false;
        } else {
            $(this).next().css('display', 'none');
        }

        if ($(this).attr('id') === 'fsn' || $(this).attr('id') === 'mdn' || $(this).attr('id') === 'lsn')
        {
            if (val_to_check.includes(" "))
            {
                const mess = 'Space is not allowed';
                $(this).next().text(mess);
                $(this).next().css('display', 'block');
                $(this).next().focus();
                isvalid = false;
            }

               else if (!(sym_pat.test(val_to_check)))
                {
                    const mess = 'Symbols not allowed';
                    $(this).next().text(mess);
                    $(this).next().css('display', 'block');
                    $(this).next().focus();
                    isvalid = false;
                }
        }

        if ($(this).attr('id') === 'em')
        {
            if (!(pattern.test(val_to_check)))
            {
                const mess = 'Invalid email input';
                $(this).next().text(mess);
                $(this).next().css('display', 'block');
                $(this).next().focus();
                isvalid = false;
            }
        }
        if ($(this).attr('id') === 'numb' || $(this).attr('id') === 'pin')
        {
            if (isNaN(val_to_check))
            {
                mess = 'Input is not number';
                $(this).next().text(mess);
                $(this).next().css('display', 'block');
                $(this).next().focus();
                isvalid = false;
            } else if ($(this).attr('id') === 'pin')
            {
                if (!(val_to_check.length === 6))
                {
                    const mess = 'Please enter 6 digit pin number';
                    $(this).next().text(mess);
                    $(this).next().css('display', 'block');
                    $(this).next().focus();
                    isvalid = false;
                }
            } else if ($(this).attr('id') === 'numb')
            {
                if (!(val_to_check.length === 10))
                {

                    const mess = 'Please enter 10 digit phone number';
                    $(this).next().text(mess);
                    $(this).next().css('display', 'block');
                    $(this).next().focus();
                    isvalid = false;
                }
            }
            else {
            $(this).next().css('display', 'none');
        }
        }
    });

    $("select").each(function (index, element) {
        const val_to_check = $(this).val();
        if (val_to_check === null || val_to_check === "")
        {
            const mess = 'Please select an option';
            $(this).next().text(mess);
            $(this).next().css('display', 'block');
            $(this).next().focus();
            isvalid = false;
        }else {
            $(this).next().css('display', 'none');
        }
    });

    if ($('input[name="opt"]:checked').length === 0) {
        const mess = 'Please select your gender';
        $('#generror').text(mess);
        $('#generror').css('display', 'block');
        $(this).next().focus();
        isvalid = false;
    } else {
        $('#generror').css('display', 'none');
    }
    return isvalid;
}






