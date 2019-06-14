@extends('layouts.master')

@section('content')

<div class="container">

	<h2>Purchase Ticket...</h2>

<div class="container purchase_form">


	<form action="purchase_query" method="POST">
    {{ csrf_field() }}
    <div class="form-group">
      <label for="sel1">Station From:</label>
      <select class="form-control" id="sel1" name="station_from">
      	<option>--Select Station from--</option>
      	<?php 
      		foreach ($sources as $source_from) {
      			?><option><?php echo $source_from->source; ?> </option>
      		<?php } ?>
      </select>

      <br>

      <label for="sel2">Station To:</label>
      <select class="form-control" id="sel2" name="station_to">
      	<option>--Select Station to--</option>
      	<?php 
      		foreach ($destinations as $destination_from) {
      			?><option><?php echo $destination_from->destination; ?> </option>
      		<?php } ?>
      </select>

      <br>

      <label for="sel3">Journey Date:</label>
      <!-- <select class="form-control" id="sel3" name="journey_date">
      	<option>--Select Station to--</option>
      	<?php 
      		foreach ($destinations as $destination_from) {
      			?><option><?php echo $destination_from->destination; ?> </option>
      		<?php } ?> -->


     	<!-- <label >Begin voorverkoop periode</label> -->
 				<input type="date" name="journey_date" max="3000-12-31" 
        				min="2019-01-01" class="form-control">
      </select>


       <label for="sel1">Class :</label>
      <select class="form-control" id="sel4" name="seat_status">
      	<option>--Select Class--</option>
        <option>Special</option>
        <option>Normal</option>
      </select>




    </div>
    <br>
    <button type="submit" class="btn btn-primary">Submit</button>
</form>
<br>
</div>

</div>


@endsection