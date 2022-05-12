$(function () {
    $("#btn_submit").click(function () {
        var email = $('#email').val();
        var password = $('#password').val()
        if (validate_email(email)) {
            if (validate_password(password)) {
                $.ajax({
                    url: "/baseaccount/login/user_login",
                    method: "POST",
                    data: {
                        email: email,
                        password: password
                    },
                    success: function (response) {
                        if (response == 1) {
                            window.location = "/baseaccount/account";
                        } else {
                            error_popup()
                            $(".span_text").text("Email and password doesn't match.")
                            $("#info_modal").show()
                        }
                    }
                })
            } else {
                error_popup()
                $(".span_text").text("Invalid password. Please try again.")
                $("#info_modal").show()
            }

        } else {
            error_popup()
            $(".span_text").text("Invalid or empty email. Please try again.")
            $("#info_modal").show()
        }

    })

    

    function validate_email(email) {
        var pattern = /^(([^<>()[\]\\.,;:\s@"]+(\.[^<>()[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/
        return email.match(pattern)
    }

})