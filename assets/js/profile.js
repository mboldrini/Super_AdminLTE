$(function(){

    $("#form_profile").submit(function(){
        // console.log( $(this).serialize() );

        var erros = {};

        if( $("#user_name").val().length < 3 ){
            erros["user_name"] = "Invalid Username";
        }

        showErrors( erros );

        if( Object.size(erros) <= 0 ){
            $.ajax({
                type: "POST",
                url: BASE_URL + "profile/ajax_save_profile",
                dataType: "json",
                data: $(this).serialize(),
                beforeSend: function () {
                    clearErrors();
                   // $("#btn_save_course").siblings(".help-block").html(loadingImg("Verificando..."));
                },
                success: function (response) {
                    clearErrors();
                    console.log("SUCESSO");
                    if (response["status"]) {

                        swal("Success!", {
                            icon: "success",
                            timer: 1500
                        }).then((result) => {
                            window.location.href = BASE_URL +"dashboard";
                        });

                    } else {
                  //      showErrorsModal(response["error_list"])
                    }
                   // console.log( response );
                },
                error: function (data) {
                   console.log(data);
                   window.location.href = BASE_URL +"dashboard";
                }
            })

            return false;
        }

        return false;
    });

});

// document.querySelector('#from1').addEventListener('submit', function(e) {
// console
// });