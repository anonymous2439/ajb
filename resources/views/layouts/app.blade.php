<html>
	<head>
	  <title>AJB</title>
	  <meta name="csrf-token" content="{{ csrf_token() }}">
	  <link rel="icon" type="image/gif" href="img/ajblogo.png">

	  <!--meta tags-->
	  <meta name="viewport" content="width=device-width, initial-scale=1">

	  <!--bootstrap css-->
	  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

	  <!--icons sa ubos sa mga social media -->
	  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

	  <!--font-->
	   <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">


	  <link href="style.css" rel="stylesheet" />

	  <!-- Animation -->
	  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.2/animate.min.css">
		  <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
		  <link rel="stylesheet" href="https://cdn.datatables.net/1.10.23/css/jquery.dataTables.min.css">
		  <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/select/1.3.1/css/select.dataTables.min.css">
		  <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/buttons/1.6.5/css/buttons.dataTables.min.css">
		@yield('head')
	</head>
	<body data-spy="scroll" data-offset="300" data-target=".navbar">
		@yield('content')

		<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
	  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
		<script src="https://cdn.datatables.net/1.10.23/js/jquery.dataTables.min.js"></script>
		<script src="https://cdn.datatables.net/select/1.3.1/js/dataTables.select.min.js"></script>
		<script src="https://cdn.datatables.net/buttons/1.6.5/js/dataTables.buttons.min.js"></script>
		@yield('footer')
	</body>
</html>