(function() {
	function deleteAwardImage() {
		var $awardId = $(this).attr('data-delete')
		var $_token = $('[name="_token"]').val();

		$.ajax({
			url: '/api/panel/awards/' + $awardId + '/image',
			data: {_token: $_token},
			type: 'DELETE',
		})
		.then(function() {
			window.location.reload()
		});
	}
	$('[data-delete]').click(deleteAwardImage)
})();