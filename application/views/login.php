<!DOCTYPE html>
<html>
	<head>
		<title></title>
        <style>
   table,tr,td{
   	text-align:center;
   	padding:10px;
   	margin:10px;
   	font-size: 20px;
   	color: white;
   }
   fieldset
   {
   	background-color: rgba(0,0,0,.5);
    width:300px;
    height:250px;
    margin-left: 35%;
    margin-top:100px;
    font-size: 20px;
   }
   h3{
   	text-align:center;
   	color: white;
   }


 
*{
	padding:0px;
	margin:0px;
}
.bi
{
	background-image:url("../img/sms4.jpg");
	background-size:cover;
}



	
     	
        </style>
	</head>
	<body class="bi">
	
		<form method="post" action="<?php echo base_url()?>main/logins">
			<fieldset>
				<h3>LOGIN</h3>
			<table>

			<tr>
				<td><h2>Email id:<h2></td>
			    <td><input type="email" name="email"></td>
			<tr>
				<td><h2>Password:</h2></td>
			   <td><input type="Password" name="Password"></td>
			</tr>  
			<tr>			
				<td ><input type="submit" style="width:60px; height:40px; margin-left:100px; 
	" value="login" ></td>
			</tr>
			</table>
            </fieldset>
	</form>
	</body>	
</html>  