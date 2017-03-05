<html>
    <head>
        <title>Registration Page</title>
	<meta name="viewport"content="width=device-width,initial-scale=1.0">
    </head>
    <body>
	<link rel="stylesheet" type ="text/css"href="page.css"/>
	<div id="container">
	<h1>REGISTER TO ACCESS</h1>
	<img src="kemri2.jpg" width="104" height="142">
	<h2>Registration Page</h2>
        <form action="register.php" method="POST">
             <input type="text" name="username"placeholder="Username" required="required" /> <br/><br/>
		     <input type="text" name="email"placeholder="Email" required="required" /> <br/><br/>
             <input type="password" name="password"placeholder="password" required="required" /> <br/><br/>
           <input type="submit" value="Register"/><br/><br/>
		   <a href="index.php">Click here to go back</a><br/><br/>
		   
		   </div>
        </form>
    </body>
</html>
<?php
if($_SERVER["REQUEST_METHOD"] =="POST"){
	$username=@mysql_real_escape_string($_POST['username']);
	$email=@mysql_real_escape_string($_POST['email']);
	$password= @mysql_real_escape_string($_POST['password']);
	$bool=true;
	
	@mysql_connect("localhost","root","") or die(@mysql_error());//connect to server
	@mysql_select_db("dream_db") or die("cannot connect to database");//connect to database
	$query=@mysql_query("select * from users");//query the users table
	while($row=@mysql_fetch_array($query))//display all rows from query 
	{	
		$table_users=$row['username'];//the first username row is passed on to $table_users,and so on until the query is finished
		if($username==$table_users)//checks if there are any matching fields
		
		{
			
			$bool=false;//sets boolto false
			print'<script>alert("username has been taken!");</script>';//prompts the user
			print'<script>window.location.assign("register.php");</script>';//redirect to register.php
		}
	
	}
	
	if($bool)//checks if bool is true
	{
		mysql_query("INSERT INTO users(username,email,password) VALUES('$username','$email','$password')");//Insert the value to table users
		print'<script>alert("successfully Registered!");</script>';//prompts the user
		print'<script>window.location.assign("register.php");</script>';//redirect to register.php
		}
}
?>