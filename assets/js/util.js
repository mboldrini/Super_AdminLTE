function clearErrors() {
    $(".has-error").removeClass("has-error");
    $(".help-block").html("");
}

function showErrors(error_list) {
    clearErrors();

    $.each(error_list, function (id, message) {
        //console.log( id );
        $("#"+ id).parent().addClass("has-error");
       // console.log( message );
        $("#"+id).siblings(".help-block").html(message);
    });

}

function validateEmail(email) {
    var re = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
    return re.test(String(email).toLowerCase());
}


// var erros = {};
// erros["user_name"] = "Usuario invalido";

// showErrors(erros);
