<?php
session_start();
if(isset($_SESSION['abc'])=="")
{
	header("location:index.php?m3=3");
	exit(0);	
}

	include("connect.php");
	extract($_POST);
	$i=$_REQUEST['rid'];
	$q1=mysql_query("select * from invoice_wholesaler where iwid=$i")or die("display fail");
	$dataa=mysql_fetch_array($q1);
?>
<!DOCTYPE HTML>
<html>
<head>
<title>Wholesaler - Welcome To The Agro World</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="The Agro, Agro, Farm, Farmer, Wholesaler, Grocerystore, Grains, Vegetables, Fruits" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all">
<!-- Custom Theme files -->
<link href="css/style.css" rel="stylesheet" type="text/css" media="all"/>
<!--js-->
<script src="js/jquery-2.1.1.min.js"></script> 
<!--icons-css-->
<link href="css/font-awesome.css" rel="stylesheet"> 
<!--Google Fonts-->
<link href='//fonts.googleapis.com/css?family=Carrois+Gothic' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Work+Sans:400,500,600' rel='stylesheet' type='text/css'>
<!--//skycons-icons-->
</head>
<body>	
<div class="page-container">	
   <div class="left-content">
	   <div class="mother-grid-inner">
            <!--header start here-->
				<div class="header-main">
					<div class="header-left">
						<?php include("logo.php") ?>	
							<!--search-box-->
								<!--//end-search-box-->
							<div class="clearfix"> </div>
						 </div>
						 <div class="header-right">
							<div class="profile_details_left"><!--notifications of menu start -->
								
								<div class="clearfix"> </div>
							</div>
							<!--notification menu end -->
							<?php include("top_menu.php");?>
							<div class="clearfix"> </div>				
						</div>
				     <div class="clearfix"> </div>	
				</div>
<!--heder end here-->
<!-- script-for sticky-nav -->
		<script>
		$(document).ready(function() {
			 var navoffeset=$(".header-main").offset().top;
			 $(window).scroll(function(){
				var scrollpos=$(window).scrollTop(); 
				if(scrollpos >=navoffeset){
					$(".header-main").addClass("fixed");
				}else{
					$(".header-main").removeClass("fixed");
				}
			 });
			 
		});
		</script>
		<!-- /script-for sticky-nav -->
<!--inner block start here-->
<div class="inner-block">
    <div class="blank">
    	<h2 align="center">Invoice Of Wholesaler </h2>
    	<div class="blankpage-main">
    		
    	  <form name="form1" method="post" action="">
    	    <table width="70%" border="0" align="center">
              <tr>
                <td width="47%">Main Category </td>
                <td width="5%">:</td>
                <td width="48%"><?php echo $dataa['mc_name'];?></td>
              </tr>
              <tr>
                <td colspan="3">&nbsp;</td>
                </tr>
              <tr>
                <td>Sub Category </td>
                <td>:</td>
                <td><?php echo $dataa['sc_name'];?></td>
              </tr>
              <tr>
                <td colspan="3">&nbsp;</td>
                </tr>
              <tr>
                <td>Grocerystore Name</td>
                <td>:</td>
                <td><?php echo $dataa['grocerystore_name'];?></td>
              </tr>
              <tr>
                <td colspan="3">&nbsp;</td>
                </tr>
              <tr>
                <td>Shop Address</td>
                <td>:</td>
                <td><?php echo $dataa['shop_address'];?></td>
              </tr>
              <tr>
                <td colspan="3">&nbsp;</td>
                </tr>
              <tr>
                <td> Date 	</td>
                <td>:</td>
                <td><?php echo $dataa['date'];?></td>
              </tr>
              <tr>
                <td colspan="3">&nbsp;</td>
                </tr>
              <tr>
                <td> Quantity	</td>
                <td>:</td>
                <td><?php echo $dataa['qty'];?></td>
              </tr>
              <tr>
                <td colspan="3">&nbsp;</td>
                </tr>
              <tr>
                <td> Rate	</td>
                <td>:</td>
                <td><?php echo $dataa['rate'];?></td>
              </tr>
              <tr>
                <td colspan="3">&nbsp;</td>
                </tr>
              <tr>
                <td>Discount</td>
                <td>:</td>
                <td><?php echo $dataa['discount'];?></td>
              </tr>
              <tr>
                <td colspan="3">&nbsp;</td>
                </tr>
              <tr>
                <td> Gst	</td>
                <td>:</td>
                <td><?php echo $dataa['gst'];?></td>
              </tr>
              <tr>
                <td colspan="3">&nbsp;</td>
                </tr>
              <tr>
                <td> Net Amount	</td>
                <td>:</td>
                <td><?php echo $dataa['net_amount'];?></td>
              </tr>
              <tr>
                <td colspan="3">&nbsp;</td>
                </tr>
              <tr>
                <td>Email</td>
                <td>:</td>
                <td><?php echo $dataa['email'];?></td>
              </tr>
              <tr>
                <td colspan="3">&nbsp;</td>
                </tr>
              <tr>
                <td>Mobile</td>
                <td>:</td>
                <td><?php echo $dataa['mobile'];?></td>
              </tr>
              <tr>
                <td colspan="3">&nbsp;</td>
              </tr>
              
            </table>
    	  </form>
    	  <p>&nbsp;</p>
    	  <p>&nbsp;</p>
    	  <p>&nbsp;</p>
    
    	  <p>&nbsp;</p>
    	</div>
    </div>
</div>
<!--inner block end here-->
<!--copy rights start here-->
<?php include("copyrights.php") ?>	
<!--COPY rights end here-->
</div>
</div>
<!--slider menu-->
    <div class="sidebar-menu">
		  	<div class="logo"> <a href="#" class="sidebar-icon"> <span class="fa fa-bars"></span> </a> <a href="#"> <span id="logo" ></span> 
			      <!--<img id="logo" src="" alt="Logo"/>--> 
			  </a> </div>		  
		    <?php include("menu.php");?>
	 </div>
	<div class="clearfix"> </div>
</div>
<!--slide bar menu end here-->
<script>
var toggle = true;
            
$(".sidebar-icon").click(function() {                
  if (toggle)
  {
    $(".page-container").addClass("sidebar-collapsed").removeClass("sidebar-collapsed-back");
    $("#menu span").css({"position":"absolute"});
  }
  else
  {
    $(".page-container").removeClass("sidebar-collapsed").addClass("sidebar-collapsed-back");
    setTimeout(function() {
      $("#menu span").css({"position":"relative"});
    }, 400);
  }               
                toggle = !toggle;
            });
</script>
<!--scrolling js-->
		<script src="js/jquery.nicescroll.js"></script>
		<script src="js/scripts.js"></script>
		<!--//scrolling js-->
<script src="js/bootstrap.js"> </script>
<!-- mother grid end here-->
</body>
</html>

				
<?php if(isset($_REQUEST['ifar'])=="1") { ?>
<script language="javascript">
alert("Invoice of Wholesaler Deleted");
</script>
<?php } ?>	