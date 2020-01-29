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
        <br>

        <div id="content">
            <?php require APPROOT . '/view/include/nav.php'; ?>

            <section id="main">

                <h1 id="boardTitle">/trv/ - Tourism Management</h1>

                <br>

                <?php require APPROOT . '/view/include/threadForm.php'; ?>

                <?php 
                    //var_dump($data['threads']);
                    foreach($data['threads'] as $thread){
                        echo '
                        <div class="thread"> 
                            <div class="OP" class="post">
                                <img class="image" alt="image" src="'.URLROOT.'/img/threads/'.$thread->getImgUrl().'"></img>
                                <span class="opHeader" class="postId">' . $thread->getThreadId() .'<span>
                                <span class="opHeader" class="postSubject">' . $thread->getSubject() . '<span>
                                <span class="opHeader" class="posterName">' . $thread->getStudentNumber() . '</span>
                                <span class="opHeader" class="postDateTime">' . $thread->getTimeCreated() . '</span>
                                <a class="opHeader" class="viewThread" href="">View</a>
                                <br>
                                <p>' . $thread->getComment() . '</p>
                            </div>
                        </div>
                        ';
                    }
                ?>
            </section>
        </div>
<?php require APPROOT . '/view/include/footer.php'; ?>