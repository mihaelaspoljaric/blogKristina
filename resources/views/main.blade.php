<!DOCTYPE html>
<html lang="en">
	<head>
		@include('partials._head')
		<!-- include libraries(jQuery, bootstrap) -->

	<!-- JavaScript -->


	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link href="https://fonts.googleapis.com/css?family=Dawning+of+a+New+Day|Open+Sans" rel="stylesheet">
 
<!-- include summernote css/js-->


	</head>
<body>

	@include('partials._nav')
    
	<div class="container">
		@include('partials._messages')

 	@yield('content')

  	@include('partials._footer')
     
	</div>
    <!-- end of .container -->
	@include('partials._javascript')

	@yield('scripts')
   
 </body>

</html>