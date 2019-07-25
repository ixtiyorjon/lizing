@foreach($items as $item)
  <li class="nav-item">
    <a class="nav-link {{('/'.Request::path()==$item->url||Request::path()==$item->url)?'active' : '' }}" href="{{ url($item->url) }}">{{ $item->getTranslatedAttribute('title',App::getLocale()) }}</a>
  </li>
@endforeach