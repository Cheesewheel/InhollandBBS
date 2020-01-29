<?php require APPROOT . '/view/include/head.php'; ?>
<?php require APPROOT . '/view/include/header.php'; ?>

    <section id="content">
        <p class="profileHeader">Name</p>
        <p><?php echo $_SESSION['name'] . " " . $_SESSION['lastName']  ?></p>
        <p class="profileHeader">Student Number</p>
        <p><?php echo $_SESSION['studentNumber'] ?></p>
        <p class="profileHeader">Email</p>
        <p><?php echo $_SESSION['email'] ?></p>
    </section>

<?php require APPROOT . '/view/include/footer.php'; ?>