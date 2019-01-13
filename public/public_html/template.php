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
<li id="login">
<?php
if(isset($_SESSION['logged'])) {
	print("<a href='logout.php'>Welcome ".$_SESSION['name']."! &nbsp;Logout</a>");
}
else {
	print("</p><a href='login.php' style='display:block;float:left;color:#D2D3D7;'>Login</a>");
}
?>
</li>
</ul></nav>
</header>
<section>

</section>
<aside>
<img src="images/300.jpeg" alt="Random Image" />
</aside>
<footer>
Vulnerable Web App &copy; Steven Karschnia 2019
</footer>
</body>
</html>