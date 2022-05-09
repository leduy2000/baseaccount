<?php
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
                <li>
                    <div>
                        <img class="avatar-panel" src="<?php echo $user['avatar'] ?>">
                    </div>
                </li>
                <li><a class="active" href="/baseaccount/account">
                        <div>
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-person-circle" viewBox="0 0 16 16">
                                <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z" />
                                <path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242
                                 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z" />
                            </svg>
                        </div>
                        Account
                    </a></li>
                <li><a href="">
                        <div> <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-people-fill" viewBox="0 0 16 16">
                                <path d="M7 14s-1 0-1-1 1-4 5-4 5 3 5 4-1 1-1 1H7zm4-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6z" />
                                <path fill-rule="evenodd" d="M5.216 14A2.238 2.238 0 0 1 5 13c0-1.355.68-2.75 
                                1.936-3.72A6.325 6.325 0 0 0 5 9c-4 0-5 3-5 4s1 1 1 1h4.216z" />
                                <path d="M4.5 8a2.5 2.5 0 1 0 0-5 2.5 2.5 0 0 0 0 5z" />
                            </svg> </div>
                        Members
                    </a></li>
                <li><a href="">
                        <div>
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-diagram-2" viewBox="0 0 16 16">
                                <path fill-rule="evenodd" d="M6 3.5A1.5 1.5 0 0 1 7.5 2h1A1.5 1.5 0 0 1 10 
                                3.5v1A1.5 1.5 0 0 1 8.5 6v1H11a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-1 0V8h-5v.5a.5.5 0 
                                0 1-1 0v-1A.5.5 0 0 1 5 7h2.5V6A1.5 1.5 0 0 1 6 4.5v-1zM8.5 5a.5.5 0 0 0 .5-.5v-1a.5.5 
                                0 0 0-.5-.5h-1a.5.5 0 0 0-.5.5v1a.5.5 0 0 0 .5.5h1zM3 11.5A1.5 1.5 0 0 1 4.5 10h1A1.5 
                                1.5 0 0 1 7 11.5v1A1.5 1.5 0 0 1 5.5 14h-1A1.5 1.5 0 0 1 3 12.5v-1zm1.5-.5a.5.5 0 0 
                                0-.5.5v1a.5.5 0 0 0 .5.5h1a.5.5 0 0 0 .5-.5v-1a.5.5 0 0 0-.5-.5h-1zm4.5.5a1.5 1.5 0 
                                0 1 1.5-1.5h1a1.5 1.5 0 0 1 1.5 1.5v1a1.5 1.5 0 0 1-1.5 1.5h-1A1.5 1.5 0 0 1 9 
                                12.5v-1zm1.5-.5a.5.5 0 0 0-.5.5v1a.5.5 0 0 0 .5.5h1a.5.5 0 0 0 .5-.5v-1a.5.5 0 0 0-.5-.5h-1z" />
                            </svg>
                        </div>
                        Groups
                    </a></li>
                <li><a href="">
                        <div>
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-triangle" viewBox="0 0 16 16">
                                <path d="M7.938 2.016A.13.13 0 0 1 8.002 2a.13.13 0 0 1 .063.016.146.146 0 0
                                 1 .054.057l6.857 11.667c.036.06.035.124.002.183a.163.163 0 0 1-.054.06.116.116 
                                 0 0 1-.066.017H1.146a.115.115 0 0 1-.066-.017.163.163 0 0 1-.054-.06.176.176 0 0 1 
                                 .002-.183L7.884 2.073a.147.147 0 0 1 .054-.057zm1.044-.45a1.13 1.13 0 0 0-1.96 0L.165
                                  13.233c-.457.778.091 1.767.98 1.767h13.713c.889 0 1.438-.99.98-1.767L8.982 1.566z" />
                            </svg>
                        </div>
                        Guests
                    </a></li>
                <li><a href="">
                        <div>
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-bookmark" viewBox="0 0 16 16">
                                <path d="M2 2a2 2 0 0 1 2-2h8a2 2 0 0 1 2 2v13.5a.5.5 0 0 1-.777.416L8 
                                13.101l-5.223 2.815A.5.5 0 0 1 2 15.5V2zm2-1a1 1 0 0 0-1 1v12.566l4.723-2.482a.5.5 
                                0 0 1 .554 0L13 14.566V2a1 1 0 0 0-1-1H4z" />
                            </svg>
                        </div>
                        Applications
                    </a></li>
                <li><a id="btn_logout">
                        <div>
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-power" viewBox="0 0 16 16">
                                <path d="M7.5 1v7h1V1h-1z" />
                                <path d="M3 8.812a4.999 4.999 0 0 1 2.578-4.375l-.485-.874A6 6 0 1 0 11 3.616l-.501.865A5 5 0 1 1 3 8.812z" />
                            </svg>
                        </div>
                        Logout
                    </a></li>
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
                    <li><button class="active">
                            <div><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-gear-fill" viewBox="0 0 16 16">
                                    <path d="M9.405 1.05c-.413-1.4-2.397-1.4-2.81 0l-.1.34a1.464 1.464 0 0 1-2.105.872l-.31-.17c-1.283-.698-2.686.705-1.987 1.987l.169.311c.446.82.023 1.841-.872 2.105l-.34.1c-1.4.413-1.4 2.397 0 2.81l.34.1a1.464 1.464 0 0 1 .872 2.105l-.17.31c-.698 1.283.705 2.686 1.987 1.987l.311-.169a1.464 1.464 0 0 1 2.105.872l.1.34c.413 1.4 2.397 1.4 2.81 0l.1-.34a1.464 1.464 0 0 1 2.105-.872l.31.17c1.283.698 2.686-.705 1.987-1.987l-.169-.311a1.464 1.464 0 0 1 .872-2.105l.34-.1c1.4-.413 1.4-2.397 0-2.81l-.34-.1a1.464 1.464 0 0 1-.872-2.105l.17-.31c.698-1.283-.705-2.686-1.987-1.987l-.311.169a1.464 1.464 0 0 1-2.105-.872l-.1-.34zM8 10.93a2.929 2.929 0 1 1 0-5.86 2.929 2.929 0 0 1 0 5.858z" />
                                </svg> Account overview </div>
                        </button></li>
                    <li><button id="btn_edit_account">
                            <div><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil" viewBox="0 0 16 16">
                                    <path d="M12.146.146a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1 0 .708l-10 10a.5.5 0 0 1-.168.11l-5 2a.5.5 0 0 1-.65-.65l2-5a.5.5 0 0 1 .11-.168l10-10zM11.207 2.5 13.5 4.793 14.793 3.5 12.5 1.207 11.207 2.5zm1.586 3L10.5 3.207 4 9.707V10h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.293l6.5-6.5zm-9.761 5.175-.106.106-1.528 3.821 3.821-1.528.106-.106A.5.5 0 0 1 5 12.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.468-.325z" />
                                </svg> Edit account</div>
                        </button></li>
                    <li><button>
                            <div><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-compass" viewBox="0 0 16 16">
                                    <path d="M8 16.016a7.5 7.5 0 0 0 1.962-14.74A1 1 0 0 0 9 0H7a1 1 0 0 0-.962 1.276A7.5 7.5 0 0 0 8 16.016zm6.5-7.5a6.5 6.5 0 1 1-13 0 6.5 6.5 0 0 1 13 0z" />
                                    <path d="m6.94 7.44 4.95-2.83-2.83 4.95-4.949 2.83 2.828-4.95z" />
                                </svg> Edit language</div>
                        </button></li>
                    <li><button id="btn_edit_password">
                            <div><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-exclamation-circle" viewBox="0 0 16 16">
                                    <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z" />
                                    <path d="M7.002 11a1 1 0 1 1 2 0 1 1 0 0 1-2 0zM7.1 4.995a.905.905 0 1 1 1.8 0l-.35 3.507a.552.552 0 0 1-1.1 0L7.1 4.995z" />
                                </svg> Edit password</div>
                        </button></li>
                    <li><button>
                            <div><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-palette-fill" viewBox="0 0 16 16">
                                    <path d="M12.433 10.07C14.133 10.585 16 11.15 16 8a8 8 0 1 0-8 8c1.996 0 1.826-1.504 1.649-3.08-.124-1.101-.252-2.237.351-2.92.465-.527 1.42-.237 2.433.07zM8 5a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3zm4.5 3a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3zM5 6.5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0zm.5 6.5a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3z" />
                                </svg> Edit theme color</div>
                        </button></li>
                    <li><button>
                            <div><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-clock" viewBox="0 0 16 16">
                                    <path d="M8 3.5a.5.5 0 0 0-1 0V9a.5.5 0 0 0 .252.434l3.5 2a.5.5 0 0 0 .496-.868L8 8.71V3.5z" />
                                    <path d="M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16zm7-8A7 7 0 1 1 1 8a7 7 0 0 1 14 0z" />
                                </svg> Set timesheet</div>
                        </button></li>
                    <li><button>
                            <div><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-shield-fill-plus" viewBox="0 0 16 16">
                                    <path fill-rule="evenodd" d="M8 0c-.69 0-1.843.265-2.928.56-1.11.3-2.229.655-2.887.87a1.54 1.54 0 0 0-1.044 1.262c-.596 4.477.787 7.795 2.465 9.99a11.777 11.777 0 0 0 2.517 2.453c.386.273.744.482 1.048.625.28.132.581.24.829.24s.548-.108.829-.24a7.159 7.159 0 0 0 1.048-.625 11.775 11.775 0 0 0 2.517-2.453c1.678-2.195 3.061-5.513 2.465-9.99a1.541 1.541 0 0 0-1.044-1.263 62.467 62.467 0 0 0-2.887-.87C9.843.266 8.69 0 8 0zm-.5 5a.5.5 0 0 1 1 0v1.5H10a.5.5 0 0 1 0 1H8.5V9a.5.5 0 0 1-1 0V7.5H6a.5.5 0 0 1 0-1h1.5V5z" />
                                </svg> 2-factor authentication</div>
                        </button></li>
                </ul>
            </div>
            <div class="title">APPLICATION & SECURITY</div>
            <div class="box">
            </div>
            <div class="title">ADVANCE SETTING</div>
            <div class="box">
                <ul>
                    <li><button>
                            <div><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-clock" viewBox="0 0 16 16">
                                    <path d="M8 3.5a.5.5 0 0 0-1 0V9a.5.5 0 0 0 .252.434l3.5 2a.5.5 0 0 0 .496-.868L8 8.71V3.5z" />
                                    <path d="M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16zm7-8A7 7 0 1 1 1 8a7 7 0 0 1 14 0z" />
                                </svg> Login histories</div>
                        </button></li>
                    <li><button>
                            <div><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-tv" viewBox="0 0 16 16">
                                    <path d="M2.5 13.5A.5.5 0 0 1 3 13h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zM13.991 3l.024.001a1.46 1.46 0 0 1 .538.143.757.757 0 0 1 .302.254c.067.1.145.277.145.602v5.991l-.001.024a1.464 1.464 0 0 1-.143.538.758.758 0 0 1-.254.302c-.1.067-.277.145-.602.145H2.009l-.024-.001a1.464 1.464 0 0 1-.538-.143.758.758 0 0 1-.302-.254C1.078 10.502 1 10.325 1 10V4.009l.001-.024a1.46 1.46 0 0 1 .143-.538.758.758 0 0 1 .254-.302C1.498 3.078 1.675 3 2 3h11.991zM14 2H2C0 2 0 4 0 4v6c0 2 2 2 2 2h12c2 0 2-2 2-2V4c0-2-2-2-2-2z" />
                                </svg> Manage linked devices</div>
                        </button></li>
                    <li><button>
                            <div><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-envelope-fill" viewBox="0 0 16 16">
                                    <path d="M.05 3.555A2 2 0 0 1 2 2h12a2 2 0 0 1 1.95 1.555L8 8.414.05 3.555ZM0 4.697v7.104l5.803-3.558L0 4.697ZM6.761 8.83l-6.57 4.027A2 2 0 0 0 2 14h12a2 2 0 0 0 1.808-1.144l-6.57-4.027L8 9.586l-1.239-.757Zm3.436-.586L16 11.801V4.697l-5.803 3.546Z" />
                                </svg> Edit email notification</div>
                        </button></li>
                    <li><button>
                            <div><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-clock" viewBox="0 0 16 16">
                                    <path d="M8 3.5a.5.5 0 0 0-1 0V9a.5.5 0 0 0 .252.434l3.5 2a.5.5 0 0 0 .496-.868L8 8.71V3.5z" />
                                    <path d="M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16zm7-8A7 7 0 1 1 1 8a7 7 0 0 1 14 0z" />
                                </svg> Edit timezone</div>
                        </button></li>
                    <li><button>
                            <div><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-share" viewBox="0 0 16 16">
                                    <path d="M13.5 1a1.5 1.5 0 1 0 0 3 1.5 1.5 0 0 0 0-3zM11 2.5a2.5 2.5 0 1 1 .603 1.628l-6.718 3.12a2.499 2.499 0 0 1 0 1.504l6.718 3.12a2.5 2.5 0 1 1-.488.876l-6.718-3.12a2.5 2.5 0 1 1 0-3.256l6.718-3.12A2.5 2.5 0 0 1 11 2.5zm-8.5 4a1.5 1.5 0 1 0 0 3 1.5 1.5 0 0 0 0-3zm11 5.5a1.5 1.5 0 1 0 0 3 1.5 1.5 0 0 0 0-3z" />
                                </svg> On-leave delegation</div>
                        </button></li>
                </ul>
            </div>
        </div>
    </div>

    <form enctype="multipart/form-data">
        <div id="edit_modal" class="modal location-edit">

            <div class="modal-content edit">

                <div class="modal-title"> EDIT PERSONAL PROFILE <span class="close">&times;</span> </div>

                <div class="modal-wrap">
                    <div class="modal-row">
                        <div class="modal-label"> Your first name </div>
                        <div class="modal-input"><input type="text" name="firstname" id="firstname" value="<?php echo $user['first_name'] ?>"></div>
                    </div>
                    <div class="modal-row">
                        <div class="modal-label"> Your last name </div>
                        <div><input type="text" name="lastname" id="lastname" value="<?php echo $user['last_name'] ?>"></div>
                    </div>
                    <div class="modal-row">
                        <div class="modal-label"> Email </div>
                        <div><input type="text" name="email" value="<?php echo $user['email'] ?>" disabled></div>
                    </div>
                    <div class="modal-row">
                        <div class="modal-label"> Username </div>
                        <div><input type="text" name="username" value="<?php echo '@' . $user['username'] ?>" disabled></div>
                    </div>
                    <div class="modal-row">
                        <div class="modal-label"> Job title </div>
                        <div><input type="text" name="position" id="position" value="<?php echo $user['position'] ?>"></div>
                    </div>
                    <div class="modal-row">
                        <div class="modal-label"> Profile image </div>
                        <div><input type="file" name="file_upload" id="file_upload"></div>
                    </div>
                    <div class="modal-row">
                        <div class="modal-label"> Date of birth </div>
                        <select name="date" id="date">
                            <option> --Select date--</option>
                            <?php
                            for ($date = 1; $date <= 31; $date++) {
                                echo "<option value=" . $date . ">" . $date . "</option>";
                            }
                            ?>
                        </select>
                        <select name="month" id="month">
                            <option> --Select month--</option>
                            <?php
                            for ($month = 1; $month <= 12; $month++) {
                                echo "<option value=" . $month . ">" . $month . "</option>";
                            }
                            ?>
                        </select>
                        <select name="year" id="year">
                            <option> --Select year--</option>
                            <?php
                            for ($year = 2010; $year >= 1930; $year--) {
                                echo "<option value=" . $year . ">" . $year . "</option>";
                            }
                            ?>
                        </select>
                    </div>
                    <div class="modal-row">
                        <div class="modal-label"> Your phone number </div>
                        <div><input type="text" name="phonenumber" id="phonenumber" value="<?php echo $user['phone_number'] ?>"></div>
                    </div>
                    <div class="modal-row">
                        <div class="modal-label"> Current address </div>
                        <div><textarea id="address" name="address" id="address" rows="2" cols="78%"><?php echo $user['address'] ?></textarea></div>
                    </div>
                    <div class="modal-row">
                        <button class="btn-left" type="button">Cancel</button>
                        <button class="btn-right" type="button" id="btn_update">Update</button>
                    </div>
                </div>
            </div>

        </div>
    </form>

    <form>
        <div id="password_modal" class="modal location-password">
            <div class="modal-content password">
                <div class="modal-title"> CHANGE PASSWORD <span class="close">&times;</span></div>
                <div class="modal-wrap">
                    <div class="modal-row">
                        <div class="modal-label"> Current password </div>
                        <div><input type="password" id="cur_password" placeholder="Current password"></div>
                    </div>
                    <div class="modal-row">
                        <div class="modal-label"> New password </div>
                        <div><input type="password" id="new_password" placeholder="New password"></div>
                    </div>
                    <div <div class="modal-row">
                        <div class="modal-label"> Retype new password </div>
                        <div><input type="password" id="rep_password" placeholder="Retype new password"></div>
                    </div>
                    <div class="modal-row">
                        <div class="modal-label"> Force logout </div>
                        <select name="force-logout" id="force_logout">
                            <option value="false">NO</option>
                            <option value="true">YES</option>
                        </select>
                    </div>
                    <div class="modal-row note"> Change your password may force you to logout of every mobile device </div>
                    <div class="modal-row">
                        <button class="btn-left" type="button">Cancel</button>
                        <button class="btn-right" type="button" id="btn_change_password">Update</button>
                    </div>
                </div>
            </div>
        </div>
    </form>
    

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script>
        $(function() {
            $("#btn_edit_account, #btn-edit").click(function() {
                $("#edit_modal").show();
            });

            $("#btn_edit_password").click(function() {
                $("#password_modal").show();
            });

            $(".close, .btn-left").click(function() {
                $("#edit_modal").hide();
                $("#password_modal").hide();
            });

            $("#btn_update").click(function() {
                var form_data = new FormData();
                form_data.append('firstname', $('#firstname').val());
                form_data.append('lastname', $('#lastname').val());
                form_data.append('position', $('#position').val());
                form_data.append('date', $('#date').val());
                form_data.append('month', $('#month').val());
                form_data.append('year', $('#year').val());
                form_data.append('file_upload', $('#file_upload')[0].files[0]);
                form_data.append('phonenumber', $('#phonenumber').val());
                form_data.append('address', $('#address').val());
                $.ajax({
                    url: "/baseaccount/account/user_update",
                    method: "POST",
                    data: form_data,
                    processData: false,
                    contentType: false,
                    success: function(data) {
                        location.reload();
                    },
                });
            });

            $("#btn_change_password").click(function() {
                var cur_password = $('#cur_password').val();
                var new_password = $('#new_password').val();
                var rep_password = $('#rep_password').val();
                var force_logout = $('#force_logout').val();
                alert(new_password);
                $.ajax({
                    url: "/baseaccount/account/user_change_password",
                    method: "POST",
                    data: {
                        new_password: new_password
                    },
                    success: function(data) {
                        if (force_logout == 'true') {
                            window.location = "/baseaccount/account/user_logout";
                        } else {
                            location.reload();
                        }
                    }
                });
            });

            $("#btn_logout").click(function() {
                alert('ALO');
            });
        });
    </script>

</body>

</html>