<div class="modal fade-scale" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Диалог ответа</h4>
      </div>
      <hr>
      <div class="modal-body">
        <form action="/admin/answer" method="POST">
        	@csrf
			  <div class="form-group col-lg-12">
			    <label for="email">Напишите ответ на вопрос:</label>
			    <input type="hidden" name="question_id" id="question_id">
			    <textarea class="form-control" name="body" required cols="150" rows="10"></textarea>
			  </div>
			  <div class="modal-footer">
			  <button type="submit" class="btn btn-primary">Сохранить</button>
			</div>
			</form>
      </div>
    </div>
  </div>
</div>
<div class="modal fade-scale" id="myModalCreate" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Введите вопрос</h4>
      </div>
      <hr>
      <div class="modal-body">
        <form action="/question" method="post" style="width: 100%;">
            @csrf
              <div class="row">
                <div class="col-lg-6">
                  <input type="text" class="form-control" required name="name" placeholder="@lang('messages.Your Name')">
                </div>
                <div class="col-lg-6">
                  <input type="email" class="form-control" required name="email" placeholder="@lang('messages.Your Email')">
                </div>
                <div class="col-10" style="width: 97%; margin: 0 auto;">
                  <textarea name="body" class="form-control" required cols="30" rows="10" placeholder="@lang('messages.1')"></textarea>
                </div>
                <div class="col-12"><br>
                  &nbsp;&nbsp;&nbsp;&nbsp;<button type="submit" class="btn btn-success">@lang('messages.Send Message')</button>
                </div>
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
        <h4 class="modal-title" id="myModalLabel">Изменит вопросы</h4>
      </div>
      <hr style="padding: 0; margin: 0">
      <div class="modal-body" id="modalContent1">
      	<img style='width:200px;display:block; margin: 0 auto;' src='/img/ajax.gif'>
      </div>
    </div>
  </div>
</div>