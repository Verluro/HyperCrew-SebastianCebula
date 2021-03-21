$(document).ready(function() {
    $("form").submit(function (event)
    {
        var formData = {
            firstname: $("#firstname").val(),
            lastname: $("#lastname").val(),
            email: $("#email").val(),
            message: $("#message").val(),
        };

        $.ajax({
            type:"POST",
            url: "../../sendform.php",
            data: formData,
            dataType: "json",
            encode: true,
        }).done(function( data ) {
            console.log(data);
        });

        event.preventDefault();
    })
})