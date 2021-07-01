
<?php

$Name= "";
$Email_Id="";
$Amount="";
$City="";
$Pincode="";
$State="";
$Pan="";
$amt1="";
$amt1 = $_GET['Amount'];
$db = mysqli_connect('localhost:3309','root','','charity_system');
if(isset($_POST['save1'])){
	
        $Name = $_POST['Name'];
         $Email_Id = $_POST['Email_Id'];
		 $Pan = $_POST['Pan'];
     

        
        
        function encrypt_decrypt($action, $string) {
            $output = false;

            $encrypt_method = "AES-256-CBC";
            $secret_key = 'sadgjakgdkjafkj';
            $secret_iv = 'This is my secret iv';

            $key = hash('sha256', $secret_key);
            
            $iv = substr(hash('sha256', $secret_iv), 0, 16);

            if ( $action == 'encrypt' ) {
                $output = openssl_encrypt($string, $encrypt_method, $key, 0, $iv);
                $output = base64_encode($output);
            } else if( $action == 'decrypt' ) {
                $output = openssl_decrypt(base64_decode($string), $encrypt_method, $key, 0, $iv);
            }

            return $output;
        }
            $encrypted_txt = encrypt_decrypt('encrypt', $Name);  
        $Name1=$encrypted_txt;
		$encrypted_txt = encrypt_decrypt('encrypt', $Email_Id); 
		$Email_Id1=$encrypted_txt;
        $encrypted_txt = encrypt_decrypt('encrypt', $Pan); 
		$Pan1=$encrypted_txt;
$Amount = $_POST['Amount'];
$City = $_POST['City'];
$Pincode = $_POST['Pincode'];
$State = $_POST['State'];

$query = "INSERT INTO donation_details(Name,Email_id,Amount,City,Pincode,State,Pan)VALUES('$Name1','$Email_Id1','$Amount','$City','$Pincode','$State','$Pan1')";
mysqli_query($db,$query);
session_start();
		  $_SESSION['Amount'] = $Amount;
header('location: payment1.php');
}
?>