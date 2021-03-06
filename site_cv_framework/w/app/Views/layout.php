<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title><?=$this->e($title); ?></title>

    <!-- Bootstrap Core CSS -->
    <link href="<?= $this->assetUrl('css/bootstrap.min.css') ?>" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="<?= $this->assetUrl('css/landing-page.css') ?>" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="<?=$this->assetUrl('font-awesome/css/font-awesome.min.css') ?>" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700,300italic,400italic,700italic" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="<?=$this->assetUrl('css/style-front.css');?>">
    <script src="<?= $this->assetUrl('js/mains.js'); ?>"></script>
    <script type="text/javascript" src="<?=$this->assetUrl('js/phaser-js/phaser.min.js') ?>"></script>
    <script type="text/javascript" src="<?=$this->assetUrl('js/phaser-js/phaser.js') ?>"></script>

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

    <!-- Navigation -->
    <nav class="navbar navbar-default navbar-fixed-top topnav" role="navigation">
        <div class="container topnav">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand topnav" href="#"><?= $this->e($title); ?></a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right topnav">
                    <?php if($w_current_route == 'default_Auth'):?>
                      <li>
                        <a href="<?= $this->url('default_Auth'); ?>">Connexion</a>
                    </li>
                    <li><a href="<?= $this->url('default_home'); ?>">Retour à l'accueil</a></li>

                    <?php else: ?>
                    <li>
                        <a href="#about">Apropos</a>
                    </li>
                    <li>
                        <a href="<?= $this->url('default_Auth'); ?>">Connexion</a>
                    </li>
                    <li>
                        <a href="#contact">Contact</a>
                    </li>
                <?php endif; ?>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>


    <!-- Header -->
            <?php if($w_current_route != 'default_Auth'): ?>
 <div class="parallax-window" data-parallax="scroll" data-image-src="<?= $this->assetUrl('img/intro-banner.png') ?>">
                    
    <a name="about"></a>
    <div class="intro-header">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="intro-message">
                        <h1>Ben-Rhouma Myhed</h1>
                        <h3>Developper/Integrateur Web</h3>
                        <hr class="intro-divider">
                        <ul class="list-inline intro-social-buttons">
                            <li>
                                <a href="https://twitter.com/SBootstrap" class="btn btn-default btn-lg"><i class="fa fa-twitter fa-fw"></i> <span class="network-name">Twitter</span></a>
                            </li>
                            <li>
                                <a href="https://github.com/IronSummitMedia/startbootstrap" class="btn btn-default btn-lg"><i class="fa fa-github fa-fw"></i> <span class="network-name">Github</span></a>
                            </li>
                            <li>
                                <a href="#" class="btn btn-default btn-lg"><i class="fa fa-linkedin fa-fw"></i> <span class="network-name">Linkedin</span></a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>

        </div>
        <!-- /.container -->

    </div>
    <!-- /.intro-header -->

 </div>
    <?php endif;?>

    <!-- Page Content -->
    
    <a  name="services"></a>
        <div class="content-section-a">

                <?=$this->section('content-section-a'); ?>
            <!-- /.container -->

        </div>
        <!-- /.content-section-a -->
        <?php if($w_current_route != 'default_Auth'):?>
     
        <div class="content-section-b">

                <?=$this->section('content-section-b'); ?>
           
            <!-- /.container -->

        </div>
        <!-- /.content-section-b -->
      <div class="parallax-window" data-parallax="scroll" data-image-src="<?= $this->assetUrl('img/intro-banner.png') ?>">
          <?=$this->section('content-section-parallax')?>

          <!-- /.container -->
      </div>
        <div class="content-section-b">
                
                <?=$this->section('content-section-d'); ?>
                <!-- /.container -->

        </div>
        <!-- /.content-section-b -->
        <?php endif;?>
    
    <a  name="contact"></a>
    <div class="banner">

            <?=$this->section('banner'); ?>
        
        <!-- /.container -->

    </div>
    <!-- /.banner -->

    <!-- Footer -->
    <footer>
            <?=$this->section('footer'); ?>
        
    </footer>

    <!-- jQuery -->
    <script src="<?=$this->assetUrl("js/jquery.js"); ?>"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="<?=$this->assetUrl("js/bootstrap.min.js");?>"></script>

</body>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
<script src="<?= $this->assetUrl('js/parallax/parallax.js') ?>"></script>
<script src="<?= $this->assetUrl('js/parallax/parallax.jquery.js') ?>"></script>
</html>
