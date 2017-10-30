<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8" />
	<link rel="huduma_icon" sizes="76x76" href="Theme/huduma_icon.png">
	<link rel="icon" type="image/png" sizes="96x96" href="Theme/img/favicon.png">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

	<title>HudumaCare</title>

	<meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="viewport" content="width=device-width" />


    <!-- Bootstrap core CSS     -->
    <link href="Theme/css/bootstrap.min.css" rel="stylesheet" />

    <!-- Animation library for notifications   -->
    <link href="Theme/css/animate.min.css" rel="stylesheet"/>

    <!--  Paper Dashboard core CSS    -->
    <link href="Theme/css/paper-dashboard.css" rel="stylesheet"/>


    <!--  CSS for Demo Purpose, don't include it in your project     -->
    <!--<link href="Theme/css/demo.css" rel="stylesheet" />


    <!--  Fonts and icons     -->
    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" rel="stylesheet">
    <link href='https://fonts.googleapis.com/css?family=Muli:400,300' rel='stylesheet' type='text/css'>
    <link href="Theme/css/themify-icons.css" rel="stylesheet">

</head>
<body>
@yield('content')

</body>

    <!--   Core JS Files   -->
    <script src="Theme/js/jquery-1.10.2.js" type="text/javascript"></script>
	<script src="Theme/js/bootstrap.min.js" type="text/javascript"></script>

	<!--  Checkbox, Radio & Switch Plugins -->
	<script src="Theme/js/bootstrap-checkbox-radio.js"></script>

	<!--  Charts Plugin -->
	<script src="Theme/js/chartist.min.js"></script>

    <!--  Notifications Plugin    -->
    <script src="Theme/js/bootstrap-notify.js"></script>

    <!--  Google Maps Plugin    -->
    <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js"></script>

    <!-- Paper Dashboard Core javascript and methods for Demo purpose -->
	<script src="Theme/js/paper-dashboard.js"></script>

	<!-- Paper Dashboard DEMO methods, don't include it in your project! -->
	<script src="Theme/js/demo.js"></script>

	<script type="text/javascript">
    	$(document).ready(function(){

        	demo.initChartist();

        	$.notify({
            	icon: 'ti-gift',
            	message: "Welcome to <b>HudumaCare</b> Dashoard!"

            },{
                type: 'success',
                timer: 4000
            });

    	});
	</script>

</html>
