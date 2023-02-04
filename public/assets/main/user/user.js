/*
*Script pour la verification de l'enregistrement des utilisateurs
*/

$('#register-user').click(function(){
    var nom= $('#nom').val();

    var email= $('#email').val();

    var password= $('#password').val();

    var confirmePassword= $('#confirmePassword').val();

    var agreeTerms= $('#agreeTerms');

    var passwordLength= password.length;

    if(nom != "" && /^[a-zA-Z ÀÁÂÃÄÅàáâãäåÒÓÔÕÖØòóôõöøÈÉÊËèéêëÇçÌÍÎÏìíîïÙÚÛÜùúûüÿÑñ]+$/.test(nom)){
        $('#nom').removeClass('is-invalid');
        $('#nom').addClass('is-valid');
        $('#error-register-nom').text("");

            if(email != "" && /^[a-z0-9._-]+@[a-z0-9._-]+\.[a-z]{2,6}$/.test(email)){
                $('#email').removeClass('is-invalid');
                $('#email').addClass('is-valid');
                $('#error-register-email').text("");

                if(passwordLength >= 8){
                    $('#password').removeClass('is-invalid');
                    $('#password').addClass('is-valid');
                    $('#error-register-password').text("");

                    if(password==confirmePassword){
                        $('#confirmePassword').removeClass('is-invalid');
                        $('#confirmePassword').addClass('is-valid');
                        $('#error-register-confirmePassword').text("");

                        if(agreeTerms.is(':checked')){
                            $('#agreeTerms').removeClass('is-invalid');
                            $('#error-register-agreeTerms').text("");

                            //envoie
                            //alert('data ok');

                            var res= emailExistjs(email);

                            (res != "exist") ? $('#form-register').submit()
                                :($('#email').addClass('is-invalid'),
                                $('#email').removeClass('is-valid'),
                                $('#error-register-email').text("Adresse Email existe déja!"));
                            /**
                             * Condition ternaire
                             *(condition) ? vraie : fausse;
                            */
                        }
                        else{
                            $('#agreeTerms').addClass('is-invalid');
                            $('#error-register-agreeTerms').text("Terme et Conditions d'utilisation non confirmer!");
                        }
                    }
                    else{
                        $('#confirmePassword').addClass('is-invalid');
                        $('#confirmePassword').removeClass('is-valid');
                        $('#error-register-confirmePassword').text("Mot de passe non identique!");
                    }
                }
                else{
                    $('#password').addClass('is-invalid');
                    $('#password').removeClass('is-valid');
                    $('#error-register-password').text("Mot de passe superieur ou egale à 8 caratere!");
                }
            }
            else{
                $('#email').addClass('is-invalid');
                $('#email').removeClass('is-valid');
                $('#error-register-email').text("Adresse Email invalide!");
            }

    }
    else{
        $('#nom').addClass('is-invalid');
        $('#nom').removeClass('is-valid');
        $('#error-register-nom').text("Nom invalide!");
    }
});

//Evenement pour l'input terme et condition
$('#agreeTerms').change(function(){
    var agreeTerms= $('#agreeTerms');
    if(agreeTerms.is(':checked')){
        $('#agreeTerms').removeClass('is-invalid');
        $('#error-register-agreeTerms').text("");
    }
    else{
        $('#agreeTerms').addClass('is-invalid');
        $('#error-register-agreeTerms').text("Vous devrez accepter les termes et conditions d'utilisation!");
    }
});

function emailExistjs(email){
    var url= $('#email').attr('url-emailExist ');
    var token= $('#email').attr('token');
    var res="";

    $.ajax({
        type: 'POST',
        url: url,
        data: {
            '_token': token,
            email: email
        },
        success:function(result){
            res= result.response;
        },
        async: false
    });
    return res;
}
