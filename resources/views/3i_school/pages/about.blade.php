@extends('3i_school.layouts.master')

@section('title')
About
@stop

@section('content')

<style type="">

.scholarship{
    padding: 60px;
    font-family: 'Syncopate', sans-serif;
}
.col-text {
  height:30em;
}
.grid-flex {
  display: -webkit-box;
  display: -webkit-flex;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-flex: 1;
  -webkit-flex-grow: 1;
  -ms-flex-positive: 1;
  flex-grow: 1;
  flex-direction: row;
  -webkit-flex-direction: row;
  -webkit-flex-wrap: wrap;
  -webkit-justify-content: space-around;
}
.col {
  -webkit-box-flex: 1;
  -webkit-flex: 1;
  -ms-flex: 1;
  flex: 1;
}
.col-left {
  -webkit-box-ordinal-group:-1;
  -webkit-order: -1;
  -ms-flex-order: -1;
  order: -1;
}
.col-text{
  display: flex;
  align-items: center;
  justify-content: center;
}
.Aligner-item {
  width: 60%;
}
.col-image {
  background-size: cover;
  background-position:center center;

}

@media (max-width: 640px) {
  .grid-flex {
    height: 40em;
    display: -webkit-flex;
    -webkit-flex-direction: column;
    flex-direction: column;
   }
  .col {
    order:vertical;
  }
  .col-left {
    -webkit-box-ordinal-group:0;
    -webkit-order: 0;
    -ms-flex-order: 0;
    order: 0;
  }
  .col-text div p {
    padding: 1em;
  }
  .Aligner-item {
    width: 90%;
  }
}

.photoa{
    background-color: black;
    color: white;
}

</style>



        <!-- Main content Start -->
        <div class="main-content">
            <!-- Breadcrumbs Start -->
            <div class="sc-breadcrumbs breadcrumbs-overlay">
                <div class="breadcrumbs-img">
                    <img src="{{ asset('3i_school') }}/assets/images/breadcrumbs/1.jpg" alt="Breadcrumbs Image">
                </div>
                <div class="breadcrumbs-text white-color">
                    <h1 class="page-title">About Us</h1>
                    <ul>
                        <li>
                            <a class="active" href="{{route('home')}}">Home ></a>
                        </li>
                        <li class="active">About Us</li>
                    </ul>
                </div>
            </div>
            <!-- Breadcrumbs End -->





           <!-- About Section Start -->
            <div id="sc-about" class="sc-about gray-bg pt-90 pb-170 md-pt-50 md-pb-70 position-relative arrow-animation-1 ">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-lg-5">
                            <div class="img-part position-relative">
                                <img class="rounded img-part wow slideInLeft " src="{{ asset('3i_school') }}/img/studying_01.jpg" alt="About Image">
                                <div class="about-experience text-center ">
                                    <span>10+</span>
                                    Services
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-7 pl-90 md-pl-15 md-mt-90">
                            <div class="sec-title mb-20">
                                <h1 class="sub-title position-relative onblackbackgroundTitle" style="font-size: 40px;">About Us </h1>
                                <h3 class="onblackbackgroundTitle">3iSchooling is a <mark style="background-color: #62CEF5; color: white;"  > One-Stop Solution</mark><br>
                                Some Details<br>
                                </h3>
                                <div class="des onblackbackground ">We provide smart educational content to make a digital community. Moreover, we are working for career counselling, higher study and skill development future skilled citizens digital contents ad Assessments for Class 0 to 12.</div>

                            </div>
                            <span style="color: white;">Our Services: </span>
                            <ul class="check-square two-line mb-20 ">
                                <li class="texthoveringblack">Mock Test</li>
                                <li class="texthoveringblack">Career Path</li>
                                <li class="texthoveringblack">Higher Studies</li>
                                <li class="texthoveringblack">School Education</li>
                                <li class="texthoveringblack">Job Market Evaluation</li>
                                <li class="texthoveringblack">Pre- Univeristy</li>
                            </ul>
                            <div class="btn-part wow fadeInUp" data-wow-delay="300ms" data-wow-duration="2000ms">
                                <a class="readon" href="{{route('news')}}">Learn More <i class="flaticon flaticon-right-arrow"></i> </a>
                            </div>
                        </div>
                    </div>
                </div>
            <div class="animated-arrow-1 animated-arrow up-down-new">
                <img src="{{ asset('3i_school') }}/assets/images/pi.png" alt="">
            </div>
            <div class="animated-arrow-2 animated-arrow up-down-new">
                <img src="{{ asset('3i_school') }}/assets/images/sigma.png" alt="">
            </div>

            <div class="animated-arrow-3 animated-arrow up-down-new">
                <img src="{{ asset('3i_school') }}/assets/images/alpha.png" alt="">
            </div>
            <div class="animated-arrow-4 animated-arrow left-right-new">
                <img src="{{ asset('3i_school') }}/assets/images/infinite.png" alt="">
            </div>
            <div class="animated-arrow-6 animated-arrow up-down-new">
                <img src="{{ asset('3i_school') }}/assets/images/lambda.png" alt="">
            </div>
            </div>
            <!-- About Section End -->




