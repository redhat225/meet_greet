   <footer class="page-footer" style="background:#194D82 url('img/assets/meet_greet_base/pattern_header_transparent_3.png') 5% 5%;">
           <div class="container white-text" style="width:90%;">
            <div class="row">

              <div class="col s3 mg-padding-right-76">
                    <h5 class="mg-regular mg-size-22 left"><?= __('Contactez-nous') ?></h5>
                    <?= $this->Html->image('assets/meet_greet_base/side_pattern_blue.png',['class'=>'mg-height-5 mg-margin-top-22 mg-margin-left-20']) ?> 
                  
                  <div class="row center mg-margin-0">
                    <form name="contact-form" ng-submit="mainctrl.send_contact(contact)">
                       <div class="col s12 input-field contrast-input mg-padding-0">
                         <input type="text" placeholder="Nom Complet" name="fullname" ng-model="contact.fullname" ng-maxlength="30" ng-pattern="/^[a-zA-Z]+$/">
                       </div>
                        <div class="col s12 input-field contrast-input mg-padding-0">
                         <input type="email" placeholder="E-Mail" ng-model="contact.email" ng-pattern="/^[a-zA-Z0-9._-]+@[a-zA-Z0-9._-]+\.[a-z]{2,8}$/">
                       </div>
                        <div class="col s12 input-field contrast-input mg-padding-0">
                         <textarea style="min-height: 5.5rem;" ng-model="contact.message" ng-maxlength="100" ng-pattern="/^[a-zA-Z0-9]+$/" class="materialize-textarea" placeholder="Message(100 caractères maximum)"></textarea>
                       </div>
                    </form>
                  </div>
              </div>
              <div class="col s9">
                <div class="row">
                   <div class="col s5"> <h5 class="mg-regular mg-size-22 left"><?= __('A Propos de nous') ?></h5>
                    <?= $this->Html->image('assets/meet_greet_base/side_pattern_blue.png',['class'=>'mg-height-5 mg-margin-top-22 mg-margin-left-20']) ?> 

                    <p class="white-text mg-thin mg-size-20 mg-margin-bottom-0">
                      Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsa consequatur quaerat corrupti, magni perspiciatis pariatur quis animi, totam architecto dolore molestiae ut ratione necessitatibus labore ab dicta. Ratione, voluptatibus, sunt.
                    </p>
                   </div>
                   <div class="col s1">
                     &nbsp;
                   </div>
                   <div class="col s6 mg-padding-0"> 
                     <h5 class="mg-regular mg-size-22 left"><?= __('Nos réseaux sociaux') ?></h5>
                     <?= $this->Html->image('assets/meet_greet_base/side_pattern_blue.png',['class'=>'mg-height-5 mg-margin-top-22 mg-margin-left-20']) ?>
                     <p class="mg-margin-top-30 left-align">
                      <span class="hvr-backward"><?= $this->Html->image('assets/website/home/social_facebook_outline.png',['class'=>'mg-width-60']) ?></span>
                      <span class="hvr-backward"><?= $this->Html->image('assets/website/home/social_twitter_outline.png',['class'=>'mg-width-60']) ?></span>
                      <span class="hvr-backward"><?= $this->Html->image('assets/website/home/social_linkedin_outline.png',['class'=>'mg-width-60']) ?></span>
                      <span class="hvr-backward"><?= $this->Html->image('assets/website/home/social_instagram_outline.png',['class'=>'mg-width-60']) ?></span>
                      <span class="hvr-backward"><?= $this->Html->image('assets/website/home/social_mail_outline.png',['class'=>'mg-width-60']) ?></span>
                      <p class="center">
                          <button class="mg-margin-right-75 mg-margin-top-20 mg-margin-bottom-30 btn mg-button-1 light-bold mg-padding-left-13 mg-padding-right-13">Abonnez-vous</button>
                      </p>

                     </p>
                  </div>
                </div>

                <div class="row">
                  <div class="col s12">
                   <h5 class="mg-regular mg-size-22 left"><?= __('Tags') ?></h5>
                   <?= $this->Html->image('assets/meet_greet_base/side_pattern_blue.png',['class'=>'mg-height-5 mg-margin-top-22 mg-margin-left-20']) ?> 
                   <p>
                       <div class="mg-margin-right-22 mg-size-19 chip mg_sec_background_3 none-radius white-text mg-regular">
                        <i class="ion-record white-text mg-margin-right-10 mg-size-8"></i>Inspiration
                      </div>

                      <div class="mg-margin-right-22 mg-size-19 chip mg_sec_background_3 none-radius white-text mg-regular">
                        <i class="ion-record white-text mg-margin-right-10 mg-size-8"></i>Motivation
                      </div>

                      <div class="mg-size-19 chip mg_sec_background_3 none-radius white-text mg-regular">
                        <i class="ion-record white-text mg-margin-right-10 mg-size-8"></i>afrooptimisme
                      </div>
        
                   </p>
                  </div>

                </div>
              </div>
            </div>
           </div>

          <div class="footer-copyright">
            <div class="container">
             Made With <span class="red-text">♡</span> By RED
            <a class="grey-text text-lighten-4 right" href="#!">Meet&amp;Greet Africa © 2017 Copyright Text</a>
            </div>
          </div>
  </footer>