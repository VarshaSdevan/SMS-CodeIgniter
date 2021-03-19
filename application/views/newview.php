<!DOCTYPE html>
<html>
	<head>
		<title></title>
		<style> table,th,tr,td{
			
            border:2px solid black;
            border-collapse:collapse;
            padding: 10px;
            margin:50px;
		}
	</style>
	</head>
	<body>
    	
		<table>
			<thead>
			  <tr>	
				<th>First Name</th>
				<th>Last Name</th>
				<th>Address</th>
				<th>District</th>
				<th>Pincode</th>
				<th>Phone number</th>
				<th>Date of birth</th>
				<th>Gender</th>
				<th>Highest education</th>
				
				<th>Email id</th>
				<th colspan="2">Action</th>
		       </tr>
		    </thead>
		    <tbody>
		    	<?php
			        if($n->num_rows()>0)  
			  		{
			  			foreach($n->result() as $row)
			  			{
			  				?>
			  				<tr>
			  					<td><?php echo $row->fname;?></td>
			  					<td><?php echo $row->lname;?></td>
			  					<td><?php echo $row->address;?></td>
			  					<td><?php echo $row->district;?></td>
			  					<td><?php echo $row->pin;?></td>
			  					<td><?php echo $row->number;?></td>
			  					<td><?php echo $row->dob;?></td>
			  					<td><?php echo $row->gender;?></td>
			  					<td><?php echo $row->education;?></td>
			  					<td><?php echo $row->email;?></td>
			  					
			  					<?php
			  						if($row->status==1)
			  						{
			  							?>
			  							<td>Approved</td>
			  							<td><a href="<?php echo base_url()?>main/newreject/<?php echo $row->id;?>">reject</a></td>
			  							<?php
			  						}
			  						elseif($row->status==2)
			  						{
			  							?>
			  							<td>rejected</td>
			  							<td><a href="<?php echo base_url()?>main/newapprove/<?php echo $row->id;?>">approve</a></td>
			  							<?php
			  						}
			  						else
			  						{
			  							?>

			  					<td><a href="<?php echo base_url()?>main/newapprove/<?php echo $row->id;?>">approve</a></td>
			  					<td><a href="<?php echo base_url()?>main/newreject/<?php echo $row->id;?>">reject</a></td>
			  				
			  				<?php
			  			}
                        		   }
			  		}
			  		?>
		
		    </tbody>


				
		   </table>
	</form>
	</body>	
</html>