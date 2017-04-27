(function () {
  var myApp = angular.module('app.register', [])

  myApp.controller('RegisterController', function ($scope, $http) {
    $scope.status = false

    $scope.checkAgronomia = function () {
      var cuit = $scope.cuit || ''
      cuit = cuit.split('-').join('')

      $http.get('/api/agronomia/check?cuit=' + cuit)
      .then(function (response) {
        $scope.status = response.data.status
        $scope.agronomy = response.data.nombre
      })
    }
  })

  myApp.directive('googleplace', function () {
    return {
      require: 'ngModel',
      link: function (scope, element, attrs, model) {
        var options = {
          types: [],
          componentRestrictions: {}
        }
        scope.gPlace = new google.maps.places.Autocomplete(element[0], options)

        google.maps.event.addListener(scope.gPlace, 'place_changed', function () {
          scope.$apply(function () {
            model.$setViewValue(element.val())
          })
        })
      }
    }
  })
})()
