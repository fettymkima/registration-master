<?php 
	
	
	require_once('db/config_db.php');
	
	//Array to store validation errors
	$errmsg_arr = array();
	
	//Validation error flag
	$errflag = false;
	
	//Connect to mysqli server
	$link = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_DATABASE);
  if(!$link) {
    die('Failed to connect to server: ' . mysqli_connect_error());
  }
	
	     
      $select_scheme="SELECT * from vw_complaints order by complaint_id DESC";
$select_query_scheme =     mysqli_query($link, $select_scheme);

	   
                               								
								
			?>


<!DOCTYPE html>
<html lang="en">
<head>
  <title>Complaint Management System
  </title>
<?php
include("includes/link_to_jss.php");

?>
  <script>
	$(document).ready(function(){
		
		/*alert('herererrrr');*/
		  $(".hidetrigger").click(function(){
				$(".hide_status").hide(1000);
		  });
		  $(".showtrigger").click(function(){
				$(".hide_status").show(1000);
		  });
	});
</script>
</head>
<body>
  <div class="container">
<?php

include("includes/top_menu_inside.php");

?>
<h2>Edit Complaint Type</h2>
<div class="row">

<div class="col-md-12">
<table class="table table-bordered table-striped" >
            <tbody>
                <tr>
                    <th>S/N</th>
        
                    <th>First Name</th>
        
                    <th>Last Name</th>
        
                         
                    <th>Complaint</th>
        
                    <th>Complaint Type</th>
        
        
                    <th>Action</th>

                </tr>
        <?php
        
      
	 $counter=1;
	//Check whether the query was successful or not
	if(!$select_query_scheme) {
			die("Query failed");
	}else {
	      while($result=mysqli_fetch_array($select_query_scheme))
								{
									
								if (($counter%2)==0){	
								//Dispaly all users of the system, sorted by their user type
								echo "<tr>";
								}
								else{	
								//Dispaly all users of the system, sorted by their user type
								echo "<tr>";
								}
								echo "<td>&nbsp; ".$counter."</td>";
								echo "<td>&nbsp; ".ucfirst($result['compl_firstname'])."</td>";
								echo "<td>&nbsp; ".ucfirst($result['compl_surname'])."</td>";
								echo "<td>&nbsp; ".substr(ucfirst($result['compl']), 0, 80)."</td>";
								echo "<td>&nbsp; ".ucfirst($result['namecompltype'])."</td>";
								echo "<td><a href=\"edit_comp_cate.php?sel_cont=$result[refno]\">Edit Complaints</a></td>";

								echo "</tr>"; 
								$counter++;
								}
								
								
	}


	?>
        
        
               
            </tbody>
        </table>
        </div>
  </div>
  
        
        </div>
  </div>
  
  <footer>
   <center> All rights reserved </center>
  
  </footer>
  </div>

 
</body>
</html>


