<?php require APPROOT . '/view/include/head.php'; ?>
        <title>
            /ict/ - Informatica
        </title>

        <style>            
            #navbar{
                border: double goldenRod;
            } 

            #main{
                border: double goldenRod;
            }                 

            #threadForm{
                border: double goldenRod;
            }

            .post{
                border: double goldenRod;
            }  

            .OP{
                border: double goldenRod;
            }          
        </style>
    </head>

    <body>
        <?php require APPROOT . '/view/include/header.php'; ?>

        <div id="content">
            <?php require APPROOT . '/view/include/nav.php'; ?>

            <section id="main">

                <h1 id="boardTitle"><?php echo $data['title']; ?></h1>

                <br>

                <?php require APPROOT . '/view/include/threadForm.php'; ?>

                <?php 
                    echo $this->threadModel->displayThreads($data['threads']);                    
                ?>

            </section>
        </div>
<?php require APPROOT . '/view/include/footer.php'; ?>