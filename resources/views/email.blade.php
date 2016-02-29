<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta name="theme-color" content="#42a5f5">
		<title>Anon-Event</title>
		
		<!-- Including the jQuery libraries -->
		<script src="//code.jquery.com/jquery-1.11.3.min.js"></script>

	    <!-- Latest compiled and minified Bootstrap JavaScript library -->
	    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
		{!! MaterializeCSS::include_css() !!}
		<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

		<!-- This is the js for the textarea -->
		<script src="//cdn.ckeditor.com/4.5.7/basic/ckeditor.js"></script>

  		<!-- TICKET PAGE CANCEL ORDER BOOTSTRAP -->

		<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
		<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
		<!--[if lt IE 9]>
			<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
			<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
		<![endif]-->

		<!-- Latest compiled and minified CSS -->
		<!-- These are for the datetimePicker -->
		<!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css"> -->

		<!-- Optional theme -->
		<!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap-theme.min.css"> -->
		<!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.17.37/css/bootstrap-datetimepicker.min.css" /> -->

		<!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.10.6/moment.min.js"></script>    -->
		<!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script> -->
		<!-- <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script> -->
		
		<style type="text/css">
			nav {
				background: none;
				position: relative;
				z-index: 1;
			}
			nav li a {
				color: black;
			}

			.brand-logo {
				color: black !important;
			}

			.parallax {
				height: 95%;
			}

			#home {
				margin-top: -64px;
				padding-top: 64px;
			}

			.parallax img {
				display: inherit !important;
			}

			#event_blank {
				height: 200px;
			}

			.caption {
				bottom:0;
			}

			.title {
				color: blue;
			}

			.ticketSelect {
				display: inherit !important;
			}

			/* Added by Jonny */
			.alert.parsley {
	            margin-top: 5px;
	            margin-bottom: 0px;
	            padding: 10px 15px 10px 15px;
	        }

	        .check .alert {
	            margin-top: 20px;
	        }
		</style>

	</head>


	<body>

		<div class="container">
			@yield('content')
		</div>
		
		<footer class="page-footer blue-grey">

			<div class="footer-copyright">
				<div class="container">
					© 2016 Copyright Anon-Event
					<a class="grey-text text-lighten-4 right" href="#!"></a>
				</div>
			</div>
		</footer>



	</body>
</html>