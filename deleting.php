<!DOCTYPE html>
<!--This will allow the Employees to delete bills that are no longer needed. 
    It will depend on the employee or the admin to delete a bill. -->
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" href="../../assets/ico/favicon.png">

    <title>RC * Billing Deleting Center </title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom styles for this template -->
    <link href="css/carousel.css" rel="stylesheet">
    <link href="css/offcanvas.css" rel="stylesheet">

  </head>
<!--============================
  Navigation Bar information
==============================-->
  <body>
  <?php
    require 'connect.php';
    require 'editSearch.php';
    session_start();
     if (isset($_SESSION['userName'])){
    $User = $_SESSION['userName']; 
    $First = $_SESSION['FirstName'];
    $Last = $_SESSION['LastName'];
?>    
   <div class="navbar navbar-default navbar-fixed-top" >
    <div class="container">
      <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        </button>
      <a href="http://localhost/rcs/ControlPanel.php" class="navbar-brand">RC * Control Panel</a>
      </div>
 <div class="collapse navbar-collapse ">
        <ul class="nav navbar-nav ">
          <li ><a href="http://localhost/rcs/ControlPanel.php" >Control Panel</a></li>
              

               <li class="dropdown active">
                  <a class="dropdown-toggle" data-toggle="dropdown">Bill Options<b class="caret"></b></a>
                 <ul class="dropdown-menu">
                    <li ><a href="billing.php" >Billing Customers</a></li>
                    <li ><a href="editing.php" >Edit Bills</a></li>
                    <li class="active" ><a href="deleting.php" >Deleting Bills</a></li>
                </ul> 
              </li>

              <li class="dropdown">
                  <a class="dropdown-toggle" data-toggle="dropdown">Subscribe Options<b class="caret"></b></a>
                 <ul class="dropdown-menu">
                    <li ><a href="editingCust.php" >Edit Customer Subscriptions</a></li>
                    <li ><a href="deletingCustomer.php" >Delete Customers</a></li>
                </ul> 
              </li>

          <li class="dropdown">
              <a class="dropdown-toggle" data-toggle="dropdown">Website Editing<b class="caret"></b></a>
                <ul class="dropdown-menu">
                  <li ><a href="EditSubscribe.php" >Price Edit</a></li>
                  <li ><a href="controlHome.php" >Page Edit </a></li>

                </ul> 
          </li>
        </ul>
<ul class="nav navbar-nav navbar-right">
           <li ><a><?php echo $User; ?></a></li>
          <li ><a href="http://localhost/rcs/Admlogout.php" > Signout</a></li>
        </ul>

      </div>
    </div> <!--Contianer-->
  </div><!--   <div class="navbar navbar-default navbar-fixed-top" >-->




<div class="container">
            <div class="row">


  <div class="col-xs-9 col-sm-8 ">
          <h2>Customer Bill List</h2>
          <table class="table table-hover">
          <thead>
              <tr>
                <th>Customer ID</th>
                <th>Last Name</th>
                <th>Bill ID</th>
                <th>Bill Code</th>
                <th>Bill Amount</th>
                <th>Bill Paid</th>
                <th>Bill Issued</th>
              </tr>
            </thead>
            <tbody>
    <?php
    print("$output");
    ?>
      </tbody>
</table>

</div>
 <div class="col-xs-3 " id="sidebar" role="navigation">
         <div class="well sidebar-nav"> 
    <h3>Bill Search</h3>
      <form class="form-horizontal" action="deleting.php" method="POST">
        <div class="form-group">
        <input type="search" id="customer" name="customer" class="form-control" placeholder="Input Customers ID "><br />
          <button type="submit" class="btn btn-primary" value="Submit">Search</button>
            </div>
          </form> 
    <h4>Bill Deletion</h4>
   <form role="form-horizontal" action="billDelete.php" method="POST">
  <div class="form-group" >
    <label >Customer ID Number</label>
    <input type="text" name="cus" class="form-control" id="cus" placeholder="Enter Customer ID" required>
  </div>
   <div class="form-group" >
    <label >Billing ID Number</label>
    <input type="text" name="bil" class="form-control" id="cus" placeholder="Enter Billing ID" required>
  </div>
  <div class="form-group">
    <label>Bill Code</label>
    <input type="text" name="bCode" class="form-control" id="exampleInputEmail1" placeholder="Enter Billing Code" required>
  </div>
<!-- TRIGGER-->
	<input class="btn  btn-primary" type="submit" href="#contact" data-toggle="modal" value="Submit "/>

<!-- MODAL -->
	<div class="modal fade" id="contact" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<h4 class="modal-title" id="myModalLabel">Confirming Request</h4>
				</div>
                
				<div class ="modal-body">
					<p> 
				    Warning!!You are attempting to Edit a Customer's Details. Press "Cancel" to make any changes or to cancel the submission. Press "Submit" to confirm your request.
					</p>
                </div>
               
				<div class="modal-footer">
				
					<button class="btn btn-danger" data-dismiss="modal" aria-hidden="true">Cancel</button>
				    <button type="submit" value="submit" class="btn btn-success">Submit</button>
				</div>
			   
			</div>
		</div>
	</div>
	
	<!-- END MODAL -->
             </form>
</div>

</div>
</div>

      <hr>

      <footer>
<p>&copy; Royal Cablevision Company 2014</p>
      </footer>

    </div><!--/.container-->


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->

	<script src="js/jquery.js"/>
	<script src="js/jquery-2.0.2.min.js"></script>
	<script src="js/bootstrap.js"></script>
    <script src="offcanvas.js"></script>
  </body>
  <?php
}
else
 echo "LOGIN PLEASE!!!";
?>

</html>
