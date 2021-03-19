<!DOCTYPE html>
<html>
<head>
	<title>updation</title>
	<style>
		fieldset{
			padding: 10px;
			margin-left:530px;
			text-align:center;
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
  background-image:url("../img/sms10.jpg");
  background-size:cover;
}
fieldset
   {
    background-color: rgba(0,0,0,.5);
    margin-top:30px;
    }
    h1{
      text-align: center;
    }
    a{
      color:white;
    }
	</style>
</head>
<body class="bi">
  <h1>UPDATE PROFILE</h1>
   <form action="<?php echo base_url()?>main/updateaction" method="POST">
     <?php
        if(isset($user_data))
        {
            foreach($user_data->result() as $row1) 
            {
                ?>
   	<fieldset style="width:250px">
   		<input type="text" name="fname" value="<?php echo $row1->fname;?>" ></br>
   		<input type="text" name="lname" value="<?php echo $row1->lname;?>"></br>
   		<textarea  name="address"style="width:185px"><?php echo $row1->address;?></textarea></br>
        <input list="district" name="district" value="<?php echo $row1->district;?>">
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
        <input type="text" name="pin"  value="<?php echo $row1->pin;?>"></br>
        <input type="text" name="number" value="<?php echo $row1->number;?>"></br>
        <input type="date" name="dob"  value="<?php echo $row1->dob;?>"></br>
        
                        <a>Gender:</a>
                       <select name="gender">
                           <option><?php echo $row1->gender;?>
                       </option>
                        <option>male</option>
                        <option>female</option>
                    </select></br>
                       
        <input list="education" name="education"  value="<?php echo $row1->education;?>">
        <datalist id="education">
        		<option value="MSc">
        		<option value="MCA">
        	    <option value="BTech">
        	    <option value="BSc">

        </datalist>
        </br>
        <input type="email" name="email"  value="<?php echo $row1->email;?>"></br>
         <input type="hidden" name="id" value="<?php echo $row1->id;?>">
        <input type="submit" name="update" value="update">
<?php
            }         
             }
             ?>
    </fieldset>

   </form>
</body>
</html>