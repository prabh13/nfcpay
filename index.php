<?php 
include("db.php");
if(isset($_REQUEST['save']))
{
	$amount=$_REQUEST['amt'];
	
	$query="update readings SET `amtpay`='$amount' where current='1'";
	$res=mysql_query($query);
	
	
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<title>
  
  NfcPay
  
</title>

<link href="bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css">
<link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">

<!-- Bootstrap Core CSS -->
<link href="bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css">

<!-- Start Bootstrap Custom CSS -->
<link href="bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css">


</head>


<body >
<?php 

$q= "select * from readings where current='1'";
$res=mysql_query($q);
$info=mysql_fetch_array($res);
$row=mysql_num_rows($res);


?>


<div class="jumbotron">

  <div class="container text-center">
	<h2 align="right"><a href="data.php" style="color:#000000" >Record</a> </h2>
   <h1>NFC PAy </h1>
        <h4>One tap solution for contactless payment!!</h4>
	<form role="form" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" >
                <div class="input-group input-group-lg col-md-6 col-md-offset-3">
                    <input type="text" name="amt" class="form-control" id="amt" placeholder="Enter amount...">
                    <span class="input-group-btn">
                        <?php if($row == 0){?>
						<button type="submit" name="save" id="mc-embedded-subscribe" class="btn btn-default" disabled="disabled">PayNow!</button>
                    	<?php }else { ?>
						<button type="submit" name="save" id="mc-embedded-subscribe" class="btn btn-default">PayNow!</button>
						<?php } ?>
					</span>
               
			    </div>
               	
			    <div id="mce-responses">
                    <div class="response" id="mce-error-response" style="display:none"></div>
                    <div class="response" id="mce-success-response" style="display:none"></div>
                </div>
            </form>
  </div>
</div>




<!-- Footer -->


<footer>
    <div class="container">
        
		<div class="row">
			<div class="col-md-6 footer-left">
			
			
				 <ul class="text-left">
            	  <b>Contact Us:</b>
			      <a href="#"><i class="fa fa-facebook"></i></a>
                  <a href="#"><i class="fa fa-twitter"></i></a>
                  <a href="#"><i class="fa fa-linkedin"></i></a>
                </ul>
                  <div class="col-md-4 text-left">
            
            <h6>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<b>Coded with <i class="fa fa-heart red"></i> in India</h6>
        </div> 
		
             </div>
		

			<div class="col-md-6 footer-right">
                <p align="right"><a href="http://www.startbootstrap.com">NFCPAy</a> is an open source project. </p><p align="right">Developed by <a href="http://github.com/prabh13">Prabhjeet Singh Chawla</a> & 
				<a href="https://github.com/rohitkumar79">Rohit Kumar</a>.</p>
                <p align="right"><a href="http://rvce.edu.in">Student at RV-ISE (2017 batch)</a></p>
              
            </div>
          </div>
        <hr>
         <div class="row">
            <div class="col-lg-12 col-md-offset-4 footer-below">
                <p>This Themes is licensed under the <a href="https://github.com/BlackrockDigital/startbootstrap/blob/gh-pages/LICENSE">MIT License</a>.
                <br>Based on <a href="http://getbootstrap.com/">Bootstrap</a>.</p>
            </div>
        </div>
    </div>


</footer>


<!-- JavaScript -->
<script src="bootstrap/js/bootstrap.min.js"></script>


</body>
</html>