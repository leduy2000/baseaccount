$(function() {
    $("#btn_submit").click(function() {
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
                    success: function(response) {
                        if (response == 1) {
                            window.location = "/baseaccount/account";
                        } else {
                            alert("NOPE");
                        }
                    }
                })
            } else {
                alert("SAI PASS")
            }

        } else {
            alert("SAI MAIL")
        }

    })

    function validate_email(email) {
        var pattern = /^(([^<>()[\]\\.,;:\s@"]+(\.[^<>()[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/
        return email.match(pattern)
    }
    
})