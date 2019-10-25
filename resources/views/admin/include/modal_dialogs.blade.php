<div class="modal fade-scale" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Kategoriya yaratish oynasi</h4>
      </div>
      <div class="modal-body">
        <form action="{{ $cat_url }}" method="post" enctype="multipart/form-data">
        	@csrf
				  <div class="form-group col-lg-3">
				    <label for="email">Kategoriya nomi ( en ):</label>
				    <input type="text" class="form-control" required name="title_en" id="title">
				  </div>
				  <div class="form-group col-lg-3">
				    <label for="email">Kategoriya nomi ( ru ):</label>
				    <input type="text" class="form-control" required name="title_ru" id="title">
				  </div>
				  <div class="form-group col-lg-3">
				    <label for="email">Kategoriya nomi ( uz ):</label>
				    <input type="text" class="form-control" required name="title_uz" id="title">
				  </div>
				  <div class="form-group col-lg-3">
				    <label for="email">Kategoriya nomi ( uzk ):</label>
				    <input type="text" class="form-control" required name="title_uzk" id="title">
				  </div>
				  <div class="form-group">
				    <label for="pwd">Rasm:</label>
				    <input type="file" class="form-control" required name="image">
				  </div>
				  <div class="modal-footer">
				  <button type="submit" class="btn btn-primary">Saqlash</button>
				</div>
				</form>
      </div>
    </div>
  </div>
</div>
{{-- subcat create --}}
<div class="modal fade-scale" id="myModal1" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Quyi kategoriya yaratish oynasi</h4>
      </div>
      <div class="modal-body">
        <form action="{{ $subcat_url }}" method="POST" enctype="multipart/form-data">
        	@csrf
		  <div class="form-group col-lg-3">
		    <label for="email">Quyi kategoriya nomi (en):</label>
		    <input type="text" class="form-control" required name="title_en" id="s_title">
		  </div>
		  <div class="form-group col-lg-3">
		    <label for="email">Quyi kategoriya nomi (ru):</label>
		    <input type="text" class="form-control" required name="title_ru" id="title">
		  </div>
		  <div class="form-group col-lg-3">
		    <label for="email">Quyi kategoriya nomi (uz):</label>
		    <input type="text" class="form-control" required name="title_uz" id="title">
		  </div>
		  <div class="form-group col-lg-3">
		    <label for="email">Quyi kategoriya nomi (uzk):</label>
		    <input type="text" class="form-control" required name="title_uzk" id="title">
		  </div>
		  <div class="form-group">
		    <label for="pwd">Rasm:</label>
		    <input type="file" class="form-control" required name="image">
		  </div>
		  <div class="form-group" style="display: none">
		    <label for="email">Kategoriyani tanlang:</label>
		    <input type="text" class="form-control" name="texnics_categories_id" id="texnics_categories_id">
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
        <h4 class="modal-title" id="myModalLabel">Malumotni ko'rish</h4>
      </div>
      <div class="modal-body" id="modalContent1">
      	<img style='width:200px;display:block; margin: 0 auto;' src='/img/ajax.gif'>
      </div>
    </div>
  </div>
</div>