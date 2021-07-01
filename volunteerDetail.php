
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>Volunteer Page</title>
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
height:720px;
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
color:White;
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
<h2>Apply Now</h2>
<form method="post" action="Db_volunteer.php">
Full Name: <input type="text" name="Name" placeholder="Enter
Name" class="txtemail"/>
Email_id :<input type="email"  name="Email_Id" placeholder="Enter
Email" class="txtemail"/>
Mobile : <input type="text"  name="phone" placeholder="Enter
MobileNo" class="txtemail"/>
Position Applied For: <input type="text" name="Position"placeholder="Enter
Position" class="txtemail"/>
Message:<input type="text" name="Message" placeholder="Enter
Message" class="txtpass"/>

<input type="Submit" class="btnsubmit"
value="Submit"name="save1"/>
</form>
</div>
</body>
</html>