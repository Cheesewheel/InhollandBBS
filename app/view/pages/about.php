<?php require APPROOT . '/view/include/head.php'; ?>
<?php require APPROOT . '/view/include/header.php'; ?>

    <style>
            #mainmenu{
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
    
    <section id="mainmenu">
        <h1 id="header"><?php echo $data['title']; ?></h1>

        <p>
            Coole website
        </p>
    </section>
<?php require APPROOT . '/view/include/footer.php'; ?>

