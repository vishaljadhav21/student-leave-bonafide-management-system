<!DOCTYPE html>
<html>
<head>
	<title>Night_out page</title>
</head>
<style type="text/css">
	.sim{
		height: 850px;
		width: 950px;
		border-style: solid;
		background-color: #F4F6F6 ;
		
	}
</style>
<div class="sim">
<body style="font-family: paltino;">
	<div class="pqr">
		<h1 style="text-align: center; font-size: 18px;">SAVITRIBAI PHULE SHIKSHAN PRASARAK MANADL'S</h1>
		<h1 style="text-align: center; font-size: 40px;"> SKN SINHGAD COLLEGE OF ENGINEERING </h1>
		<H1 style="text-align: center; font-size: 15px;">A.P-Korti, Tal-Pandharpur, Pin 413304 Dist-Solapur</H1>
		<h3 style="text-align: center;font-size: 15px;">Phone:02186-250146,Fax:02185-250142
		<hr>
	</div>
<div class="abc">


    
    <?php
    if (isset($_GET['id'])) {
                $id=$_GET['id'];

               # $_SESSION['prn'] = $prn;
            }
    
            if (isset($_GET['prn'])) {
                $prn = $_GET["prn"];
                

               # $_SESSION['prn'] = $prn;
            }
           
            
    include "config.php";
   
  

    $sql="SELECT * from accepted_bonafide where prn = '$prn' and id='$id'";
    $result=$conn->query($sql);

    if($result->num_rows > 0)
    {
        while($row=$result->fetch_assoc())
        {

$id=$_SESSION['id'];

            ?>





<pre style="font-family: palatino;  font-size:20px;" >
    <h2>               			
		No.:<?php echo $row['id'] ?>            								Date:<?php echo $row['date'] ?>         
		 	<h1 style="text-align: center; font-size: 25px;">BONAFIDE CERTIFICATE </h1>							   								
					This is to certify that,
					Mr./Ms <u><?php echo $row['firstname'] ?> <?php echo $row['lastname'] ?> </u>is/was 
					a bonafide student of this College,studying in <u><?php echo $row['class'] ?></u> 
					during academic year 2020-21
					His/Her issued date as per College record is <u><?php echo $row['date'] ?></u>
					This certificatebis issued on his/her request for the purpose of  <u><?php echo $row['reason'] ?></u>

													
																 <img style="height: 1px; width : 1px" src="sign.png">			
																	<b>  Principal</b>
					<b>Seal of institute</b>					SKN SINHGAD COLLEGE OF ENGINEERING
																Korti,Pandharpur,solapur
		</h2>								
 				
		</pre>	
		
</div>
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
