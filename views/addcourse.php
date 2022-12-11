<?php
session_start();
if ($_SESSION['username'] && $_SESSION['type'] == "admin") { ?>

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
            <a href="admin_home.php" class="btn btn-outline-success my-2 my-sm-0" type="submit"  >Home</a>
            <form action="../controller/LogoutController.php" method="post" class="form-inline" style="margin:0;">
                <button class="btn btn-outline-success my-2 my-sm-0" type="submit" name="submitLogout">LogOut</button>
            </form>
        </nav>

        <div class="container rounded bg-white mt-5 mb-5">
            <div class="row">

                <div class="col-md-12 border-right border-left">
                    <div class="p-3 py-5">
                        <div class="d-flex justify-content-between align-items-center mb-3">
                            <h4 class="text-right">Information Course</h4>
                        </div>

                        <form action="../controller/AddUserController.php" method="post" enctype="multipart/form-data">

                            <div class="row mt-2">
                                <div class="col-md-6"><label class="labels">Name</label><input type="text" name="name" class="form-control"></div>
                                <div class="col-md-6"><label class="labels">Code</label><input type="text" name="code" class="form-control"></div>
                            </div>
                            <div class="row mt-4">
                                <div class="col-md-12"><label class="labels">discpretion</label><input type="text" name="discpretion" class="form-control"></div>
                                <div class="col-md-12"><label class="labels">Level</label><input type="text" name="level" class="form-control"></div>
                            </div>

                            <div class="mt-5 text-center"><input class="btn btn-primary profile-button" type="submit" value="add course" name="submit3"></div>
                    </div>
                    
                </div>

            </div>
        </div>

        
        <footer class="footer">
        <p class="footer-title">Copyrights @ <span>Helwan Team</span></p>
        </div>
    </footer>
    

    </body>


<?php
} else {
    header("location:../index.php");
}
?>