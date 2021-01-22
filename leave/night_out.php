<!DOCTYPE html>
<html>
<head>
	<title>Night_out page</title>
</head>
<style type="text/css">
	.sim{
		height: 1100px;
		width: 950px;
		border-style: solid;
		background-color: #F4F6F6 ;
		
	}
</style>
<body style="font-family: paltino;">


  <?php
   
    
            if (isset($_GET['prn'])) {
                $prn = $_GET["prn"];
              
            }
            
    include "config.php";
    
  

    $sql="SELECT * from accepted_nightout where prn = '$prn' ";
    $result=$conn->query($sql);

    if($result->num_rows > 0)
    {
        while($row=$result->fetch_assoc())
        {


            ?>


	<div class="sim">
		<h1 style="text-align: center; font-size: 18px;">SAVITRIBAI PHULE SHIKSHAN PRASARAK MANADL'S</h1>
		<h1 style="text-align: center; font-size: 40px;">SINHGAD BOYS/GIRLS HOSTEL</h1>
		<H1 style="text-align: center; font-size: 15px;">Korti Tal.Pandharpur Dist.Solapur-413304 ph.-02186-250036/250051</H1>
		<hr>
		<h1 style="text-align: center; font-size: 25px;">Application Form for 'Night Out' </h1>

<pre style="font-family: palatino;  font-size:15px;" >
    <h2>               			
			Date of application:                           
								   				                      Room No:<?php echo $row['rmno']?>				
			To 											   
			The Rector/Warden,

			Respected Sir,
					I <u><?php echo $row['firstname'] ?> <?php echo $row['lastname'] ?> </u> kindly request you 
			to grant a 'Night Out' permission to me for:<?php echo $row['nights'] ?> night's
			From: <?php echo $row['datefrom'] ?> to:<?php echo $row['dateto'] ?>             
			Reason for 'Night Out':<?php echo $row['reason'] ?>

			I will be staying at the following address during the said period.

			I will be returning to the hostel on <?php echo $row['dateto'] ?> 

			Thank you,
			Your's Faithfully,								
													

													

										Name & Address of the Guardian<br>                                                                                <?php echo $row['address'] ?><br>                                                                                Relation: <?php echo "Father"?><br>                                                                                Mob.No. :<?php echo $row['pnumber'] ?>
		
      <img style="height: 1px width:1px;" src="sign.png">
	Signature									
	Permitted by <?php echo "Rector" ?> 				
		</pre>	
		</h2>
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