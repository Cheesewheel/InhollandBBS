<html>
    <head>
        <title>
            Test
        </title>

        <style>
            body{
                background-color: #1E1E1E;
                color: #34FF26;
            }

            a:link, a:visited, a:link:active, a:visited:active{
                color: green;               
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
                border: double green;
                padding: 1em;
                width: 150px;
                color: #34FF26;
                float: left;
                position: fixed;
            } 

            #main{
                border: double green;
                padding: 1em;
                left: 200px;
                width: calc(100% - 250px);
                position:relative;
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
            <nav id="navbar">
                <span>Boards</span>
                <br>
                <a href="">/ict/ - Informatica</a> <br>
                <a href="">/pabo/ - PABO</a> <br>
                <a href="">/trv/ - Tourism Management</a> <br>
                <a href="">/$/ - Business Studies</a> <br>
                <a href="">/muz/ - Muziekopleiding</a> <br>
                <a href="">/miro/ - MIRO</a> <br>
                <br>
                <span>Misc</span>
                <br>
                <a href="">/vg/ - Video Games</a> <br>
                <a href="">/new/ - Nieuws</a> <br>
                <br>
                <span>The Dark Zone</span>
                <br>
                <a href="">/x/ - Illegale Stickers</a> <br>
                <a href="">/net/ - Netwerk</a> <br>
                <a href="">/an/ - Antwoorden</a>
            </nav>

            <section id="main"> 
                
            </section>
        </div>
    </body>
</html>