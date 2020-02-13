<?php require APPROOT . '/view/include/head.php'; ?>
<?php require APPROOT . '/view/include/header.php'; ?>

    <div id="content">
        <div class="userInfo">
            <p class="profileHeader">Name</p>
            <p><?php echo $_SESSION['name'] . " " . $_SESSION['lastName']  ?></p>
            <p class="profileHeader">Student Number</p>
            <p><?php echo $_SESSION['studentNumber'] ?></p>
            <p class="profileHeader">Email</p>
            <p><?php echo $_SESSION['email'] ?></p>
            <p class="profileHeader">User Type</p>
            <?php
                switch($_SESSION['userType']){
                    case 1:
                        echo "Regular user";
                    break;
    
                    case 2:
                        echo "Admin";
                    break;
                    
                    case 3:
                        echo "Superadmin";
                    break;
                    
                    default:
                        echo "Regular user";
                    break;
                }
            ?>
        <div>

        <!-- Threads posted by the user -->
        <?php 
            //echo $this->displayThreads($data['threads']);                    
        ?>
    </div>

<?php require APPROOT . '/view/include/footer.php'; ?>