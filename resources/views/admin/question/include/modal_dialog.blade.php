<div class="modal fade-scale" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Savolga javob yozish oynasi</h4>
      </div>
      <hr>
      <div class="modal-body">
        <form action="/admin/answer" method="POST">
        	@csrf
			  <div class="form-group col-lg-12">
			    <label for="email">Savolga javonb yozing:</label>
			    <input type="hidden" name="question_id" id="question_id">
			    <textarea class="form-control" name="body" required cols="150" rows="10"></textarea>
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
        <h4 class="modal-title" id="myModalLabel">Berilgan savolni o'zgartirisah oynasi</h4>
      </div>
      <hr style="padding: 0; margin: 0">
      <div class="modal-body" id="modalContent1">
      	<img style='width:200px;display:block; margin: 0 auto;' src='/img/ajax.gif'>
      </div>
    </div>
  </div>
</div>