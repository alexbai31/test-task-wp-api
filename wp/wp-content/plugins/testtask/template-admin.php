<form id="tt-calc" data-api-url="http://api.j.local/calc">
	<table class="form-table">
		<tbody>
			<tr>
				<th scope="row">Number A</th>
				<td>
					<input name="a" type="text" value="" class="regular-text ltr" required>
				</td>
			</tr>
			<tr>
				<th scope="row">Number B</th>
				<td>
					<input name="b" type="text" value="" class="regular-text ltr" required>
				</td>
			</tr>
		</tbody>
	</table>

	<p class="submit">
		<input type="submit" name="submit" id="submit" class="button button-primary" value="Calculate">
	</p>
</form>

<script>
	jQuery(function($) {
		$('#tt-calc').on('submit', function(event) {
			var calc = this,
				apiUrl = $(this).data('api-url'),
				data = $(this).serializeArray(),

				requestUrl = [apiUrl, data[0].value, data[1].value].join('/');

			console.info(requestUrl);

			$.ajax({
				url: window.location.href,
				crossDomain: true,
				data: {fetchApi: true, url: requestUrl},
				method: 'post',
				dataType: 'json'
			}).always(function(response) {
				var alert = $('<div/>').addClass('alert');

				if(response.success) {
					alert.text('Result: ' + response.data);
				} else {
					alert.text('Error: ' + response.error);
				}

				$('.alert', calc).remove();
				$(calc).prepend(alert);
			});

			return false;
		});
	});
</script>