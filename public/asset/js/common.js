function validate_password(password) {
    return password.length >= 6
}

function error_popup() {
    $("#info_icon").css({
        "height": "35px",
        "width": "35px",
        "margin-left": "6%",
        "margin-right": "6%",
        "margin-top": "10%"
    })
    $("#btn_ok").css({"color":"#c65144"})
    $("#info_icon").attr("src", "http://cdn.onlinewebfonts.com/svg/img_28550.png")
}

$("#btn_ok").click(function () {
    $("#info_modal").hide()
})