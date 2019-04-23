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

            div.absolute
            {
                position: absolute;
                font-size: 25px;
                top: 500px;
                right: 1;
                width: 900px;
                left: 100px;
            }

            /* unvisited link */
            a:link 
            {
                color: black;
                position: absolute;
                font-size: 20px;
                top: 570px;
                right: 1;
                left: 245px;
                width: 300px;
            }

            /* mouse over link */
            a:hover 
            {
                color: hotpink;
            }

            /* selected link */
            a:active 
            {
                color: blue;
            }

        </style>

    </head>

    <body>

        <h2 class = "center">

            SELECT AND VIEW ONE USER

        </h2>

        <form action="Select_And_View_One_User.php" method="POST">

            Serial No.      : <input type="integer" name="no"><br>
            Name            : <input type="text" name="user"><br>
            Email ID        : <input type="text" name="email"><br>
            Current Credit  : <input type="integer" name="credits"><br>
            <input type="reset" value="Reset All"> 
            <input type="submit" value="submit" >       

        </form>   

        <table style="width:100%" >

            <tr>
                <th>Serial No</th>
                <th>Name</th>
                <th>Email Id</th>
                <th>Current credit</th>
            </tr>

            <?php

                if(isset($_POST['user']) && isset($_POST['no']) && isset($_POST['email']) && isset($_POST['credits'])) 
                {
                

                    $serial = $_POST['no']; 
                    $name = $_POST['user']; 
                    $email = $_POST['email'];
                    $credit = $_POST['credits'];
                }   

            ?>     
                    <br>
                    <tr>
                        <td><?php if(isset($_POST['user'])) { echo $serial; } ?></td>
                        <td><?php if(isset($_POST['no'])) {echo $name;} ?></td>
                        <td><?php if(isset($_POST['email'])) {echo $email;} ?></td>
                        <td><?php if(isset($_POST['credits'])) {echo $credit;} ?></td>
                    </tr>
                
                  <br>
        </table>

    </body>
    
</html>