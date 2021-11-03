<?php
if(isset($_POST['submit'])){
    $to = $_POST['ToField']; // this is receiver's address
    $subject = $_POST['SubjectField']; // this is the subject line
    $body = $_POST['bodyField'];
	
    mail($to,$subject,$body);
    echo "Thank you, we will contact you in 1-2 business days.";
    }
?>

<!Doctype html>
<html>

<head>

	<meta charset="utf-8">
	<title>CPT497 Patrick Davis Contact Page</title>
	<style>
	@import url("styles/main-styles.css");
	@import url("styles/contact-style.css");
	body{
		background-color: #faf2e4;
		margin: 0 10%;
		font-family: sans-serif;
		}
	h1 {
		text-align: center;
		font-family: serif;
		font-weight: normal;
		text-transform: uppercase;
		border-bottom: 1px solid #57b1dc
		margin-top: 30px;
		}
	h2 {
		color: #d1633c;
		font-size: 1em;
		}

	</style>

</head>

<body>
	<header>
	<nav>
			<ul class="topNav">
				<li class="topNav"><a href="index.html"> Home</a></li>
				<li class="topNav"><a href="Commercial.html"> Commercial Aircraft</a></li>
				<li class="topNav"><a href="Business.html"> Business-Class Aircraft</a></li>
				<li class="topNav"><a href="Space.html"> Space Technology</a></li>
				<li class="topNav"><a href="Advanced.html"> Advanced Technology</a></li>
				<li class="topNav"><a href="Defence.html"> Defensive Technologies</a></li>
				<li class="topNav active"><a href=""> Contact Us</a></li>
			</ul>
	<nav>
	</header>
<main>
	<div class="container">
	  <form name="contactForm" action="" method="post">

		<label for="To">To:</label>
		<input type="text" id="ToField" name="ToField" placeholder="To:">

		<label for="Subject">Subject</label>
		<input type="text" id="SubjectField" name="SubjectField" placeholder="Subject:">

		<label for="body">Body</label>
		<textarea id="bodyField" name="bodyField" placeholder="Write something.." style="height:200px"></textarea>

		<input type="submit" name="submit" value="Submit">

	  </form>
	</div>
</main>
	<footer>
			<a href="index.html"> Home </a>
	</footer>
</body>
</html>