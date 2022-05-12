<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" >
    <meta http-equiv="X-UA-Compatible" content="IE=edge" >
    <meta name="viewport" content="width=device-width, initial-scale=1.0" >
    <link rel="stylesheet" href="/baseaccount/public/asset/css/login.css" >
    <link rel="stylesheet" href="/baseaccount/public/asset/css/common.css" >
    <link rel="shortcut icon" href="https://share-gcdn.basecdn.net/apps/account.png" type="image/x-icon">
    <title>Login - Base Account</title>
</head>

<body>
    <div class="container">
        <div id="left-side">
            <div class="wrap">
                <div class="center">
                    <a href="https://base.vn/">
                        <img src="/baseaccount/public/asset/img/logo.full.png">
                    </a>
                </div>
                <?php require_once "../app/views/" . $data['page'] . ".php" ?>
            </div>
        </div>
        <div id="right-side">
            <img src="/baseaccount/public/asset/img/background.png" />
        </div>
    </div>

    <div id="info_modal" class="modal location-confirm">
        <div class="modal-content info">
            <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/7/73/Flat_tick_icon.svg/2048px-Flat_tick_icon.svg.png" id="info_icon">
            <span class="span_text"></span>
            <div>
                <button class="btn_ok" type="button" id="btn_ok">OK</button>
            </div>
        </div>
    </div>


    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="/baseaccount/public/asset/js/common.js"> </script>
    <script src="/baseaccount/public/asset/js/login.js"> </script>
</body>

</html>