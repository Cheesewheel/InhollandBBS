<?php require APPROOT . '/view/include/head.php'; ?>
<?php require APPROOT . '/view/include/header.php'; ?>

        <title>
            <?php echo SITENAME; ?>
        </title>

        <style>
            #content{
                border: double brown;
                width: 700px;
                margin: auto;
            }

            #logo{
                display: block;
                margin: auto;
            }

            #title{
                text-align: center;
            }

            .subTitle{
                text-align: center; 
            }

            #nav{
                text-align: center;
            }

            .category{
                font-weight: bold;
            }
        </style>
    </head>

    <body>
        <div id="content" >
            <h1 id="header"><?php echo $data['title']; ?></h1>
            <img id="logo" src= "<?php echo URLROOT ?>/img/inhollandbbs.jpg">

            <p class="subTitle">
                To the unofficial InHolland Haarlem BBS
                <br>
                Enjoy your stay!
            </p>

            <nav id="nav">
                <span class="category">Opleidingen</span>
                <br>
                <a href="<?php echo URLROOT ?>/boards/ict">/ict/ - Informatica</a> <br>
                <a href="<?php echo URLROOT ?>/boards/pabo">/pabo/ - PABO</a> <br>
                <a href="<?php echo URLROOT ?>/boards/trv">/trv/ - Tourism Management</a> <br>
                <a href="<?php echo URLROOT ?>/boards/biz">/biz/ - Business Studies</a> <br>
                <a href="<?php echo URLROOT ?>/boards/muz">/muz/ - Muziekopleiding</a> <br>
                <a href="<?php echo URLROOT ?>/boards/miro">/miro/ - Medical Imaging Radiation Oncology</a> <br>
                <br>
                <span class="category">Misc</span>
                <br>
                <a href="<?php echo URLROOT ?>/boards/b">/b/ - Bier</a> <br>
                <a href="<?php echo URLROOT ?>/boards/vg">/vg/ - Video Games</a> <br>
                <a href="<?php echo URLROOT ?>/boards/new">/new/ - Nieuws</a> <br>
                <br>
                <span class="category">The Dark Zone</span>
                <br>
                <a href="<?php echo URLROOT ?>/boards/x">/x/ - Toetsen & Antwoorden</a> <br>
                <a href="<?php echo URLROOT ?>/boards/net">/net/ - Netwerk</a> <br>
                <a href="<?php echo URLROOT ?>/boards/s">/s/ - Stickers</a>
            </nav>
        </div>

        <?php 
            uploadImage($files['image']);
        ?>
<?php require APPROOT . '/view/include/footer.php'; ?>

