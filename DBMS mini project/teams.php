<?php
session_start();
include_once("php/config.php");
if ($_SESSION["userLoggedIn"]==true) {
  $acc_no = $_SESSION['acc_no'];
  $select="select * from `customers` WHERE acc_no='$acc_no'";
  $run_query=mysqli_query($conn,"$select");
  $row=mysqli_fetch_array($run_query);
  $acc_no=$row['acc_no'];
  $fname=$row['fname'];
  $lname=$row['lname'];
}
else{
  header("location:login.html");
  exit();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Ultimate Frisbee - Teams</title>
	<link rel="stylesheet" type="text/css" href="hw1.css">
	<link rel="stylesheet" type="text/css" href="hw1.css">
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
	<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
	<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
</head>
<body>
	<div>
	<header>
		<h1>Consortium Bank</h1>
		<aside class = "left">
			<a href="https://en.wikipedia.org/wiki/Bank"><img src="https://upload.wikimedia.org/wikipedia/commons/thumb/a/a8/London.bankofengland.arp.jpg/330px-London.bankofengland.arp.jpg" title="Bank"/> </a>

			<a href="en.wikipedia.org/wiki/Bank_account#/media/File:1967_Midland_Bank_letter_on_electronic_data_processing.JPG"><img src="https://upload.wikimedia.org/wikipedia/commons/thumb/b/ba/1967_Midland_Bank_letter_on_electronic_data_processing.JPG/330px-1967_Midland_Bank_letter_on_electronic_data_processing.JPG"/></a>


			<a href="https://en.wikipedia.org/wiki/Bank#/media/File:WinonaSavingsBankVault.JPG" ><img src="https://upload.wikimedia.org/wikipedia/commons/thumb/8/87/WinonaSavingsBankVault.JPG/330px-WinonaSavingsBankVault.JPG"  ></a>
		</aside>
		<section class = "right">
		<nav>
			<a href="index.html" >Home</a>
			<a href="teams.php" class ="active">Loan</a>
			<a href="history.php">Transaction</a>
			<a href="login.html">Login</a>
      <a href="complaints.html">Complaints</a>
      <a href="logout.php">LogOut</a>
      
		</nav>
	</header>
</div>
	<div class="container">

        <form class="well form-horizontal" action="php/loan.php" method="post"  id="contact_form">
    <fieldset>
        <input type="hidden" name="action" value="insert" >
    <!-- Form Name -->
    <legend><center><h2><b>Loan Page</b></h2></center></legend><br>
    
	<!-- Text input-->
	
	<div class="form-group">
        <label class="col-md-4 control-label" >Account Number</label> 
          <div class="col-md-4 inputGroupContainer">
          <div class="input-group">
        <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
        <input name="acc_no" placeholder="Account Number" readonly="readonly" class="form-control"  type="text" value="<?php echo "$acc_no" ?>">
          </div>
        </div>
	  </div>

	  <div class="form-group">
        <label class="col-md-4 control-label" >Name</label> 
          <div class="col-md-4 inputGroupContainer">
          <div class="input-group">
        <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
        <input name="fname" placeholder="FirstName" readonly="readonly" class="form-control"  type="text" value="<?php echo "$fname $lname" ?>">
          </div>
        </div>
      </div>
	  
	  <div class="form-group"> 
        <label class="col-md-4 control-label">Loin Type</label>
          <div class="col-md-4 selectContainer">
          <div class="input-group">
              <span class="input-group-addon"><i class="glyphicon glyphicon-list"></i></span>
          <select name="loan_type" class="form-control selectpicker">
            <option value="">Select Loan Type</option>
            <option>Personal Loans</option>
            <option>Credit Card Loans</option>
            <option >Car Loans</option>
            <option >Payday Loans</option>
          </select>
        </div>
      </div>
      </div>
    
    <div class="form-group">
      <label class="col-md-4 control-label">Loan ID</label>  
      <div class="col-md-4 inputGroupContainer">
      <div class="input-group">
      <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
      <input  name="loan_id" placeholder="Loan ID" class="form-control"  type="text">
        </div>
      </div>
    </div>
    
    <!-- Text input-->
    
    <div class="form-group">
      <label class="col-md-4 control-label" >Amount</label> 
        <div class="col-md-4 inputGroupContainer">
        <div class="input-group">
      <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
      <input name="amount" placeholder="Enter the Loin" class="form-control"  type="text">
        </div>
      </div>
    </div>

    <div class="form-group">
      <label class="col-md-4 control-label" >Address</label> 
        <div class="col-md-4 inputGroupContainer">
        <div class="input-group">
      <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
      <input name="address" placeholder="Enter Address" class="form-control"  type="text">
        </div>
      </div>
    </div>


    <div class="form-group">
        <label class="col-md-4 control-label" >Start Date</label> 
          <div class="col-md-4 inputGroupContainer">
          <div class="input-group">
        <span class="input-group-addon"><i class="glyphicon glyphicon-calendar"></i></span>
        <input name="date" placeholder="Starting date of the Loan" class="form-control"  type="date">
          </div>
        </div>
      </div>

      <div class="form-group">
        <label class="col-md-4 control-label" >End Date</label> 
          <div class="col-md-4 inputGroupContainer">
          <div class="input-group">
        <span class="input-group-addon"><i class="glyphicon glyphicon-calendar"></i></span>
        <input name="end_date" placeholder="End Date of Loan" class="form-control"  type="date">
          </div>
        </div>
      </div>


<!-- Text input-->
<div class="form-group">
    <label class="col-md-4 control-label">E-Mail</label>  
      <div class="col-md-4 inputGroupContainer">
      <div class="input-group">
          <span class="input-group-addon"><i class="glyphicon glyphicon-envelope"></i></span>
    <input name="email" placeholder="E-Mail Address" class="form-control"  type="text">
      </div>
    </div>
  </div>
  
  
  <!-- Text input-->
         
  <div class="form-group">
    <label class="col-md-4 control-label">Contact No.</label>  
      <div class="col-md-4 inputGroupContainer">
      <div class="input-group">
          <span class="input-group-addon"><i class="glyphicon glyphicon-earphone"></i></span>
    <input name="phone" placeholder="+91" class="form-control" type="text">
      </div>
    </div>
  </div>

    <!-- Select Basic -->
    
    <!-- Success message -->
    <div class="alert alert-success" role="alert" id="success_message">Success <i class="glyphicon glyphicon-thumbs-up"></i> Success!.</div>
    
    <!-- Button -->
    <div class="form-group">
      <label class="col-md-4 control-label"></label>
      <div class="col-md-4"><br>
        &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<button type="submit" class="btn btn-warning" >&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbspSUBMIT <span class="glyphicon glyphicon-send"></span>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</button>
      </div>
    </div>
    
    </fieldset>
    </form>
    </div>
		</div><!-- /.container -->
		
</body>
</html>