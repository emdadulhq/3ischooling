
<ul class="check-square  mb-20 ">

	@foreach($subcategories as $subcategory)

	<li><a class="onwhite" href="{{ route('mock_test', $subcategory->slug ) }}">{{ $subcategory->name }}</a></li>

	{{-- <li><a class="onwhite" href="SSCMockMaths.php">Maths</a></li>
	<li><a class="onwhite" href="SSCMockHigherMaths.php">Higher Maths</a></li>
	<li><a class="onwhite" href="SSCMockChemistry.php">Chemistry</a></li>
	<li><a class="onwhite" href="SSCMockBiology.php">Biology</a></li>
 --}}
	@endforeach

</ul>