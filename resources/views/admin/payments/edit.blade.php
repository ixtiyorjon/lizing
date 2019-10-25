<form action="/admin/payments/{{ $model->id }}" method="POST" style="width: 100%">
      @csrf
      <input type="hidden" name="_method" value="PUT">
        <div class="form-group col-lg-4">
          <label>Sanadan :</label>
          <input type="text" class="form-control" name="date_from" required placeholder="31.12.2018" value="{{ $model->date_from }}">
        </div>
        <div class="form-group col-lg-4">
          <label>Sanagacha :</label>
          <input type="text" class="form-control" name="date_to" required placeholder="31.12.2019" value="{{ $model->date_to }}">
        </div>
        <div class="form-group col-lg-4">
          <label>To'lanishi kerak summa:</label>
          <input type="text" class="form-control" name="to_be_paid" required placeholder="1000000" value="{{ $model->to_be_paid }}">
        </div>
        <div class="form-group col-lg-6">
          <label>To'langan sana:</label>
          <input type="text" class="form-control" name="date_payment" required placeholder="31.12.2019" value="{{ $model->date_payment }}">
        </div>     
        <div class="form-group col-lg-6">
          <label>To'langan summasi  :</label>
          <input type="text" class="form-control" name="paid" required placeholder="10000000" value="{{ $model->paid }}">
        </div>

        <div class="modal-footer">
        <button type="submit" class="btn btn-primary">Saqlash</button>
      </div>
</form>