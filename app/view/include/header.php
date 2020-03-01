<header id="header">
    <a id="home" href="<?php echo URLROOT; ?>">
        Home
    </a>

    <a id="home" href="<?php echo URLROOT; ?>/pages/about">
        About
    </a>      

    <?php if(isset($_SESSION['userId'])) : ?>
        <a id="login" href="<?php echo URLROOT; ?>/users/profile" class="buttonStyle">
        Profile
        </a>

        <?php if($_SESSION['userType'] > 1) : ?>
            <a id="login" href="<?php echo URLROOT; ?>/pages/search" class="buttonStyle">
            Search
            </a>        
        <?php endif; ?>
        
        <a id="login" href="<?php echo URLROOT; ?>/users/logout" class="buttonStyle">
        Logout
        </a>    
            
    <?php else : ?>

        <a id="login" href="<?php echo URLROOT; ?>/users/login" class="buttonStyle">
        Login
        </a>

    <?php endif; ?>    

    <hr>

</header>