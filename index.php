<html>
	<head>
		<h3>Haerriz
		</h3>
		<br>
	</head>
	<style>
	h3
	{
		background-color:black;
		color:white;
		margin:auto;
		text-align:center;
	}
	ul
	{
		list-style-type: none;
		margin: 0;
		padding: 0;
		overflow: hidden;
		background-color: #333;
	}

	li
	{
		float: right;
	}

	li a 
	{
		display: block;
		color: white;
		text-align: center;
		padding: 14px 16px;
		text-decoration: none;
	}

	li a:hover:not(.active)
	{
		background-color: #111;
	}

	.active
	{
		background-color: gray;
	}
	.box
	{
		background-color:black;
		color:white;
		width:50%;
		height:100%;
		align:center;
		margin:0 auto;
	}
	img
	{
		background-color:black;
		color:white;
		width:100%;
		height:auto;
		align:center;
		margin:0 auto;
	}
	</style>
	<script>
	</script>
	<body>
		<ul>
			<li><a class="active" href="#feed">Feed</a></li>
			<li><a href="#job">Job</a></li>
			<li><a href="#notification">Notification</a></li>
			<li><a href="#about">About</a></li>
			<li><a href="#profile">My Profile</a></li>
		</ul>
		<br>
		<div class="box">
			<form action="index.php" enctype="multipart/form-data" method="post">
			Select image :
				<input type="file" name="file">
				<input type="submit" value="Upload" name="Submit1"> <br/> 
			</form>
		<?php
		if(isset($_POST['Submit1']))
		{ 
		$filepath = "images/" . $_FILES["file"]["name"];
		 
		if(move_uploaded_file($_FILES["file"]["tmp_name"], $filepath)) 
		{
		echo "<img src=".$filepath." height=auto width=auto />";
		}
		else 
		{
		echo "Error !!";
		}
		} 
		?>
		</div>
	</body>
	<footer>
	</footer>
</html>