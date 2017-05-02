(function () {
  angular.module('app.editprofile', ['ngFileUpload'])
  .controller('ShowController', function ($scope, $http, Upload) {
    var userId = window.location.pathname.split('/')[2]
    $scope.size = [
    {name: 'Seleccionar', value: null},
    {name: 'XS', value: 'XS'},
    {name: 'S', value: 'S'},
    {name: 'M', value: 'M'},
    {name: 'XL', value: 'XL'}
    ]

    $http.get('/api/user/' + userId)
    .then(function (response) {
      $scope.user = response.data
      $scope.file = '/' + $scope.user.image
    })

    $scope.update = function () {
      $http.put('/api/user/' + userId, $scope.user)
      .then(function (response) {
        $scope.message = true
      })
    }

    $scope.uploadFiles = function (file, invalid) {
      Upload.upload({
        url: '/api/user/' + userId + '/image',
        data: {file: file}
      })
      .then(function (response) {
        console.log(response)
      })
    }
  })
})()
