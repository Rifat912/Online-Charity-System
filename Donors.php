<html>
<head><style>table {
  font-family: Arial, Helvetica, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

 td, th {
  border: 1px solid #ddd;
  padding: 8px;
}
tr:nth-child(even){background-color: #D3D3D3;}

tr:hover {background-color: #ddd;}
th {
  padding-top: 12px;
  padding-bottom: 12px;
  text-align: left;
  background-color: #008080;
  color: white;
}
h1{color:#008080;text-align:center;}
</style>
</head>
<body>
<h1>Donors Information</h1>
<table>
<tr>
    <th>Donor Name</th>
    <th>Email Id</th>
    <th>Donation Amount</th>
<th>City</th>
<th>Pincode</th>
<th>State</th>
<th>Pan Card Details</th>
  </tr>
<?php
 define('DB_SERVER', 'localhost:3309');
   define('DB_USERNAME', 'root');
   define('DB_PASSWORD', '');
   define('DB_DATABASE', 'charity_system');
   $db = mysqli_connect(DB_SERVER,DB_USERNAME,DB_PASSWORD,DB_DATABASE);

$records = mysqli_query($db,"select * from donation_details"); // fetch data from database
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
while($data = mysqli_fetch_array($records))
{
    $var1 = $data['Name'];
	$var2 = $data['Email_id'];
	$var4 = $data['Amount'];
	$var5 = $data['City'];
	$var6 = $data['Pincode'];
	$var7 = $data['State'];
	$var3 = $data['Pan'];
    //echo "Encrypted Text : ".$var."<br><br><br>";

    
    
    $decrypted_txt1 = encrypt_decrypt('decrypt', $var1);
	$decrypted_txt2 = encrypt_decrypt('decrypt', $var2);
	$decrypted_txt3 = encrypt_decrypt('decrypt', $var3);

?>


  <tr>
    <td><?php echo $decrypted_txt1; ?></td>
    <td><?php echo $decrypted_txt2; ?></td>
    <td><?php echo $var4; ?></td>
	<td><?php echo $var5; ?></td>
	<td><?php echo $var6; ?></td>
	<td><?php echo $var7; ?></td>


<td><?php echo $decrypted_txt3; ?></td>
  </tr>	
  <?php
}
?> 
</table>

<?php mysqli_close($db); // Close connection ?>

</body>
</html>
    