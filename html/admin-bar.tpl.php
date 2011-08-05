<?php if(LOGGED_IN): ?>
    <div id="admin-bar">
        <div class="inner">
            Logged in as: <?php echo $_SESSION['ONEPAGECMS_ADMIN_ID']; ?> | 
            <a href="logout.php">Logout</a>
        </div>
    </div>
<?php endif; ?>