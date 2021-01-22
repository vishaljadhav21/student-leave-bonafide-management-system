<?php
// Start the session

session_start();
require_once('config.php');


?>


<!DOCTYPE html>
<html lang="en">

<head>
    
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
   


    <title>Leave Application</title>

    
    <link href="vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">
    <link href="vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i" rel="stylesheet">

    <link href="vendor/select2/select2.min.css" rel="stylesheet" media="all">
    <link href="vendor/datepicker/daterangepicker.css" rel="stylesheet" media="all">

    <link href="css/main.css" rel="stylesheet" media="all">
</head>

<body>
    <div class="page-wrapper bg-gra-03 p-t-45 p-b-50">
        <div class="wrapper wrapper--w790">
            <div class="card card-5">
                <div class="card-heading">
                    <h2 class="title">principle login</h2>
                </div>
                <div class="card-body">
                    <form method="POST" action="">


                         <div class="form-row m-b-55">
                            <div class="name">Enter user-id</div>
                            <div class="value">
                                <div class="row row-refine">
                                    
                                    <div class="col-9">
                                        <div class="input-group-desc">
                                            <input class="input--style-5" type="text" name="userid" required="">
                                            <label class="label--desc"></label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                      
                         <div class="form-row m-b-55">
                            <div class="name">Enter Password</div>
                            <div class="value">
                                <div class="row row-refine">
                                    
                                    <div class="col-9">
                                        <div class="input-group-desc">
                                            <input class="input--style-5" type="password" name="password" required="">
                                            <label class="label--desc"></label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                          
                        <div>
                            <button class="btn btn--radius-2 btn--red" style="width: 245px"; type="submit" name="login" value="login">Login</button>
                            <button class="btn btn--radius-2 btn--red" style="width: 245px;" type="submit"> <a style="text-decoration: none;" href="first.php">Home</a></button>
                            
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Jquery JS-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <!-- Vendor JS-->
    <script src="vendor/select2/select2.min.js"></script>
    <script src="vendor/datepicker/moment.min.js"></script>
    <script src="vendor/datepicker/daterangepicker.js"></script>

    <!-- Main JS-->
    <script src="js/global.js"></script>

</body><!-- This templates was made by Colorlib (https://colorlib.com) -->

</html>
<!-- end document-->


<?php
            if(isset($_POST['login']))
            {
                @$userid=$_POST['userid'];
                @$password=$_POST['password'];
                $query = "select * from principal_login where userid='$userid' and password='$password' ";
                //echo $query;
                $query_run = mysqli_query($conn,$query);
                //echo mysql_num_rows($query_run);
                if($query_run)
                {
                    if(mysqli_num_rows($query_run)>0)
                    {
                    $row = mysqli_fetch_array($query_run,MYSQLI_ASSOC);
                    
                    $_SESSION['userid'] = $userid;
                    $_SESSION['password'] = $password;

                        // Set session variables
$_SESSION["key"] ="valid";

echo "<script type='text/javascript'>
    alert('Login Done')
</script>";
echo "<script type='text/javascript'>
    location.href='bonafide_request.php'
</script>";
                    
                    }
                    else
                    {
                        echo '<script type="text/javascript">alert("No such User exists. Invalid Credentials")</script>';
                    }
                }
                else
                {
                    echo '<script type="text/javascript">alert("Database Error")</script>';
                }
            }
            else
            {
            }
        ?>
