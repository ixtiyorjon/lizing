@section('page_header')
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />  
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
@stop


<div class="container" id="container">

  @include('admin.texnics.include.table',['model' => $model])

    <div class="form-group">
     <form action="/admin/params" method="POST" name="add_name" id="add_name" style="width:100%">  
      {{-- @csrf --}}
        <div class="alert alert-danger print-error-msg" style="display:none">
        <ul></ul>
        </div>
        <div class="alert alert-success print-success-msg" style="display:none">
        <ul></ul>
        </div>
        <div class="table-responsive">  
          <table class="table table-bordered" id="dynamic_field">  
            <tr>  
              <td><input type="text" name="name[0][name_en]" placeholder="Nomi (en)" required class="form-control name_list" /></td>  
              <td><input type="text" name="name[0][name_ru]" placeholder="Nomi (ru)" required class="form-control name_list" /></td>  
              <td><input type="text" name="name[0][name_uz]" placeholder="Nomi (uz)" required class="form-control name_list" /></td>  
              <td><input type="text" name="name[0][name_uzk]" placeholder="Nomi (uzk)" required class="form-control name_list" /></td>  
              <td><input type="text" name="name[0][value]" placeholder="Qiymati ( raqam )" required class="form-control name_list" /></td>
              <td style="display: none"><input type="text" name="name[0][texnics_id]" value="{{ $id }}" placeholder="Enter your Name" class="form-control name_list"></td>  
              <td><button type="button" name="add" id="add" class="btn btn-success"><i class="glyphicon glyphicon-plus"></i></button></td>  
            </tr>  
          </table>  
          <input type="button" name="submit" id="submit" class="btn btn-info" value="Saqlash" />  
        </div>
     </form>  
    </div> 
</div>

@include('admin.texnics.include.script')