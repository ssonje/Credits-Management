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

            TRANSFER WINDOW

        </h2>   

            <?php

            $DBhost = "localhost:3307";
            $DBuser = "root";
            $DBpass = "";
            $DBname = "user";


            // Create connection
            $conn = mysqli_connect($DBhost, $DBuser, $DBpass,$DBname);
            //$result = mysqli_query($conn,"UPDATE details SET Credits=Credits+'500' WHERE ID='1'");


            // Check connection
            //if (!$conn) 
            //{
            //    die("Connection failed: " . mysqli_connect_error());
            //}
            //echo "Connected successfully";

        ?>

         <form action="Select_And_View_One_User.php" method="POST">

            Enter Senders ID       : <input type="integer" name="id1"><br>
            Enter receiver ID           : <input type="integer" name="id2"><br>
            Enter how many credits you want transfer  : <input type="integer" name="credits"><br>
            <input type="reset" value="Reset All"> 
            <input type="submit" value="submit" >       

        </form>   

        <table style="width:100%" >

            <tr>
                <th>Senders ID</th>
                <th>receiver ID</th>
                <th>Credits Transfer</th>
            </tr>

            <?php

                if(isset($_POST['id1']) && isset($_POST['id2']) && isset($_POST['credits'])) 
                {
                

                    $id1 = $_POST['id1']; 
                    $id2 = $_POST['id2']; 
                    $credit = $_POST['credits'];

                    $result = mysqli_query($conn,"UPDATE details SET Credits=Credits+'$credit' WHERE ID='$id2'");
                    $result = mysqli_query($conn,"UPDATE details SET Credits=Credits-'$credit' WHERE ID='$id1'");


                }

            ?>     
                    <br>
                    <tr>
                        <td><?php if(isset($_POST['id1'])) { echo $id1; } ?></td>
                        <td><?php if(isset($_POST['id1'])) {echo $id2;} ?></td>
                        <td><?php if(isset($_POST['credits'])) {echo $credit;} ?></td>
                    </tr>
                
                  <br>

        </table>
           
        <br>  

        <div class = "absolute">
        
        To view all user go to the link mentioned below.

        </div>

        <p><b><a href="http://localhost/task2/View_All_User.php" target="_blank">VIEW ALL UERS</a></b></p>

    </body>
    
</html>