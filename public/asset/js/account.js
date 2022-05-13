$(function () {
    $("#btn_edit_account, #btn-edit").click(function () {
        $("#edit_modal").show()
    })

    $("#btn_edit_password").click(function () {
        $("#password_modal").show()
    })

    $(".close, .btn-left, .no").click(function () {
        $("#edit_modal").hide()
        $("#password_modal").hide()
        $("#confirm_modal").hide()
    });

    $("#btn_update").click(function () {
        if (empty($('#firstname').val())) {
            error_popup()
            $(".span_text").text("FIRST_NAME_EMPTY")
            $("#info_modal").show()
        } else if (empty($('#lastname').val())) {
            error_popup()
            $(".span_text").text("LAST_NAME_EMPTY")
            $("#info_modal").show()
        } else {
            var form_data = new FormData()
            form_data.append('firstname', $('#firstname').val())
            form_data.append('lastname', $('#lastname').val())
            form_data.append('position', $('#position').val())
            form_data.append('date', $('#date').val())
            form_data.append('month', $('#month').val())
            form_data.append('year', $('#year').val())
            form_data.append('file_upload', $('#file_upload')[0].files[0])
            form_data.append('phonenumber', $('#phonenumber').val())
            form_data.append('address', $('#address').val())
            $.ajax({
                url: "/baseaccount/account/user_update",
                method: "POST",
                data: form_data,
                processData: false,
                contentType: false,
                success: function (data) {
                    popup_flag = true
                    $("#edit_modal").hide()
                    $(".span_text").text("Update profile successfully")
                    $("#info_icon").css({
                        "height": "35px",
                        "width": "35px",
                        "margin-left": "6%",
                        "margin-right": "6%",
                        "margin-top": "10%"
                    })
                    $("#info_modal").show()
                }
            })
        }

    })

    $("#btn_change_password").click(function () {
        var cur_password = $('#cur_password').val();
        var new_password = $('#new_password').val();
        var rep_password = $('#rep_password').val();
        var force_logout = $('#force_logout').val();
        if (new_password != rep_password) {
            error_popup()
            $(".span_text").text("PASSWORD.MISMATCH")
            $("#info_modal").show()
        } else if (!validate_password(new_password)) {
            error_popup()
            $(".span_text").text("INVALID.PASSWORD")
            $("#info_modal").show()
        } else {
            $.ajax({
                url: "/baseaccount/account/user_change_password",
                method: "POST",
                data: {
                    cur_password: cur_password,
                    new_password: new_password
                },
                success: function (response) {
                    if (response == 1) {
                        $("#password_modal").hide()
                        $("#info_icon").css({
                            "height": "35px",
                            "width": "35px",
                            "margin-left": "6%",
                            "margin-right": "6%",
                            "margin-top": "5%"
                        })
                        popup_flag = true
                        $(".span_text").text("Password was updated successfully")
                        $("#info_icon").attr("src", "https://upload.wikimedia.org/wikipedia/commons/thumb/7/73/Flat_tick_icon.svg/2048px-Flat_tick_icon.svg.png")
                        $("#info_modal").show()
                        if (force_logout == 'true') {
                            window.location = "/baseaccount/account/user_logout"
                        } else {
                            location.reload()
                        }
                    } else {
                        error_popup()
                        $(".span_text").text("WRONG OLD PASSWORD")
                        $("#info_modal").show()
                    }
                }
            })
        }

    })

    $("#btn_logout").click(function () {
        $("#ex_icon").css({
            "height": "35px",
            "width": "35px",
            "margin-left": "4%",
            "margin-right": "4%",
            "margin-top": "10%"
        })
        $("#confirm_modal").show()
    })

    $("#btn_quit").click(function () {
        window.location = "/baseaccount/account/user_logout";
    })

    $("#avatar_main").click(function () {
        $('#img_upload').trigger('click')
    })

    $('#img_upload').change(function () {
        var form_data = new FormData()
        form_data.append('file_upload', $('#img_upload')[0].files[0])
        $.ajax({
            url: "/baseaccount/account/user_change_avatar",
            method: "POST",
            data: form_data,
            processData: false,
            contentType: false,
            success: function (data) {
                location.reload();
            }
        })
    })
})