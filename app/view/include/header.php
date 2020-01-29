<header id="header">
    <a id="home" href="<?php echo URLROOT; ?>">
        Home
    </a>

    <a id="home" href="<?php echo URLROOT; ?>">
        About
    </a>      

    <?php if(isset($_SESSION['userId'])) : ?>
        <a id="login" href="<?php echo URLROOT; ?>/users/logout" class="buttonStyle">
        Logout
        </a>

        <a id="login" href="<?php echo URLROOT; ?>/users/profile" class="buttonStyle">
        Profile
        </a>

            
        <?php else : ?>

        <a id="login" href="<?php echo URLROOT; ?>/users/login" class="buttonStyle">
        Login
        </a>

    <?php endif; ?>

</header>