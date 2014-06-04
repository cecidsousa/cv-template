<?php 
 
	$lang = ($_SERVER['HTTP_ACCEPT_LANGUAGE']); 
	
	if(ereg("es", $lang)) { 
		header("location: es.php"); 
	} else { 
		header("location: en.php"); 
	} 

?>


<!DOCTYPE html>
<html lang="<?php echo($lang); ?>">
<head>
	<!-- Basic Page Needs
  ================================================== -->
	<meta charset="utf-8">
	<title></title>
	<meta name="description" content="">
	<meta property="og:image" content=""/>
	<link rel="author" href="/humans.txt" />
</head>

<body class="">
		<h1>James Creixems Curriculum Vitae</h1>
</body>
</html>

