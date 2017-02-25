var PAC = angular.module('PAC', [
	'ngRoute'
	]);


PAC.config(['$locationProvider', function($locationProvider) {
  $locationProvider.hashPrefix('');
}]);

PAC.config(['$routeProvider',function($routeProvider) {
	$routeProvider
	.when('/', {
		templateUrl: 'home',
		controller: 'HomeCtrl'
	});
	
	
}])