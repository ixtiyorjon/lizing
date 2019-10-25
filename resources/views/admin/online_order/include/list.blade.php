<?php $i=1; foreach($model as $value) : ?>
    <tr>
      <th scope="row">{{ $i }}</th>
      <td class="td">
      	<?php $m=\App\Region::find($value->viloyat); echo $m->region_uz ?>
      	</td>
      <td class="td">
      	<?php $m=\App\City::find($value->tuman); echo $m->city_uz ?>
      </td>
      <td class="td">{{ $value->nomi }}</td>
      <td class="td">{{ $value->date }}</td>
      <td class="td">{{ $value->number }}</td>
      <td class="td"><input type="checkbox" class="custom-control-input" id="customControlInline" {{ ($value->given=='active')?'checked':'' }} ></td>
      <td class="td3">
      	@include('admin.include.buttons', ['url'=>'/admin/online-order/'.$value->id])
      </td>
    </tr>
<?php $i++; endforeach ?>