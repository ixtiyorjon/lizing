<div class="modal fade-scale" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Yangi texnika yaratish</h4>
      </div>
      <div class="modal-body">
        <form action="/admin/texnic" method="POST" enctype="multipart/form-data">
        	@csrf
			  <div class="form-group col-lg-6">
			    <label for="email">Kategoriya:</label>
				<select class="form-control category_id" name="category_id" id="category_id" required>
					<option value="">Kategoriyani tanlang</option>
					@foreach (\App\TexnicsCategory::get() as $item)
						<option value="{{ $item->id }}">{{ $item->title }}</option>	
					@endforeach
				</select>
			  </div>
			  <div class="form-group col-lg-6">
					<label for="email">Quyi kategoriyay:</label>
					<select class="form-control" name="subcategory_id" id="subcategory_id">
					</select>
				  </div>
			  <div class="form-group col-lg-3">
					<label for="email">Texnika nomi ( en ):</label>
					<input type="text" class="form-control" required name="name_en">
				  </div>
			  <div class="form-group col-lg-3">
			    <label for="email">Texnika nomi ( ru ):</label>
			    <input type="text" class="form-control" required name="name_ru">
			  </div>
			  <div class="form-group col-lg-3">
			    <label for="email">Texnika nomi ( uz ):</label>
			    <input type="text" class="form-control" required name="name_uz">
			  </div>
			  <div class="form-group col-lg-3">
			    <label for="email">Texnika nomi ( uzk ):</label>
			    <input type="text" class="form-control" required name="name_uzk">
			  </div>
			  <div style="margin-bottom: 20px" class="col-lg-12">
			    <label for="pwd">Rasm:</label>
			    <input type="file" class="form-control" name="image[]" enctype="multipart/form-data" multiple>
			  </div>
			  <div class="form-group col-lg-4">
			    <label for="email">Техника нархи ( сум ):</label>
			    <input type="text" class="form-control" name="narxi" required placeholder="мисол: 585 210 000">
			  </div>
			  <div class="form-group col-lg-4">
			    <label for="email">Аванс суммаси ( сум ):</label>
			    <input type="text" class="form-control" name="avans_summ" required placeholder="мисол: 117 042 000">
			  </div>
			  <div class="form-group col-lg-4">
			    <label for="email">Аванс ( % ):</label>
			    <input type="text" class="form-control" name="avans" required placeholder="мисол: 20%">
			  </div>
			  <div class="form-group col-lg-4">
			    <label for="email">йиллик маржа ( % ):</label>
			    <input type="text" class="form-control" name="yillik_foiz" required placeholder="мисол: 7%">
			  </div>
			  <div class="form-group col-lg-4">
			    <label for="email">Лизинг муддати ( йилгача ):</label>
			    <input type="text" class="form-control" name="muddat" required placeholder="мисол: 7,10,12">
			  </div>
			  <div class="form-group col-lg-4">
			    <label for="email">Техника етказиб муддати ( кун ):</label>
			    <input type="text" class="form-control" name="dostavka" required placeholder="мисол: 120">
			  </div>
			  <div class="modal-footer">
			  <button type="submit" class="btn btn-primary">Saqlash</button>
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
        <h4 class="modal-title" id="myModalLabel">Malumot Oynasi</h4>
      </div>
      <div class="modal-body" id="modalContent1">
      	<img style='width:200px;display:block; margin: 0 auto;' src='/img/ajax.gif'>
      </div>
    </div>
  </div>
</div>