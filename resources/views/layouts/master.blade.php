<!DOCTYPE html>
<html>

<head>
	<title>Railway Management system</title>
	 @include('partials.links')
</head>


<body>
<div class="wrapper">
		
	   @include('partials.navigation')

	   <!-- Start main body content  -->
	<div class="container">
		    <div class="row">
			   <div class="col-md-2 "></div>

			     <div class="col-md-8 main_content">
				    @yield('content')
			     </div>

			     <div class="col-md-2"></div>
		    </div>
	</div>
	   <!-- End main body content  -->


      @include('partials.footer')
</div>

    
    @include('partials.scripts')

</body>
</html>