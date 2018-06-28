<?php
	require_once('config.php');
	require_once(MODULEDIR.'/main-functions.php');
	require_once(MODULEDIR.'/MyDb.php');
	if(!checkSession())
	{
		session_start();
	}
	$currentPage=isset($_GET['pg']) && trim($_GET['pg'])!=''? trim($_GET['pg']):false;
	$cnx=new MyDb();

	?>
<!DOCTYPE html>
<html>
	<head>
		<title>TEST</title>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" type="text/css" href="css/bootstrap.css" media="screen">
		<link rel="stylesheet" type="text/css" href="css/main.css" media="screen">
		<link rel="stylesheet" type="text/css" href="css/print.css" media="print">
		<link href="https://fonts.googleapis.com/css?family=Lato|PT+Sans|Roboto" rel="stylesheet"> 
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
		<script src="js/bootstrap3-typeahead.js"></script>
		<script src="js/main.js"></script>

	</head>
	<body>
	<!-- check if someone is already logged -->
	<!-- main form cames here -->
			<?php 
				switch($currentPage)
				{
					case 'login':	
						require_once(PAGESDIR.'/login.php');
					break;
					case 'showclub':	
						require_once(PAGESDIR.'/ShowMyClub.php');
					break;
					case 'club':	
						require_once(PAGESDIR.'/AddClub.php');
					break;
					case 'dancer':
						require_once(PAGESDIR.'/AddDancer.php');
					break;
					case 'dance':	
						require_once(PAGESDIR.'/AddDance.php');
					break;
					case 'editDance':
						require_once(PAGESDIR.'/UpdateDance.php');
					break;
					case 'statistic':
						require_once(PAGESDIR.'/GetStatistics.php');
					break;
					case 'raportByStil':
						require_once(PAGESDIR.'/GetRaportByStil.php');
					break;
					case 'competition':
						require_once(PAGESDIR.'/addCompetition.php');
					break;
					case 'category':
						require_once(PAGESDIR.'/addCategory.php');
					break;
					case 'discipline':
						require_once(PAGESDIR.'/addStyle.php');
					break;
					case 'music':
						require_once(PAGESDIR.'/getMusicFiles.php');
					break;
					default:
						echo '<div class="container">
							<div class=" col-lg-6 main-logo"></div>
						</div>';
						if(!isset($_SESSION['clubId']) && !isset($_SESSION['secretNumber']))
						{  // show login and register form
							require_once(PAGESDIR.'/LoginOrRegister.php');
						}
						else
						{
							require_once(PAGESDIR.'/AddDance.php');
						}
				}
			?>
<?php include_once(PAGESDIR.'/footer.php'); ?>
	</body>
</html>

