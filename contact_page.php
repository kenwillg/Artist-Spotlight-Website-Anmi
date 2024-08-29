<!DOCTYPE html>
<html>
<head>
<title>Anmi's Website</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<link rel="shortcut icon" href="favicon.ico" type="image/x-icon">  
<style type="text/css">
@import url('https://fonts.googleapis.com/css2?family=DM+Serif+Display&family=Poppins&display=swap');

* {
	box-sizing: border-box;
}

.header {
	padding: 30px;
	width: 100%;
	text-align: center;
	background-image: url(img1.png);
	opacity: 0.75;
	font-family: 'DM Serif Display', serif;
	font-weight: normal;
	background-attachment: fixed;
	background-repeat: no-repeat;
	margin: 0;
	background-size: 100%;
}
div {
	margin: 0;
}

body {
	font-family: 'Poppins', sans-serif;
	font-size: 14px;
	padding: 0;
	background-color: #F1F1F1;
	font-weight: medium;
	margin: 0;
}

.header h1 {
	font-size: 110px;
	text-align: left;
	margin-left: 5%;
	color: white;
}

.subheader_line {
	width: 45%;
	margin-left: 5%;
	margin-right: auto;
	height: 2px;
}

.black_line {
	width: 65%;
	height: 2px;
	margin-top: -2%;
}

.white_line {
	width: 65%;
	height: 2px;
	margin-top: -2%;
	color: white;
}

.header_socials {
	vertical-align: bottom;
	float: left;
	position: absolute;
	margin-left: 5%;

}

.button_index {
  	background-color:#3399ff;
  	border:none;
  	color:black;
  	padding:10px 12px;
  	text-align:center;
  	text-decoration:none;
  	display:inline-block;
  	font-size:16px;
  	border-radius: 10px;
  	height: 100%;
  	font-family: 'Poppins', sans-serif;
 }

 .button_index:hover {
  	background-color: #99ccff;

 }


.wrapper {
	content: "";
	display: table;
	clear: both;
 }

.footer {
	padding: 20px;
	text-align: center;
	background: rgb(35, 35, 35);
	margin: 0;
}

.singlebodyparagraph {
	text-align: center;
	font-size: 14px;
	font-family: 'Poppins', sans-serif;
	display: block;
	width:50%;
	margin-left: 25%;
}

nav {
	margin-top: -3%;
	display: flex;
	width: 100%;
	align-items: center;
	flex-wrap: wrap;
	padding: 5px 0;
	font-family: 'Poppins', sans-serif;
	font-size: 16px;
	letter-spacing: 2.5px;
}

nav ul {
	flex: 1;
	text-align: right;
	padding-right: 30px;
}

nav ul li {
	display: inline-block;
	list-style: none;
	margin: 10px 30px;
}

nav ul li a{
	color: #000000;
	text-decoration: none;
	position: relative;
}

nav ul li a::after{
	content: '';
	width: 0;
	height: 2px;
	position: absolute;
	bottom: -5px;
	left: 50%;
	transform: translateX(-50%);
	background: black;
	transition: width 0.3s;
}

nav ul li a:hover::after{
	width: 80%;
}

h2.about {
	font-size: 48px;
	text-align: center;
}

h2.portfolio_title {
	font-size: 48px;
	text-align: center;
	color: white;
}

h3 {
	font-size: 36;
	color: white;
	font-weight: lighter;
}

h4 {
	font-size: 24px;
	text-align: center;
}

.socialmedia_logo {
	width: 30px;
	margin-left: 5%;
	margin-right: auto;
}

.logo {
	width: 120px;
}

.row {
  display: -ms-flexbox;
  display: flex;
  -ms-flex-wrap: wrap;
  flex-wrap: wrap;
  padding: 0 4px;
}

.column {
  -ms-flex: 50%;
  flex: 50%;
  padding: 0 4px;
}

.column img {
  margin-top: 8px;
  vertical-align: middle;
}

.reveal{
  position: relative;
  transform: translateY(150px);
  opacity: 0;
  transition: 1s all ease;
}
.reveal.active{
  transform: translateY(0);
  opacity: 1;
}

.web_formtable{
	width: 50%;
	background-color: white;
	font-family: bookAvantGarde;
	color: rgb(35,35,35);
	height: 100%;
	box-shadow: 2px 10px 10px 10px rgba(1, 1, 1, .4);

}
.button_submit {
  background-color:#3399ff;
  border:none; color:white;
  padding:15px 32px;
  text-align:center;
  text-decoration:none;
  display:inline-block;
  font-size:16px;
  border-radius: 10px;
  width: 100%;
 }

.button_submit:hover {
	background-color: #99ccff;

}

.container {
 padding: 16px;
  		}
.center {
 margin: 0;
 margin-left: 35%;

  		}
table,td {
	border-bottom: 2px none;
	border-radius: 10px;
}
	input[type=text], input[type=password], input[type=email]{
 width: 93%;
 padding: 14px;
 margin: 5px 0 22px 0;
 display: inline-block;
 border: none;
 background: #f1f1f1;
 border-radius: 10px;
}

</style>
<script type="text/javascript">
 function reveal() {
  var reveals = document.querySelectorAll(".reveal");
  for (var i = 0; i < reveals.length; i++) {
    var windowHeight = window.innerHeight;
    var elementTop = reveals[i].getBoundingClientRect().top;
    var elementVisible = 150;
    if (elementTop < windowHeight - elementVisible) {
      reveals[i].classList.add("active");
    } else {
      reveals[i].classList.remove("active");
    }
  }
}

window.addEventListener("scroll", reveal);

</script>
</head>
<body>

<div class="web_bg">
<div class="header">
<div style="font-family: 'Poppins', sans-serif;">
	<nav>
		<img src="logo.png" class="logo">
		<ul>
			<li><a href="index.php" class="button_index">RETURN</a></li>
		</ul>
	</nav>
</div>

	<div class="container">
		<div class="center">
			<form action="parsingdatatechnical.php" method="POST">
			<table class="web_formtable" >
				<tr>
					<th style="text-align: center; font-size: 32px; border-bottom:3px solid #f1f1f1;;">Contact Form</th>
				</tr>	
					<tr>
						<td><br></td>
					</tr>
				<tr>
					<th>Full name</th>
				</tr>
				<tr>
					<td><input type="text" name="full_name" placeholder="Enter full name" required></td>
				</tr>
					<tr>
						<td><br></td>
					</tr>
				<tr>
					<th>E-mail</th>
				<tr>
					<td><input type="email" name="email" placeholder="Enter E-mail address" required></td>
				</tr>
				<tr>
						<td><br></td>
					</tr>
				<tr>
					<th>Describe your inquiries and we'll proceed by e-mail.</th>
				</tr>
				<tr>
					<td><textarea name="problem_description" style="width: 100%; resize: none;"></textarea></td>
				</tr>
				<tr>
						<td><br></td>
					</tr>
				<tr>
					 <td><p style="font-size: 12px;">You agree that by submitting this form, you will send your e-mail as contact information.</input> </td>
				</tr>
				<tr>
					<td><a href="#.php"><input class="button_submit" type="Submit" name="tombol_submit"></a></td>
				</tr>
					<tr>
						<td><br></td>
					</tr>

			</table>
			</form>
		</div>
</div>
</div>
</div>

	<div class="footer">
		<h3>Copyright, Kenneth William Gunawan 2022	&#xA9;</h3>
		<p class="singlebodyparagraph" style="color: grey;">Artwork rights reserved to Anmi.</p>
	</div>
</body>
</html>