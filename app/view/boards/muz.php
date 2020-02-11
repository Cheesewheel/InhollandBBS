<?php require APPROOT . '/view/include/head.php'; ?>
        <title>
            /muz/ - Muziekopleiding
        </title>

        <style>
            #navbar{
                border: double purple;
            } 

            #main{
                border: double purple;
            }                 

            #threadForm{
                border: double purple;
            }

            .post{
                border: double purple;
            }  

            .OP{
                border: double purple;
            }          
        </style>
    </head>

    <body>
        <?php require APPROOT . '/view/include/header.php'; ?>

        <div id="content">
            <?php require APPROOT . '/view/include/nav.php'; ?>

            <section id="main">

                <h1 id="boardTitle">/muz/ - Muziekopleiding</h1>

                <br>

                <?php require APPROOT . '/view/include/threadForm.php'; ?>

                <?php 
                    echo $this->displayThreads($data['threads']);                    
                ?>


            </section>
        </div>
<?php require APPROOT . '/view/include/footer.php'; ?>