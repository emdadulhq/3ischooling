<ul class="sub-menu">

@foreach($subcategories as $subcategory)

    <li class="menu-item-has-children "> <a href="{{ route('mock_test', $subcategory->slug ) }}">{{ $subcategory->name }}</a>
      
       @if(count($subcategory->subcategory))
       @include('3i_school.partials.sub_sub_category',['subcategories' => $subcategory->subcategory])
       @endif

   </li>
   {{-- <li><a href="MockTestsMedical">Medical</a></li>
   <li><a href="MockTestsUniversityA">University A Unit</a></li> --}}
@endforeach

</ul>