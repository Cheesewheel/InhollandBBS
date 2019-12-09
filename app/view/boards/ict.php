<?php require APPROOT . '/view/include/header.php'; ?>
        <title>
            /ict/ - Informatica
        </title>

        <style>
            body{
                background-color: #1E1E1E;
                color: #34FF26;
            }

            a:link, a:visited, a:link:active, a:visited:active{
                color: green;               
            }            

            #navbar{
                border: double green;
                color: #34FF26;
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
        <div id="header">
            <span id="title">Inholland BBS</span> <br>
            <span id="subTitle">By Koen Wijker 561487</span>
            <a id="login" href="..\users\login.php">Login</a>
        </div>
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