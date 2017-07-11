<div class="center row mg-padding-top-15 mg-padding-bottom-20 mg-margin-bottom-0 ng-scope mg-padding-left-25 mg-padding-right-25" style="background:#EDF3F7 url('img/assets/meet_greet_base/pattern_header_transparent.png') 210% 29% repeat-x; border-bottom:2px solid #231F20;">
	<div class="col s2 left-align" style="position: relative;">
		<?= $this->Html->image('assets/website/e_mag/e_mag.jpg',['style'=>'width:135px;']) ?>  
		<button class="mg-padding-0 btn mg_sec_background_8 mg-width-145 mg-height-40 mg-line-height-17" style="position: absolute;bottom: 1px;left: 140px;text-transform: none;"> <a href="/zine/download" target="_blank" class="white-text"><span class="mg-size-18 light-bold pulse">Télécharger</span></a> <br> <span class="uppercase mg-size-11">le mag gratuit</span>
		</button>
	</div>
	<div class="col s5 offset-s1 right-align"><?= $this->Html->image('assets/basic_assets/meet_greet_original.png',['style'=>'width:337px;'])  ?></div>
	<div class="col s4 center mg-margin-top-120">
	    <p class="center mg-margin-0">

		<span class="hvr-bob pointer tooltipped" data-tooltip="Facebook" data-position="top" ><?= $this->Html->image('assets/website/home/social_facebook.png',['class'=>'mg-width-40']) ?></span>
		<span class="hvr-bob pointer tooltipped" data-tooltip="Twitter" data-position="top"><?= $this->Html->image('assets/website/home/social_twitter.png',['class'=>'mg-width-40']) ?></span>
		<span class="hvr-bob pointer tooltipped" data-tooltip="LinkedIn" data-position="top"><?= $this->Html->image('assets/website/home/social_linkedin.png',['class'=>'mg-width-40']) ?></span>
		<span class="hvr-bob pointer tooltipped" data-tooltip="Instagram" data-position="top"><?= $this->Html->image('assets/website/home/social_instagram.png',['class'=>'mg-width-40']) ?></span>
		<span class="hvr-bob pointer tooltipped" data-tooltip="E-Mail" data-position="top"><?= $this->Html->image('assets/website/home/social_mail.png',['class'=>'mg-width-40']) ?></span>

		<button class="mg-margin-bottom-10 mg-margin-left-15 btn mg-button-2 light-bold mg-padding-left-13 mg-padding-right-13">Abonnez-vous</button>
	    </p>

	</div>
</div>

<!-- Dynamic Nav -->
<div class="navbar-fixed" id="dynamic_navbar" style="position: absolute; top: 0px;">
  <nav class="white mg-height-70">
      <div class="nav-wrapper">
        <div class="col s11 mg-padding-right-0 mg-height-70">
             
             <li data-activates="slide-out" class="mg-margin-0 hide-on-med-and-down brand-logo relative-block left button-collapse">
             <a href="#!" class="">
                 <?= $this->Html->image('assets/basic_assets/meet_greet_original_alt.png',['style'=>'width:207px;'])  ?></a>
              </li>
           
              <li data-activates="slide-out" class="hide-on-large-only brand-logo relative-block center button-collapse">
                     <a href="#!" class="">
                        <?= $this->Html->image('assets/basic_assets/meet_greet_original_alt.png',['style'=>'width:207px;'])  ?>
                     </a>
              </li>

            <a style="position: absolute;left: 0px;" href="#" data-activates="slide-out" class="button-collapse"><i class="ion-android-menu black-text mg-size-40"></i></a>


	        <ul class="right hide-on-med-and-down">
	          <li data-activates="slide-out" class="button-collapse active menu mg-margin-right-30"><a href="sass.html" class="mg_sec_color_4 mg-medium  mg-size-18">accueil</a></li>
	          <li class="menu mg-margin-right-30"><a href="badges.html" class="mg-padding-right-0 mg_sec_color_4 mg-medium mg-size-18">actualité</a></li>
	          <li class="menu mg-margin-right-30"><a href="badges.html" class="mg-padding-right-0 mg_sec_color_4 mg-medium mg-size-18">event</a></li>
	          <li class="menu mg-margin-right-30"><a href="badges.html" class="mg-padding-right-0 mg_sec_color_4 mg-medium mg-size-18">speaker</a></li>
	          <li class="menu mg-margin-right-30"><a href="badges.html" class="mg-padding-right-0 mg_sec_color_4 mg-medium mg-size-18">album</a></li>
	          <li class="menu mg-margin-right-30"><a href="badges.html" class="mg-padding-right-0 mg_sec_color_4 mg-medium mg-size-18">contact</a></li>
	        </ul>
        </div>
        <div class="col s1 mg-height-70 mg-padding-0" style="overflow-x: hidden; background: url('img/assets/website/home/menu_shape.png');">
			&nbsp;
        </div>

      </div>
  </nav>
