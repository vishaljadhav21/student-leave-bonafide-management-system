<?php
session_start();
if (!isset($_SESSION['key'])) {
    echo "<script type='text/javascript'>
    alert('Need Login First')
  </script>";
    echo "<script type='text/javascript'>
    location.href='studentlogin.php'
  </script>";
}
?>



<!DOCTYPE html>
<html>
<title>Leave application</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Inconsolata">
<link href="vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">
<link href="vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i" rel="stylesheet">
<link href="vendor/select2/select2.min.css" rel="stylesheet" media="all">
<link href="vendor/datepicker/daterangepicker.css" rel="stylesheet" media="all">
<link href="css/main.css" rel="stylesheet" media="all">
<style>
    body,
    html {
        height: 100%;
        font-family: "Inconsolata", sans-serif;
    }

    .bgimg {
        opacity: 0.5;
        filter: alpha(opacity=50);
        background-position: center;
        background-size: cover;
        background-image: url("desktop.jpg");
        height: 98%;
        width: 100%;
    }

    .menu {
        display: none;
    }

    .table1 {
        opacity: 1;
    }


    .dropbtn {

        color: white;
        padding: 16px;
        font-size: 16px;
        border: none;
    }

    .dropdown {
        position: relative;
        display: inline-block;
    }

    .dropdown-content {
        display: none;
        position: absolute;
        background-color: white;
        min-width: 160px;
        box-shadow: 0px 8px 10px 0px rgba(0, 0, 0, 0.2);
        z-index: 1;
    }

    .dropdown-content a {
        color: black;
        padding: 12px 16px;
        text-decoration: none;
        display: block;
    }

    .dropdown-content a:hover {
        background-color: #ddd;
    }

    .dropdown:hover .dropdown-content {
        display: block;
    }

    .dropdown:hover .dropbtn {
        background-color: black;
    }
</style>

<body>

    <!-- Links (sit on top) -->
    <div class="w3-top">
        <div class="w3-row w3-padding w3-black">
            <div class="w3-col s3">

                <div class="dropdown">
                    <button class="dropbtn">Leave Permission</button>
                    <div class="dropdown-content">
                        <a href="leaveform.php">Apply </a>
                        <a href="leave_status.php">View</a>

                    </div>
                </div>

            </div>
            <div class="w3-col s3">
                <div class="dropdown">
                    <button class="dropbtn">Bonafide Permission</button>
                    <div class="dropdown-content">
                        <a href="bonafideform.php">Apply </a>
                        <a href="bonafide_status.php">View</a>

                    </div>
                </div>
            </div>
            <div class="w3-col s3">
                <div class="dropdown">
                    <button class="dropbtn">Night Out Permission</button>
                    <div class="dropdown-content">
                        <a href="nightoutform.php">Apply </a>
                        <a href="nightout_status.php">View</a>

                    </div>
                </div>
            </div>
            <div class="w3-col s3">
                <a href="studentlogout.php" class="w3-button w3-block w3-black">LOGOUT</a>
            </div>
        </div>
    </div>

    
    <?php
    $prn = $_SESSION['prn'];

    include "config.php";


    $sql = "SELECT * from register where prn='$prn'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
    ?>




            <div class="page-wrapper bg-gra-03 p-t-45 p-b-50">
                <div class="wrapper wrapper--w790">
                    <div class="card card-5">
                        <div class="card-heading">
                            <br>
                            <h2 class="title">Your Profile</h2>
                        </div>
                        <div class="card-body">
                            <form method="POST">
                                <div class="form-row m-b-55">
                                    <div class="name">Name</div>
                                    <div class="value">
                                        <div class="row row-space">
                                            <div class="col-2">
                                                <div class="input-group-desc">
                                                    <input class="input--style-5" type="text" name="firstname" value="<?php echo $row['firstname'] ?> " readonly="">

                                                    <label class="label--desc">first name</label>
                                                </div>
                                            </div>
                                            <div class="col-2">
                                                <div class="input-group-desc">
                                                    <input class="input--style-5" type="text" name="lastname" value="<?php echo $row['lastname'] ?>" readonly="">
                                                    <label class="label--desc">last name</label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-row m-b-55">
                                    <div class="name">Date of birth</div>
                                    <div class="value">
                                        <div class="row row-refine">

                                            <div class="col-9">
                                                <div class="input-group-desc">
                                                    <input class="input--style-5" style="width: 496px" ; type="Date" name="dob" value="<?php echo $row['dob'] ?>" readonly="">
                                                    <label class="label--desc"></label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>


                                <div class="form-row m-b-55">
                                    <div class="name">Branch</div>
                                    <div class="value">
                                        <div class="row row-refine">

                                            <div class="col-9">
                                                <div class="input-group-desc">
                                                    <input class="input--style-5" style="width: 496px" ; type="text" value="<?php echo $row['branch'] ?> " name="branch" readonly="">
                                                    <label class="label--desc"></label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>


                                <div class="form-row m-b-55">
                                    <div class="name">Class</div>
                                    <div class="value">
                                        <div class="row row-refine">

                                            <div class="col-9">
                                                <div class="input-group-desc">
                                                    <input class="input--style-5" style="width: 496px" ; type="text" value="<?php echo $row['class'] ?> " name="class" readonly="">
                                                    <label class="label--desc"></label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="form-row m-b-55">
                                    <div class="name">Roll Number</div>
                                    <div class="value">
                                        <div class="row row-refine">

                                            <div class="col-9">
                                                <div class="input-group-desc">
                                                    <input class="input--style-5" style="width: 496px" ; type="text" value="<?php echo $row['rollno'] ?> " name="rollno" readonly="">
                                                    <label class="label--desc"></label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>



                                <div class="form-row m-b-55">
                                    <div class="name">PRN Number</div>
                                    <div class="value">
                                        <div class="row row-refine">

                                            <div class="col-9">
                                                <div class="input-group-desc">
                                                    <input class="input--style-5" style="width: 496px" ; type="text" value="<?php echo $row['prn'] ?> " name="prn" readonly="">
                                                    <label class="label--desc"></label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-row m-b-55">
                                    <div class="name">Phone number</div>
                                    <div class="value">
                                        <div class="row row-refine">

                                            <div class="col-9">
                                                <div class="input-group-desc">
                                                    <input class="input--style-5" style="width: 496px" ; type="text" value="<?php echo $row['number'] ?> " name="number" readonly="">
                                                    <label class="label--desc"></label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="form-row">
                                    <div class="name">Email</div>
                                    <div class="value">
                                        <div class="input-group">
                                            <input class="input--style-5" type="email" value="<?php echo $row['email'] ?> " name="email" readonly="">
                                        </div>
                                    </div>
                                </div>



                                <div>
                                    <button class="btn btn--radius-2 btn--red" style="width: 300px;" type="submit" name="submit" value='submit'>OK</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>


    <?php
        }
    } else {
    }
    ?>


</body>

</html>