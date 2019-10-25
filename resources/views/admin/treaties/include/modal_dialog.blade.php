<div class="modal fade-scale" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">
          <span style="color: #000; font-weight: bold;">{{ $name }}</span> INN uchun yangi shartnoma kiritish
        </h4>
      </div>
      <div class="modal-body">
      <form action="/admin/treaties" method="POST" style="width: 100%">
        	@csrf
			<div class="form-group col-lg-12">
				<label>Shartnoma raqami</label>
				<input type="text" class="form-control" required name="treaty_number" placeholder="raqam">
			</div>
      <div class="form-group col-lg-12">
        <label>Shartnoma nomi</label>
        <input type="text" class="form-control" required name="treaty_name" placeholder="">
      </div>
      <div class="form-group col-lg-12">
        <label>Shartnoma sanasi</label>
        <input type="text" class="form-control" required name="date" placeholder="2018.02.31">
      </div>
      <div class="form-group col-lg-12">
        <label>Shartnomaning tugash sanasi</label>
        <input type="text" class="form-control" required name="date_end" placeholder="2019.02.31">
      </div>
      <div class="form-group col-lg-12">
        <label>Shartnoma summasi</label>
        <input type="text" class="form-control" required name="number" placeholder="summ (raqam)">
      </div>
      <div class="form-group col-lg-12">
        <label>Texnika soni</label>
        <input type="text" class="form-control" required name="price" placeholder="Raqam">
        <input type="hidden" class="form-control" required name="inn_id" value="{{ $id }}">
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

<div class="modal fade-scale" id="myModal2" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Yangi To'lov kiritish</h4>
      </div>
      <div class="modal-body">
        <form action="/admin/payments" method="POST">
          @csrf
        <div class="form-group col-lg-4">
          <label>Sanadan :</label>
          <input type="text" class="form-control" name="date_from" required placeholder="31.12.2018">
        </div>
        <div class="form-group col-lg-4">
          <label>Sanagacha :</label>
          <input type="text" class="form-control" name="date_to" required placeholder="31.12.2019">
        </div>
        <div class="form-group col-lg-4">
          <label>To'lanishi kerak summa:</label>
          <input type="text" class="form-control" name="to_be_paid" required placeholder="1000000">
        </div>
        <div class="form-group col-lg-6">
          <label>To'langan sana:</label>
          <input type="text" class="form-control" name="date_payment" required placeholder="31.12.2019">
        </div>     
        <div class="form-group col-lg-6">
          <label>To'langan summasi  :</label>
          <input type="text" class="form-control" name="paid" required placeholder="10000000">
          <input type="hidden" id="tolov_id" class="form-control" name="treaties_id" required >
        </div>

        <div class="modal-footer">
        <button type="submit" class="btn btn-primary">Saqlash</button>
      </div>
      </form>
      </div>
    </div>
  </div>
</div>