<?php $this->layout('layout', ['title' => 'Accueil']) ?>


<?php $this->start('content-section-a'); ?>

	<!-- <div class="container">
                <div class="row"> -->
           <!--      <div class="col-lg-5 col-sm-6">
               <hr class="section-heading-spacer">
               <div class="clearfix"></div>
               <h2 class="section-heading">Death to the Stock Photo:<br>Special Thanks</h2>
               <p class="lead">A special thanks to <a target="_blank" href="http://join.deathtothestockphoto.com/">Death to the Stock Photo</a> for providing the photographs that you see in this template. Visit their website to become a member.</p>
           </div>
           <div class="col-lg-5 col-lg-offset-2 col-sm-6">
               <img class="img-responsive" src="" alt="">
           </div>
                       </div> -->
          
             
             


           
        <!-- </div> -->

    <!-- </div> -->

                                    
                                    

         <div class="container">
        <div class="row">
            <h2 class="section-heading">Expériences et formations</h2>
            <hr class="section-heading-spacer">
               <div class="clearfix"></div>
             <?php foreach ($experiences as $key => $value): ?>
                <div class="col-lg-4 col-sm-6">
                        <ul class="media-list">
                            <li class="media">
                                <div class="media-left">
                                    <a href="#">
                                        <img src="https://s3-eu-west-1.amazonaws.com/course.oc-static.com/courses/1603881/14570827997997_illu-cours_html5-css3.png" alt="" class="media-object" height="40">
                                    </a>
                                </div>
                                <div class="media-body">
                                    <h4 class="media-heading"><?= $value['titre_experience'].' - '.$value['sous_titre_experience']?></h4>
                                    <p><strong>En <?= $value['dates']?> </strong></p>
                                    <?php 
                                    $description = explode('-',$value['description']);

                                    ?>
                                    <p><?= $description[0]?></p>
                                    <p><?= isset($description[1]) ? $description[1] : null;?></p>
                                    <p><?= isset($description[2]) ? $description[2] : null;?></p>
                                    <p><?= isset($description[3]) ? $description[3] : null;?></p>
                                </div>
                            </li>
                        </ul>
                    
                </div>
             <?php endforeach; ?>
        </div>
        <!-- ./row -->
    </div>

<?php $this->stop('content-section-a'); ?>


<?php $this->start('content-section-b');?>
    <div class="container">
        <div class="row">
            <h2 class="section-heading">Compétences</h2>
            <hr class="section-heading-spacer">
               <div class="clearfix"></div>
             <?php foreach ($competence as $key => $value): ?>
                <div class="col-lg-4 col-sm-6">
                        <ul class="media-list">
                            <li class="media">
                                <div class="media-left">
                                    <a href="#">
                                        <img src="https://s3-eu-west-1.amazonaws.com/course.oc-static.com/courses/1603881/14570827997997_illu-cours_html5-css3.png" alt="" class="media-object" height="40">
                                    </a>
                                </div>
                                <div class="media-body">
                                    <h4 class="media-heading"><?= $value['competence_titre']?></h4>
                                    <p><?= $value['competence']?></p>
                                </div>
                            </li>
                        </ul>
                    
                </div>
             <?php endforeach; ?>
        </div>
        <!-- ./row -->
    </div>
<?php $this->stop('content-section-b');?>


        
<?php $this->start('banner'); ?>
<div class="container">

            <div class="row">
                <div class="col-lg-6">
                    <h2>Connect to Start Bootstrap:</h2>
                </div>
                <div class="col-lg-6">
                    <ul class="list-inline banner-social-buttons">
                        <li>
                            <a href="https://twitter.com/SBootstrap" class="btn btn-default btn-lg"><i class="fa fa-twitter fa-fw fa"></i> <span class="network-name">Twitter</span></a>
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
<?php $this->stop('banner'); ?>


<?php $this->start('footer'); ?>
<div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <ul class="list-inline">
                        <li>
                            <a href="#">Home</a>
                        </li>
                        <li class="footer-menu-divider">&sdot;</li>
                        <li>
                            <a href="#about">About</a>
                        </li>
                        <li class="footer-menu-divider">&sdot;</li>
                        <li>
                            <a href="#services">Services</a>
                        </li>
                        <li class="footer-menu-divider">&sdot;</li>
                        <li>
                            <a href="#contact">Contact</a>
                        </li>
                    </ul>
                    <p class="copyright text-muted small">Copyright &copy; Your Company 2014. All Rights Reserved</p>
                </div>
            </div>
        </div>
<?php $this->stop('footer'); ?>

