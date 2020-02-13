<?php require APPROOT . '/view/include/head.php'; ?>
        <title>
            /ict/ - Informatica
        </title>

        <style>
            body{
                background-color: black;
                color: green;
            }
        
            #navbar{
                border: double green;
                color: green;
            } 

            #main{
                border: double green;
                color: green;
            }                 

            #threadForm{
                border: double green;
                color: green;
            }

            .post{
                border: double green;
                color: green;
            }  

            .OP{
                border: double green;
                color: green;
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