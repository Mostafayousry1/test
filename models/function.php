<?php
// session_start();
// class connection {
//     public $host ="localhost";
//     public $user ="root";
//     public $password="";
//     public $db_name="example2";
//     public $conn;


//     public function __construct(){
//         $this->conn=mysqli_connect($this->host,$this->user,$this->password,$this->db_name);
//     }

// }
//     class Register extends connection{
//         function registration ($type,$username,$email,$password,$confirmpassword,$fname,$lname,$address,$age,$phone){
//             $duplicate =mysqli_query($this->conn,"SELECT * FROM user WHERE usename='$username' OR email ='$email' OR password='$password' OR firstname='$fname' OR lastname='$lname' OR address='$address' OR age='$age'  OR phone='$phone' ");
//             if (mysqli_num_rows($duplicate)> 0){
//                 return 10;
//                 // username or email has been taken
        
//             }
//             else {
//                 if ($password==$confirmpassword){
//                     $query="INSERT INTO user  VALUES ('student','$username','$email','$password',$fname,$lname,$address,$age,$phone)";
//                     mysqli_query($this->conn,$query);
//                     return 1;
//                     //regirstion success
        
//                 }
//                 else {
//                     return 100;
//                     //password doesnt match
//                 }
//             }
        
//         }
//     }



?>