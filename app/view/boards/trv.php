<?php require APPROOT . '/view/include/head.php'; ?>
        <title>
            /trv/ - Tourism Management
        </title>

        <style>
            #navbar{
                border: double blue;
            } 

            #main{
                border: double blue;
            }                 

            #threadForm{
                border: double blue;
            }

            .post{
                border: double blue;
            }  

            .OP{
                border: double blue;
            }          
        </style>
    </head>

    <body>
        <?php require APPROOT . '/view/include/header.php'; ?>

        <div id="content">
            <?php require APPROOT . '/view/include/nav.php'; ?>

            <section id="main">

                <h1 id="boardTitle">/trv/ - Tourism Management</h1>

                <br>

                <?php require APPROOT . '/view/include/threadForm.php'; ?>

                <?php 
                    echo $this->threadModel->displayThreads($data['threads']);                    
                ?>
            </section>
        </div>
<?php require APPROOT . '/view/include/footer.php'; ?>