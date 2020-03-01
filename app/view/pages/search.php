<?php require APPROOT . '/view/include/head.php'; ?>
<?php require APPROOT . '/view/include/header.php'; ?>

    <style>
            #mainmenu{
                border: double brown;
                width: 700px;
                margin: auto;
            }

            #logo{
                display: block;
                margin: auto;
            }

            #title{
                text-align: center;
            }

            .subTitle{
                text-align: center; 
            }

            #nav{
                text-align: center;
            }

            .category{
                font-weight: bold;
            }
        </style>
    </head>
    
    <section id="mainmenu">
        <h1 id="header"><?php echo $data['title']; ?></h1>
        
        <form id="searchForm" method="GET" enctype="multipart/form-data">
            <input id="searchInput" type="text" name="s"></input> <br>

            <input type="radio" id="name" name="searchColumn" value="name">
            <label>Name</label>

            <input type="radio" id="lastname" name="searchColumn" value="lastName">
            <label>Last Name</label>

            <input type="radio" id="studentNumber" name="searchColumn" value="studentNumber">
            <label>Student Number</label>

            <input type="radio" id="email" name="searchColumn" value="email">
            <label>Email</label>

            <input type="radio" id="Registration Date" name="searchColumn" value="registrationDate">
            <label>Registration Date</label>

            <div class="g-recaptcha" data-sitekey="6LfQ2dMUAAAAAHp7Cxfw07hYq-7j0RtTB6V9RYEg"></div>
            <span class="invalidFeedback"><?php echo $data['captchaError'] ?></span>
            
            <input type="submit" value="search">
        </form> 

        <?php 
            foreach($data['results'] as $result){
               echo '
                    <h3>Name</h3>
                    <p>' . $result->name . '</p>

                    <h3>Last Name</h3>
                    <p>' . $result->lastName . '</p>

                    <h3>Student Number</h3>
                    <p>' . $result->studentNumber . '</p>

                    <h3>Email</h3>
                    <p>' . $result->email . '</p>

                    <h3>Registration Date</h3>
                    <p>' . $result->registrationDate . '</p>

                    <hr>
               '; 
            }
        ?>

    </section>
<?php require APPROOT . '/view/include/footer.php'; ?>

