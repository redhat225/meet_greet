angular.module('mga.services',[])
	.factory('ArticleService',['$http','$q', function($http, $q){
		return{
			all:function(var_root_heading){
				return $http.get('/articles/all',{params:{root_heading:var_root_heading}})
								.then(function(response){
									return response;
								}, function(errResponse){
									return $q.reject(errResponse);
								});
			}
		}
	}])