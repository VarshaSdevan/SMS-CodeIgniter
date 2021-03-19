<!DOCTYPE html>
<html>
<head>
	<title>registration</title>
	<style>
		fieldset{
			padding: 10px;
			margin-left:450px;
			text-align:center;
            background-color: rgba(0,0,0,0.4);
            
        }
		input{
			padding:10px;
			margin-top: 5px;
			text-align:center;
		}
		textarea{

			margin-top: 5px;
			text-align:center;
		}
         .bg
    {
        background-image:url("../img/sms6.jpg");
        background-size:cover;
    }
	</style>
</head>
<body class="bg">
	<form action="<?php echo base_url()?>main/teacher_insrt" method="POST">
		<fieldset style="width:100px">
			<h1>REGISTER</h1>
		<input type="text" name="name" placeholder="Name"></br>
	    <textarea placeholder="Address" name="address" style="width:185px"></textarea></br>
        <input list="district" name="district" placeholder="District">
        	<datalist id="district">
        		<option value="Thiruvanathapuram">
              	<option value="Kollam">
              	<option value="Pathanamthitta">
              	<option value="Alappuzha">
                <option value="Kottayam">
                <option value="Idukki">
                <option value="Eranakulam">
                <option value="Thrissur">
            </datalist></br>
            <input type="text" name="pin"  placeholder="Pincode"></br>
        <input type="text" name="number"  placeholder="Phone number"></br>
        <input type="radio" name="gender" id="male" value="male"><label for="female">Male</label>
         <input type="radio" name="gender" id="female" value="female"><label for="female">Female</label></br>
        <input list="subject" name="subject" placeholder="Subject">
        <datalist id="subject">
        		<option value="Computer Science">
        		<option value="Electronics">
        	    <option value="Chemistry">
        	    <option value="Maths">
        </datalist></br>
        <input type="text" name="age" placeholder="Age"></br>
        <input type="email" name="email" placeholder="Email"></br>
        <input type="password" name="password" placeholder="password"></br>
        <input type="submit" name="submit" value="register">

    </fieldset>

   </form>
</body>
</html>

   