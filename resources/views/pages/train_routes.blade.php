@extends('layouts.master')


@section('content')


<div class="container">
	<h2>Train Route</h2>

	<table class="table table-dark table-hover">
  <tr>
  	<th>Serial ID</th>
    <th>Source</th>
    <th>Destination</th>
  </tr>
<?php 
    $cnt=0; 
  	foreach($routes as $route){
  		$cnt++;		
?>
<tr>
	<td><?php echo $cnt; ?></td>
	<td><?php echo $route->source; ?></td>
	<td><?php echo $route->destination; ?></td>
</tr>
<?php 
	}
?>
  
</table>
</div>

	
@endsection