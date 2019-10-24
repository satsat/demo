var myApp = angular.module("myModule",[]).filter("myFilter",function()
{
	return function (gender2)
	{
		switch(gender2)
		{
			case 1: return "Male";
			case 2:
			return "Female";
			case 3:
			return "Not Discloused";
		}
	}
}).controller("myController",
function($scope)

{
	var tech=[
	{name : "C#", like:0, dislike:0},
	{name : "Java", like:0, dislike:0},
	{name : "PHP", like:0, dislike:0},
	{name : "Ajax", like:0, dislike:0}
	];
	$scope.tech=tech;
	
	$scope.inclike=function(tech)
	{
		tech.like++;
	}
	$scope.incdislike=function(tech)
	{
		tech.dislike++;
	}
	var emp=[
	{name:"Satish Chauhan", gender:1, salary:23232, city:"Mumbai"},
	{name:"Jessica Noronha", gender:2, salary:54543.565, city:"Goa"},
	{name:"Rahul Singh", gender:1, salary:14342.444, city:"Fatana Bihar"},
	{name:"Vijay Singh", gender:2, salary:22321, city:"Uttar Pradesh"},
	{name:"Aditi Ravi", gender:3, salary:77654.1, city:"Mumbai"}
	];	
	$scope.emp=emp;
	$scope.orderby="name";
	$scope.rsort=false;
	$scope.sortdata=function(column)
	{
		if($scope.rsort==false) $scope.rsort=true;
		else if($scope.rsort==true) $scope.rsort=false; 
		$scope.orderby=column;	
	}
}	
);

