
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>JSP Page</title>
    </head>

<style>
body{
margin:0;
padding:0;
font-family: Sans-Serif;
}
.loginbox{
position: absolute;
top:10%;
left:35%;
transform: translate (-50%,-50%);
width:350px;
height:352px;
padding: 80px 40px;
box-sizing: border-box;
background: #00909E;
}
h2{
padding: 0;
margin:0;
text-align: center;
color: rgb(255,217,9);
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
<form method="post" action="Db_connection.php">
Username: <input type="text"  name="name" Placeholder="Enter
   username" class="txtemail"/>
Password:<input type="password" name="password1" placeholder="Enter
   password" class="txtpass"/>
<input type="Submit" class="btnsubmit" name="save" value="Submit"/>
</form>
</div>
</body>
</html>