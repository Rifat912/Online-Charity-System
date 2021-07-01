<!DOCTYPE html>
<html>
<head>
	<title>Donate Now</title>
	<link rel="stylesheet" type="text/css" href="cssstyle.css">
	<link href="https://fonts.googleapis.com/css?family=Poppins:600&display=swap" rel="stylesheet">
	<script src="https://kit.fontawesome.com/a81368914c.js"></script>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<style>
body{
margin:0;
padding:0;
font-family: Sans-Serif;
color:black;

}
.box{
position: absolute;
left:50%;
padding-top:0px;
transform: translate (-50%,-50%);
width:450px;
height:300px;
padding: 30px 20px;
box-sizing: border-box;
}
h2{
padding: 0;
margin:0;
color: White;
}
.txtemail,.txtpass,.btnsubmit{
width:100%;
margin-bottom: 10px;
}
.txtemail,.txtpass{
border:none;
border-bottom: 2px solid #001C57;
outline: none;
height: 40px;
color:black;
font-size: 16px;
background-color: transparent;
}
.btnsubmit{
border: none;
outline:none;
height:40px;
font-size: 16px;
color: #fff;
background-color: #001C57;
cursor: pointer;
border-radius: 20px;
transition:-3s ease-in-out;
}
.btnsubmit:hover{
background-color: rgb(255,217,9);
}
.container{
	padding:0;
	padding-left: 10px;
margin:0;
	border: 20px solid #001C57;


}
</style>
</head>
<body>
	
	<div class="container">
		<div class="img">
			<img src="123456.jpg">
		</div>
		<div class="box">
			<form method="post" action="Db_encrypt1.php">
Full Name: <input type="text" name="Name" placeholder="Enter
Name" class="txtemail" required/>
Email id :<input type="email"  name="Email_Id" placeholder="Enter
Email" class="txtemail" required/>
Amount: <input type="number" name="Amount"placeholder="Enter
Amount" id="amt1" class="txtemail" required/>
<script>var amt = document.getElementById("amt1");
sessionStorage.setItem("amt", amt);</script>
City:<input type="text" name="City" placeholder="
Enter City" class="txtemail" required/>
Pincode/Zip/Area:<input type="number" name="Pincode" placeholder="
Enter Pincode" class="txtemail" required/>
State:<input type="text" name="State" placeholder="
Enter State" class="txtemail" required/>
Pan Card #(incase amount more than INR 50000):<input type="text" name="Pan" placeholder="
Enter Pan Details" class="txtemail" required/>
<input type="Submit" class="btnsubmit"
value="DONATE" name="save1"  />
</form>
        </div>
    </div>
    <script type="text/javascript" src="javascript1.js"></script>
</body>
</html>