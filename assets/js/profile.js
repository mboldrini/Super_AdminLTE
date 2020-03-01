$(function(){

    $("#form_profile").submit(function(){
        // console.log( $(this).serialize() );

        var erros = {};

        if( $("#user_name").val().length < 3 ){
            erros["user_name"] = "Invalid Username";
        }

       if( !validateEmail( $("#user_email").val() ) ){
           erros["user_email"] = "Invalid Email";
       }
        

        showErrors( erros );

        return false;
    });

});
