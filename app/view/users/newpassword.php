<?php require APPROOT . '/view/include/head.php'; ?>
<?php require APPROOT . '/view/include/header.php'; ?>

<section id="content">
    <h1 id="formHeader"><?php echo $data['title'] ?></h1>
    <?php   
        if($this->tokenHandler($data['token']) == "forgot"){
            $this->newPasswordFormFactory($data, $data['token']);
        } 
    ?>
    </section>

<?php require APPROOT . '/view/include/footer.php'; ?>