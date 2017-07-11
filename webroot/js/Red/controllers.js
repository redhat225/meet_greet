angular.module('mga.controllers',[])
	.controller('MainCtrl',['$scope',function($scope){
		var self = this;
		self.contact = "";
	}])
	.controller('HomeCtrl',['$scope','ArticleService','$log',function($scope,ArticleService,$log){
		var self = this;
		self.state = 'accueil';
		ArticleService.all(self.state).then(function(response){
			self.articles_wide_banner = response.data.articles_wide_banner;
			$log.log(self.articles_wide_banner);
		}, function(errResponse){
			$log.log(errResponse);
		});

		angular.element('.slide_wide_banner_zone_1').slick({
			autoplay:true,
			autoplaySpeed:2000,
			dots:true,
			slidesToShow: 1,
  	        slidesToScroll: 1,
			dots:false,
			prevArrow:angular.element('.next_slider_arrow'),
			nextArrow:angular.element('.prev_slider_arrow'),
			mobileFirst:true,
			pauseOnHover:true,
			arrows:false
		});

		angular.element('.slide_wide_banner_zone_2').slick({
			autoplay:true,
			autoplaySpeed:3000,
			slidesToShow: 5,
  	        slidesToScroll: 5,
			dots:false,
			prevArrow:angular.element('.next_slider_arrow'),
			nextArrow:angular.element('.prev_slider_arrow'),
			mobileFirst:true,
			pauseOnHover:true,
			arrows:true
		});

	}])