 <!-- NavBar for other pages -->
  <nav class="white" ng-hide="$root.rootpage">
      <div class="nav-wrapper">
	        <div class="col s12 l11 m11">
	             <li class="mg-margin-0 hide-on-med-and-down brand-logo relative-block left" style="max-height:64px;">
	             <a href="#!" class="">
	                 <img ng-src="/img/assets/basic_assets/meet_greet_original.png" class="pointer" width="110px" ui-sref="app.home" alt=""></a>
	              </li>
	           
	              <li class="hide-on-large-only center" style="max-height:56px;">
	                     <a href="#!" class="">
	                        <img ng-src="/img/assets/basic_assets/meet_greet_original.png" class="pointer" width="90px" ui-sref="app.home" alt="">
	                     </a>
	              </li>
	            <a style="position: absolute;left: 20px; top: 0px;" href="#"  class="alternate-button-collapse pointer hide-on-large-only">    <i class="ion-android-menu black-text mg-size-33 pointer"></i>
	            </a>
	            <ul class="right hide-on-med-and-down mg-padding-right-170">
	            
	              <li ui-sref="app.wellbeing" ui-sref-active="active" class="menu"><a href="badges.html" class="mg_sec_color_4 mg-medium mg-size-18">bienêtre</a></li>
	              <li ui-sref="app.career" ui-sref-active="active" class="menu"><a href="badges.html" class="mg_sec_color_4 mg-medium mg-size-18">carrière</a></li>
	              <li ui-sref="app.business" ui-sref-active="active" class="menu"><a href="badges.html" class="mg_sec_color_4 mg-medium mg-size-18">business</a></li>
	              <li ui-sref="app.relationship" ui-sref-active="active" class="menu"><a href="badges.html" class="mg_sec_color_4 mg-medium mg-size-18">relation</a></li>
	              <li ui-sref="app.inspiration" ui-sref-active="active" class="menu"><a href="badges.html" class="mg_sec_color_4 mg-medium mg-size-18">inspiration</a></li>
	              <li ui-sref="app.finance" ui-sref-active="active" class="menu"><a href="badges.html" class="mg_sec_color_4 mg-medium mg-size-18">finance</a></li>
	            </ul>
	        </div>
	        <div class="col l1 m1 hide-on-small-and-down mg-padding-0">
	           <button class="mg-padding-0 hide-on-small-and-down btn mg_sec_background_8 mg-width-145 mg-height-40 mg-line-height-17" style="position: absolute;bottom: 15px;right: 10px;text-transform: none;"> <a href="/zine/download" target="_blank" class="white-text"><span class="mg-size-18 light-bold pulse">Télécharger</span></a> <br> <span class="uppercase mg-size-11">le mag gratuit</span>
			   </button>
			   &nbsp;
	        </div>
      </div>
  </nav>


<!-- Navbar Root Page -->
<div ng-show="$root.rootpage" class="center row mg-padding-top-15 mg-padding-bottom-20 hide-on-med-and-down mg-margin-bottom-0 ng-scope mg-padding-left-25 mg-padding-right-25" style="background:#EDF3F7 url('img/assets/meet_greet_base/pattern_header_transparent.png') 210% 29% repeat-x; border-bottom:2px solid #231F20;">
	<div class="col s2 left-align" style="position: relative;">
		<?= $this->Html->image('assets/website/e_mag/e_mag.jpg',['style'=>'width:135px;']) ?>  
		<button class="mg-padding-0 btn mg_sec_background_8 mg-width-145 mg-height-40 mg-line-height-17" style="position: absolute;bottom: 1px;left: 140px;text-transform: none;"> <a href="/zine/download" target="_blank" class="white-text"><span class="mg-size-18 light-bold pulse">Télécharger</span></a> <br> <span class="uppercase mg-size-11">le mag gratuit</span>
		</button>
	</div>
	<div class="col s5 offset-s1 right-align">
	    <img ng-src="/img/assets/basic_assets/meet_greet_original.png" class="pointer" width="70%" ui-sref="app.home" alt="">
	</div>
	<div class="col s4 center mg-margin-top-120">
	    <p class="center mg-margin-0">
		<span class="hvr-bob pointer tooltipped" data-tooltip="Facebook" data-position="top" ><?= $this->Html->image('assets/website/home/social_facebook.png',['class'=>'mg-width-40']) ?></span>
		<span class="hvr-bob pointer tooltipped" data-tooltip="Twitter" data-position="top"><?= $this->Html->image('assets/website/home/social_twitter.png',['class'=>'mg-width-40']) ?></span>
		<span class="hvr-bob pointer tooltipped" data-tooltip="Instagram" data-position="top"><?= $this->Html->image('assets/website/home/social_instagram.png',['class'=>'mg-width-40']) ?></span>
		<span class="hvr-bob pointer tooltipped" data-tooltip="E-Mail" data-position="top"><?= $this->Html->image('assets/website/home/social_mail.png',['class'=>'mg-width-40']) ?></span>
		<button class="mg-margin-bottom-10 mg-margin-left-15 btn mg-button-2 light-bold mg-padding-left-13 mg-padding-right-13">Abonnez-vous</button>
	    </p>
	</div>
