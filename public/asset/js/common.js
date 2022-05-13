var popup_flag = false

function validate_password(password) {
    return password.length >= 6
}

function empty(str) {
    return !str.length
}

function error_popup() {
    popup_flag = false
    $("#info_icon").css({
        "height": "35px",
        "width": "35px",
        "margin-left": "6%",
        "margin-right": "6%",
        "margin-top": "10%"
    })
    $("#btn_ok").css({"color":"#c65144"})
    $("#info_icon").attr("src", "https://cdn-icons-png.flaticon.com/512/71/71768.png")
}

$("#btn_ok").click(function () {
    $("#info_modal").hide()
    if (popup_flag)
        location.reload()
})