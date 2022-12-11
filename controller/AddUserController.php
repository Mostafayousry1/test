<?php

if(isset($_POST["submit"])){


	if(isset($_FILES))
    {
		
		@$file = $_FILES["file"];
        $allowedExts = array("jpg", "png");
        $maxSize = 1024000;
        $destination = "../uploads/stdimg/";

		include '../models/UploadClass.php';
        $upload = new upload($file, $allowedExts, $maxSize, $destination);
		$info['photo'] = $upload->updateimg('file');

	}
	 else
	{		
		echo"error update img";
	}


    $info['username']=$_POST['s_username'];
    $info['password'] = $_POST['s_password'];
    $info['type'] = 'student';
    $info['fname'] = $_POST['s_fname'];
    $info['lname'] = $_POST['s_lname'];
	$info['phone'] = $_POST['s_phone'];
    $info['address'] = $_POST['s_address'];
    $info['email'] = $_POST['s_email'];
	$info['age'] = $_POST['s_age'];
	
	include'../models/UsersClass.php';
	$student = new users();
	$student = $student->addUser($info);

	if($student)
	{
		echo'Data is stored!';   
    }
    else 
    {
		echo 'Data is not stored!. The username is already used.';
	}
   
   
}

elseif(isset($_POST["submit2"])){


	if(isset($_FILES))
    {
		
		@$file = $_FILES["file"];
        $allowedExts = array("jpg", "png");
        $maxSize = 1024000;
        $destination = "../uploads/stdimg/";

		include '../models/UploadClass.php';
        $upload = new upload($file, $allowedExts, $maxSize, $destination);
		$info['photo'] = $upload->updateimg('file');

	}
	 else
	{		
		echo"error update img";
	}


    $info['username']=$_POST['s_username'];
    $info['password'] = $_POST['s_password'];
    $info['type'] = 'professor';
    $info['fname'] = $_POST['s_fname'];
    $info['lname'] = $_POST['s_lname'];
	$info['phone'] = $_POST['s_phone'];
    $info['address'] = $_POST['s_address'];
    $info['email'] = $_POST['s_email'];
	$info['age'] = $_POST['s_age'];
	
	include'../models/UsersClass.php';
	$professor = new users();
	$professor = $professor->addUser2($info);

	if($professor)
	{
		echo'Data is stored!';   
    }
    else 
    {
		echo 'Data is not stored!. The username is already used.';
	}
   
   
}
elseif(isset($_POST["submit3"])){


	if(isset($_FILES))
    {
		
		@$file = $_FILES["file"];
        $allowedExts = array("jpg", "png");
        $maxSize = 1024000;
        $destination = "../uploads/stdimg/";

		include '../models/UploadClass.php';
        $upload = new upload($file, $allowedExts, $maxSize, $destination);
		$info['photo'] = $upload->updateimg('file');

	}
	 else
	{		
		echo"error update img";
	}


    $info['code']=$_POST['code'];
    $info['name'] = $_POST['name'];
    $info['discpretion'] = $_POST['discpretion'];
    $info['level'] = $_POST['level'];
	include'../models/UsersClass.php';
	$code = new users();
	$code = $code->course($info);

	if($code)
	{
		echo'Data is stored!';   
    }
    else 
    {
		echo 'Data is not stored!. The username is already used.';
	}
   
   
}



	
	
?>