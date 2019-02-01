<!DOCTYPE html>
<html>
<head>
	<title>online voting system</title>
	<style type="text/css">
		input[type="text"]
		{
			border: 2px solid red;
			height: 50px;
			width:90%;
			border-radius:2px;
			padding:5px;
			margin:5px;
		}
		input[type="date"]
		{
			border: 2px solid red;
			height: 50px;
			width:90%;
			border-radius:2px;
			padding:5px;
			margin:5px;
		}

		input[type="button"]
		{
			border: 2px solid red;
			height: 50px;
			width:90%;
			border-radius:2px;
			padding:5px;
			margin:5px;
			background-color:red;
			text-color: green;
		}
		

	</style>
	<div class="header" style="background-color:yellow;width: ;height: 50px; margin:20px;padding: 20px; "><marquee><h3> CAST YOUR VOTE HERE</h3> </marquee>
</di>
</head>
<body bgcolor="green">

<center>
<div class="form"  style="background-color:aqua;width:600px ;height: 600px; margin:20px;padding: 20px; ">
<form method="" action="">
<label>ID NUMBER</label><input type="text" name="" placeholder="enter your id number">
<label>DATE</label><input type="date" name="date" placeholder="enter date of voting">
<div>
<label>select aspiran</label>
        <div class="">
      <select class="selectpicker form-control" name="typofbuss" required="true">
        <option>hon ngeno</option>
        <option>joseph</option>
        <option>peter</option>
        <option>cross amphan</option>
      </select>
      </div>
    </div>
    <div> <input type="button" value="VOTE"></div>
</form>
</div>
</center>
</body>
</html>