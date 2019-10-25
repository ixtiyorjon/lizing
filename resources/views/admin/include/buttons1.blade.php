<a href="/admin/texnics-subcategory/{{ $id }}" class="korish"><i class="glyphicon glyphicon-eye-open"></i></a>
<a href="/admin/texnics-subcategory/{{ $id }}/edit" class="ozgartirish"><i class="glyphicon glyphicon-pencil"></i></a>
<form action="/admin/texnics-subcategory/{{ $id }}" method="POST">
<input name="_method" type="hidden" value="DELETE">
@csrf
    <button onclick="return confirm('Siz ushbu malumotni rostdan ham o\'chirmoqchimisiz ?');" type="submit" style="background: none;border: none;color: #337ab7;padding: 0"><i class="glyphicon glyphicon-trash"></i></button>
</form>