<!DOCTYPE html>
<html>
<head>
	<title>registration</title>
	<style>
		fieldset{
			padding: 10px;
			margin-left:450px;
			text-align:center;
      background-color:rgba(0,0,0,0.3);
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
    .bi
    {
      background-image:url("../img/sms8.jpg");
      background-size:cover;
    }
	</style>
</head>
<body class="bi">
   <form action="<?php echo base_url()?>main/insrtreg" method="POST">
   	<fieldset style="width:250px">
   		<input type="text" name="fname" placeholder="First Name"></br>
   		<input type="text" name="lname" placeholder="Last Name"></br>
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
            </datalist>

         </br>
        <input type="text" name="pin"  placeholder="Pincode"></br>
        <input type="text" name="number"  placeholder="Phone number"></br>
        <input type="date" name="dob"  placeholder="Date of birth"></br>
        GENDER:<input type="radio" name="gender" id="male" value="male"><label for="male">Male</label>
         <input type="radio" name="gender" id="female" value="female"><label for="female">Female</label></br>
        <input list="education" name="education" placeholder="Highest education">
        <datalist id="education">
        		<option value="MSc">
        		<option value="MCA">
        	    <option value="BTech">
        	    <option value="BSc">

        </datalist>
        </br>
        <input type="email" name="email" placeholder="Email"></br>
        <input type="password" name="password" placeholder="password"></br>
        <input type="submit" name="submit" value="Register">

    </fieldset>

   </form>
</body>
</html>