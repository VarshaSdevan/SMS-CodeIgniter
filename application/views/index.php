</!DOCTYPE html>
<html>
<head>
	<title>student management system</title>
	
	<style>
	
*{
	padding:0px;
	margin:0px;
}
.bi
{
	background-image:url("../img/sms4.jpg");
	background-size:cover;
}
.menubar
{
	background-color:black;
	text-align:center;
}
.menubar ul
{
	list-style-type:none;
	display:inline-flex;
	padding:15px;
}
.menubar ul li a
{
	color:white;
	text-decoration:none;
	padding:10px;
}
.menubar ul li
{
	
	padding:15px;
}
.menubar ul li a:hover
{
	border-radius:10px;
	background-color:yellow;
}
.submenu
{
    display:none;  	
}
.menubar ul li:hover .submenu
{
	display:block;
	position:absolute;
	background-color:black;
	border-radius:10px;
	margin-left:-20px;

} 
.submenu ul
{
	display:block;	
}
.submenu ul li
{
	border-bottom:2px solid yellow;
}
.head{
	width:75%;
	text-align:center;
	color:white;
	background-color:rgba(0,0,0,0.5); 
	margin-top:50px;
	padding:50px;
	margin-left:100px;
}
 		
	</style>
</head>
<body class="bi">
	<!---nav starts--->
	 <nav class="menubar">
      <ul>
	    <li><a href="<?php echo base_url()?>main/index">Home</a></li>
		<li><a href="#">Registration</a>
		   <div class="submenu"> 
		     <ul>
		       <li><a href="<?php echo base_url()?>main/studreg">Student</a></li>
			   <li><a href="<?php echo base_url()?>main/treg">Teacher</a></li>
		     </ul>	
		    </div> 
		</li>
		
		<li><a href="<?php echo base_url()?>main/login">Login</a></li>
	  </ul>
   </nav>
   <!--nav ends--->
   <div class="head">
   		<h1>STUDENT MANAGEMENT SYSTEM</h1>
   </div>
</body>
</html>