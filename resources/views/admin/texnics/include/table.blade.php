  <table class="table table-striped table-bordered">
      <thead>
        <tr>
          <th scope="col">#</th>
          <th scope="col" class="td1">Paramert nomi ( en )</th>
          <th scope="col" class="td1">Paramert nomi ( ru )</th>
          <th scope="col" class="td1">Paramert nomi ( uz )</th>
          <th scope="col" class="td1">Paramert nomi (uzk)</th>
          <th scope="col" class="td2">Qiymati (raqam)</th>
          <th style="display: none" class="td3">tex id</th>
          <th class="td3">MVC</th>
        </tr>
      </thead>
      <tbody>
        @if(count($model)==0)
          <tr scope="row"><th colspan="7" style="text-align: center;">Malumot yo`q</th></tr>
        @endif
        <?php $i=1; foreach($model as $value) : ?>
          <tr>
            <th scope="row">{{ $i }}</th>
{{--  --}}
            <td class="td1">
              <span>{{ $value->getTranslatedAttribute('name','en') }}</span>
              <div class="form-group" style="display: none" id="{{ $value->id }}name_en">
                <input class="form-control" type="text" name="name_en" id="{{ $value->id }}name_en_v" value="{{ $value->getTranslatedAttribute('name','en') }}">
              </div>
            </td>
            <td class="td1">
              <span>{{ $value->getTranslatedAttribute('name','ru') }}</span>
              <div class="form-group" style="display: none" id="{{ $value->id }}name_ru">
                <input class="form-control" type="text" name="name_ru" id="{{ $value->id }}name_ru_v" value="{{ $value->getTranslatedAttribute('name','ru') }}">
              </div>
            </td>
            <td class="td1">
              <span>{{ $value->getTranslatedAttribute('name','uz') }}</span>
              <div class="form-group" style="display: none" id="{{ $value->id }}name_uz">
                <input class="form-control" type="text" name="name_uz" id="{{ $value->id }}name_uz_v" value="{{ $value->getTranslatedAttribute('name','uz') }}">
              </div>
            </td>
            <td class="td1">
              <span>{{ $value->getTranslatedAttribute('name','uzk') }}</span>
              <div class="form-group" style="display: none" id="{{ $value->id }}name_uzk">
                <input class="form-control" type="text" name="name_uzk" id="{{ $value->id }}name_uzk_v" value="{{ $value->getTranslatedAttribute('name','uzk') }}">
              </div>
            </td>
{{--  --}}
            <td class="td1">
              <span>{{ $value->value }}</span>
              <div class="form-group" style="display: none" id="{{ $value->id }}v">
                <input class="form-control" type="text" name="name" id="{{ $value->id }}value" value="{{ $value->value }}">
              </div>
            </td>
            <td style="display: none" class="td1">{{ $value->texnics_id }}</td>
            <td class="td3" style="width: 50px">
              <span id="{{ $value->id }}mvc">
                <a href="/admin/params/{{ $value->id }}/edit" class="editor" id="#{{ $value->id }}"><i class="glyphicon glyphicon-pencil"></i></a>
                <a href="/admin/params/delete/{{ $value->id }}"  class="ochirish1"><i class="glyphicon glyphicon-trash"></i></a>
              </span>
              <span id="{{ $value->id }}edit_del" style="display: none">
                <a href="/admin/params/edit/{{ $value->id }}" class="saqlash" id="#{{ $value->id }}"><i class="glyphicon glyphicon-floppy-disk"></i></a>
                <a class="bekor" id="#{{ $value->id }}"><i class="glyphicon glyphicon-remove"></i></a>
              </span>
            </td>
          </tr>
      <?php $i++; endforeach ?>
      </tbody>
    </table>