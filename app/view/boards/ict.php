<?php require APPROOT . '/view/include/head.php'; ?>
        <title>
            /ict/ - Informatica
        </title>

        <style>            
            #navbar{
                border: double #39ff14;
            } 

            #main{
                border: double #39ff14;
            }                 

            #threadForm{
                border: double #39ff14;
            }

            .post{
                border: double #39ff14;
            }  

            .OP{
                border: double #39ff14;
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

                <form id="threadForm">
                    <span>Create thread</span> <br>  
                    <span class="formSpan">Subject</span>
                    <input type="text" name="subject"></input> <br>
                    <span class="formSpan">Comment</span>
                    <textarea type="text" name="post"  id="comment"></textarea> <br>
                    <input type="submit" value="post">
                </form>

                <div class="thread"> 
                    <div class="OP" class="post">
                        <span id="postId">postnummer<span>
                        <span id="postSubject">Subject<span>
                        <span id="posterName">Anonymous</span>
                        <span id="postDateTime">datetime</span>
                        <a id="viewThread" href="">View</a>
                        <br>
                        <p>Openingspost</p>
                    </div>
                
                    <div class="post">
                        <span id="postId">postnummer<span>
                        <span id="posterName">Anonymous</span>
                        <span id="postDateTime">datetime</span>
                        <br>
                        <p>Gekke post hierzo</p>
                    </div>

                    <div class="post">
                        <span id="postId">postnummer<span>
                        <span id="posterName">Anonymous</span>
                        <span id="postDateTime">datetime</span>
                        <br>
                        <p>Nog zo'n post hierzo</p>
                    </div>

                    <div class="post">
                        <span id="postId">postnummer<span>
                        <span id="posterName">Anonymous</span>
                        <span id="postDateTime">datetime</span>
                        <br>
                        <p>En nog een</p>
                    </div>
                </div>

                <div class="thread"> 
                    <div class="OP" class="post">
                        <span id="postId">postnummer<span>
                        <span id="postSubject">Subject<span>
                        <span id="posterName">Anonymous</span>
                        <span id="postDateTime">datetime</span>
                        <a id="viewThread" href="">View</a>
                        <br>
                        <p>Openingspost</p>
                    </div>
                
                    <div class="post">
                        <span id="postId">postnummer<span>
                        <span id="posterName">Anonymous</span>
                        <span id="postDateTime">datetime</span>
                        <br>
                        <p>Gekke post hierzo</p>
                    </div>

                    <div class="post">
                        <span id="postId">postnummer<span>
                        <span id="posterName">Anonymous</span>
                        <span id="postDateTime">datetime</span>
                        <br>
                        <p>Nog zo'n post hierzo</p>
                    </div>

                    <div class="post">
                        <span id="postId">postnummer<span>
                        <span id="posterName">Anonymous</span>
                        <span id="postDateTime">datetime</span>
                        <br>
                        <p>En nog een</p>
                    </div>
                </div>

                <div class="thread"> 
                    <div class="OP" class="post">
                        <span id="postId">postnummer<span>
                        <span id="postSubject">Subject<span>
                        <span id="posterName">Anonymous</span>
                        <span id="postDateTime">datetime</span>
                        <a id="viewThread" href="">View</a>
                        <br>
                        <p>Openingspost</p>
                    </div>

                    <div class="post">
                        <span id="postId">postnummer<span>
                        <span id="posterName">Anonymous</span>
                        <span id="postDateTime">datetime</span>
                        <br>
                        <p>Gekke post hierzo</p>
                    </div>

                    <div class="post">
                        <span id="postId">postnummer<span>
                        <span id="posterName">Anonymous</span>
                        <span id="postDateTime">datetime</span>
                        <br>
                        <p>Nog zo'n post hierzo</p>
                    </div>

                    <div class="post">
                        <span id="postId">postnummer<span>
                        <span id="posterName">Anonymous</span>
                        <span id="postDateTime">datetime</span>
                        <br>
                        <p>En nog een</p>
                    </div>
                </div>

                <div class="thread"> 
                    <div class="OP" class="post">
                        <span id="postId">postnummer<span>
                        <span id="postSubject">Subject<span>
                        <span id="posterName">Anonymous</span>
                        <span id="postDateTime">datetime</span>
                        <a id="viewThread" href="">View</a>
                        <br>
                        <p>Openingspost</p>
                    </div>

                    <div class="post">
                        <span id="postId">postnummer<span>
                        <span id="posterName">Anonymous</span>
                        <span id="postDateTime">datetime</span>
                        <br>
                        <p>Gekke post hierzo</p>
                    </div>

                    <div class="post">
                        <span id="postId">postnummer<span>
                        <span id="posterName">Anonymous</span>
                        <span id="postDateTime">datetime</span>
                        <br>
                        <p>Nog zo'n post hierzo</p>
                    </div>

                    <div class="post">
                        <span id="postId">postnummer<span>
                        <span id="posterName">Anonymous</span>
                        <span id="postDateTime">datetime</span>
                        <br>
                        <p>En nog een</p>
                    </div>
                </div>

                <div class="thread"> 
                    <div class="OP" class="post">
                        <span id="postId">postnummer<span>
                        <span id="postSubject">Subject<span>
                        <span id="posterName">Anonymous</span>
                        <span id="postDateTime">datetime</span>
                        <a id="viewThread" href="">View</a>
                        <br>
                        <p>Openingspost</p>
                    </div>

                    <div class="post">
                        <span id="postId">postnummer<span>
                        <span id="posterName">Anonymous</span>
                        <span id="postDateTime">datetime</span>
                        <br>
                        <p>Gekke post hierzo</p>
                    </div>

                    <div class="post">
                        <span id="postId">postnummer<span>
                        <span id="posterName">Anonymous</span>
                        <span id="postDateTime">datetime</span>
                        <br>
                        <p>Nog zo'n post hierzo</p>
                    </div>

                    <div class="post">
                        <span id="postId">postnummer<span>
                        <span id="posterName">Anonymous</span>
                        <span id="postDateTime">datetime</span>
                        <br>
                        <p>En nog een</p>
                    </div>
                </div>

                <div class="thread"> 
                    <div class="OP" class="post">
                        <span id="postId">postnummer<span>
                        <span id="postSubject">Subject<span>
                        <span id="posterName">Anonymous</span>
                        <span id="postDateTime">datetime</span>
                        <a id="viewThread" href="">View</a>
                        <br>
                        <p>Openingspost</p>
                    </div>

                    <div class="post">
                        <span id="postId">postnummer<span>
                        <span id="posterName">Anonymous</span>
                        <span id="postDateTime">datetime</span>
                        <br>
                        <p>Gekke post hierzo</p>
                    </div>

                    <div class="post">
                        <span id="postId">postnummer<span>
                        <span id="posterName">Anonymous</span>
                        <span id="postDateTime">datetime</span>
                        <br>
                        <p>Nog zo'n post hierzo</p>
                    </div>

                    <div class="post">
                        <span id="postId">postnummer<span>
                        <span id="posterName">Anonymous</span>
                        <span id="postDateTime">datetime</span>
                        <br>
                        <p>En nog een</p>
                    </div>
                </div>

                <div class="thread"> 
                    <div class="OP" class="post">
                        <span id="postId">postnummer<span>
                        <span id="postSubject">Subject<span>
                        <span id="posterName">Anonymous</span>
                        <span id="postDateTime">datetime</span>
                        <a id="viewThread" href="">View</a>
                        <br>
                        <p>Openingspost</p>
                    </div>

                    <div class="post">
                        <span id="postId">postnummer<span>
                        <span id="posterName">Anonymous</span>
                        <span id="postDateTime">datetime</span>
                        <br>
                        <p>Gekke post hierzo</p>
                    </div>

                    <div class="post">
                        <span id="postId">postnummer<span>
                        <span id="posterName">Anonymous</span>
                        <span id="postDateTime">datetime</span>
                        <br>
                        <p>Nog zo'n post hierzo</p>
                    </div>

                    <div class="post">
                        <span id="postId">postnummer<span>
                        <span id="posterName">Anonymous</span>
                        <span id="postDateTime">datetime</span>
                        <br>
                        <p>En nog een</p>
                    </div>
                </div>

            </section>
        </div>
    </body>
</html>