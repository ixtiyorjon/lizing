
<ul>
  @foreach($items as $item)
    @php $sub=$item->children->count() @endphp
      @if($sub)
        <li @if(Request::path()==$item->url) class="active" @endif><a href="{{ url($item->url) }}">{{ $item->getTranslatedAttribute('title',App::getLocale()) }}</a>
            <ul class="dropdown">
              @foreach($item->children as $child)
                <li @if(Request::path()==$item->url) class="active" @endif><a href="{{ url($child->url) }}">{{ $child->getTranslatedAttribute('title',App::getLocale()) }}</a>
                  @php $sub1=$child->children->count() @endphp
                    @if($sub1)
                    <ul class="dropdown">
                      @foreach($child->children as $childItem)
                        <li><a href="{{ $childItem->slug }}">{{ $childItem->getTranslatedAttribute('title',App::getLocale()) }}</a></li>
                      @endforeach
                    </ul>
                    @endif
                </li>
              @endforeach
            </ul>
        </li>
      @else
        <li @if(Request::path()==$item->url) class="active" @endif><a href="{{ url($item->url)  }}">{{ $item->getTranslatedAttribute('title',App::getLocale())  }}</a></li>
      @endif
  @endforeach
</ul>