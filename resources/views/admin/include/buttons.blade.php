<a href="{{ $url }}" class="btn btn-info korish"><i class="glyphicon glyphicon-eye-open"></i></a>
<a href="{{ $url }}/edit" class="btn btn-info ozgartirish"><i class="glyphicon glyphicon-pencil"></i></a>
<form action="{{ $url }}" method="POST">
	<input name="_method" type="hidden" value="DELETE">
	@csrf
    <button onclick="return confirm('Вы уверены, что хотите удалить эту информацию?');" type="submit" class="btn btn-info"><span class="glyphicon glyphicon-trash"></span></button>
</form>