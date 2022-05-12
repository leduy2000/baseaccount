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
        <div id="btn-edit">Edit my account</div>
    </div>
    <div class="profile">
        <div><img class="avatar-main" id="avatar_main" src="<?php echo $user['avatar'] ?>"></div>
        <div>
            <div class="profile-title"><?php echo $user['last_name'] . ' ' . $user['first_name'] ?></div>
            <div class="profile-subtitle"><?php echo $user['position'] ?></div>
            <div><b>Email address</b><?php echo $user['email'] ?></div>
            <div><b>Phone number</b><?php echo $user['phone_number'] ?></div>
        </div>
        <div class="list">
            <div class="title">
                Contact info
            </div>
            <div class="contact-info"><b>Address</b> <span class="v">Hanoi</span></div>
        </div>
        <div class="list">
            <div class="title">
                User groups <em>(0)</em>
            </div>
        </div>
        <div class="list" id="js-dreports">
            <div class="title">
                Direct reports <em class="js-count">(0)</em>
            </div>
            <div class="js-items"></div>
        </div>
        <div class="list">
            <div class="title">
                Education background
                <div class="add" onclick="Profile.cv.add('education');">
                    <span class="-ap icon-plus-circle"></span>
                </div>
            </div>
            <div class="item-none">No information.</div>
        </div>
        <div class="list">
            <div class="title">
                Work experiences
                <div class="add" onclick="Profile.cv.add('work');">
                    <span class="-ap icon-plus-circle"></span>
                </div>
            </div>
            <div class="item-none">No information.</div>
        </div>
        <div class="list">
            <div class="title">
                Honors and Awards
                <div class="add" onclick="Profile.cv.add('award');">
                    <span class="-ap icon-plus-circle"></span>
                </div>
            </div>
            <div class="item-none">No information.</div>
        </div>
    </div>

</div>