</div>

<!-- Dynamic Nav -->
<div class="navbar-fixed" id="dynamic_navbar" style="position: absolute; top: 0px;">
  <nav class="white">
      <div class="nav-wrapper">
        <div class="col s11 ">
             
             <li class="mg-margin-0 hide-on-med-and-down brand-logo relative-block left" style="max-height:64px;">
                 <a href="#!" class="">
	                 <img ng-src="/img/assets/basic_assets/meet_greet_original.png" class="pointer" width="110px" ui-sref="app.home" alt="">
	             </a>
              </li>
           
              <li class="hide-on-large-only center" style="max-height:56px;">
                 <a href="#!" class="center">
	    			<img ng-src="/img/assets/basic_assets/meet_greet_original.png" class="pointer" width="90px" ui-sref="app.home" alt="">
                  </a>
              </li>
              
              <a style="position: absolute;left: 20px;top:0px;" href="#" class="alternate-button-collapse pointer hide-on-large-only">
              	 <i class="ion-android-menu black-text mg-size-33"></i>
              </a>
	        
	         <ul class="right hide-on-med-and-down">
	          <li ui-sref="app.wellbeing" ui-sref-active="active" class="menu"><a href="badges.html" class=" mg_sec_color_4 mg-medium mg-size-18">bienêtre</a></li>
	          <li ui-sref="app.career" ui-sref-active="active" class="menu"><a href="badges.html" class=" mg_sec_color_4 mg-medium mg-size-18">carrière</a></li>
	          <li ui-sref="app.business" ui-sref-active="active" class="menu"><a href="badges.html" class=" mg_sec_color_4 mg-medium mg-size-18">business</a></li>
	          <li ui-sref="app.relationship" ui-sref-active="active" class="menu"><a href="badges.html" class=" mg_sec_color_4 mg-medium mg-size-18">relation</a></li>
	          <li ui-sref="app.inspiration" ui-sref-active="active" class="menu"><a href="badges.html" class=" mg_sec_color_4 mg-medium mg-size-18">inspiration</a></li>
	          <li ui-sref="app.finance" ui-sref-active="active" class="menu"><a href="badges.html" class=" mg_sec_color_4 mg-medium mg-size-18">finance</a></li>
	        </ul>
        </div>
        <div class="col s1 mg-padding-0" style="overflow-x: hidden; background: url('img/assets/website/home/menu_shape.png');">
			&nbsp;
        </div>

      </div>
  </nav>
