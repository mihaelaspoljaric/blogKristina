<!DOCTYPE html>
<html lang="en">
	<head>
		@include('partials._head')
		<!-- include libraries(jQuery, bootstrap) -->

	<!-- jQuery library -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<!-- JavaScript -->

	<link rel="stylesheet" type="text/css" href="style.css">
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link href="https://fonts.googleapis.com/css?family=Dawning+of+a+New+Day|Open+Sans" rel="stylesheet">
 
<!-- include summernote css/js-->
<link href="summernote.css" rel="stylesheet">
<script src="summernote.js"></script>
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