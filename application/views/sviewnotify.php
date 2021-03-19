</!DOCTYPE html>
<html>
<head>
	<title>view notify</title>
	<style> table,th,tr,td{
			
            border:2px solid black;
            border-collapse:collapse;
            padding: 10px;
            margin:50px;
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
table{
	text-align: center;
	margin-left:35%;
	margin-top:70px;
	width: 400px;
	height: 200px;
	</style>
</head>
<body class="bi">
	<h1>NOTIFICATION</h1>
	<form action="" method="post">
		<table>
			<thead>
				<tr>
					<th>Teacher Name</th>
					<th>Phone</th>
					<th>Notification</th>
					<th>Current Date</th>
				
				</tr>
				</thead>
				<tbody>
				<?php
					if($n->num_rows()>0)
					{
						foreach ($n->result() as $row) 
						{
							?>
							<tr>
								<td><?php echo $row->name;?></td>
								<td><?php echo $row->number;?></td>
								<td><?php echo $row->notification;?></td>
								<td><?php echo $row->currentdate;?></td>
								
    						</tr>
    						<?php								
						}
					}	?>
					</tbody>
			
			</table>
		</form>
</body>
</html>