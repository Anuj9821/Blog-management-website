<header class="header">

    <a href="dashboard.php" class="logo"> Admin <span>Panel</span></a>
    <div class="profile">
        <?php
        $select_profile = $conn->prepare("SELECT * FROM `admin` WHERE =?");
        
        $select_profile->execute([$admin_id]);
        $fetch_profile = $select_profile->fetch(PDO::FETCH_ASSOC);
        ?>
    </div>
</header>