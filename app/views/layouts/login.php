<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="/baseaccount/public/asset/css/login.css"/>
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
                <?php require_once "../app/views/".$data['page'].".php" ?>
            </div>
        </div>
        <div id="right-side">
            <img src="/baseaccount/public/asset/img/background.png" />
        </div>
    </div>
</body>

</html>