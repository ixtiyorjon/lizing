<?php $i=1; foreach($model as $value) : ?>
    <tr>
      <th scope="row" style="width: 30px">{{ $i }}</th>
      <td class="td1" style="text-align: center;">{{ $value->inn }}</td>
      <td class="td3" style="vertical-align: middle;">
      	<a id="parametr" href="/admin/treaties/list/{{ $value->id }}" >Shartnoma</a>
      </td>
      <td class="td3">
      	@include('admin.user-inn.include.buttons', ['url'=>'/admin/user-inn/'.$value->id])
      </td>
    </tr>
<?php $i++; endforeach ?>