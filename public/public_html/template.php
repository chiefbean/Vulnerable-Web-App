<?php
session_start();
$_SESSION['page'] = "template.php";
?>
<html>
<head>
<title>NOT Vulnerable Web App</title>
<link rel="stylesheet" href="style.css" />
</head>
<body>
<header>
<h1>Template For Web App Lab</h1>
<nav><ul>
<li><a href="template.php">Home</a></li>
<li><a href="catalog.php">Catalog</a></li>
<li><a href="comment.php">Comment</a></li>
<?php
if(isset($_SESSION['logged'])) {
	print("<p style='display:block;float:left;margin: 0 0 0 5px;'>Welcome " . 
		$_SESSION['name'] . "! &nbsp;</p><a href='logout.php' 
		style='display:block;float:left;color:#D2D3D7;'>Logout</a>");
}
else {
	print("<a href='login.php' style='display:block;float:left;color:#D2D3D7;'>Login</a>");
}
?>
</ul></nav>
</header>
<section>

</section>
<aside>
<img src="images/300.jpeg" alt="Random Image" />
</aside>
<footer>
Vulnerable Web App &copy; Steven Karschnia 2018
</footer>
</body>
</html>