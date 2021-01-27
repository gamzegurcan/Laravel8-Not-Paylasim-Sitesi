@foreach($children as $subcategory)
    <ul class="dropdown-menu" role="menu">
        @if(count($subcategory->children))
            <li style="color:#1087dd">
                {{$subcategory->title}}
            </li>
            <ul>
                @include('home.categorytree',['children'=>$subcategory->children])
            </ul>
        @else
            <li>
                <a href="{{route('categorynotes',['id'=>$subcategory->id,'slug'=>$subcategory->slug])}}">{{$subcategory->title}}</a>
            </li>
        @endif
    </ul>
@endforeach
