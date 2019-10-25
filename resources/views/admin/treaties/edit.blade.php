<div class="container">
	<form action="/admin/treaties/{{ $model->id }}" method="POST" style="width: 100%">
    	@csrf
    	<input type="hidden" name="_method" value="PUT">
		<div class="form-group col-lg-12">
			<label>Shartnoma raqami</label>
			<input type="text" class="form-control" required name="treaty_number" placeholder="raqam" value="{{ $model->treaty_number }}">
		</div>
      <div class="form-group col-lg-12">
        <label>Shartnoma nomi</label>
        <input type="text" class="form-control" required name="treaty_name" placeholder="" value="{{ $model->treaty_name }}">
      </div>
      <div class="form-group col-lg-12">
        <label>Shartnoma sanasi</label>
        <input type="text" class="form-control" required name="date" placeholder="2018.02.31" value="{{ $model->date }}">
      </div>
      <div class="form-group col-lg-12">
        <label>Shartnomaning tugash sanasi</label>
        <input type="text" class="form-control" required name="date_end" placeholder="2019.02.31" value="{{ $model->date_end }}">
      </div>
      <div class="form-group col-lg-12">
        <label>Shartnoma summasi</label>
        <input type="text" class="form-control" required name="number" placeholder="summ (raqam)" value="{{ $model->number }}">
      </div>
      <div class="form-group col-lg-12">
        <label>Texnika soni</label>
        <input type="text" class="form-control" required name="price" placeholder="Raqam" value="{{ $model->price }}">
        <input type="hidden" class="form-control" required name="inn_id" value="{{ $model->inn_id }}">
      </div>
			<div class="modal-footer">
				<button type="submit" class="btn btn-primary">Saqlash</button>
			</div>
	</form>
</div>