<?php
session_start();
if(!isset($_SESSION['key']))
{
    echo "<script type='text/javascript'>
        alert('Need Login First')
    </script>";
    echo "<script type='text/javascript'>
        location.href='bonafide_request.php'
    </script>";
}
 ?>


            
<!DOCTYPE html>
<html lang="en">

<head>
    <style type="text/css">
        table{
            border-collapse: collapse;
            width:100%;
            font-family: monospace;
            color: indigo;
            font-size: 20px;
            text-align: left;
            background-color: white;
            
        }
        h1{
            text-align: center;
        }
        a{
           
        }   
        
        .clr{
            color: blue;
            background-color:pink;
            font-size: 20px;
        }
        body{
            background-color: white;
            
        }
    </style>
    
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Leave Application</title>
    <link href="vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">
    <link href="vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i" rel="stylesheet">

    <link href="vendor/select2/select2.min.css" rel="stylesheet" media="all">
    <link href="vendor/datepicker/daterangepicker.css" rel="stylesheet" media="all">

    <link href="css/main.css" rel="stylesheet" media="all">

<style>
    
.link{
    color: blue;
    font-size: 25px;
    margin-left: 50%;
    text-decoration: none;
    
    border-width: 1px; 
    text-align: center;
    
}
button{
 
 font-size: 25px;
 color: blue;
}
</style>

</head>
<body> 



    <div>
    <h1 style="color: black">Bonafide Requests</h1>
    
<a href="studentlogout.php" style="color: black">LOGOUT &nbsp</a>
<a href="stuind.php" style="color: black">PROFILE</a><br>
<hr>

</div>
    <form method="POST" action="">
    
       
    
    <?php
   
            
  include "config.php";
   
  $prn=$_SESSION['prn'];
  
  #$reason=$_SESSION['reason'];










    $sql="SELECT * from accepted_bonafide where prn ='$prn'";
    $result=$conn->query($sql);

    if($result->num_rows > 0)
    {
        while($row=$result->fetch_assoc())
        {
               

            ?>
            <center>
            <h2>Your Request for Bonafide on date <?php echo $row['date'];  ?> for <?php echo $row['reason'];  ?> is Accepted</h2></center>

<a  class="link"  href="bonafide.php?prn=<?php echo $row['prn'];?>?id=<?php echo $row['id'];  ?>" >view</a>
<br><hr>
 <!--<button class="button" type="submit" name="delet1" value="submit">Delete</button>-->

            
            
  
    
  <?php


if(isset($_POST['delet1']))
{

$sql="delete from accepted_bonafide where prn='$prn' ";
 
  if ($conn->query($sql) === TRUE){

    echo '<script language="javascript">';
        echo 'alert("request is deleted.")
         location.href="#"';
        echo '</script>';
    
  }
  else
  {
    echo '<script language="javascript">';
        echo 'alert("error")
         location.href="#"';
        echo '</script>';
   
   
  }
}



        }
    
    }
    else
    {
        

    }
    ?>



    <?php
   
            
    include "config.php";
    #$prn = $_SESSION['prn'] ;
  $prn=$_SESSION['prn'];

    $sql="SELECT * from deny_bonafide where prn ='$prn'";
    $result=$conn->query($sql);

    if($result->num_rows > 0)
    {
        while($row=$result->fetch_assoc())
        {


            ?>
            <center>
            <h2>Your Request for Bonafide on date <?php echo $row['date'];  ?> for <?php echo $row['reason'];  ?> is Denied</h2></center>
          <!--  <button class="link" type="submit" name="delet2" value="submit">Delete</button>-->

            
            
  
    
  <?php
        }
    
    }
    else
    {
        

    }
    ?>


</form>

  


</body>
</html>



<?php
 require_once('config.php');



if(isset($_POST['delet2']))
{

$sql="delete from deny_bonafide where prn='$prn' ";
 
  if ($conn->query($sql) === TRUE){

    echo '<script language="javascript">';
        echo 'alert("request is deleted.")
         location.href="#"';
        echo '</script>';
    
  }
  else
  {
    echo '<script language="javascript">';
        echo 'alert("error")
         location.href="#"';
        echo '</script>';
   
   
  }
}




?>


<?php
 require_once('config.php');



$conn->close();

?>

