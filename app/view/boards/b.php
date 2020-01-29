<?php require APPROOT . '/view/include/head.php'; ?>
        <title>
            /ict/ - Informatica
        </title>

        <style>            
            #navbar{
                border: double yellow;
            } 

            #main{
                border: double yellow;
            }                 

            #threadForm{
                border: double yellow;
            }

            .post{
                border: double yellow;
            }  

            .OP{
                border: double yellow;
            }          
        </style>
    </head>

    <body>
        <?php require APPROOT . '/view/include/header.php'; ?>
        <br>

        <div id="content">
            <?php require APPROOT . '/view/include/nav.php'; ?>

            <section id="main">

                <h1 id="boardTitle"><?php echo $data['title']; ?></h1>

                <br>

                <?php require APPROOT . '/view/include/threadForm.php'; ?>

                <?php 
                    echo $this->displayThreads($data['threads']);                    
                ?>

            </section>
        </div>
<?php require APPROOT . '/view/include/footer.php'; ?>