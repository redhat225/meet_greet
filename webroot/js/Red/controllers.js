angular.module('mga.controllers',[])
	.controller('MainCtrl',['$scope',function($scope){
		var self = this;
		self.contact = "";
	}])
	.controller('HomeCtrl',['$scope','ArticleService','$log',function($scope,ArticleService,$log){
		var self = this;
		self.state = 'accueil';
		angular.element('.slide_wide_banner_zone_1').slick({
			autoplay:true,
			autoplaySpeed:2000,
			dots:true,
			slidesToShow: 1,
  	        slidesToScroll: 1,
			pauseOnHover:true,
			arrows:false,
			lazyLoad:'ondemand'
		});

		angular.element('.slide_wide_banner_zone_2').slick({
			autoplay:true,
			autoplaySpeed:3000,
			slidesToShow: 4,
  	        slidesToScroll: 1,
			dots:false,
			prevArrow:angular.element('.prev_slider_arrow'),
			nextArrow:angular.element('.next_slider_arrow'),
			pauseOnHover:true,
			arrows:true,
		    responsive: [
					{
				      breakpoint: 1024,
				      settings: {
				        arrows: true,
				        centerMode: true,
				        slidesToShow: 2,
		                slidesToScroll: 1,
		                 adaptiveHeight: true,
				      }
					},

				    {
				      breakpoint: 768,
				      settings: {
				        arrows: true,
				        centerMode: true,
				        slidesToShow: 1,
				         adaptiveHeight: true,
		                slidesToScroll: 1,
				      }
				    },
				    {
				      breakpoint: 480,
				      settings: {
				        arrows: true,
				        centerMode: true,
				         adaptiveHeight: true,
				        slidesToShow: 1,
				        slidesToScroll: 1,
				      }
				    }
				]
		});

        angular.element('.video-slick-container').slick({
				  infinite: true,
				  speed:500,
			      adaptiveHeight: true,
			      slidesToShow: 3,
		          slidesToScroll: 1,
			      focusOnSelect: true,
			      dots:false,
			      arrows:true,
			      vertical:true,
			      verticalSwiping:true
		   });

	    angular.element('.video-slick-container-bottom').slick({
				  infinite: true,
				  speed:500,
				  autoplay:true,
			      adaptiveHeight: true,
			      slidesToShow: 4,
		          slidesToScroll: 1,
		          responsive: [
					{
				      breakpoint: 1024,
				      settings: {
				        arrows: true,
				        centerMode: true,
				        slidesToShow: 3,
		                slidesToScroll: 1,
		                 adaptiveHeight: true,
				      }
					},

				    {
				      breakpoint: 768,
				      settings: {
				        arrows: true,
				        centerMode: true,
				        slidesToShow: 2,
				         adaptiveHeight: true,
		                slidesToScroll: 1,
				      }
				    },
				    {
				      breakpoint: 480,
				      settings: {
				        arrows: true,
				        centerMode: true,
				         adaptiveHeight: true,
				        slidesToShow: 1,
				        slidesToScroll: 1,
				      }
				    }
				]
		   });

        angular.element('.slick-prev').trigger('click');

        self.model = {
        	basic:0
        };

	}])
	.controller('WellBeingCtrl',['$scope', function($scope,$templateCache){
         var self = this;
               angular.element('.parallax').parallax();

               angular.element('.video-slick-container').slick({
				  infinite: true,
				  speed:500,
			      adaptiveHeight: true,
			      slidesToShow: 3,
		          slidesToScroll: 1,
			      focusOnSelect: true,
			      dots:false,
			      arrows:true,
			      vertical:true,
			      verticalSwiping:true
		   });


               

			angular.element('.video-slick-container-bottom').slick({
				  infinite: true,
				  speed:500,
				  autoplay:true,
			      adaptiveHeight: true,
			      slidesToShow: 4,
		          slidesToScroll: 1,
		          responsive: [
					{
				      breakpoint: 1024,
				      settings: {
				        arrows: true,
				        centerMode: true,
				        slidesToShow: 3,
		                slidesToScroll: 1,
		                 adaptiveHeight: true,
				      }
					},

				    {
				      breakpoint: 768,
				      settings: {
				        arrows: true,
				        centerMode: true,
				        slidesToShow: 2,
				         adaptiveHeight: true,
		                slidesToScroll: 1,
				      }
				    },
				    {
				      breakpoint: 480,
				      settings: {
				        arrows: true,
				        centerMode: true,
				         adaptiveHeight: true,
				        slidesToShow: 1,
				        slidesToScroll: 1,
				      }
				    }
				]
		   });

			angular.element('.slick-prev').trigger('click');
	}])
	.controller('CareerCtrl',['$scope', function($scope){
		 var self = this;
		          var self = this;
               angular.element('.parallax').parallax();

               angular.element('.video-slick-container').slick({
				  infinite: true,
				  speed:500,
			      adaptiveHeight: true,
			      slidesToShow: 3,
		          slidesToScroll: 1,
			      focusOnSelect: true,
			      dots:false,
			      arrows:true,
			      vertical:true,
			      verticalSwiping:true
		   });


               

			angular.element('.video-slick-container-bottom').slick({
				  infinite: true,
				  speed:500,
				  autoplay:true,
			      adaptiveHeight: true,
			      slidesToShow: 4,
		          slidesToScroll: 1,
		          responsive: [
					{
				      breakpoint: 1024,
				      settings: {
				        arrows: true,
				        centerMode: true,
				        slidesToShow: 3,
		                slidesToScroll: 1,
		                 adaptiveHeight: true,
				      }
					},

				    {
				      breakpoint: 768,
				      settings: {
				        arrows: true,
				        centerMode: true,
				        slidesToShow: 2,
				         adaptiveHeight: true,
		                slidesToScroll: 1,
				      }
				    },
				    {
				      breakpoint: 480,
				      settings: {
				        arrows: true,
				        centerMode: true,
				         adaptiveHeight: true,
				        slidesToShow: 1,
				        slidesToScroll: 1,
				      }
				    }
				]
		   });

			angular.element('.slick-prev').trigger('click');
	}])
	.controller('BusinessCtrl',['$scope', function($scope){
		 var self = this;
		          var self = this;
               angular.element('.parallax').parallax();

               angular.element('.video-slick-container').slick({
				  infinite: true,
				  speed:500,
			      adaptiveHeight: true,
			      slidesToShow: 3,
		          slidesToScroll: 1,
			      focusOnSelect: true,
			      dots:false,
			      arrows:true,
			      vertical:true,
			      verticalSwiping:true
		   });


               

			angular.element('.video-slick-container-bottom').slick({
				  infinite: true,
				  speed:500,
				  autoplay:true,
			      adaptiveHeight: true,
			      slidesToShow: 4,
		          slidesToScroll: 1,
		          responsive: [
					{
				      breakpoint: 1024,
				      settings: {
				        arrows: true,
				        centerMode: true,
				        slidesToShow: 3,
		                slidesToScroll: 1,
		                 adaptiveHeight: true,
				      }
					},

				    {
				      breakpoint: 768,
				      settings: {
				        arrows: true,
				        centerMode: true,
				        slidesToShow: 2,
				         adaptiveHeight: true,
		                slidesToScroll: 1,
				      }
				    },
				    {
				      breakpoint: 480,
				      settings: {
				        arrows: true,
				        centerMode: true,
				         adaptiveHeight: true,
				        slidesToShow: 1,
				        slidesToScroll: 1,
				      }
				    }
				]
		   });

			angular.element('.slick-prev').trigger('click');
	}])
	.controller('RelationshipCtrl',['$scope', function($scope){
		 var self = this;
		          var self = this;
               angular.element('.parallax').parallax();

               angular.element('.video-slick-container').slick({
				  infinite: true,
				  speed:500,
			      adaptiveHeight: true,
			      slidesToShow: 3,
		          slidesToScroll: 1,
			      focusOnSelect: true,
			      dots:false,
			      arrows:true,
			      vertical:true,
			      verticalSwiping:true
		   });


               

			angular.element('.video-slick-container-bottom').slick({
				  infinite: true,
				  speed:500,
				  autoplay:true,
			      adaptiveHeight: true,
			      slidesToShow: 4,
		          slidesToScroll: 1,
		          responsive: [
					{
				      breakpoint: 1024,
				      settings: {
				        arrows: true,
				        centerMode: true,
				        slidesToShow: 3,
		                slidesToScroll: 1,
		                 adaptiveHeight: true,
				      }
					},

				    {
				      breakpoint: 768,
				      settings: {
				        arrows: true,
				        centerMode: true,
				        slidesToShow: 2,
				         adaptiveHeight: true,
		                slidesToScroll: 1,
				      }
				    },
				    {
				      breakpoint: 480,
				      settings: {
				        arrows: true,
				        centerMode: true,
				         adaptiveHeight: true,
				        slidesToShow: 1,
				        slidesToScroll: 1,
				      }
				    }
				]
		   });

			angular.element('.slick-prev').trigger('click');
	}])
	.controller('InscpirationCtrl',['$scope', function($scope){
		 var self = this;
		          var self = this;
               angular.element('.parallax').parallax();

               angular.element('.video-slick-container').slick({
				  infinite: true,
				  speed:500,
			      adaptiveHeight: true,
			      slidesToShow: 3,
		          slidesToScroll: 1,
			      focusOnSelect: true,
			      dots:false,
			      arrows:true,
			      vertical:true,
			      verticalSwiping:true
		   });


               

			angular.element('.video-slick-container-bottom').slick({
				  infinite: true,
				  speed:500,
				  autoplay:true,
			      adaptiveHeight: true,
			      slidesToShow: 4,
		          slidesToScroll: 1,
		          responsive: [
					{
				      breakpoint: 1024,
				      settings: {
				        arrows: true,
				        centerMode: true,
				        slidesToShow: 3,
		                slidesToScroll: 1,
		                 adaptiveHeight: true,
				      }
					},

				    {
				      breakpoint: 768,
				      settings: {
				        arrows: true,
				        centerMode: true,
				        slidesToShow: 2,
				         adaptiveHeight: true,
		                slidesToScroll: 1,
				      }
				    },
				    {
				      breakpoint: 480,
				      settings: {
				        arrows: true,
				        centerMode: true,
				         adaptiveHeight: true,
				        slidesToShow: 1,
				        slidesToScroll: 1,
				      }
				    }
				]
		   });

			angular.element('.slick-prev').trigger('click');
	}])
	.controller('FinanceCtrl',['$scope', function($scope){
		 var self = this;
		          var self = this;
               angular.element('.parallax').parallax();

               angular.element('.video-slick-container').slick({
				  infinite: true,
				  speed:500,
			      adaptiveHeight: true,
			      slidesToShow: 3,
		          slidesToScroll: 1,
			      focusOnSelect: true,
			      dots:false,
			      arrows:true,
			      vertical:true,
			      verticalSwiping:true
		   });


               

			angular.element('.video-slick-container-bottom').slick({
				  infinite: true,
				  speed:500,
				  autoplay:true,
			      adaptiveHeight: true,
			      slidesToShow: 4,
		          slidesToScroll: 1,
		          responsive: [
					{
				      breakpoint: 1024,
				      settings: {
				        arrows: true,
				        centerMode: true,
				        slidesToShow: 3,
		                slidesToScroll: 1,
		                 adaptiveHeight: true,
				      }
					},

				    {
				      breakpoint: 768,
				      settings: {
				        arrows: true,
				        centerMode: true,
				        slidesToShow: 2,
				         adaptiveHeight: true,
		                slidesToScroll: 1,
				      }
				    },
				    {
				      breakpoint: 480,
				      settings: {
				        arrows: true,
				        centerMode: true,
				         adaptiveHeight: true,
				        slidesToShow: 1,
				        slidesToScroll: 1,
				      }
				    }
				]
		   });

			angular.element('.slick-prev').trigger('click');
	}])