<?php
require_once('../includes/classes/admin.php');

$admin = new Admin;

$adminProfile = $admin->getCurrentAdmin();
?>


<div class="user-panel mt-3 pb-3 mb-3 d-flex">
    <div class="image">
        <img src="dist/img/profile-img.jpg" class="img-circle elevation-2" alt="User Image" />
    </div>
    <div class="info">
        <a href="#" class="d-block">
            <?php echo $adminProfile['name']; ?>
        </a>
    </div>
</div>