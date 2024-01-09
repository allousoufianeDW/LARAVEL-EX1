$('#registerUser').click(function(){

    var firstname= $('#firstname').val();
    var lastname= $('#lastname').val();
    var email= $('#email').val();
    var password= $('#password').val();
    var password_confirm= $('#password-confirm').val();
    var passwordLength=password.length;
    var agreeTerms= $('#agreeTerms');

    if(firstname != "" && /^[a-zA-Z ÀÁÂÃÄÅàáâãäåÒÓÔÕÖØòóôõöøÈÉÊËèéêëÇçÌÍÎÏìíîïÙÚÛÜùúûüÿÑñ]+$/ .test(firstname)){
        $('#firstname').removeClass('is-invalid');
        $('#firstname').addClass('is-valid');
        $('#error-register-firstname').text('');

        if(lastname != "" && /^[a-zA-Z ÀÁÂÃÄÅàáâãäåÒÓÔÕÖØòóôõöøÈÉÊËèéêëÇçÌÍÎÏìíîïÙÚÛÜùúûüÿÑñ]+$/ .test(lastname)){
        $('#lastname').removeClass('is-invalid');
        $('#lastname').addClass('is-valid');
        $('#error-register-lastname').text('');

        if(email != "" && /^[a-z0-9._-]+@[a-z0-9._-]+\.[a-z]{2,6}$/ .test(email)){
            $('#email').removeClass('is-invalid');
            $('#email').addClass('is-valid');
            $('#error-register-email').text('');

            if(passwordLength >=8){
            $('#password').removeClass('is-invalid');
            $('#password').addClass('is-valid');
            $('#error-register-password').text('');

                if(password==password_confirm){
                    $('#password-confirm').removeClass('is-invalid');
                    $('#password-confirm').addClass('is-valid');
                    $('#error-register-password-confirm').text('');

                        if(agreeTerms.is(':checked')){
                            $('#agreeTerms').removeClass('is-invalid');
                            $('#error-register-agreeTerms').text("");

                            var res = emailExistjs(email);


                            if (res != "exist") {
                                $('#form-register').submit() ;
                            } else {
                                $('#email').addClass('is-invalid');
                            $('#email').removeClass('is-valid');
                            $('#error-register-email').text("This email is already used !");

                            }





                        }else
                        {
                            $('#agreeTerms').addClass('is-invalid');
                            $('#error-register-agreeTerms').text("You Should agree to our terms !");
                        }

                }else{
                    $('#password-confirm').addClass('is-invalid');
                    $('#password-confirm').removeClass('is-valid');
                    $('#error-register-password-confirm').text("Your Password and Password Confermation are not the same !");

                }

            }else{
            $('#password').addClass('is-invalid');
            $('#password').removeClass('is-valid');
            $('#error-register-password').text("Your Password are small !");
            }

        }
        else{
        $('#email').addClass('is-invalid');
        $('#email').removeClass('is-valid');
        $('#error-register-email').text("Email Name is not valid !");
        }}
        else{
        $('#lastname').addClass('is-invalid');
        $('#lastname').removeClass('is-valid');
        $('#error-register-lastname').text("Last Name is not valid !");
    }}
    else{
        $('#firstname').addClass('is-invalid');
        $('#firstname').removeClass('is-valid');
        $('#error-register-firstname').text("First Name is not valid !");}
    });
$('#agreeTerms').change(function(){
    var agreeTerms= $('#agreeTerms');
    if(agreeTerms.is(':checked')){
        $('#agreeTerms').removeClass('is-invalid');
        $('#error-register-agreeTerms').text("");
    }else
    {
        $('#agreeTerms').addClass('is-invalid');
        $('#error-register-agreeTerms').text("You Should agree to our terms !");
    }

});


        function emailExistjs(email)
        {
            var url =$('#email').attr('url-emailExist');
            var token =$('#email').attr('token');
            var res= "";
            $.ajax({
                type:'POST',
                url:url,
                data:{
                    '_token':token,
                    email:email
                },
                success:function(result){
                    res=result.response;
                },
                async:false
            });
            return res;
        }


