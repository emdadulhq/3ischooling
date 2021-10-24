 <ul class="sub-menu">

 @foreach($subcategories as $subcategory)
    <li><a href="{{ route('mock_test', $subcategory->slug ) }}">{{ $subcategory->name }}</a></li>

  {{--   <li><a href="MockTestsEngineeringChemistry.php">Chemistry Mock Test</a></li>
    <li><a href="MockTestsEngineeringBiology.php">Biology Mock Test</a></li>
    <li><a href="MockTestsEngineeringMaths.php">Math For Mock Test</a></li> --}}
    
@endforeach

</ul>