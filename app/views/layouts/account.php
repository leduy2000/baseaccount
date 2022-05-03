<?php session_start();
$user = $data['users'][$_SESSION['user_id']];
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/baseaccount/public/asset/css/account.css" />
    <title>Account - True Platform</title>
</head>

<body>
    <div class="container">
        <div class="panel">
            <ul>
                <li><a class="active" href="/baseaccount/account">Account</a></li>
                <li><a href="">Members</a></li>
                <li><a href="">Groups</a></li>
                <li><a href="">Guests</a></li>
                <li><a href="">Applications</a></li>
                <li><a href="/baseaccount/account/user_logout">Logout</a></li>
            </ul>
        </div>
        <?php require_once "../app/views/" . $data['page'] . ".php"; ?>
        <div class="menu">
            <div>
                <div class="name"><?php echo $user['full_name'] ?></div>
                <div class="infor"><?php echo '@' . $user['username'] . ' · ' . $user['email'] ?></div>
            </div>
            <div class="title">ACCOUNT INFORMATION</div>
            <div class="box">
                <ul>
                    <li><a class="active">Account overview</a></li>
                    <li><button id="myBtn">Edit account</button></li>
                    <li><button>Edit language</button></li>
                    <li><button>Edit password</button></li>
                    <li><button>Edit theme color</button></li>
                    <li><button>Set timesheet</button></li>
                    <li><button>2-factor authentication</button></li>
                </ul>
            </div>
            <div class="title">APPLICATION & SECURITY</div>
            <div class="box">
            </div>
            <div class="title">ADVANCE SETTING</div>
            <div class="box">
                <ul>
                    <li><button>Login histories</button></li>
                    <li><button>Manage linked devices</button></li>
                    <li><button>Edit email notification</button></li>
                    <li><button>Edit timezone</button></li>
                    <li><button>On-leave delegation</button></li>
                </ul>
            </div>
        </div>
    </div>

    <!-- The Modal -->
    <div id="myModal" class="modal">

        <!-- Modal content -->
        <div class="modal-content">
            <span class="close">&times;</span>
            <p><?php echo $user['full_name']?></p>
        </div>

    </div>

    <script>
        // Get the modal
        var modal = document.getElementById("myModal");

        // Get the button that opens the modal
        var btn = document.getElementById("myBtn");

        // Get the <span> element that closes the modal
        var span = document.getElementsByClassName("close")[0];

        // When the user clicks the button, open the modal 
        btn.onclick = function() {
            modal.style.display = "block";
        }

        // When the user clicks on <span> (x), close the modal
        span.onclick = function() {
            modal.style.display = "none";
        }

        // When the user clicks anywhere outside of the modal, close it
        window.onclick = function(event) {
            if (event.target == modal) {
                modal.style.display = "none";
            }
        }
    </script>

</body>

</html>