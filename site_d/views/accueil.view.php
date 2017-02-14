<?php require_once'inc/haut.inc.php'; ?>

        <div class="section-a">
               

          <div class="container">
                <div class="row">
                  <div class="col-md-4">
                      <img src="https://benoitsauvage.files.wordpress.com/2014/06/symfony2.png?w=300" alt="" height="50">
                      <h3>SYMFONY</h3>
                    
                  </div>
                  <div class="col-md-4" >
                      <img src="http://paislee.io/content/images/2015/Feb/gulp_logo.png" alt="" height="50"><img src="https://cdn4.iconfinder.com/data/icons/blackicon/54/sass_icon-512.png" alt=""  height="50">
                      <h3>SASS&GULP</h3>
                     
                  </div>
                  <div class="col-md-4">
                      <i class="fa fa-css3"></i> 
                      <h3>CSS3</h3>
                     
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-4">
                      <img src="https://phaser.io/images/img.png" alt="" height="50">
                      <h3>Librairie PHASER</h3>
                     
                  </div>
                   <div class="col-md-4">
                      <img src="http://mherman.org/images/node-express.png" alt="" height="50">
                      <h3>NodeJs</h3>
                     
                  </div>
                   <div class="col-md-4">
                      <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/9/91/Octicons-mark-github.svg/2000px-Octicons-mark-github.svg.png" alt="" height="50">
                      <h3>GITHUB</h3>
                     
                  </div>
                </div>
          </div>
        </div>

        <div class="section-b">
          <div class="container">
                <div class="row">
                  <div class="col-md-6">
                <h2>Experience/formation</h2>
                            <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
                                   <div class="panel panel-default">
                                         <div class="panel-heading" role="tab" id="headingOne">
                                               <h4 class="panel-title">
                                                      <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                                        <h4>Mes expériences</h4>
                                                       </a>
                                              </h4>
                                        </div>
                                        <div  id="collapseOne"  class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
                                            <?php 
                                                 $query = $bdd->query('SELECT * FROM experience');
                                                while($get_experience = $query->fetch(PDO::FETCH_ASSOC)):
                                               ?>
                                              <div class="panel-body">
                                                <?php 

                                                  echo $get_experience['date_exp'].' <strong>'.$get_experience['experience'].'</strong>'.'<br>';

                                                  $get_experience = explode(',',$get_experience['acquisition']);

                                                ?>
                                                <ul>
                                                  <li><?=$get_experience[0];?></li> 
                                                  <li><?=$get_experience[1]; ?></li>
                                                
                                                   <?= isset($get_experience[2]) ? '<li>'.$get_experience[2].'</li>' : '';?>
                                                  <?= isset($get_experience[3]) ? '<li>'.$get_experience[3].'</li>' : '';?>
                                                
                                                </ul>
                                             </div>
                                          <?php endwhile; ?>
                                    
                                      </div>
                              <!-- FIN de la div panel-collapse -->
                                <?php $query = $bdd->query('SELECT * FROM formation');
                            while($get_formation = $query->fetch(PDO::FETCH_ASSOC)):
                              ?>
                            <?=$get_formation['formation'] ?>
                        <?php endwhile ?>
                                </div>
                         <!-- FIN de la div panel panel-default -->
                        </div>
                    <!-- FIN de la div panel-group -->
                      
              </div>
              <!-- FIN de la div col-md-6 -->
                  <div class="col-md-6">

              <h2> Compétence</h2>
                          <?php 
                            $query = $bdd->query('SELECT * FROM competence');

                            while($get_competence = $query->fetch(PDO::FETCH_ASSOC)):
                          ?>
                             <div class="progress skill-bar">
                               <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="<?=$get_competence['niveau'] ?>" aria-valuemin="0" aria-valuemax="100">
                               <span class="skill"><?=$get_competence['competence'] ?><i class="val"><?=$get_competence['niveau'] ?>%</i></span>
                              </div>
                        </div>
                      <?php endwhile; ?>

                     
                     
                      </div>
                     <!-- FIN de la div col-md-6 -->
                  </div>
                <!-- FIN de la div row -->
            </div>
                <!-- FIN de la div container -->
      </div>
        <!-- FIN de la div section-b -->

        <div class="section-c"> 
            <div class="container"> 
                <div class="row"> 
                    <div class="col-md-8 col-md-offset-2">
                    <h2>S'inscrire à ma newsletter</h2>
                        <form action="#" method="POST">
                            <div class="form-group">
                              <input type="text" placeholder="Saisissez votre email..." class="form-control input-lg">
                            </div>
                            <button class="btn btn-primary">S'inscrire</button>
                        </form>
                    </div>
                </div>
           </div>
<?php require_once'inc/bas.inc.php'; ?>