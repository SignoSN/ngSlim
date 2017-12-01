var ngslim = angular.module('ngslim', ['ngRoute']);

ngslim.config(($routeProvider, $sceProvider)=>{
	$sceProvider.enabled(false);
	$routeProvider
	.when('/', {
		templateUrl: '/views/homepage.html',
		controller: 'homepage'
	})
	.otherwise({
		redirectTo: '/'
	});
});

ngslim.controller('homepage', ($scope, $http) => {
	$http({
		method: "GET",
		url: "/api/foo"
	})
	.then((response) => {
		$scope.foos = response.data;
	})
});