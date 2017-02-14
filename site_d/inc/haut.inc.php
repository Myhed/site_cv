<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta description="Cv de Myhed Ben-Rhouma Développeur/Intégrateur WEB">
    <meta keywords="myhed, ben-Rhouma , myhed ben-Rhouma, developpeur web, ">
    <title>Myhed Ben-rhouma</title>
    <link href="https://fonts.googleapis.com/css?family=Lobster" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Lobster|Roboto" rel="stylesheet">
    <link rel="stylesheet" href="<?= WEBROOT ?>assets/js/google-code-prettify/src/prettify.css">
 
        
      
    
      <link rel="stylesheet" href="<?= WEBROOT ?>assets/css/app.css">
     
    <!-- Bootstrap core CSS -->

        
    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>

    <nav class="navbar navbar-default">
     <a class="navbar-brand" href="#"><p>Write more.</p>learn less</p></a>
      <div class="container">
        <div class="navbar-header">

          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>


        </div>
        <div id="navbar" class="collapse navbar-collapse">
          <ul class="nav navbar-nav navbar-right">
            
               <!-- <li><a class="signUp" href="#"><span class="fa fa-user"></span> S'inscrire</a></li> -->

            <?php if(isset($_SESSION['Auth'])): ?>
                      <li class="<?= is_active('membre'); ?>"><a href="<?= WEBROOT ?>admin/membre.php">Mon profil</a></li>
                      <li class='<?= is_active('share_code'); ?>'><a href="<?= WEBROOT ?>admin/share_code.php">Partager</a></li>
                      <?php if(notification_demande_ajout() > 0): ?>

                                  <li class="dropdown">
                                     <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Amis<span class="notification"><?=notification_demande_ajout(); ?></span><span class="caret"></span></a>
                                      <ul class="dropdown-menu">
                                            <?php 
                                             $datas = recup_info_demande();

                                                foreach($datas as $data):

                                                $query = $bdd->query("SELECT pseudo FROM users WHERE id_users = ".$data['id_expediteur']);

                                                $user = $query->fetch(PDO::FETCH_ASSOC);  
                                              ?>
                                            <li>
                                               <div>
                                               <span><strong><?=$user['pseudo'] ?></strong> souhaite vous ajoutez en ami(e)</span>
                                                  <div class="btn-group">
                                                    <a class="btn btn-info btn-xs" href="?id=<?= $_SESSION['Auth']['id_users'] ?>&&action=Ajouter&&id_demande=<?= $data['id_expediteur'] ?>">Accepter</a>
                                                    <a class="btn btn-warning btn-xs" href="">refuser</a>
                                                  </div>
                                               </div><hr>

                                            </li>
                                        <?php endforeach; ?>
                                         
                                          
                                      </ul>
                                  </li>
  
                      <?php endif; ?>
                      <?php if($_SESSION['Auth']['grade'] == 'super-admin'):?>
                        <li class='<?= is_active('super_admin'); ?>'><a href="<?= WEBROOT ?>admin/super_admin.php">Gérez</a></li>
                        
                    <?php endif;?>
                      <li><a href="<?= WEBROOT ?>admin/deconnexion.php" class="login"> | <span class="fa fa-sign-in"></span> Deconnexion</a></li>

                    <?php else: ?>
                      <li class="active"><a href="#">Accueil</a></li>
                      <li ><a href="#about">A propos</a></li>
                      <li><a href="#contact">Contact</a></li>
                      <li><a href="connexion.php" class="login"> | <span class="fa fa-sign-in"></span> Connexion</a></li>

            <?php endif; ?>
            

          </ul>

        </div><!--/.nav-collapse -->
      </div>

    </nav>

    <?php if(that_is_it() == 'index.php'): ?>
    <header id="main-header">
        <div class="intro-header">
            <div class="container">
                  <h1>MYHED BENRHOUMA</h1>
                  <p class="lead">Integrateur/developpeur web</p>
            <h2 class="cv">Télécharger mon CV</h2>
            <div class="download-wrap">
                <div class="download">
                    <a href="<?=WEBROOT?>CV_myhed_benrhouma_V1.pdf" class="button-download" target="_blank">
                        download

                        <span class="icon-wrap">
                          <i class="icon-download"></i>
                         </span>
                    </a>
                <div class="meter">
                  <span class="meter-progress"></span>
                </div>
             </div>
          </div>

        </div>
            </div>
    </header>

  <?php endif; ?>
