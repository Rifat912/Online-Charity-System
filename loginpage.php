<?php 

include 'config.php';

session_start();

error_reporting(0);

if (isset($_SESSION['username'])) {
    header("Location:Home1.php");
}

if (isset($_POST['save1'])) {
	$email = $_POST['username'];
	$password = $_POST['password'];

	$sql = "SELECT * FROM signup_table WHERE name2='$email' AND pass='$password'";
	$result = mysqli_query($conn, $sql);
	if ($result->num_rows > 0) {
		$row = mysqli_fetch_assoc($result);
		$_SESSION['username'] = $row['name2'];
		header("Location: Home1.php");
	} else {
		echo "<script>alert('Ooops! Username or Password is Wrong.')</script>";
	}
}

?>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>Login Page</title>
    </head>

<style>
body{
margin:0;
padding:0;
font-family: Sans-Serif;
color:black;
font-size:20px;
font-weight:bold;
background: url(CHAM13.jpg) no-repeat center center fixed; 
  -webkit-background-size: cover;
  -moz-background-size: cover;
  -o-background-size: cover;
  background-size: cover;
}

.loginbox{
position: absolute;
top:25%;
left:30%;
transform: translate (-50%,-50%);
width:450px;
height:352px;
padding: 80px 40px;
box-sizing: border-box;
}
h2{
padding: 0;
margin:0;
text-align: center;
color: White;
}
.txtemail,.txtpass,.btnsubmit{
width:100%;
margin-bottom: 20px;
}
.txtemail,.txtpass{
border:none;
border-bottom: 1px solid #fff;
outline: none;
height: 40px;
color:#fff;
font-size: 16px;
background-color: transparent;
}
.btnsubmit{
border: none;
outline:none;
height:40px;
font-size: 16px;
color: #fff;
background-color: rgb(255,9,9);
cursor: pointer;
border-radius: 20px;
transition:-3s ease-in-out;
}
.btnsubmit:hover{
background-color: rgb(255,217,9);
}
</style>
</head>
<body>
<div class="loginbox">
<h2>login here </h2>
<form method="post" >
Username: <input type="text"  name="username" Placeholder="Enter
   username" class="txtemail"value="<?php echo $email; ?>"/>
Password:<input type="password" name="password" placeholder="Enter
   password" class="txtpass"value="<?php echo $_Password; ?>"/>
<input type="Submit" class="btnsubmit"
value="Submit" name="save1"/>
</form>
</div>
</body>
</html>