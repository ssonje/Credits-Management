<!DOCTYPE html>
<html>
    <head>
        <style>

            table, th, td 
            {	
                border: 1px solid black;
                border-collapse: collapse;
                background-color: #f1f1c1;
                text-align: center;
            }

            body
            {
                background-image: url(india.png);
                background-size: cover;
                background-repeat: no-repeat;
            }

            h2
            {
                color:black	;
                text-align: center;
                font-size: 50px;	
            }

            input[type=text]
            {
                width: 100%;
                border: 1px solid black;
            }

            input[type=submit], input[type=reset] 
            {
                color: black;
                border: 2px solid black;
                padding: 8px 16px;
                text-decoration: none;
                margin: 4px 2px;
                cursor: pointer;
            }

        </style>

    </head>

    <body>

        <h2 class = "center">

            SELECT THE USER TO TRANSFER CREDIT

        </h2>

        <form action="Transfer_Credits_To.php" method="GET">

            Serial No.      : <input type="text" name="no"><br>
            Name            : <input type="text" name="user"><br>
            Email ID        : <input type="text" name="email"><br>
            Current Credit  : <input type="text" name="credits"><br>
            How many Credits you want to transer from 1st user : <input type="text" name="credits_1"><br>
            <input type="reset" value="Reset All"> 
            <input type="submit" value="submit" >       

        </form>     

            <?php

                if(isset($_GET['user']) && isset($_GET['no']) && isset($_GET['email']) && isset($_GET['credits']) && isset($_GET['credits_1'])) 
                {
                

                    $serial2 = $_GET['no']; 
                    $name2 = $_GET['user']; 
                    $email2 = $_GET['email'];
                    $credit2 = $_GET['credits'];
                    $credits_1 = $_GET['credits_1'];
                    $credits_final = $credit2 + $credits_1;
                }   

            ?>     
                    <?php if(isset($_POST['user'])) { echo $serial2; } ?>
                    <?php if(isset($_POST['no'])) {echo $name2;} ?>
                    <?php if(isset($_POST['email'])) {echo $email2;} ?>
                    <?php if(isset($_POST['credits'])) {echo $credit2;} ?>
                    <?php if(isset($_POST['credits_1'])) {echo $credits_1;} ?>
                    <?php if(isset($_POST['credits_1'])){echo $credits_final;} ?>
                    
    </body>
    
</html>