<?php require APPROOT . '/view/include/head.php'; ?>
        <title>
            /miro/ - Medical Imaging Radiation Oncology	

        </title>

        <style>
            #navbar{
                border: double red;
            } 

            #main{
                border: double red;
            }                 

            #threadForm{
                border: double red;
            }

            .post{
                border: double red;
            }  

            .OP{
                border: double red;
            }         
        </style>
    </head>

    <body>
        <?php require APPROOT . '/view/include/header.php'; ?>

        <div id="content">
            <?php require APPROOT . '/view/include/nav.php'; ?>

            <section id="main">

                <h1 id="boardTitle">/miro/ - Medical Imaging Radiation Oncology </h1>

                <br>

                <?php require APPROOT . '/view/include/threadForm.php'; ?>

                <?php 
                    echo $this->displayThreads($data['threads']);                    
                ?>


            </section>
        </div>
<?php require APPROOT . '/view/include/footer.php'; ?>