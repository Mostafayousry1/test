<!-- 
include_once '';
$register= new Register();
if (isset($_post["submit"])){
    $result=$register->registration($_POST["type"],$_POST["age"],$_POST["fname"],$_POST["lname"],$_POST["address"],$_POST["username"],$_POST["phone"],$_POST["email"],$_POST["password"],$_POST["confirmpassword"]);
    if ($result ==1){
        echo 
        "<script> alert('sucesss');</script>";
    }
    elseif($result ==10){
        echo
         "<script> alert('username or email has already taken');</script>";
    }
   elseif ($result ==100){
    echo 
    "<script> alert('username or email has already taken');</script>";
    }


}
 -->





<!DOCTYPE html>
<html lang="en">
<head>
        <link rel="stylesheet" href="bootstrap.min.css">
    </head>

    <body>
        <nav class="navbar navbar-dark bg-dark">
            <a class="navbar-brand" href="#">
            <img src="download (1).png" alt="" width="65" height="70">

            </a>
            <form action="index.php" method="post" class="form-inline" style="margin:0;">
                <button class="btn btn-outline-success my-2 my-sm-0" type="submit" name="submitLogout">logout</button>
            </form>
        </nav>

        <div class="container rounded bg-white mt-5 mb-5">
            <div class="row">

                <div class="col-md-12 border-right border-left">
                    <div class="p-3 py-5">
                        <div class="d-flex justify-content-between align-items-center mb-3">
                            <h4 class="text-right">Student Profile Information</h4>
                        </div>

                        <form action="../controller/AddUserController.php" method="post" enctype="multipart/form-data">

                            <div class="row mt-2">
                                <div class="col-md-6"><label class="labels">Name</label><input type="text" name="s_fname" class="form-control"></div>
                                <div class="col-md-6"><label class="labels">Surname</label><input type="text" name="s_lname" class="form-control"></div>
                            </div>
                            <div class="row mt-4">
                                <div class="col-md-12"><label class="labels">Username</label><input type="text" name="s_username" class="form-control"></div>
                                <div class="col-md-12"><label class="labels">Password</label><input type="password" name="s_password" class="form-control"></div>
                            </div>
                            <div class="row mt-4">
                                <div class="col-md-12"><label class="labels">Email</label><input type="text" name="s_email" class="form-control"></div>
                                <div class="col-md-12"><label class="labels">Age</label><input type="text" name="s_age" class="form-control"></div>
                                <div class="col-md-12"><label class="labels">Mobile Number</label><input type="text" name="s_phone" class="form-control"></div>
                                <div class="col-md-12"><label class="labels">address</label><input type="text" name="s_address" class="form-control"></div>
                            </div>
                            <div class="row mt-4">
                                <div class="col-md-12"><input type="file" name="file"></div>
                            </div>
                            <div class="mt-5 text-center"><input class="btn btn-primary profile-button" type="submit" value="add professor" name="submit2"></div>
                            <div class="mt-5 text-center"><input class="btn btn-primary profile-button" type="submit" value="add Student" name="submit"></div>
                    </div>
                    
                </div>

            </div>
        </div>
    </body>


 </html>