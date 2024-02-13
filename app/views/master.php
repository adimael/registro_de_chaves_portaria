<!DOCTYPE html>
<html lang="pt-br">
<head>
	<!-- Basic Page Info -->
	<meta charset="utf-8">
	<title>WorkEase - Sistema de gestão</title>

	<!-- Site favicon -->
	<link rel="apple-touch-icon" sizes="180x180" href="public/assets/vendors/images/favicon.png">
	<link rel="icon" type="image/png" sizes="32x32" href="public/assets/vendors/images/favicon.png">
	<link rel="icon" type="image/png" sizes="16x16" href="public/assets/vendors/images/favicon.png">

	<!-- Mobile Specific Metas -->
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

	<!-- Google Font -->
	<link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
	<!-- CSS -->
	<link rel="stylesheet" type="text/css" href="public/assets/css/style.css">
	<link rel="stylesheet" type="text/css" href="public/assets/vendors/styles/core.css">
	<link rel="stylesheet" type="text/css" href="public/assets/vendors/styles/icon-font.min.css">
	<link rel="stylesheet" type="text/css" href="public/assets/vendors/styles/style.css">
  <link rel="stylesheet" type="text/css" href="public/assets/src/plugins/datatables/css/dataTables.bootstrap4.min.css">
	<link rel="stylesheet" type="text/css" href="public/assets/src/plugins/datatables/css/responsive.bootstrap4.min.css">

	<!-- Global site tag (gtag.js) - Google Analytics -->
	<script async src="https://www.googletagmanager.com/gtag/js?id=UA-119386393-1"></script>
	<script>
		window.dataLayer = window.dataLayer || [];
		function gtag(){dataLayer.push(arguments);}
		gtag('js', new Date());

		gtag('config', 'UA-119386393-1');
	</script>
</head>
<body class="login-page">
  <?=$this->section('content')?>

  <!-- js -->
	<script src="public/assets/vendors/scripts/core.js"></script>
	<script src="public/assets/vendors/scripts/script.min.js"></script>
	<script src="public/assets/vendors/scripts/process.js"></script>
	<script src="public/assets/vendors/scripts/layout-settings.js"></script>

  <script src="public/assets/src/plugins/apexcharts/apexcharts.min.js"></script>
	<script src="public/assets/src/plugins/datatables/js/jquery.dataTables.min.js"></script>
	<script src="public/assets/src/plugins/datatables/js/dataTables.bootstrap4.min.js"></script>
	<script src="public/assets/src/plugins/datatables/js/dataTables.responsive.min.js"></script>
	<script src="public/assets/src/plugins/datatables/js/responsive.bootstrap4.min.js"></script>
	<script src="public/assets/vendors/scripts/dashboard3.js"></script>
</body>
</html>