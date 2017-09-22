angular.module('mga',['ui.router','mga.services','mga.controllers','ui.materialize','ngRateIt'])
		.run(['$rootScope', function($rootScope){
		    // Verifications Here
		    $rootScope.$on('$stateChangeStart', function(event, toState, toParams, fromState, fromParams) {
                $rootScope.preloader = true;
                if(toState.name==='app.home')
                	$rootScope.rootpage = true;
                else
                	$rootScope.rootpage = false;
            });
            $rootScope.$on('$viewContentLoaded', function(event, toState, toParams, fromState, fromParams) {
                $rootScope.preloader = false;
            });

		}])
		.config(['$httpProvider','$urlRouterProvider','$stateProvider','$locationProvider', function($httpProvider,$urlRouterProvider,$stateProvider,$locationProvider){
				// Enabling Html5Mode
				$locationProvider.html5Mode(true);
			    $locationProvider.hashPrefix('!');

			    //routing file
			    $stateProvider.state('app',{
			    	url:'/',
			    	cache:false,
			    	abstract:true,
			    	views:{
			    		"":{
			    			template:'<ui-view/>',
			    			controller:'MainCtrl as mainctrl'
			    		},
			    		"navbar":{
			    			templateUrl:"/element/navbar",
			    			controller:'MainCtrl as mainctrl'
			    		},
			    		"footer":{
			    			templateUrl:'/element/footer',
			    			controller:'MainCtrl as mainctrl'
			    		}
			    	}
			    })
			    .state('app.home',{
			    	url:'home',
			    	cache:false,
			    	templateUrl:'/home/home',
			    	controller:'HomeCtrl as homectrl'
			    })
			   .state('app.wellbeing',{
			    	url:'bienetre',
			    	cache:false,
			    	templateUrl:'/home/wellbeing',
			    	controller:'WellBeingCtrl as wellbeingctrl'
			    })
			    .state('app.career',{
			    	url:'carierre',
			    	cache:false,
			    	templateUrl:'/home/career',
			    	controller:'CareerCtrl as careerctrl'
			    })
			   	.state('app.business',{
			    	url:'business',
			    	cache:false,
			    	templateUrl:'/home/business',
			    	controller:'BusinessCtrl as businessctrl'
			    })
			     .state('app.relationship',{
			    	url:'relation',
			    	cache:false,
			    	templateUrl:'/home/relationship',
			    	controller:'RelationshipCtrl as relationshipctrl'
			    })
			     .state('app.inspiration',{
			    	url:'inspiration',
			    	cache:false,
			    	templateUrl:'/home/inspiration',
			    	controller:'InscpirationCtrl as inspirationctrl'
			    })
			     .state('app.finance',{
			    	url:'finance',
			    	cache:false,
			    	templateUrl:'/home/finance',
			    	controller:'FinanceCtrl as financectrl'
			    });

			    $urlRouterProvider.otherwise('home');

				// //Custom Setting $httpProvider
				$httpProvider.defaults.headers.common['X-Requested-With'] = 'XMLHttpRequest';
		}])