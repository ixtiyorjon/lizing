<a title="O'zgartirish" href="{{ $url }}/edit" class="btn btn-info ozgartirish"><i class="glyphicon glyphicon-pencil"></i></a>
<form action="{{ $url }}" method="POST">
	<input name="_method" type="hidden" value="DELETE">
	@csrf
    <button title="O'chirish" onclick="return confirm('Are you sure you want to delete?');" type="submit" class="btn btn-info"><span class="glyphicon glyphicon-trash"></span></button>
</form>
<form action="/admin/question/{{ $value->id }}" method="POST">
	@csrf
	<input type="hidden" name="_method" value="PUT">
	<input type="hidden" name="status" value="{{ $value->status }}">
	<button title="{{ ($value->status=='inactive')?'Passiv (yashirin) holatda ':'Activ (ko\'rsatish holatida)' }}" type="submit" onclick="submit()" class="btn {{ ($value->status=='inactive')?'btn-danger':'btn-primary' }}" style="width: 26px;">
		<i class="glyphicon {{ ($value->status=='inactive')?'glyphicon-eye-close':'glyphicon-eye-open' }} ">
		</i>
	</button>
</form>