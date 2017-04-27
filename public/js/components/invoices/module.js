var app = angular.module('loadInvoices', ['ngFileUpload'])

app.controller('InvoicesController', ['Upload', '$http', function (Upload, $http) {
  var vm = this
  vm.invoice = {}
  vm.invoice.products = []
  vm.productList = [{}]
  vm.promoCode = ''
  vm.code = {}
  vm.totalPoints = 0
  vm.formHidden = false

  $http.get('/api/products')
  .then(function (response) {
    vm.products = response.data
  })

  vm.addProduct = function (index) {
    vm.productList.push({})
  }

  vm.searchCode = function () {
    $http.get('/api/cupons?q=' + vm.promoCode)
    .then(function (response) {
      if (vm.promoCode.length > 3) {
        if (response.data.length == 0) {
          vm.codeMessage = 'Codigo incorrecto.'
          vm.codeColor = 'red'
          vm.code = ''
          return
        }

        vm.code = response.data[0]
        vm.codeMessage = 'Codigo correcto.'
        vm.codeColor = 'green'
      }
    })
  }

  vm.storeInvoice = function () {
    var data = {
      'user_id': vm.user_id,
      'code_id': vm.code.id,
      'date': vm.invoice.date,
      'invoice_number': vm.invoice.invoice_number,
      'cuit': vm.invoice.cuit,
      'points': vm.totalPoints
    }

    data.products = vm.invoice.products.map(function (element) {
      return {product_id: element.id, quanty: element.quanty}
    })

    Upload.upload({
      url: 'api/user/' + data.user_id + '/solicitude',
      data: {file: vm.invoice.file, 'data': data}
    }).then(function (resp) {
      vm.formHidden = true
      console.log(resp)
    }, function (resp) {
      console.log('Error status: ' + resp.status)
    })
  }
}])

app.filter('totalPointsFilter', function () {
  return function (input, scope) {
    if (scope.invoice.products.length == 0) {
      return 0
    }

    var newTotal = 0

    angular.forEach(scope.invoice.products, function (element) {
      newTotal += (element.points || 0) * element.quanty || 0
    })

    newTotal += scope.code.points || 0

    scope.totalPoints = newTotal

    return newTotal
  }
})
