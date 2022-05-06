<div class="main">
    <div class="apptitle">
        <div class="url">
            <div class="label">ACCOUNT</div>
            <div class="name-pos">
                <?php
                echo $user['last_name'] . ' ' . $user['first_name'] . ' · ' . $user['position'];
                ?>
            </div>
        </div>
        <div class="btn-edit" onclick="btn_edit_account_click()">Edit my account</div>
    </div>
    <div class="profile">
        <div class="profile-title"><?php echo $user['last_name'] . ' ' . $user['first_name'] ?></div>
        <div class="profile-subtitle"><?php echo $user['position'] ?></div>
        <div><b>Email address</b><?php echo $user['email'] ?></div>
        <div><b>Phone number</b><?php echo $user['phone_number'] ?></div>
    </div>

</div>