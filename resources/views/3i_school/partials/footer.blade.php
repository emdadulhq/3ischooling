<footer id="sc-footer" class="sc-footer  arrow-animation-1  wow slideInUp" style="background-color: #232728 ">
		<div class="container">
			<div class="footer-newsletter">
				<div class="row align-items-center">
					<div class="col-md-6 sm-mb-26">
						<h3 class="title white-color mb-0">Subscribe Our Newsletter</h3>
						<div class="des">Get latest news & offers.</div>
					</div>
					<div class="col-md-6 text-right">
						<form class="newsletter-form" action="{{route('subscriber')}}" method="POST">
                            @csrf
							<input type="email" name="email" placeholder="Your email address" required="">
							<button type="submit">Subscribe <i class="flaticon flaticon-right-arrow"></i></button>
						</form>
					</div>
				</div>
			</div>
			
			<!-- Messenger Chat Plugin Code -->
    <div id="fb-root"></div>

    <!-- Your Chat Plugin code -->
    <div id="fb-customer-chat" class="fb-customerchat">
    </div>

    <script>
      var chatbox = document.getElementById('fb-customer-chat');
      chatbox.setAttribute("page_id", "502862130509567");
      chatbox.setAttribute("attribution", "biz_inbox");

      window.fbAsyncInit = function() {
        FB.init({
          xfbml            : true,
          version          : 'v12.0'
        });
      };

      (function(d, s, id) {
        var js, fjs = d.getElementsByTagName(s)[0];
        if (d.getElementById(id)) return;
        js = d.createElement(s); js.id = id;
        js.src = 'https://connect.facebook.net/en_US/sdk/xfbml.customerchat.js';
        fjs.parentNode.insertBefore(js, fjs);
      }(document, 'script', 'facebook-jssdk'));
    </script>
    
			<div class="footer-content pt-62 pb-70 md-pb-5">
				<div class="row">
					<div class="col-lg-4 footer-widget">
						<div class="about-widget pr-15">
							<div class="logo-part mb-30">
								<a href="{{ route('home') }}"><img src="{{ asset('3i_school') }}/assets/images/Logo-2-extend.png" alt="Footer Logo"></a>
							</div>
							<p class="desc">3i Schooling is a global online learning platform that offers anyone, anywhere access to online courses and degrees from world-class universities and companies.</p>
							<h4 class="social-title white-color">Follow Us</h4>
							<ul class="footer-social">
								<li><a href="https://www.facebook.com/3ischooling"><i class="fa fa-facebook"></i></a></li>
								<li><a href="https://twitter.com/3scholing"><i class="fa fa-twitter"></i></a></li>
								<li><a href="https://www.instagram.com/3i_schooling/"><i class="fa fa-pinterest-p"></i></a></li>
								<li><a href="https://bd.linkedin.com/in/3i-schooling-9703a1209"><i class="fa fa-linkedin"></i></a></li>
							</ul>
						</div>
					</div>
					<div class="col-lg-2 md-mb-32 footer-widget md-mt-45">
						<h4 class="widget-title">Company</h4>
						<ul class="widget-menu">
							<li><a href="{{route('news')}}">News</a></li>
							<li><a href="{{route('about')}}">About</a></li>
							<li><a href="{{route('volunteer')}}">Volunteer</a></li>
							<li><a href="{{route('career')}}">Career</a></li>
							<li><a href="{{route('contact')}}">Contact</a></li>
						</ul>
					</div>
					<div class="col-lg-3 md-mb-32 footer-widget">
						<h4 class="widget-title">Popular Course</h4>
						<ul class="widget-menu">
							<li><a href="{{route('kids')}}">Kids Education</a></li>
							<li><a href="{{route('class.9_10')}}">SSC</a></li>
							<li><a href="{{route('class.11_12')}}">HSC</a></li>
							<li><a href="{{route('admission')}}">Pre Univeristy</a></li>
							<li><a href="{{route('higherstudies')}}">Higher Studies</a></li>
						</ul>
					</div>
					<div class="col-lg-3 md-mb-32 footer-widget">
						<h4 class="widget-title">Contact Info</h4>
						<ul class="address-widget pr-40">
							<li>
								<i class="flaticon flaticon-call"></i>
								<a href="tel:+880 1973-080878">Call: +880 1973-080878</a>
							</li>
							<li>
								<i class="flaticon flaticon-mail"></i>
								<a href="mailto:infosimple@gmail.com">info@3ischooling.com</a>
							</li>
							<li>
								<i class="flaticon flaticon-maps-and-flags"></i>
								<div class="desc">
									Uttara, Dhaka, Bangladesh.
								</div>
							</li>
						</ul>
					</div>
				</div>
			</div>
		</div>
		<div class="footer-bottom">
			<div class="container">
				<div class="row align-items-center">
					<div class="col-md-6 sm-mb-10 text-md-start">
						<div class="copyright">
							<p>© Copyright 2021 3iShcooling. All Rights Reserved.</p>
						</div>
					</div>
					<div class="col-md-6 text-end">
						<ul class="copyright-menu">
							<li><a href="#">Privacy Policy</a></li>
							<li><a href="#">Terms & Conditions</a></li>
							<li><a href="#">Support</a></li>
						</ul>
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
	</footer>
