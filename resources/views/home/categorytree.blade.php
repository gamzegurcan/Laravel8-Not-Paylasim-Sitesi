@foreach($children as $subcategory)
    <ul>
        @if(count($subcategory->children))
            <li style="color:#1087dd">
                {{$subcategory->title}}
            </li>
            <li>
                @include('home.categorytree',['children'=>$subcategory->children])
            </li>
        @else
            <li>
                <a href="{{route('categorynotes',['id'=>$subcategory->id,'slug'=>$subcategory->slug])}}">{{$subcategory->title}}</a>
            </li>
        @endif
    </ul>
@endforeach
