<?php require APPROOT . '/view/include/head.php'; ?>
        <title>
            /ict/ - Informatica
        </title>

        <style>            
            #navbar{
                border: double brown;
            } 

            #main{
                border: double brown;
            }                 

            #threadForm{
                border: double brown;
            }

            .post{
                border: double brown;
            }  

            .OP{
                border: double brown;
            }          
        </style>
    </head>

    <body>
        <?php require APPROOT . '/view/include/header.php'; ?>
        <br>

        

        <div id="content">
            <?php require APPROOT . '/view/include/nav.php'; ?>

            <section id="main">
                <?php
                    ini_set('display_errors', 1);
                    ini_set('display_startup_errors', 1);
                    error_reporting(E_ALL); 
                ?>
                
                <h1 id="boardTitle"><?php echo $data['title']; ?></h1>

                <br>

                <?php require APPROOT . '/view/include/threadForm.php'; ?>

                <?php 
                    echo $this->displayThreads($data['threads']);                    
                ?>

            </section>
        </div>
<?php require APPROOT . '/view/include/footer.php'; ?>