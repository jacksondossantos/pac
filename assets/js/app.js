var PAC = angular.module('PAC', [
	'ngRoute',
	'oc.lazyLoad'
	]);


PAC.config(['$locationProvider', function($locationProvider) {
  $locationProvider.hashPrefix('');
  $locationProvider.html5Mode(true);
}]);

PAC.config(['$routeProvider',function($routeProvider) {
	$routeProvider
	.when('/', {
		templateUrl: 'home',
		controller: 'HomeCtrl',
		resolve: {
			loadAsset: ['$ocLazyLoad', function ($ocLazyLoad) {
				return $ocLazyLoad.load(['assets/js/controllers/HomeCtrl.js']);
			}]
		}
	});
	
	
}])