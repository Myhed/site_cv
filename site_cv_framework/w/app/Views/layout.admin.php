<!DOCTYPE html>
<html lang="en">
<head>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<link href="https://fonts.googleapis.com/css?family=Roboto:400,700" rel="stylesheet">
<link rel="stylesheet" href="<?= $this->assetUrl('css/style.css') ?>">
<script src="<?=$this->assetUrl('js/main.js')?>"></script>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
<header id="main-menu">
		
	<div class="container">
			<div class="titre">
				<p class="com">MYHED.</p>
				<p class="nom">ADMIN-<?= $this->e($title) ?><p>
				<div class="clear"></div>
				
			</div>
		
		<ul>
			<li><a href="<?=$this->url('Admin_homeAdmin'); ?>" class="<?= ($w_current_route == 'Admin_homeAdmin') ? 'active' : ''; ?>">Accueil</a></li>
			<li><a href="<?=$this->url('Admin_messages'); ?>" class="<?= ($w_current_route == 'Admin_messages') ? 'active' : ''; ?>">Vos messages</a></li>
			<li><a href="<?=$this->url('Admin_competence'); ?>"" class="<?= ($w_current_route == 'Admin_competence') ? 'active' : ''; ?>">Vos compétence</a></li>
			<li><a href="<?=$this->url('Admin_portfolio');?>" class="<?= ($w_current_route == 'Admin_portfolio') ? 'active' : ''; ?>">Gérez votre portfolio</a></li>
		</ul>
		
	</div>
</header>
<div class="info-nouveaute">
	<div class="container">
		<div class="data-info-nouveaute">
				<?php?>
			<span>MES NOUVEAUTÉS : </span>
				<ul class="nouveaute">
				</ul>
			</div>
		</div>
	</div>
</div>
	<div class="container-body">
			<div id="content">
				<?= $this->section('main_content') ?>
			</div>
		</div>
		<?php if($w_current_route == 'Admin_homeAdmin'):?>
		<aside class="barre-lateral">
				<div class=" titre-barre-lateral fa-id-card-o ">
					<h4><?=$LayoutLateralBar;?></h4>
				</div>
				<div class="content-barre-lateral">
					<?= $this->section('sidebar'); ?>
				</div>
				<div class="clearfix"></div>
			
				
		</aside>
	<?php else:?>
			<aside class="barre-lateral">
				<div class=" titre-barre-lateral fa-id-card-o ">
					<h4><?=$LayoutLateralBar;?></h4>
				</div>
				<div class="content-barre-lateral">
					<?= $this->section('sidebar'); ?>
				</div>
				<div class="clearfix"></div>
			
				
		</aside>
	<?php endif;?>
	</body>
</html>