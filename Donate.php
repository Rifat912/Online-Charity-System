
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title> Donate </title>
    </head>
       
<style>
body{
margin:0;
padding:0;
font-family: Sans-Serif;
color:white;
background: linear-gradient(60deg, #29323c 0%, #485563 100%);
}
.box{
position: absolute;
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
<div class="box">
<h2>Donate here </h2>
<script src="https://checkout.razorpay.com/v1/checkout.js"></script>
<script
  src="https://code.jquery.com/jquery-3.6.0.min.js"
  ></script>
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
</body>
</html>