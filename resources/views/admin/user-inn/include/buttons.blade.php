
<a href="{{ $url }}/edit" class="btn btn-info ozgartirish"><i class="glyphicon glyphicon-pencil"></i></a>
<form action="{{ $url }}" method="POST">
	<input name="_method" type="hidden" value="DELETE">
	@csrf
    <button onclick="return confirm('Siz ushbu malumotni rostdan ham o\'chirmoqchimisiz ?');" type="submit" class="btn btn-info"><span class="glyphicon glyphicon-trash"></span></button>
</form>