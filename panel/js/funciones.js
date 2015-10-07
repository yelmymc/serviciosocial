$("#files").filestyle({
    input: false,
   	buttonText: "Imagen Principal",
   	iconName: "",
   	badges: false,
});

$(".galeria").filestyle({
   	input: false,
    buttonText: "Imagenes",
   	iconName: "",
});

var app = angular.module('panel',['ngSanitize']);

app.controller('formNoticia',['$scope','$http', function(){

}]);