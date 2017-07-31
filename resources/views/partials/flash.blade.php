@if (session('status'))
<div class="alert alert-success" role="alert">
	<div class="container">
		<div class="alert-icon">
			<i class="now-ui-icons ui-2_like"></i>
		</div>
		{{ session('status') }}
		<button type="button" class="close" data-dismiss="alert" aria-label="Close">
				<span aria-hidden="true">
				<i class="now-ui-icons ui-1_simple-remove"></i>
			</span>
		</button>
	</div>
</div>
@endif