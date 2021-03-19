</!DOCTYPE html>
<html>
<head>
	<title>add notification</title>
	<style>
		fieldset{
	background-color: rgba(0,0,0,.5);
    width:200px;
    height:100px;
    margin-left: 40%;
    margin-top: 100px;
    font-size: 20px;
    padding:50px;
	}
	input{
		margin-top:20px;
		margin-left:50px;
		height: 50px;
	}
	.bi
{
	background-image:url("../img/sms9.jpg");
	background-size:cover;
}
h1
{
margin-top:50px;
text-align: center;
	
}
textarea
{
	height:50px;
}
</style>
</head>
<body class="bi">
	<h1>ADD NOTIFICATION</h1>
<form action="<?php echo base_url();?>main/notify_action" method="post">
	<fieldset style="width:50px">
<textarea name="notification"></textarea></br>
<input type="submit" name="submit">
</fieldset>
</form>
</body>
</html>