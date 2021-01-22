<?php
    
    session_start();

?>



<!DOCTYPE html>
<html>
<head>
	<title> College_Leave page</title>
	<style type="text/css">
		.leave{
			height: 550px;
			width: 900px;
			margin-top: 100px;
			border-style: solid;
		}
		h2{
			font-family: paltino;
			font-size: 22px;
		}
	</style>
</head>
<body>


    
    <?php
   
    
            if (isset($_GET['prn'])) {
                $prn = $_GET["prn"];
              
            }
            
    include "config.php";
    
  

    $sql="SELECT * from accepted_leave where prn = '$prn' ";
    $result=$conn->query($sql);

    if($result->num_rows > 0)
    {
        while($row=$result->fetch_assoc())
        {


            ?>

	
	<div class="leave">
	<h1 style="text-align: center; font-family: paltino; font-size: 35px;">Student Leave Application Form</h1>
	<pre>
	<h2>
			Name of Student:  <?php echo $row['firstname'] ?> <?php echo $row['lastname'] ?>   
																						
			Class: <?php echo $row['class'] ?>
			
			Roll No: <?php echo $row['rollno'] ?>				
			
			Duration of Leave: Date From: <?php echo $row['datefrom'] ?>	  Date To: <?php echo $row['dateto'] ?>

			                                 Time From: <?php echo $row['timefrom'] ?>            Time To: <?php echo $row['timeto'] ?>


			Reason For Leave:  <?php echo $row['reason'] ?>


			<img style="height: 1px width:1px;" src="sign.png">
			Sign of HOD

	</h2>
	</pre>
	</div>




            <?php
        }
    
    }
    else
    {
        

    }
    ?>
    


</body>
</html>