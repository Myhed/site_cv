<!DOCTYPE html>
<html lang="en">
<head>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<link href="https://fonts.googleapis.com/css?family=Roboto:400,700" rel="stylesheet">
<link rel="stylesheet" href="<?=WEBROOT?>css/style.css">
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
<header id="main-menu">
	<div class="container">
			<div class="titre">
				<p class="com">MYHED.</p>
				<p class="nom">ADMIN<p>
				<div class="clear"></div>
				
			</div>
		
		<ul>
			<li><a href="index.php" class="<?=check_menu_active("index")?>">Accueil</a></li>
			<li><a href="messages.php" class="<?=check_menu_active("messages")?>">Vos messages</a></li>
			<li><a href="competence.php" class="<?=check_menu_active("competence")?>">Vos compétence</a></li>
			<li><a href="" class="<?=check_menu_active("portfolio")?>">Gérez votre portfolio</a></li>
		</ul>
			
	</div>
</header>
<div class="info-nouveaute">
	<div class="container">
		<div class="data-info-nouveaute">
				
			<span>MES NOUVEAUTÉS : </span>
				<ul class="nouveaute">
				</ul>
			</div>
		</div>
	</div>
</div>
<div class="container">
	<div id="content">
	