<?php require APPROOT . '/view/include/head.php'; ?>
        <title>
            Threadviewer
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

                <?php require APPROOT . '/view/include/replyForm.php'; ?>

                <a href=<?php echo $this->getBoardLink($data['thread']->getBoardId()) ?>>
                    [Back]
                </a>

                <hr>

                <?php 
                    echo $this->displayThread($data['thread']);
                    echo $this->displayReplies($data['replies']); 
                ?>

            </section>
        </div>
<?php require APPROOT . '/view/include/footer.php'; ?>