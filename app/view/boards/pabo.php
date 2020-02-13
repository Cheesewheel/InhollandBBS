<?php require APPROOT . '/view/include/head.php'; ?>
        <title>
            /pabo/ - PABO
        </title>

        <style>
            #navbar{
                border: double #e75480;
            } 

            #main{
                border: double #e75480;
            }                 

            #threadForm{
                border: double #e75480;
            }

            .post{
                border: double #e75480;
            }  

            .OP{
                border: double #e75480;
            }              
        </style>
    </head>

    <body>
        <?php require APPROOT . '/view/include/header.php'; ?>

        <div id="content">
            <?php require APPROOT . '/view/include/nav.php'; ?>

            <section id="main">

                <h1 id="boardTitle"><?php echo $data['title'] ?></h1>

                <br>

                <?php require APPROOT . '/view/include/threadForm.php'; ?>

                <?php 
                    echo $this->displayThreads($data['threads']);                    
                ?>


            </section>
        </div>
<?php require APPROOT . '/view/include/footer.php'; ?>