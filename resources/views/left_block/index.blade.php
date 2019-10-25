<div class="sidebar-area">
    <div class="single-widget-area">
      <ul class="cata-list">
        @foreach($items as $item)
          <li @if('/'.Request::path()==$item->url||Request::path()==$item->url) class="active" @endif><a href="{{ url($item->url)  }}">{{ $item->getTranslatedAttribute('title',App::getLocale())  }}</a></li>
        @endforeach
      </ul>
    </div>
</div>