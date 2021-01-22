<?php
    
    session_start();

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
<style>
   


</style>



<body>




 
    <?php

    $prn = $_SESSION['prn'] ;

    include "config.php";
    

    $sql="SELECT * from register where prn='$prn'";
    $result=$conn->query($sql);

    if($result->num_rows>0)
    {
        while($row=$result->fetch_assoc())
        {

            ?>




    <div class="page-wrapper bg-gra-03 p-t-45 p-b-50">
        <div class="wrapper wrapper--w790">
            <div class="card card-5">
                <div class="card-heading">
                    <h2 class="title">Bonafide Application</h2>
                </div>
                <div class="card-body">
                    <form method="POST" action="">
                        <div class="form-row m-b-55">
                            <div class="name">Name</div>
                            <div class="value">
                                <div class="row row-space">
                                    <div class="col-2">
                                        <div class="input-group-desc">
                                            <input class="input--style-5"  type="text" name="firstname" value="<?php echo $row['firstname'] ?>" readonly="">
                                            <label class="label--desc">first name</label>
                                        </div>
                                    </div>
                                    <div class="col-2">
                                        <div class="input-group-desc">
                                            <input class="input--style-5" type="text" name="lastname"
                                            value="<?php echo $row['lastname'] ?>" readonly="">
                                            <label class="label--desc" >last name</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="name">Branch</div>
                            <div class="value">
                                <div class="input-group">
                                    <div class="rs-select2 js-select-simple select--no-search">
                                        <select name="branch">
                                            <option readonly="" ><?php echo $row['branch'] ?> </option>
                                           
                                        </select>
                                        
                                    </div>
                                </div>
                            </div>
                        </div>

                          <div class="form-row">
                            <div class="name">Class</div>
                            <div class="value">
                                <div class="input-group">
                                <div name="class" class="rs-select2 js-select-simple select--no-search">
                                        <select name="class">
                                            <option readonly=""><?php echo $row['class'] ?> </option>
                                            
                                        </select>
                                        
                                    </div>
                                </div>
                            </div>
                        </div>

                    
                        <div class="form-row m-b-55">
                            <div class="name" >Roll Number</div>
                            <div class="value">
                                <div class="row row-refine">
                                    
                                    <div class="col-9">
                                        <div class="input-group-desc">
                                            <input class="input--style-5" style="width: 496px"; 
                                            type="text" name="rollno"
                                            value="<?php echo $row['rollno'] ?>" readonly="">
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
                                            <input class="input--style-5" style="width: 496px"; type="text" name="prn" value="<?php echo $row['prn'] ?>" readonly="">
                                            <label class="label--desc"></label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        
                    
                            <div class="form-row m-b-55">
                            <div class="name" >Phone number</div>
                            <div class="value">
                                <div class="row row-refine">
                                    
                                    <div class="col-9">
                                        <div class="input-group-desc">
                                            <input class="input--style-5" style="width: 496px"; type="text" name="number" value="<?php echo $row['number'] ?>" readonly="">
                                            <label class="label--desc"></label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="form-row m-b-55">
                            <div class="name">Date</div>
                            <div class="value">
                                <div class="row row-space">
                                    <div class="col-2">
                                        <div class="input-group-desc">
                                            <input class="input--style-5" style="width: 496px";  type="date" name="date" >
                                            <label class="label--desc">Date of Application</label>
                                        </div>
                                    </div>
                                    
                                </div>
                            </div>
                        </div>
                       



                        
                            <div class="form-row m-b-55">
                            <div class="name"name="reason">Reason</div>
                            <div class="value">
                                <div class="row row-refine">
                                    
                                    <div class="col-9">
                                        <div class="input-group-desc">
                                            <input class="input--style-5" style="width: 496px"; type="text" name="reason">
                                            <label class="label--desc"></label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>


                        
                        <div>
                            <button class="btn btn--radius-2 btn--red" style="width: 308px"; type="submit" name="submit" value='submit'>Submit</button>
                            <button class="btn btn--radius-2 btn--red" style="width: 308px" ;> <a href="stuind.php">Profile</a> </button>
                            </div>
                            



                    
                            
                            
                        
                    </form>
                </div>
            </div>
        </div>
    </div>

  
    <script src="vendor/jquery/jquery.min.js"></script>
   
    <script src="vendor/select2/select2.min.js"></script>
    <script src="vendor/datepicker/moment.min.js"></script>
    <script src="vendor/datepicker/daterangepicker.js"></script>

    
    <script src="js/global.js"></script>


            <?php
        }
    
    }
    else
    {
        

    }
    ?>

</body>

</html>


<?php
 require_once('config.php');
 


if(isset($_POST['submit']))
{

$firstname =$_POST['firstname'];
$lastname =$_POST['lastname'];
$branch=$_POST['branch'];
$class=$_POST['class'];
$rollno =$_POST['rollno'];
$prn =$_POST['prn'];
$number =$_POST['number'];
$date =$_POST['date'];
$reason =$_POST['reason'];


$sql="INSERT INTO bonafideform (`firstname`,`lastname`,`branch`,`class`,`rollno`,`prn`,`number`,`date`,`reason`)
  VALUES ('$firstname','$lastname','$branch','$class','$rollno','$prn','$number','$date','$reason')";
 $_SESSION['id']=$id;
  if ($conn->query($sql) === TRUE){

    echo '<script language="javascript">';
        echo 'alert("Your request is submited. Thank You!")
         location.href="stuind.php"';
        echo '</script>';
    
  }
  else
  {
    echo '<script language="javascript">';
        echo 'alert("Your request is not submited. Thank You!")
         location.href="bonafideform.php"';
        echo '</script>';
   
   
  }
}
$conn->close();

?>


