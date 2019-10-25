
<a href="/admin/answer/{{ $id }}/edit" class="ozgartirish"><i class="glyphicon glyphicon-pencil"></i></a>
<form action="/admin/answer/{{ $id }}" method="POST">
<input name="_method" type="hidden" value="DELETE">
@csrf
    <button onclick="return confirm('Are you sure you want to delete?');" type="submit" style="background: none;border: none;color: #337ab7;padding: 0"><i class="glyphicon glyphicon-trash"></i></button>
</form>