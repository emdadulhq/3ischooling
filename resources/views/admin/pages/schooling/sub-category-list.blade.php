<optgroup>
    @foreach($subcategories as $subcategory)

    <option value="{{$subcategory->id}}">{{$subcategory->name}}</option>

  {{--   @if(count($subcategory->subcategory))
    @include('admin.pages.quiz.sub-category-list',['subcategories' => $subcategory->subcategory])
    @endif --}}

    @endforeach
</optgroup>