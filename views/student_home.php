<?php 
session_start();
if($_SESSION['username'] && $_SESSION['type'] == "student")
{?>

<head>
	<link rel="stylesheet" href="../bootstrap-4.6.1-dist/css/bootstrap.min.css">
</head>

<body>
	<nav class="navbar navbar-dark bg-dark">
        <a class="navbar-brand" href="#">
        <img src="../images/Assets/download (1).png" alt="" width="65" height="70">
            hi, <?php echo $_SESSION['fname'] . " " . $_SESSION['lname']; ?>

        </a>
        <a href="studentcourse.php" class="btn btn-outline-success my-2 my-sm-0" type="submit"  >Courses Available</a>
		<form action="../controller/LogoutController.php" method="post" class="form-inline" style="margin:0;">
			<button class="btn btn-outline-success my-2 my-sm-0" type="submit" name="submitLogout">Logout</button>
		</form>
    </nav>
	
	<div class="container rounded bg-white mt-5 mb-5">
    <div class="row">
        <div class="col-md-4 border-right border-left">
            <div class="d-flex flex-column align-items-center text-center p-3 py-5">
			<?php 
				$url = $_SESSION['photo'];
				echo '<img class="rounded-circle mt-5" width="180px" alt="your photo" src="'.$url.'" />'; //to show img 
			?>
			<br>
				<span class="font-weight-bold"><?php echo $_SESSION['fname'] . " " . $_SESSION['lname']; ?></span>
				<span class="text-black-50"><?php echo $_SESSION['email']; ?></span>
			</div>
        </div>
        <div class="col-md-8 border-right">
            <div class="p-3 py-5">
                <div class="d-flex justify-content-between align-items-center mb-3">
                    <h4 class="text-right">Profile Information</h4>
                </div>
                <div class="row mt-2">
                    <div class="col-md-6"><label class="labels">Name</label><input type="text" class="form-control" disabled value="<?php echo $_SESSION['fname']; ?>"></div>
                    <div class="col-md-6"><label class="labels">Surname</label><input type="text" class="form-control" disabled value="<?php echo $_SESSION['fname']; ?>"></div>
                </div>
                <div class="row mt-3">
                    <div class="col-md-12"><label class="labels">Email</label><input type="text" class="form-control" disabled value="<?php echo $_SESSION['email']; ?>"></div>
					<div class="col-md-12"><label class="labels">Age</label><input type="text" class="form-control" disabled value="<?php echo $_SESSION['age']; ?>"></div>
                    <div class="col-md-12"><label class="labels">Mobile Number</label><input type="text" class="form-control" disabled value="<?php echo $_SESSION['phone']; ?>"></div>
                    <div class="col-md-12"><label class="labels">Address</label><input type="text" class="form-control" disabled value="<?php echo $_SESSION['address']; ?>"></div>
        </div>
        
    </div>
</div>
</body>


<?php 
}
else
{
	header("location:../index.php");
}
?>