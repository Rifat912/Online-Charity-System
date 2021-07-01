<!Doctype html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>Registration Page</title>
		<script type="text/javascript"> 

        function test_str() { 

            var res; 

            var str = 

                document.getElementById("t1").value; 

            if (str.match(/[a-z]/g) && str.match( 

                    /[A-Z]/g) && str.match( 

                    /[0-9]/g) && str.match( 

                    /[^a-zA-Z\d]/g) && str.length >= 8) 
					
 
             return true;
            else 
                alert("Weak password");
                return false;
               var str2=document.getElementById("t2").value; 
             var phoneno = /^\d{10}$/;
  if((str2.match(phoneno))
        {
      return true;
        }
      else
        {
        alert("message");
        return false;
        }

        } 

    </script>

       
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
<div class="loginbox">
<h2>Register here </h2>
<form method="post" name="myform" onsubmit="return test_str()" action="Db_Registration.php">
Full Name: <input type="text" name="Name" placeholder="Enter
Name" class="txtemail" required/>
Email id :<input type="email"  name="Email_Id" placeholder="Enter
Email" class="txtemail" required/>
Mobile : <input type="number"  name="phone" id="t2" placeholder="Enter
MobileNo" class="txtemail" required/>
Username: <input type="text" name="name2"placeholder="Enter
username" class="txtemail" required/>
Password:<input type="password" id="t1" name="pass" placeholder="Enter
password" class="txtpass" required/>

ReEnter Password: <input type="password" name="Cpass"
placeholder="Enter username" class="txtemail" required/>
Address: <input type="text" name="Add1"
placeholder="Enter Address" class="txtemail" required/>
<input type="Submit" class="btnsubmit"
value="Submit"name="save1" />
</form>
</div>
</body>
</html>