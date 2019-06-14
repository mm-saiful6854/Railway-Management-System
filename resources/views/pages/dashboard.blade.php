@extends('layouts.master')

@section('content')
<div class="container">
	
<h2>User Information</h2>

<table class="table table-dark table-hover">
  <tr>
  	<th>UserName</th>
    <th>Full_Name</th>
    <th>Address</th>
    <th>Gender</th>
    <th>Birthday</th>
    <th>Contact NO</th>
  </tr>
<?php 
   // $cnt=0; 
  	foreach($user as $passenger){
  		//$cnt++;		
?>
<tr>
	<td><?php echo $passenger->user_name; ?></td>
	<td><?php echo $passenger->Full_name; ?></td>
	<td><?php echo $passenger->address; ?></td>

	<td><?php echo $passenger->gender; ?></td>
	<td><?php echo $passenger->birthday; ?></td>
	<td><?php echo $passenger->contact_no ?></td>
</tr>
<?php 
	}
?>
  
</table>

</div>


	
@endsection

