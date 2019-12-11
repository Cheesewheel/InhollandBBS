<?php require APPROOT . '/view/include/head.php'; ?>

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
            <img id="logo" src='../PHP1/img/inhollandbbs.jpg'>

            <p class="subTitle">
                To the unofficial InHolland Haarlem BBS
                <br>
                Enjoy your stay!
            </p>

            <nav id="nav">
                <span class="category">Opleidingen</span>
                <br>
                <a href="boards/ict">/ict/ - Informatica</a> <br>
                <a href="boards/pabo">/pabo/ - PABO</a> <br>
                <a href="boards/trv">/trv/ - Tourism Management</a> <br>
                <a href="boards/biz">/biz/ - Business Studies</a> <br>
                <a href="boards/muz">/muz/ - Muziekopleiding</a> <br>
                <a href="boards/miro">/miro/ - Medical Imaging Radiation Oncology</a> <br>
                <br>
                <span class="category">Misc</span>
                <br>
                <a href="boards/b">/b/ - Bier</a> <br>
                <a href="boards/vg">/vg/ - Video Games</a> <br>
                <a href="boards/new">/new/ - Nieuws</a> <br>
                <br>
                <span class="category">The Dark Zone</span>
                <br>
                <a href="boards/x">/x/ - Toetsen & Antwoorden</a> <br>
                <a href="boards/net">/net/ - Netwerk</a> <br>
                <a href="boards/s">/s/ - Stickers</a>
            </nav>
        </div>


    </body>
<?php require APPROOT . '/view/include/footer.php'; ?>

