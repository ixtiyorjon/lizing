<table id="example" class="table table-striped table-bordered" style="width:100%">
    <thead>
        <tr>
            <th scope="col">№</th>
            <th scope="col">@lang('messages.Name of Provinces')</th>
            <th scope="col">@lang('messages.Name of districts')</th>
            <th scope="col">@lang('messages.Name of lessees')</th>
            <th scope="col">@lang('messages.Date')</th>
            <th scope="col">@lang('messages.Number of techniques')</th>
        </tr>
    </thead>
    <tbody>
        <?php $i=1;?>
        @foreach($model as $value)
            <tr>
                <th scope="row"><?php echo $i; $i++;?></th>
                <td class="td1"><?php $m=\App\Region::find($value->viloyat); echo $m->region_uz ?></td>
                <td class="td2"><?php $m=\App\City::find($value->tuman); echo $m->city_uz ?></td>
                <td class="td3">{{ $value->nomi }}</td>
                <td class="td4">{{ $value->date }}</td>
                <td class="td5">{{ $value->number }}</td>
            </tr>
        @endforeach

    </tbody>

</table>