</div>
<!-- Permanent NavBar For Med And Larger screen -->
    <nav class="none-box-shadow white" ng-show="$root.rootpage">
      <div class="nav-wrapper">
        <div class="col s10 mg-padding-right-100 hide-on-med-and-down">

           <li  class="brand-logo relative-block left button-collapse" data-activates="slide-out"><a href="#!" class=""><i class="ion-android-menu mg-size-33 mg_sec_color_4"></i></a></li>

	        <ul class="right hide-on-med-and-down">
	          <li ui-sref="app.wellbeing" ui-sref-active="active" class="menu "><a href="badges.html" class=" mg_sec_color_4 mg-medium mg-size-18">bienêtre</a></li>
	          <li ui-sref="app.career" ui-sref-active="active" class="menu "><a href="badges.html" class=" mg_sec_color_4 mg-medium mg-size-18">carrière</a></li>
	          <li ui-sref="app.business" ui-sref-active="active" class="menu "><a href="badges.html" class=" mg_sec_color_4 mg-medium mg-size-18">business</a></li>
	          <li ui-sref="app.relationship" ui-sref-active="active" class="menu "><a href="badges.html" class=" mg_sec_color_4 mg-medium mg-size-18">relation</a></li>
	          <li ui-sref="app.inspiration" ui-sref-active="active" class="menu "><a href="badges.html" class=" mg_sec_color_4 mg-medium mg-size-18">inspiration</a></li>
	          <li ui-sref="app.finance" ui-sref-active="active" class="menu "><a href="badges.html" class=" mg_sec_color_4 mg-medium mg-size-18">finance</a></li>
	        </ul>
        </div>

        <div class="col s2 mg-padding-0 hide-on-med-and-down" style="overflow-x: hidden; background: url('img/assets/website/home/menu_shape.png');">
			&nbsp;
        </div>


		<div class="col s10 mg-padding-right-0 hide-on-large-only">

              <a style="position: absolute;left: 20px;top:0px;" href="#" class="alternate-button-collapse pointer hide-on-large-only">
              	 <i class="ion-android-menu black-text mg-size-33"></i>
              </a>

						 <li class="hide-on-large-only center" style="max-height:56px;">
		                 <a href="#!" class="center">
			    			<img ng-src="/img/assets/basic_assets/meet_greet_original.png" class="pointer" width="95px" ui-sref="app.home" alt="">
		                  </a>
		              </li>
		 </div>


       <div class="col s1 m1 hide-on-large-only mg-padding-0">
	           <button class="mg-padding-0 hide-on-small-and-down btn mg_sec_background_8 mg-width-145 mg-height-40 mg-line-height-17" style="position: absolute;bottom: 15px;right: 10px;text-transform: none;"> <a href="/zine/download" target="_blank" class="white-text"><span class="mg-size-18 light-bold pulse">Télécharger</span></a> <br> <span class="uppercase mg-size-11">le mag gratuit</span>
			   </button>
			   &nbsp;
	    </div>

      </div>
    </nav>

      <ul id="slide-out"  class="side-nav" style="background:#194D82 url('img/assets/meet_greet_base/pattern_header_transparent_3.png') 5% 5%;">
	    <li class="white mg-padding-bottom-10 mg-padding-top-10">
	    	<img ng-src="/img/assets/basic_assets/meet_greet_original.png" class="pointer" width="190px" ui-sref="app.home" alt="">
	    </li>
	      	<ul>
	      	  <li  ui-sref-active="active" ui-sref="app.home" class="menu"><a href="sass.html" class="mg-height-60 white-text left-align mg-medium  mg-size-18">accueil</a></li>
	          <li ui-sref="app.wellbeing" ui-sref-active="active" class="menu mg-margin-top-10"><a href="badges.html" class="mg-height-60 white-text left-align mg-medium mg-size-18">bienêtre</a></li>
	          <li ui-sref="app.career" ui-sref-active="active" class="menu mg-margin-top-10"><a href="badges.html" class="mg-height-60 white-text left-align mg-medium mg-size-18">carrière</a></li>
	          <li ui-sref="app.business" ui-sref-active="active" class="menu mg-margin-top-10"><a href="badges.html" class="mg-height-60 white-text left-align mg-medium mg-size-18">business</a></li>
	          <li ui-sref="app.relationship" ui-sref-active="active" class="menu mg-margin-top-10"><a href="badges.html" class="mg-height-60 white-text left-align mg-medium mg-size-18">relation</a></li>
	          <li ui-sref="app.inspiration" ui-sref-active="active" class="menu mg-margin-top-10"><a href="badges.html" class="mg-height-60 white-text left-align mg-medium mg-size-18">inspiration</a></li>
	          <li ui-sref="app.finance " class="menu mg-margin-top-10"><a href="badges.html" class="mg-height-60 white-text left-align mg-medium mg-size-18">finance</a></li>

              <li class="menu mg-margin-top-10 red"><a href="/zine/read" target="_blank" class="mg-height-60 white-text left-align mg-medium mg-size-18">Lire le mag</a>

  			  <li class="menu mg-margin-top-10"><a href="/zine/download" target="_blank" class="mg-height-60 white-text left-align mg-medium mg-size-18">Télécharger le mag</a>

	          <li class="menu social_area mg-margin-top-10">		
	          		<span class="hvr-bob pointer tooltipped" data-tooltip="Facebook" data-position="top" ><?= $this->Html->image('assets/website/home/social_facebook.png',['class'=>'mg-width-50']) ?></span>
					<span class="hvr-bob pointer tooltipped" data-tooltip="Twitter" data-position="top"><?= $this->Html->image('assets/website/home/social_twitter.png',['class'=>'mg-width-50']) ?></span>
					<span class="hvr-bob pointer tooltipped" data-tooltip="Instagram" data-position="top"><?= $this->Html->image('assets/website/home/social_instagram.png',['class'=>'mg-width-50']) ?></span>
					<span class="hvr-bob pointer tooltipped" data-tooltip="E-Mail" data-position="top"><?= $this->Html->image('assets/website/home/social_mail.png',['class'=>'mg-width-55']) ?></span>
					  </li>
		      </ul>
        </ul>




<script>
     $('.button-collapse').sideNav({
      menuWidth: 280, // Default is 300
      edge: 'left', // Choose the horizontal origin
      closeOnClick: true, // Closes side-nav on <a> clicks, useful for Angular/Meteor
      draggable: true, // Choose whether you can drag to open on touch screens,
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



	$('.alternate-button-collapse').on('click', function(e){
		  e.preventDefault();
		  $('.button-collapse').trigger('click');
	});

</script>

