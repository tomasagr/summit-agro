(function () {
  angular.module('app.avatars', [])
  .controller('AvatarsController', function ($scope, $http) {
    $scope.errors = false
    $scope.userid = Number(location.pathname.split('/')[2])
    $scope.avatar = {
      gender: 'm',
      name: '',
      japanese: '',
      boca: 'boca-2',
      pelo: 'pelo-2',
      ojos: 'ojos-2',
      clothes: ''
    }
    $scope.loading = false
    $scope.loadingUpload = false
    $scope.selectedPelo = 'pelo-2'
    $scope.selectedBoca = 'boca-2'
    $scope.selectedOjos = 'ojos-2'

    $scope.selectPelo = function (style) {
      $scope.selectedPelo = style
      $scope.avatar.pelo = style
    }

    $scope.selectOjos = function (style) {
      $scope.selectedOjos = style
      $scope.avatar.ojos = style
    }

    $scope.selectBoca = function (style) {
      $scope.selectedBoca = style
      $scope.avatar.boca = style
    }

    $scope.store = function () {
      var node = document.getElementById('canvas')
      $scope.loadingUpload = true

      domtoimage.toPng(node, {width: 300, height: 300})
      .then(function (dataUrl) {
        var img = new Image()
        img.src = dataUrl
        $scope.imgData = dataUrl
      })
      .then(function () {
        var data = {
          meta: $scope.avatar,
          name: $scope.avatar.name,
          image: $scope.imgData,
          japanese: $scope.avatar.japanese,
          user_id: Number(location.pathname.split('/')[2])
        }

        $http.post('/api/avatar', data)
        .then(function (response) {
          $scope.loading = false
          window.location = '/home'
        })
      })
      .catch(function (error) {
        console.error('oops, something went wrong!', error)
      })
    }

    $scope.translate = function () {
      var name = $scope.avatar.name || ''

      if (name.length >= 3) {
        $scope.loading = true
        $http.get('/avatar/' + name + '/translate')
        .then(function (response) {
          $scope.loading = false
          $scope.avatar.japanese = response.data.translationText
        })
      }
    }
  })
})()
