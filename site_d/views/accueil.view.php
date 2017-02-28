<?php require_once'inc/haut.inc.php'; ?>

        <div class="section-a">
               

          <div class="container">
                <div class="row">
                  <div class="col-md-4">
                      <img src="https://benoitsauvage.files.wordpress.com/2014/06/symfony2.png?w=300" alt="" height="50">
                      <h3>SYMFONY</h3>
                      <!-- <p class="text-center">Pour commencer, donc, qu’est-ce qu’un framework ? S’il y avait une réponse simple, on se passerait de ces lignes. La difficulté majeure tient à ce qu’il y a en fait dans la définition deux dimensions principales, complémentaires mais en partie indépendantes : un framework c’est à la fois une boîte à outils et une méthodologie. Ou, si on n’a pas peur des envolées lyriques : une boîte à outils fournie avec une philosophie.</p> -->
                    
                  </div>
                  <div class="col-md-4" >
                      <img src="https://cdn4.iconfinder.com/data/icons/blackicon/54/sass_icon-512.png" alt=""  height="50">
                      <h3>SASS</h3>

                    <!--   <p class="text-center">Sass est un métalangage de feuilles de style en cascade (CSS). C'est un langage de script qui est interprété en CSS. SassScript est le langage de script lui-même. Deux syntaxes existent. La syntaxe originale, nommée « syntaxe indentée », est proche de Haml. La nouvelle syntaxe se nomme « SCSS ». Elle a un formalisme proche de CSS.
                    
                    Sass peut être étoffé avec Compass (pratique pour les préfixes des différents navigateurs).</p> -->
                  </div>

                  <div class="col-md-4">
                      <i class="fa fa-css3"></i> 
                      <h3>CSS3</h3>
                      <!-- <p class="text-center">Les feuilles de styles (en anglais "Cascading Style Sheets", abrégé CSS) sont un langage qui permet de gérer la présentation d'une page Web. Le langage CSS est une recommandation du World Wide Web Consortium (W3C), au même titre que HTML ou XML.</p> -->
                  </div>
                 
                </div><br>
                <div class="row">
                  <div class="col-md-4">
                      <img src="https://phaser.io/images/img.png" alt="" height="50">
                      <h3>Librairie PHASER</h3>
                    <!--  <p class="text-center">Phaser est un framework pour créer des jeux mobiles et PC en utilisant les technologies HTML5. Malgré son manque de maturité, la communauté est assez active, et il évolue rapidement.  Les sources sont sur Github, lisez y la documentation de base, jetez un œil aux exemples. Le framework Phaser offre un ensemble d'outils qui permettent d'accélérer le développement et aider à mettre en oeuvre les tâches communes nécessaire au développement d'un  jeu.</p> -->
                  </div>
                   <div class="col-md-4">
                      <img src="http://mherman.org/images/node-express.png" alt="" height="50">
                      <h3>NodeJs</h3>
                     <!--  <p class="text-center">Node.js est une plateforme logicielle libre et événementielle en JavaScript orientée vers les applications réseau qui doivent pouvoir monter en charge. Elle utilise la machine virtuelle V8 et implémente sous licence MIT les spécifications CommonJS. Node.js contient une bibliothèque de serveur HTTP intégrée, ce qui rend possible de faire tourner un serveur web sans avoir besoin d'un logiciel externe comme Apache ou lighttpd, et permettant de mieux contrôler la façon dont le serveur web fonctionne.</p> -->
                  </div>
                   <div class="col-md-4">
                      <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/9/91/Octicons-mark-github.svg/2000px-Octicons-mark-github.svg.png" alt="" height="50">
                      <h3>GITHUB</h3>
                      <!-- <p class="text-center">GitHub (exploité sous le nom de GitHub, Inc.) est un service web d'hébergement et de gestion de développement de logiciels, utilisant le logiciel de gestion de versions Git. Ce site est développé en Ruby on Rails et Erlang par Chris Wanstrath, PJ Hyett et Tom Preston-Werner. GitHub propose des comptes professionnels payants, ainsi que des comptes gratuits pour les projets de logiciels libres. Le site assure également un contrôle d'accès et des fonctionnalités destinées à la collaboration comme le suivi des bugs, les demandes de fonctionnalités, la gestion de tâches et un wiki pour chaque projet.</p> -->
                  </div>
                </div>

                <div class="row">
                  

                   <div class="col-md-8 col-md-offset-2">
                    <img src="http://paislee.io/content/images/2015/Feb/gulp_logo.png" alt="" height="50">
                    <h3>GULP</h3>
                     <!--  <p class="text-left">Gulp est un "Automatiseur de tâches", un task runner comme disent nos amis anglophones, c'est à dire qu'il est capable de lancer des bouts de scripts à votre place tout seul comme un grand.
                     
                     Ces tâches dépendent de votre bon vouloir et peuvent être très variées :
                       <ul class="text-left">
                           <li>des opérations simples telles que minifier ou concaténer du CSS ou du JavaScript</li>
                           <li>la création ou la suppression de dossiers ou de fichiers (possibilité de créer un projet à partir de zéro)</li>
                           <li>l'optimisation, la compression d'images</li>
                           <li>la création de serveur local permettant de tester sur de multiples périphériques en même temps</li>
                           <li>la simulation de navigateurs fantômes conçus pour parcourir et tester les regressions d'affichage d'une page</li>
                      </ul>
                                          </p> -->
                  </div>
                </div>



          </div>
        </div>

        <div class="section-b">
          <div class="container">
                <div class="row">
                  <div class="col-md-6">
                          <h2>Experiences/formations</h2>
                            <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
                                   <div class="panel panel-default">
                                         <div class="panel-heading" role="tab" id="headingOne">
                                               <h4 class="panel-title">
                                                      <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                                        <h4>Mes expériences professionnels</h4>
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
                                
                                </div>

                              
                         <!-- FIN de la div panel panel-default -->
                        </div>
                    <!-- FIN de la div panel-group -->

                    <div class="panel panel-default">
                        <div class="panel panel-heading"><h4>Formations</h4></div>

                        <div class="panel panel-body">
                            <?php $query = $bdd->query('SELECT * FROM formation');
                            while($get_formation = $query->fetch(PDO::FETCH_ASSOC)):
                              ?>
                            <?= '<p>'.$get_formation['date_forma'].'<strong>'.$get_formation['formation'].'</strong>'.'</p>'; ?>
                        <?php endwhile ?>
                        </div>
                    </div>
                      
              </div>
              <!-- FIN de la div col-md-6 -->

                  <div class="col-md-6">

              <h2> Compétences</h2>
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
                    <h2>Me contacter</h2>
                    <form action="#" method="POST">
                        <div class="row">
                              
                            <div class="col-md-5">
                                <div class="form-group">
                                  <label for="">Nom/prenom</label>
                                    <input type="text" placeholder="Nom/prenom..."  name="name" class="form-control input-lg">
                                </div>
                                 <div class="form-group">
                                  <label for="">Email</label>
                                    <input type="text" placeholder="Saisissez votre email..." name="email" class="form-control input-lg">
                                </div>
                                 <div class="form-group">
                                  <label for="">Téléphone</label>
                                    <input type="text" placeholder="telephone..." name="telephone" class="form-control input-lg">
                                </div>
                               
                            </div> 

                            <div class="col-md-7">
                                <textarea name="message" id="" cols="180" rows="10" class="form-control" placeholder="Entrée votre message"></textarea>

                            </div>  
                        </div>
                        <button class="btn btn-primary">Envoyer</button>
                            
                        </form>
                    </div>
                </div>
           </div>
<?php require_once'inc/bas.inc.php'; ?>