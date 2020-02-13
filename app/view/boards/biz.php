<?php require APPROOT . '/view/include/head.php'; ?>
        <title>
            /biz/ - Bussiness Studies
        </title>

        <style>
            #navbar{
                border: double green;
            } 

            #main{
                border: double green;
            }                 

            #threadForm{
                border: double green;
            }

            .post{
                border: double green;
            }  

            .OP{
                border: double green;
            }        
        </style>
    </head>

    <body>
        <?php require APPROOT . '/view/include/header.php'; ?>

        <div id="content">
            <?php require APPROOT . '/view/include/nav.php'; ?>

            <section id="main">

                <h1 id="boardTitle">/biz/ - Bussiness Studies</h1>

                <br>

                <?php require APPROOT . '/view/include/threadForm.php'; ?>

                <?php 
                    echo $this->threadModel->displayThreads($data['threads']);                    
                ?>


            </section>
        </div>
<?php require APPROOT . '/view/include/footer.php'; ?>