@include('3i_school.pages.affiliation')







            <!-- Vision/Mission Section Start -->
            <div id="sc-about" id="sc-about" class="sc-about   pb-170 md-pt-50 md-pb-70 position-relative arrow-animation-1 ">
                <div class="grid-flex photoa" style="background-color: #232728;">
                    <div class="col col-image wow slideInLeft" style="background-image: url({{ asset('3i_school') }}/img/mission.png);"></div>
                    <div class="col col-text">
                        <div class="Aligner-item wow slideInDown">
                            <h3 class="sub-title position-relative onblackbackgroundTitle">Vission</h3>
                                <ul  class="check-square  mb-20 ">
                                    <li class="texthoveringblack">Enhance the quality of learning and teaching.</li>
                                    <li class="texthoveringblack">Improve the efficiency and effectiveness.</li>
                                    <li class="texthoveringblack">Improve user-accessibility and time flexibility to engage learners in the learning process.</li>
                                    <li class="texthoveringblack">Meet the learning style or needs of students.</li>
                                    <li class="texthoveringblack">Improve the cost-effectiveness of the post-secondary education system.</li>
                                </ul>
                        </div>
                    </div>
                </div>

              <div class="grid-flex" style="background-color: white;">
                <div class="col col-image wow slideInRight" style="background-image: url({{ asset('3i_school') }}/img/vission.png);"></div>
                    <div class="col col-text col-left">
                        <div class="Aligner-item wow slideInDown">
                            <h3 class="sub-title position-relative onwhitetitle">Mission</h3>
                            <ul  class="check-square  mb-20 ">
                                <li class="onwhite">Access to Quality Education for all.</li>
                                <li class="onwhite">Ensure core and practical education.</li>
                                <li class="onwhite">Ensure fundamental learning.</li>
                                <li class="onwhite">Breach the gaps between education and skill development.</li>
                                <li class="onwhite">Ensure Community based education : parental education, mental development of children, awareness.</li>
                            </ul>
                        </div>
                    </div>
                </div>

            <div class="animated-arrow-1 animated-arrow up-down-new">
                <img src="{{ asset('3i_school') }}/assets/images/pi.png" alt="">
            </div>
            <div class="animated-arrow-2 animated-arrow up-down-new">
                <img src="{{ asset('3i_school') }}/assets/images/sigma.png" alt="">
            </div>

            <div class="animated-arrow-3 animated-arrow up-down-new">
                <img src="{{ asset('3i_school') }}/assets/images/alpha.png" alt="">
            </div>
            <div class="animated-arrow-4 animated-arrow left-right-new">
                <img src="{{ asset('3i_school') }}/assets/images/infinite.png" alt="">
            </div>
            <div class="animated-arrow-6 animated-arrow up-down-new">
                <img src="{{ asset('3i_school') }}/assets/images/lambda.png" alt="">
            </div>
            </div>
            <!-- Mission/Vission END -->






        </div>
        <!-- Main content End -->

@stop




