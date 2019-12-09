<html>
    <head>
        <title>
            /miro/ - Medical Imaging Radiation Oncology	

        </title>

        <style>
            body{
                background-color: #E1C699;
                color: black;
                font-family: courier;
            }

            a:link, a:visited, a:link:active, a:visited:active{
                color: black;               
            }
            
            #header{
                text-align: center;
            }

            #title{
                width 100px;
                font-size: 1em;
            }


            #subTitle{
                font-size: 0.8em; 
            }

            #login{
                float: right;
            }

            #content{

            }

            #navbar{
                border: double red;
                padding: 1em;
                width: 150px;
                color: black;
                float: left;
                position: fixed;
            } 

            #main{
                border: double red;
                padding: 1em;
                left: 200px;
                width: calc(100% - 250px);
                position: relative;
            }    

            #boardTitle{
                width: 800px;
                margin:auto;
                text-align: center;
            }  

            #threadForm{
                width: 300px;
                margin: auto;
                margin-bottom: 1em;
                padding: 1em;
                border: double red;
            }

            #comment{
                height: 6em;
                width: 15em;
            }

            .thread{
                margin-bottom: 2em;
            }

            .post{
                border: double red;
                padding: 1em;
                margin: 0.5em;
                margin-left: 2em;
            }  

            .OP{
                margin-left: 0em;
                border: double red;
                padding: 1em;
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

                <h1 id="boardTitle">/miro/ - Medical Imaging Radiation Oncology </h1>

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