</div>
<!-- Permanent NavBar For Med And Larger screen -->
    <nav class="none-box-shadow white">
      <div class="nav-wrapper">
        <div class="col s10 mg-padding-right-100">
	         <li data-activates="slide-out" class="brand-logo relative-block left button-collapse"><a href="#!" class=""><i class="ion-android-menu mg-size-40 mg_sec_color_4"></i></a></li>
	        <ul class="right hide-on-med-and-down">
	          <li data-activates="slide-out" class="button-collapse active menu mg-margin-right-30"><a href="sass.html" class="mg_sec_color_4 mg-medium  mg-size-18">accueil</a></li>
	          <li class="menu mg-margin-right-30"><a href="badges.html" class="mg_sec_color_4 mg-medium mg-size-18">actualité</a></li>
	          <li class="menu mg-margin-right-30"><a href="badges.html" class="mg_sec_color_4 mg-medium mg-size-18">event</a></li>
	          <li class="menu mg-margin-right-30"><a href="badges.html" class="mg_sec_color_4 mg-medium mg-size-18">speaker</a></li>
	          <li class="menu mg-margin-right-30"><a href="badges.html" class="mg_sec_color_4 mg-medium mg-size-18">album</a></li>
	          <li class="menu mg-margin-right-30"><a href="badges.html" class="mg_sec_color_4 mg-medium mg-size-18">contact</a></li>
	        </ul>
        </div>
        <div class="col s2 mg-padding-0" style="overflow-x: hidden; background: url('img/assets/website/home/menu_shape.png');">
			&nbsp;
        </div>

      </div>
    </nav>

      <ul id="slide-out"  class="side-nav" style="background:#194D82 url('img/assets/meet_greet_base/pattern_header_transparent_3.png') 5% 5%;">
	    <li class="white mg-padding-bottom-20">
	    	<?= $this->Html->image('assets/basic_assets/meet_greet_original_white.png',['style'=>'width:250px;']) ?>
	    </li>
	      	<ul>
	      	 <li class="active menu"><a href="sass.html" class="mg-height-60 white-text left-align mg-medium  mg-size-18">accueil</a></li>
	          <li class="menu mg-margin-top-10"><a href="badges.html" class="mg-height-60 white-text left-align mg-medium mg-size-18">actualité</a></li>
	          <li class="menu mg-margin-top-10"><a href="badges.html" class="mg-height-60 white-text left-align mg-medium mg-size-18">event</a></li>
	          <li class="menu mg-margin-top-10"><a href="badges.html" class="mg-height-60 white-text left-align mg-medium mg-size-18">speaker</a></li>
	          <li class="menu mg-margin-top-10"><a href="badges.html" class="mg-height-60 white-text left-align mg-medium mg-size-18">album</a></li>
	          <li class="menu mg-margin-top-10"><a href="badges.html" class="mg-height-60 white-text left-align mg-medium mg-size-18">contact</a></li>

	          <li class="menu social_area mg-margin-top-10">		
	          		<span class="hvr-bob pointer tooltipped" data-tooltip="Facebook" data-position="top" ><?= $this->Html->image('assets/website/home/social_facebook.png',['class'=>'mg-width-50']) ?></span>
					<span class="hvr-bob pointer tooltipped" data-tooltip="Twitter" data-position="top"><?= $this->Html->image('assets/website/home/social_twitter.png',['class'=>'mg-width-50']) ?></span>
					<span class="hvr-bob pointer tooltipped" data-tooltip="LinkedIn" data-position="top"><?= $this->Html->image('assets/website/home/social_linkedin.png',['class'=>'mg-width-50']) ?></span>
					<span class="hvr-bob pointer tooltipped" data-tooltip="Instagram" data-position="top"><?= $this->Html->image('assets/website/home/social_instagram.png',['class'=>'mg-width-50']) ?></span>
					<span class="hvr-bob pointer tooltipped" data-tooltip="E-Mail" data-position="top"><?= $this->Html->image('assets/website/home/social_mail.png',['class'=>'mg-width-55']) ?></span>
			  </li>
      </ul>




<script>
	  $(".button-collapse").sideNav({
	  	closeOnClick: true
	  });
$('#dynamic_navbar').fadeOut();
	  	$(window).scroll(function(){

			if($(this).scrollTop() > 750 ){
				$('#dynamic_navbar').fadeIn();
			}	
			else{
				$('#dynamic_navbar').fadeOut();
			}
	});
			
</script>

