<form method="POST" autocomplete="off" onsubmit="Success()">
	{{ csrf_field() }}
	<div class="row">
		<div class="input-field col-sm-5 pl-0">
			<input type="text" class="form-control validate" id="full_name" name="full_name" required>
			<label for="full_name">Full Name</label>
		</div>

	</div>

	<div class="row">
		<div class="input-field col-sm-3 pl-0">
			<input type="number" class="form-control validate" id="batch_year" name="batch_year" maxlength="4" minlength="4" required>
			<label for="batch_year" data-error="Please use numbers in this field." data-success="">Batch Year</label>
		</div>
	</div>

	<div class="w-100 center-align">
		<button class="btn-large btn w-50" type="submit">Submit</button>
	</div>
</form>