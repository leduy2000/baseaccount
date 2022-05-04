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
                <div class="name"><?php echo $user['last_name'] . ' ' . $user['first_name'] ?></div>
                <div class="infor"><?php echo '@' . $user['username'] . ' · ' . $user['email'] ?></div>
            </div>
            <div class="title">ACCOUNT INFORMATION</div>
            <div class="box">
                <ul>
                    <li><a class="active">Account overview</a></li>
                    <li><button onclick="btn_edit_account_click()">Edit account</button></li>
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
    <div id="edit_modal" class="modal">

        <!-- Modal content -->
        <div class="modal-content">
            <span class="close">&times;</span>
            <div> EDIT PERSONAL PROFILE </div>
            <div> Your first name </div>
            <div><input type="text" name="firstname" value="<?php echo $user['first_name'] ?>"></div>
            <div> Your last name </div>
            <div><input type="text" name="lastname" value="<?php echo $user['last_name'] ?>"></div>
            <div> Email </div>
            <div><input type="text" name="email" value="<?php echo $user['email'] ?>" disabled></div>
            <div> Username </div>
            <div><input type="text" name="username" value="<?php echo '@' . $user['username'] ?>" disabled></div>
            <div> Job title </div>
            <div><input type="text" name="position" value="<?php echo $user['position'] ?>"></div>
            <div> Profile image </div>
            <div><input type="file" name="avatar"></div>
            <div> Date of birth </div>
            <select name="date" id="date">
                <?php
                for ($date = 1; $date <= 31; $date++) {
                    echo "<option value=" . $date . ">" . $date . "</option>";
                }
                ?>
            </select>
            <select name="month" id="month">
                <?php
                for ($month = 1; $month <= 12; $month++) {
                    echo "<option value=" . $month . ">" . $month . "</option>";
                }
                ?>
            </select>
            <select name="year" id="year">
                <?php
                for ($year = 1930; $year <= 2010; $year++) {
                    echo "<option value=" . $year . ">" . $year . "</option>";
                }
                ?>
            </select>
            <div> Your phone number </div>
            <div><input type="text" name="phonenumber" value=<?php echo $user['phone_number'] ?>></div>
            <div> Current address </div>
            <div><textarea id="address" name="address" rows="4" cols="50"><?php echo $user['address'] ?></textarea></div>
            <div><button onclick="btn_cancel_click()">Cancel</button></div>
            <div><button onclick="btn_update_click()">Update</button></div>
        </div>

    </div>

    <script>
        var edit_modal = document.getElementById("edit_modal");
        var span = document.getElementsByClassName("close")[0];
        span.onclick = function() {
            edit_modal.style.display = "none";
        }

        function btn_edit_account_click() {
            edit_modal.style.display = "block";
        }

        function btn_cancel_click() {
            edit_modal.style.display = "none";
        }
    </script>

</body>

</html>