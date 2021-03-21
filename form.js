$(document).ready(function() {
    $("form").submit(function (event)
    {
        $(".form-group").removeClass("has-error");
        $(".help-block").remove();

        var formData = {
            firstname: $("#firstname").val(),
            lastname: $("#lastname").val(),
            phone: $("#phone").val(),
            message: $("#message").val(),
        };

        $.ajax({
            type:"POST",
            url: "sendform.php",
            data: formData,
            dataType: "json",
            encode: true,
        }).done(function( data ) {
            console.log(data);

            if(!data.success){
                if(data.errors.firstname){
                    $("#firstname-group").addClass('has-error');
                    $("#firstname-group").append(
                        '<div class="error-value">' + data.errors.firstname + '</div>'
                    );
                }

                if(data.errors.firstname){
                    $("#lastname-group").addClass('has-error');
                    $("#lastname-group").append(
                        '<div class="error-value">' + data.errors.lastname + '</div>'
                    );
                }

                if(data.errors.phone){
                    $("#phone-group").addClass('has-error');
                    $("#phone-group").append(
                        '<div class="error-value">' + data.errors.phone + '</div>'
                    );
                }

                if(data.errors.message){
                    $("#message-group").addClass('has-error');
                    $("#message-group").append(
                        '<div class="error-value">' + data.errors.message + '</div>'
                    );
                }

            } else {
                $("form").html(
                    '<div class="alert alert-success">' + data.message + '</div>'
                );
            }
        })
        .fail(function (data) {
            $("form").html(
                '<div class="alert alert-danger">Błąd, spróbuj ponownie później!</div>'
            );
        });

        event.preventDefault();
    });
});