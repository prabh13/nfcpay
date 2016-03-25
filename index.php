<?php 
include("db.php");
if(isset($_REQUEST['save']))
{
	$amount=$_REQUEST['amt'];
	
	$query="update readings SET `amtpay`='$amount' where current='1'";
	$res=mysql_query($query);
	
	/*echo "<script>alert('Registration Successful')</script>";
	/*echo "<script>self.location='newform.php'</script>";
	*/
	//include "checkpin.php";
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
<link rel="canonical" href="http://startbootstrap.com/template-categories/landing-pages/">
<link href="http://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
<link href="http://fonts.googleapis.com/css?family=Open+Sans:300,400italic,700italic,400,700" rel="stylesheet" type="text/css">
<link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">

<!-- Bootstrap Core CSS -->
<link href="http://sbootstrap.startbootstrapc.netdna-cdn.com/assets/css/bootstrap.min.css" rel="stylesheet" type="text/css">

<!-- Start Bootstrap Custom CSS -->
<link href="http://sbootstrap.startbootstrapc.netdna-cdn.com/assets/css/startbootstrap.css" rel="stylesheet" type="text/css">


</head>


<body>
<?php 

$q= "select * from readings where current='1'";
$res=mysql_query($q);
$info=mysql_fetch_array($res);
$row=mysql_num_rows($res);


?>


<!-- Footer -->
<div class="cta-mail">
   	
	<h2 align="right"><a href="data.php" style="color: #FFFFFF">Record</a> </h2>

	
	<div class="container text-center">
	<h2>NFC PAy </h2>
        <h4>One tap solution for contactless payment!!</h4>
        <div id="mc_embed_signup">
            <form role="form" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" >
                <div class="input-group input-group-lg">
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
        <!-- End MailChimp Signup Form -->
    </div>
</div>




<footer>
    <div class="container">
        
		<div class="row">
			<div class="col-md-6 footer-left">
			<ul class="list-inline">
                    <li>
                        <a href="/help">Help</a>
                    </li>
                    <li>
                        <a href="/contact">Contact</a>
                    </li>
                </ul>
				 <p>
                    <iframe id="gh-fork" src="http://ghbtns.com/github-btn.html?user=prabh13&repo=nfcpay&type=fork" allowtransparency="true" frameborder="0" scrolling="0" width="55px" height="20px"></iframe>
                    <iframe id="gh-star" src="http://ghbtns.com/github-btn.html?user=prabh13&repo=nfcpay&type=watch&count=true" allowtransparency="true" frameborder="0" scrolling="0" width="110px" height="20px"></iframe>
                    
                  
               
                   
			</div>
		

			<div class="col-md-6 footer-right">
                <p><a href="http://www.startbootstrap.com">NFCPAy</a> is an open source project. </p><p>Developed by <a href="http://github.com/prabh13">Prabhjeet Singh Chawla</a> & 
				<a href="http://">Rohit Kumar</a>.</p>
                <p><a href="http://rvce.edu.in">Student at RV-ISE (2017 batch)</a></p>
              
            </div>
          </div>
        <hr>
         <div class="row">
            <div class="col-lg-12 footer-below">
                <p>This Themes is licensed under the <a href="https://github.com/BlackrockDigital/startbootstrap/blob/gh-pages/LICENSE">MIT License</a>.
                <br>Based on <a href="http://getbootstrap.com/">Bootstrap</a>.</p>
            </div>
        </div>
    </div>


</footer>














<!-- JavaScript -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/lunr.js/0.6.0/lunr.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script src="http://sbootstrap.startbootstrapc.netdna-cdn.com/assets/js/search.js"></script>
<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<script src="http://sbootstrap.startbootstrapc.netdna-cdn.com/assets/js/docs.js"></script>
<script src="http://sbootstrap.startbootstrapc.netdna-cdn.com/assets/js/startbootstrap.js"></script>

</body>
</html>