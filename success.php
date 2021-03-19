<?php
require('connection.php');
session_start();


    $user = trim($_POST['user']);
    $upass = trim($_POST['pass']);
    $h_pass = ($upass);
      //create some sql statement
      $sql = "SELECT * FROM `admin` WHERE `user` = '" .$user. "' AND `password` = '" . $h_pass . "' ";
      $result = $db->query($sql);

    
            if($result->num_rows > 0){
              //store the result to a array and passed to variable found_user
              $row = mysqli_fetch_array($result);
			   $_SESSION['MEMBER_ID'] = $row['id'];
              $_SESSION['fname'] = $row['fname'];
              $_SESSION['lname'] = $row['lname'];
              $_SESSION['position'] = $row['Position'];
			  
              if ($_SESSION['position']=='ADMIN') {
                # code...
            ?> <script type="text/javascript">
                  //then it will be redirected to index.php
                  window.location = "index.php"
            </script>
            <?php
             }else{
               ?> <script type="text/javascript">
                  //then it will be redirected to index.php
                  window.location = "homepage.php"
            </script>
            <?php
             }

            }else{
      //if theres no result
            ?> <script type="text/javascript">
              alert("Username or Password Not Registered! Contact Your administrator.");
              window.location = "login.php";
              </script>
            <?php
            }
          
$db->close();
?>