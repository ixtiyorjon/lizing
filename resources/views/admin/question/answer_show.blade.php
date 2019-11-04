<div class="container">
	<form action="/admin/answer/{{ $model->id }}" method="POST" style="width: 100%">
	@csrf
	<input type="hidden" name="_method" value="PUT">
	<div class="form-group col-lg-12">
		<form action="/question" method="post">
			@csrf
		  <div class="row" >
		    <div class="col-lg-12">
		    	<label>ответ</label>
		      <textarea name="body" class="form-control" required cols="30" rows="10">{{ $model->body }}</textarea>
		    </div>
		    <div class="col-12">
		      <button type="submit" class="btn btn-primary">Сохранить</button>
		    </div>
		  </div>
		</form>
	</div>
</div>