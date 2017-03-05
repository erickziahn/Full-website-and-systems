<html>
    <head>
        <title>Login Page</title>
		<meta name="viewport"content="width=device-width,initial-scale=1.0">
    </head>
    <body>
	<link rel="stylesheet" type ="text/css"href="boostrap.css"/>
	<link rel="stylesheet" type ="text/css"href="page.css"/>
	<div id="container">
	<h1>Staff Clinic KEMRI Welcome Trust</h1>
	<img src="logo.jpg" width="104" height="142">
        <h2>Login Page</h2>
        <form action="checklogin.php" method="POST">
          <input type="text" name="username"placeholder="Username" required="required"><br/><br/>
		  <input type="text" name="email"Placeholder="Email" required="required"><br/><br/>
          <input type="password" name="password"placeholder="password" required="required"><br/><br/>
           <input type="submit" value="Login"/><br/><br/>
		   <a href="index.php">Click here to go back<a/><br/><br/>
		   
		   </div>
        </form>
    </body>
</html>