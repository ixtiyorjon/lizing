{{-- @extends('voyager::master')

@section('content') --}}
		<div class="container">
		<table class="table table-striped table-bordered">
		  <thead>
		    <tr>
		      <th scope="col" class="td1">Title en</th>
		      <th scope="col" class="td1">Title ru</th>
		      <th scope="col" class="td1">Title uz</th>
		      <th scope="col" class="td1">Title uzk</th>
		      <th scope="col" class="td1">Image</th>
		    </tr>
		  </thead>
		  <tbody>
		    <tr>
		    	<td>{{ $model->getTranslatedAttribute('title','en') }}</td>
		    	<td>{{ $model->getTranslatedAttribute('title','ru') }}</td>
		    	<td>{{ $model->getTranslatedAttribute('title','uz') }}</td>
		    	<td>{{ $model->getTranslatedAttribute('title','uzk') }}</td>
		    	<td><img width="100px" src="{{ Voyager::image($model->image) }}"></td>
		    </tr>
		  </tbody>
		</table>
		@if(!Request::ajax())
		<a href="/admin/texnics-category" class="btn btn-success">Orqaga</a>
		@endif
		<button type="button" class=" btn btn-success ozgartirish" data-dismiss="modal" aria-label="Close">Close</button>  
		<a href="/admin/texnics-category/{{ $model->id }}/edit" class="btn btn-primary ozgartirish pull-right"><i class="glyphicon glyphicon-pencil"></i>  Update</a>
	</div>
{{-- @stop --}}
<script type="text/javascript">
	 $('.ozgartirish').click(function(e){
            e.preventDefault();
            $('#myModalkorish').modal('show')
            .find('#modalContent1')
            .load($(this).attr('href'));
        });
</script>