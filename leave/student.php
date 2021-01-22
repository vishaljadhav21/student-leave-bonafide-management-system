

<?php
session_start();
 require_once('config.php');

if(isset($_POST['submit']))
{
$firstname =$_POST['firstname'];
$lastname =$_POST['lastname'];
$dob =$_POST['dob'];
$branch =$_POST['branch'];
$class =$_POST['class'];
$rollno =$_POST['rollno'];
$prn =$_POST['prn'];
$number =$_POST['number'];
$email =$_POST['email'];
$password =$_POST['password'];


$sql="INSERT INTO `register` (`firstname`,`lastname`,`dob`,`branch`,`class`,`rollno`,`prn`,`number`,
`email`,`password`)
   VALUES ('$firstname','$lastname','$dob','$branch','$class','$rollno','$prn','$number','$email','$password')";
 
  if ($conn->query($sql) === TRUE){

    echo '<script language="javascript">';
        echo 'alert("You have registered. Thank You!");
         location.href="studentlogin.php"';
        echo '</script>';
    
  }
  else
  {
    echo '<script language="javascript">';
        echo 'alert("You can not register. Thank You!");
         location.href="student.php"';
        echo '</script>';
  }
  




}
$conn->close();
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
                    <h2 class="title">Student Registration Form</h2>
                </div>
                <div class="card-body">
                    <form method="POST">
                        <div class="form-row m-b-55">
                            <div class="name">Name</div>
                            <div class="value">
                                <div class="row row-space">
                                    <div class="col-2">
                                        <div class="input-group-desc">
                                            <input class="input--style-5"  type="text" name="firstname" required="" pattern="[A-Za-z]{0,15}">
                                            <label class="label--desc">first name</label>
                                        </div>
                                    </div>
                                    <div class="col-2">
                                        <div class="input-group-desc">
                                            <input class="input--style-5" type="text" name="lastname" required="" pattern="[A-Za-z]{0,15}">
                                            <label class="label--desc" >last name</label>
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
                                        <div class="input-group-desc" >
                                            <input class="input--style-5" style="width: 496px"; type="Date" name="dob"  required="">
                                            <label class="label--desc"></label>
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
                                        <select name="branch" required="">
                                            <option disabled="disabled" selected="selected" value="">Choose option</option>
                                            <option value="Mechanical">Mechanical</option>
                                            <option value="Civil">Civil</option>
                                            <option value="Electrical">Electrical</option>
                                            <option value="E&TC">E&TC</option>
                                            <option value="Computer Science">Computer science </option>
                                        </select>
                                        <div class="select-dropdown"></div>
                                    </div>
                                </div>
                            </div>
                        </div>

                          <div class="form-row">
                            <div class="name">Class</div>
                            <div class="value">
                                <div class="input-group">
                                    <div name="class" class="rs-select2 js-select-simple select--no-search">
                                        <select name="class" required="">
                                            <option disabled="disabled" selected="selected" value="">Choose option</option>
                                            <option value="FE">FE</option>
                                            <option value="SE">SE</option>
                                            <option value="TE">TE</option>
                                            <option value="BE">BE</option>
                                        </select>
                                        <div class="select-dropdown"></div>
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
                                            <input class="input--style-5" style="width: 496px"; type="text" name="rollno" required="" pattern="[0-9]{}">
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
                                            <input class="input--style-5" style="width: 496px"; type="text"  name="prn" required="" pattern="[0-9]{16}">
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
                                            <input class="input--style-5" style="width: 496px"; type="text" name="number" required="" pattern="[7-9]{1}[0-9]{9}">
                                            <label class="label--desc"></label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="form-row">
                            <div class="name" >Email</div>
                            <div class="value">
                                <div class="input-group">
                                    <input class="input--style-5" type="email" name="email" required="" >
                                </div>
                            </div>
                        </div>

                            <div class="form-row m-b-55">
                            <div class="name"name="password" >Password</div>
                            <div class="value">
                                <div class="row row-refine">
                                    
                                    <div class="col-9">
                                        <div class="input-group-desc">
                                            <input class="input--style-5" style="width: 496px"; type="password" name="password" required="" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{6,}" title="Must contain at least one number and one Uppercase and Lowercase letter, and at least 6 or more characters">
                                            <label class="label--desc"></label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>


                        
                        <div>
                            <button class="btn btn--radius-2 btn--red" style="width: 308px"; type="submit" name="submit" value='submit'>Register</button>
                            <button class="btn btn--radius-2 btn--red" style="width: 308px"; type="submit"> <a href="first.php">Home</a> </button>
                            <p>Already have an account</p>
                            <a href="studentlogin.php"> click here to login</a>
                            



                    
                            
                            
                        
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

<script>
          
    // Function to check Whether both passwords 
    // is same or not. 
    function checkPassword(form) { 
        password1 = form.password1.value; 
        password2 = form.password2.value; 

        // If password not entered 
        if (password1 == '') 
            alert ("Please enter Password"); 
              
        // If confirm password not entered 
        else if (password2 == '') 
            alert ("Please enter confirm password"); 
              
        // If Not same return False.     
        else if (password1 != password2) { 
            alert ("\nPassword did not match: Please try again...") 
            return false; 
        }

        else{
            alert("Registration Successfully")
            return true;
        }
        
    } 
</script> 

</body>

</html>


