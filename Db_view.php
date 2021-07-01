<html>
 <head>
 <title> Display.php </title>
 </head>
 <body bgcolor="aabbcc"> 
 <?php $name1=$_REQUEST["name"];  
  $password1=$_REQUEST["password1"];
  define('DB_SERVER', 'localhost:3308');
  define('DB_USERNAME', 'pma');
  define('DB_PASSWORD', ''); 
  define('DB_DATABASE', 'mysql1'); 
   $db = mysqli_connect(DB_SERVER,DB_USERNAME,DB_PASSWORD,DB_DATABASE);
   $query= "insert into user values('$name1','$password1')";
   $enter= mysqli_query($db,$query); 
   $query="select * from user";
   $result=mysqli_query($db,$query);
   
   <h3> Page to display the stored data </h3>
   <table border="1"> 
   <tr> 
   <th> NAME </th> <th> Password </th>
   </tr>
   <?php
   while($array=mysqli_fetch_row($result))
   { ?>
   <tr> 
   <td><?echo $array[0];?></td>
   <td><?echo $array[1];?></td> 
   </tr> <?php endwhile; ?> 
   <?php mysqli_free_result($result);
   }?>?> <?php mysqli_close($db); ?>
   </table> 
   </body>
   </html>