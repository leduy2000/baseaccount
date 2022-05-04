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
        <div><?php echo $user['last_name'] . ' ' . $user['first_name'] ?></div>
        <div><?php echo $user['position'] ?></div>
        <div><?php echo "Email address" . $user['email'] ?></div>
        <div><?php echo "Phone number" . $user['phone_number'] ?></div>
    </div>

</div>