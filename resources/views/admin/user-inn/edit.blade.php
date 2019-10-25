<div class="container">
	<form action="/admin/user-inn/{{ $model->id }}" method="POST" style="width: 100%">
    	@csrf
    	<input type="hidden" name="_method" value="PUT">
		<div class="form-group col-lg-12">
			<label>I N N</label>
			<input type="text" class="form-control" required name="inn" value="{{ $model->inn }}">
		</div>
		<div class="modal-footer">
			<button type="submit" class="btn btn-primary">Saqlash</button>
		</div>
	</form>
</div>