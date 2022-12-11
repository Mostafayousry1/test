

  <?php 
session_start();
if($_SESSION['username'] && $_SESSION['type'] == "admin"||"student")
{?>

<?php 
	include_once '../include/DatabaseClass.php';		
	$db = new database();
	
	$sql = "SELECT * FROM course ";
	$result = $db->display($sql);
	$numrows = $db->check($sql);

	?>
	
<head>
	<link rel="stylesheet" href="../bootstrap-4.6.1-dist/css/bootstrap.min.css">
  <link rel="stylesheet" href="../css/main.css">
</head>

<body>
	<nav class="navbar navbar-dark bg-dark">
        <a class="navbar-brand" href="#">
        <img src="../images/Assets/download (1).png" alt="" width="65" height="70">
            hi, <?php echo $_SESSION['fname'] . " " . $_SESSION['lname']; ?>

        </a>
		<form action="admin_home.php" method="post" class="form-inline" style="margin:0;">
			<button class="btn btn-outline-success my-2 my-sm-0" type="submit" name="submitLogout">Home</button>
		</form>
		<form action="../controller/LogoutController.php" method="post" class="form-inline" style="margin:0;">
			<button class="btn btn-outline-success my-2 my-sm-0" type="submit" name="submitLogout">Logout</button>
		</form>
    </nav>

	<div class="alert alert-success" style="display:none;" id="success">
		<strong>removed from database</strong>
	</div>
	
	<div class="container mt-5">
<?php 

    if (!$numrows) {
        echo '<p>No results found.</p>';
    }
	else {
    ?>
		<table class="table">
		  <thead>
			<tr>
			  <th scope="col">Code</th>
			  <th scope="col">Name</th>
			  <th scope="col">Discreption</th>
        <th scope="col">level</th>

			</tr>
		  </thead>
		  <tbody>
		    <?php for ($x = 0; $x < $numrows; $x++) { ?>
			<tr code="record_<?php echo $result[$x]['code']; ?>">
			  <td><?php echo $result[$x]['code']; ?></td>
			  <td><?php echo $result[$x]['name']; ?></td>
			  <td><?php echo $result[$x]['discpretion']; ?></td>
        <td><?php echo $result[$x]['level']; ?></td>
			</tr>
			<?php } ?>
		  </tbody>
		</table>
		<?php
		} 
		$db->conn->close();
		?>
	<div>
	
	<script src="../js/jquery-3.6.0.min.js"></script>
	<script src="../css/bootstrap-4.6.1-dist/js/bootstrap.min.js"></script>
  <footer class="footer">
        <p class="footer-title">Copyrights @ <span>Helwan Team</span></p>
        </div>
    </footer>
    
</body>


<?php 
}
else
{
	header("location:../index.php");
}
?>