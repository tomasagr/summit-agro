(function () {
  angular.module('app.avatars', [])
    .controller('AvatarsController', function ($scope, $http) {
      $scope.errors = false
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
        var useWidth = document.getElementById('canvas').style.width
        var useHeight = document.getElementById('canvas').style.height

        html2canvas(document.getElementById('canvas'), {
          onrendered: function (canvas) {
            $scope.imgData = canvas.toDataURL('image/png')
          },
          width: useWidth,
          height: useHeight
        })

        return window.open($scope.imgData)
        var data = {
          meta: $scope.avatar,
          name: $scope.avatar.name,
          image: '',
          japanese: $scope.avatar.japanese,
          user_id: Number(location.pathname.split('/')[2])
        }

        $http.post('/api/avatar', data)
          .then(function (response) {
            $scope.loading = false
            $scope.avatar.japanese = response.data.translationText
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
