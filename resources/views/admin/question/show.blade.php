<div class="container">
	<form action="/admin/question/{{ $model->id }}" method="POST" style="width: 100%">
	@csrf
	<input type="hidden" name="_method" value="PUT">
	<div class="form-group col-lg-12">
		<form action="/question" method="post">
			@csrf
		  <div class="row" >
		    <div>
		    	<label>Ф И Ш</label>
		      <input type="text" class="form-control" required name="name" value="{{ $model->name }}">
		    </div><br>
		    <div>
		    	<label>почта</label>
		      <input type="email" class="form-control" required name="email" value="{{ $model->email }}">
		    </div><br>
		    <div class="col-12">
		    	<label>вопросы</label>
		      <textarea name="body" class="form-control" required cols="30" rows="10">{{ $model->body }}</textarea>
		    </div>
		    <div class="col-12">
		      <button type="submit" class="btn btn-primary">Сохранить</button>
		    </div>
		  </div>
		</form>
	</div>
</div>