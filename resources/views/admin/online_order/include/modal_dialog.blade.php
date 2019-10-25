<div class="modal fade-scale" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Create Online Order</h4>
      </div>
      <div class="modal-body">
        <form action="/admin/online-order" method="POST">
        	@csrf
			  <div class="form-group col-lg-6">
			    <label for="email">Category:</label>
				<select class="form-control category_id" name="category_id" id="category_id" required>
					<option value="">Categoriyani tanlang</option>
					@foreach (\App\TexnicsCategory::get() as $item)
						<option value="{{ $item->id }}">{{ $item->title }}</option>	
					@endforeach
				</select>
			  </div>
			  <div class="form-group col-lg-6">
					<label for="email">Texnics:</label>
					<select class="form-control" name="texnics_id" id="texnics_id">
					</select>
				  </div>
			<div class="form-group col-lg-6">
				<label for="email">Viloyat :</label>
				<select class="form-control region_id" name="viloyat" id="region_id" required>
					<option value="">Viloyat tanlang</option>
					@foreach (\App\Region::get() as $item)
						<option value="{{ $item->id }}">{{ $item->region_uz }}</option>	
					@endforeach
				</select>
			</div>
			  <div class="form-group col-lg-6">
					<label for="email">Tuman :</label>
					<select class="form-control" required name="tuman" id="city_id">
					</select>
				  {{-- </div> --}}
			</div>
			  <div class="form-group col-lg-12">
			    <label for="email">Лизинг олувчилар номи:</label>
			    <input type="text" class="form-control" name="nomi" required placeholder="">
			  </div>
			  <div class="form-group col-lg-6">
			    <label for="email">Sana:</label>
			    <input type="text" class="form-control datepicker-here" name="date" required placeholder="shartnoma tuzilgan sana" data-range="true" data-multiple-dates-separator=" - ">
			    {{-- <input type="text" data-range="true" data-multiple-dates-separator=" - " class="datepicker-here"/> --}}
			  </div>
			  <div class="form-group col-lg-6">
			    <label for="email">Texnika soni:</label>
			    <input type="text" class="form-control" name="number" required placeholder="raqam">
			  </div>
			  <div class="modal-footer">
			  <button type="submit" class="btn btn-primary">Save</button>
			</div>
			</form>
      </div>
    </div>
  </div>
</div>
<div class="modal fade-scale" id="myModalkorish" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">View Texnocs Category</h4>
      </div>
      <div class="modal-body" id="modalContent1">
      	<img style='width:200px;display:block; margin: 0 auto;' src='/img/ajax.gif'>
      </div>
    </div>
  </div>
</div>