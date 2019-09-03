@extends('layouts.main')
@section('title')
<title>Team | DTU Times</title>
@endsection

@section('links')
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/animate.css@3.5.2/animate.min.css">
<style type="text/css">
	.btn-primary {
		background: #fff;
		color: #252525;
		border-color: #252525;
		font-weight: bold;
	}
	.btn-primary:hover {
		color: #fff;
		background: #252525;
		border-color: #fff;
	}
	.jumbotron {
		background-color: #fff;
	}
	.hrstyle {
		border: 0;
		height: 1px;
		background-image: -webkit-linear-gradient(left, #f0f0f0, #8c8b8b, #f0f0f0);
		background-image: -moz-linear-gradient(left, #f0f0f0, #8c8b8b, #f0f0f0);
		background-image: -ms-linear-gradient(left, #f0f0f0, #8c8b8b, #f0f0f0);
		background-image: -o-linear-gradient(left, #f0f0f0, #8c8b8b, #f0f0f0);
	}
</style>
@endsection

@section('content')
<!-- Page Title
		============================================= -->
<section id="page-title">

	<div class="container clearfix">
		<h1>The Team</h1>


	</div>

</section>
<!-- #page-title end -->





<section id="content">

	<div class="content-wrap">

		<div class="container">

			<ul id="myTab" class="nav nav-tabs boot-tabs">
				<li class="active"><a href="#home" data-toggle="tab">Advisors</a></li>
				<li><a href="#profile" data-toggle="tab">Alumni Advisors</a></li>
				<li><a href="#council" data-toggle="tab">Council</a></li>
				<li><a href="#columnists" data-toggle="tab">Columnists</a></li>
				<li><a href="#designers" data-toggle="tab">Designers</a></li>
				<li><a href="#illustrators" data-toggle="tab">Illustrators</a></li>
				<li><a href="#photographers" data-toggle="tab">Photographers</a></li>
				<li><a href="#webdevelopers" data-toggle="tab">Developers</a></li>

			</ul>


			<div id="myTabContent" class="tab-content">

				<div class="tab-pane fade in active" id="home" style="margin-left:10%; margin-right:10%">

					<div class="fancy-title title-border">
						<h3>Advisors</h3>
					</div>

					<div class="row">
						<div class="col-md-3 col-xs-6 bottommargin">
							<div class="team">
								<div class="team-image">
									<img src="/img/team/FacultyAdvisors/VC.jpg" alt="Yogesh Singh">
								</div>
								<div class="team-desc">
									<div class="team-title">
										<h5>Prof. Yogesh Singh</h5>
										<h6>Hon'ble Vice Chancellor</h6>
									</div>
								</div>
							</div>
						</div>
						<div class="col-md-3 col-xs-6 bottommargin">
							<div class="team">
								<div class="team-image">
									<img src="/img/team/FacultyAdvisors/Anoop.jpg" alt="John Doe">
								</div>
								<div class="team-desc">
									<div class="team-title">
										<h5>Sh. Anoop Lather</h5>
										<h6>Public Relations Officer</h6>
									</div>
								</div>
							</div>
							<br><br>
						</div>
						<div class="col-md-3 col-xs-6 bottommargin">
							<div class="team">
								<div class="team-image">
									<img src="/img/team/FacultyAdvisors/sindu.jpg" alt="Prof. S. Indu">
								</div>
								<div class="team-desc">
									<div class="team-title">
										<h5>Prof. S. Indu</h5>
										<h6>HOD, ECE Department</h6>
									</div>

								</div>
							</div>
						</div>
						<div class="col-md-3 col-xs-6 bottommargin">
							<div class="team">
								<div class="team-image">
									<img src="/img/team/FacultyAdvisors/rpandey.jpg" alt="Prof. Rajeshwari Pande">
								</div>
								<div class="team-desc">
									<div class="team-title">
										<h5>Prof. Rajeshwari Pandey</h5>
										<h6>Associate Dean-Academics (UG)</h6>
									</div>
								</div>
							</div>
						</div>
					</div>

					<hr class="hrstyle">

					<!--Team Login Section -->
					<div class="jumbotron text-center">
						<h4 class="login">Are you a member of DTU Times?</h4>
						<a class="btn btn-primary type-uppercase " href="{{ route('login') }}">
                                    <span class="btnlog">
                                        Login Here !
                                    </span>

                                </a>
					</div>

					<!-- Team Login Section ends -->
				</div>
				<div class="tab-pane fade" id="profile" style="margin-left:10%; margin-right:10%">

					<div class="fancy-title title-border">
						<h3>Alumni Advisors</h3>
					</div>



					<div class="row">
						<div class="col-md-3 col-xs-6 bottommargin">
							<div class="team">
								<div class="team-image">
									<img src="/img/team/Alumnis/alum1.jpg" alt="John Doe">
								</div>
								<div class="team-desc">
									<div class="team-title">
										<h5>Siddhant Patra</h5>
									</div>

								</div>
							</div>
						</div>

						<div class="col-md-3 col-xs-6 bottommargin">
							<div class="team">
								<div class="team-image">
									<img src="/img/team/Alumnis/alum2.jpg" alt="Josh Clark">
								</div>
								<div class="team-desc">
									<div class="team-title">
										<h5>Amit Dogra</h5>
									</div>

								</div>
							</div>

						</div>

						<div class="col-md-3 col-xs-6 bottommargin">
							<div class="team">
								<div class="team-image">
									<img src="/img/team/Alumnis/alum3.jpg" alt="Mary Jane">
								</div>
								<div class="team-desc">
									<div class="team-title">
										<h5>Gursifath Bhasin</h5>
									</div>
								</div>
							</div>
						</div>

						<div class="col-md-3 col-xs-6 bottommargin">
							<div class="team">
								<div class="team-image">
									<img src="/img/team/Alumnis/alum4.jpg" alt="John Doe">
								</div>
								<div class="team-desc">
									<div class="team-title">
										<h5>Deepanshu Galyan</h5>
										<h6><br></h6>
									</div>
								</div>
							</div>
						</div>

					</div>
				</div>
				<div class="tab-pane fade" id="council" style="margin-left:10%; margin-right:10%">
					<div class="fancy-title title-border">
						<h3>Council</h3>
					</div>



					<div class="row">
						<div class="col-md-2 col-xs-6 bottommargin">
							<div class="team">
								<div class="team-image">
									<img src="/img/team/Council/Shivam%20Jha.jpg" alt="Shivam Jha">
								</div>
								<div class="team-desc">
									<div class="team-title">
										<h5>Shivam<br> Jha</h5>
										<h6>Editor-in-Chief</h6>
									</div>
									<a target="_blank" rel="noopener noreferrer" href="https://www.facebook.com/GodOfGeeks
" class="social-icon inline-block si-small si-light si-rounded si-facebook">
										<i class="icon-facebook"></i>
										<i class="icon-facebook"></i>
									</a>
									<a target="_blank" rel="noopener noreferrer" href="www.linkedin.com/in/shivamjha
" class="social-icon inline-block si-small si-light si-rounded si-linkedin">
										<i class="icon-linkedin"></i>
										<i class="icon-linkedin"></i>
									</a>
								</div>
							</div>
							<br><br>
						</div>
						<div class="col-md-2 col-xs-6 bottommargin">
							<div class="team">
								<div class="team-image">
									<img src="/img/team/Council/Vishesh%20Kashyap.jpg" alt="Vishesh Kashyap">
								</div>
								<div class="team-desc">
									<div class="team-title">
										<h5>Vishesh<br> Kashyap</h5>
										<h6>Editor-in-Chief</h6>
									</div>
									<a target="_blank" rel="noopener noreferrer" href="https://www.facebook.com/vishesh.kashyap97
" class="social-icon inline-block si-small si-light si-rounded si-facebook">
										<i class="icon-facebook"></i>
										<i class="icon-facebook"></i>
									</a>
									<a target="_blank" rel="noopener noreferrer" href="https://www.linkedin.com/in/vishesh-kashyap/
" class="social-icon inline-block si-small si-light si-rounded si-linkedin">
										<i class="icon-linkedin"></i>
										<i class="icon-linkedin"></i>
									</a>
								</div>
							</div>
							<br><br>
						</div>

						<div class="col-md-2 col-xs-6 bottommargin">
							<div class="team">
								<div class="team-image">
									<img src="img/team/Council/Mohsin%20Hussain.jpg" alt="Mohsin">
								</div>
								<div class="team-desc">
									<div class="team-title">
										<h5>Mohsin <br>Hussain</h5>
										<h6>Student Head</h6>
									</div>
									<a target="_blank" rel="noopener noreferrer" href="https://www.facebook.com/Darth.Nis.Hom
" class="social-icon inline-block si-small si-light si-rounded si-facebook">
										<i class="icon-facebook"></i>
										<i class="icon-facebook"></i>
									</a>
									<a target="_blank" rel="noopener noreferrer" href="https://www.linkedin.com/in/mohammed-mohsin-hussain-b71b47118/
" class="social-icon inline-block si-small si-light si-rounded si-linkedin">
										<i class="icon-linkedin"></i>
										<i class="icon-linkedin"></i>
									</a>
								</div>
							</div>
							<br><br>
						</div>
						<div class="col-md-2 col-xs-6 bottommargin">
							<div class="team">
								<div class="team-image">
									<img src="/img/team/Council/zara%20khan.jpg" alt="Zara Khan">
								</div>
								<div class="team-desc">
									<div class="team-title">
										<h5>Zara <br>Khan</h5>
										<h6>Student Head</h6>
									</div>
									<a target="_blank" rel="noopener noreferrer" href="https://m.facebook.com/profile.php?id=100014759464160&tsid=0.07246769556112798&source=result
" class="social-icon inline-block si-small si-light si-rounded si-facebook">
										<i class="icon-facebook"></i>
										<i class="icon-facebook"></i>
									</a>
									<a target="_blank" rel="noopener noreferrer" href="https://www.linkedin.com/mwlite/me
" class="social-icon inline-block si-small si-light si-rounded si-linkedin">
										<i class="icon-linkedin"></i>
										<i class="icon-linkedin"></i>
									</a>

								</div>
							</div>
							<br><br>
						</div>

						<div class="col-md-2 col-xs-6 bottommargin">
							<div class="team">
								<div class="team-image">
									<img src="/img/team/Council/Rajayavardhan.jpg" alt="RajyaVardhan">
								</div>
								<div class="team-desc">
									<div class="team-title">
										<h5>Rajyavardhan <br> Singh</h5>
										<h6>Head of Web <br>Development</h6>
									</div>
									<a target="_blank" rel="noopener noreferrer" href="https://m.facebook.com/rajyavardhan.singh.75" class="social-icon inline-block si-small si-light si-rounded si-facebook">
										<i class="icon-facebook"></i>
										<i class="icon-facebook"></i>
									</a>
									<a target="_blank" rel="noopener noreferrer" href="https://www.linkedin.com/in/rajyavardhan-singh-27602a12a" class="social-icon inline-block si-small si-light si-rounded si-linkedin">
										<i class="icon-linkedin"></i>
										<i class="icon-linkedin"></i>
									</a>
								</div>
							</div>
						</div>

						<div class="col-md-2 col-xs-6 bottommargin">
							<div class="team">
								<div class="team-image">
									<img src="/img/team/Council/Sourajit%20Bhattacharjee.jpg" alt="Sourajit Bhattacharjee">
								</div>
								<div class="team-desc">
									<div class="team-title">
										<h5>Sourajit<br> Bhattacharjee</h5>
										<h6>Head Of Illustrations</h6>
									</div>
									<a target="_blank" rel="noopener noreferrer" href="https://www.facebook.com/Zehel.Scott
									" class="social-icon inline-block si-small si-light si-rounded si-facebook">
										<i class="icon-facebook"></i>
										<i class="icon-facebook"></i>
									</a>
									<a target="_blank" rel="noopener noreferrer" href="https://www.linkedin.com/in/sourajitbhattacharjee/
										" class="social-icon inline-block si-small si-light si-rounded si-linkedin">
										<i class="icon-linkedin"></i>
										<i class="icon-linkedin"></i>
									</a>
								</div>
							</div>
							<br><br>
						</div>

					</div>
					<div class="row">

						<div class="col-md-2 col-xs-6 bottommargin">
							<div class="team">
								<div class="team-image">
									<img src="/img/team/Council/Vedant%20Tiwari.jpg" alt="Vedant Tiwari">
								</div>
								<div class="team-desc">
									<div class="team-title">
										<h5>Vedant <br> Tiwari</h5>
										<h6>Head of Photography</h6>
									</div>
									<a target="_blank" rel="noopener noreferrer" href="https://www.facebook.com/vedant12
" class="social-icon inline-block si-small si-light si-rounded si-facebook">
										<i class="icon-facebook"></i>
										<i class="icon-facebook"></i>
									</a>
									<a target="_blank" rel="noopener noreferrer" href="#" class="social-icon inline-block si-small si-light si-rounded si-linkedin">
										<i class="icon-linkedin"></i>
										<i class="icon-linkedin"></i>
									</a>

								</div>
							</div>
						</div>

						<div class="col-md-2 col-xs-6 bottommargin">
							<div class="team">
				                <div class="team-image">
				                   <img src="img/team/Council/Shubham%20Raturi.jpg" alt="Shubham Raturi">
				                </div>
				                <div class="team-desc">
				                  <div class="team-title">
				                    <h5>Shubham<br> Raturi</h5>
				                    <h6>Head of Photography</h6>
				                  </div>
				                  <a target="_blank" rel="noopener noreferrer" href="https://www.facebook.com/shubham.raturi" class="social-icon inline-block si-small si-light si-rounded si-facebook">
				                    <i class="icon-facebook"></i>
				                    <i class="icon-facebook"></i>
				                  </a>
				                  <a target="_blank" rel="noopener noreferrer" href="#" class="social-icon inline-block si-small si-light si-rounded si-linkedin">
				                    <i class="icon-linkedin"></i>
				                    <i class="icon-linkedin"></i>
				                  </a>
			                	</div>
			              	</div>
						</div>

						<div class="col-md-2 col-xs-6 bottommargin">
							<div class="team">
								<div class="team-image">
									<img src="/img/team/Council/Rupanjali%20Kukal.jpg" alt="Rupanjali Kukal">
								</div>
								<div class="team-desc">
									<div class="team-title">
										<h5>Rupanjali<br> Kukal</h5>
										<h6>Head of Design</h6>
									</div>
									<a target="_blank" rel="noopener noreferrer" href="https://m.facebook.com/rupanjali.kukal.7
" class="social-icon inline-block si-small si-light si-rounded si-facebook">
										<i class="icon-facebook"></i>
										<i class="icon-facebook"></i>
									</a>
									<a target="_blank" rel="noopener noreferrer" href="https://www.linkedin.com/mwlite/me
" class="social-icon inline-block si-small si-light si-rounded si-linkedin">
										<i class="icon-linkedin"></i>
										<i class="icon-linkedin"></i>
									</a>
								</div>
							</div>
						</div>

						<div class="col-md-2 col-xs-6 bottommargin">
							<div class="team">
								<div class="team-image">
									<img src="/img/team/Council/Pratyush%20Thakur.jpg" alt="Pratyush Thakur">
								</div>
								<div class="team-desc">
									<div class="team-title">
										<h5>Pratyush<br> Thakur</h5>
										<h6>Managing Editor</h6>
									</div>
									<a target="_blank" rel="noopener noreferrer" href="https://www.facebook.com/p.vasu5
" class="social-icon inline-block si-small si-light si-rounded si-facebook">
										<i class="icon-facebook"></i>
										<i class="icon-facebook"></i>
									</a>
									<a target="_blank" rel="noopener noreferrer" href="#" class="social-icon inline-block si-small si-light si-rounded si-linkedin">
										<i class="icon-linkedin"></i>
										<i class="icon-linkedin"></i>
									</a>

								</div>
							</div>
						</div>
						<div class="col-md-2 col-xs-6 bottommargin">
							<div class="team">
								<div class="team-image">
									<img src="/img/team/Council/Shashank%20Jha.jpg" alt="Shashank Shekhar Jha">
								</div>
								<div class="team-desc">
									<div class="team-title">
										<h5>Shashank S. <br> Jha</h5>
										<h6>Managing Editor</h6>
									</div>
									<a target="_blank" rel="noopener noreferrer" href="https://m.facebook.com/jhashashank02?refid=7
" class="social-icon inline-block si-small si-light si-rounded si-facebook">
										<i class="icon-facebook"></i>
										<i class="icon-facebook"></i>
									</a>
									<a target="_blank" rel="noopener noreferrer" href="https://www.linkedin.com/in/shashank-shekhar-jha-b071a5140
" class="social-icon inline-block si-small si-light si-rounded si-linkedin">
										<i class="icon-linkedin"></i>
										<i class="icon-linkedin"></i>
									</a>
								</div>
							</div>
						</div>



						<div class="col-md-2 col-xs-6 bottommargin">
							<div class="team">
								<div class="team-image">
									<img src="/img/team/Council/Gul_Asnani.jpg" alt="Gul Asnani">
								</div>
								<div class="team-desc">
									<div class="team-title">
										<h5>Gul <br>Asnani</h5>
										<h6>Student Coordinator</h6>
									</div>
									<a href="https://m.facebook.com/gul.asnani.90
" class="social-icon inline-block si-small si-light si-rounded si-facebook">
										<i class="icon-facebook"></i>
										<i class="icon-facebook"></i>
									</a>
									<a href="https://www.linkedin.com/in/gul-asnani-b9731114a
" class="social-icon inline-block si-small si-light si-rounded si-linkedin">
										<i class="icon-linkedin"></i>
										<i class="icon-linkedin"></i>
									</a>
								</div>
							</div>
						</div>


					</div>
					<div class="row">


						<div class="col-md-2 col-xs-6 bottommargin">
							<div class="team">
								<div class="team-image">
									<img src="/img/team/Council/Tanmay%20Singh.jpg" alt="Tanmay Singh">
								</div>
								<div class="team-desc">
									<div class="team-title">
										<h5>Tanmay<br> Singh</h5>
										<h6>Student Advisor</h6>
									</div>
									<a target="_blank" rel="noopener noreferrer" href="https://www.facebook.com/tanmay.singh.965
" class="social-icon inline-block si-small si-light si-rounded si-facebook">
										<i class="icon-facebook"></i>
										<i class="icon-facebook"></i>
									</a>
									<a target="_blank" rel="noopener noreferrer" href="www.linkedin.com/in/tanmay-singh
" class="social-icon inline-block si-small si-light si-rounded si-linkedin">
										<i class="icon-linkedin"></i>
										<i class="icon-linkedin"></i>
									</a>

								</div>
							</div>
						</div>

					</div>


				</div>
				<div class="tab-pane fade" id="columnists" style="margin-left:10%; margin-right:10%">


					<div class="fancy-title title-border">
						<h3>Columnists</h3>
					</div>


					<div class="row">
						<div class="col-md-2 col-xs-6 bottommargin">
							<div class="team">
								<div class="team-image">
									<img src="/img/team/editors/Parangat%20Mittal.jpg" alt="Parangat Mittal">
								</div>
								<div class="team-desc">
									<div class="team-title">
										<h5>Parangat<br> Mittal</h5>
										<h6>Associate Editor</h6>
									</div>
									<a target="_blank" rel="noopener noreferrer" href="facebook.com/parangatmittal
" class="social-icon inline-block si-small si-light si-rounded si-facebook">
										<i class="icon-facebook"></i>
										<i class="icon-facebook"></i>
									</a>
									<a target="_blank" rel="noopener noreferrer" href="https://www.linkedin.com/in/parangat-mittal-7435a9130
" class="social-icon inline-block si-small si-light si-rounded si-linkedin">
										<i class="icon-linkedin"></i>
										<i class="icon-linkedin"></i>
									</a>

								</div>
							</div>
						</div>
						<div class="col-md-2 col-xs-6 bottommargin">
							<div class="team">
								<div class="team-image">
									<img src="img/team/editors/Pratik%20Anand.jpg" alt="Pratik Anand">
								</div>
								<div class="team-desc">
									<div class="team-title">
										<h5>Pratik <br>Anand</h5>
										<h6>Associate Editor</h6>
									</div>
									<a target="_blank" rel="noopener noreferrer" href="https://www.facebook.com/pratik.grufelous
" class="social-icon inline-block si-small si-light si-rounded si-facebook">
										<i class="icon-facebook"></i>
										<i class="icon-facebook"></i>
									</a>
									<a target="_blank" rel="noopener noreferrer" href="https://www.linkedin.com/in/pratik-anand-5b6b22142/
" class="social-icon inline-block si-small si-light si-rounded si-linkedin">
										<i class="icon-linkedin"></i>
										<i class="icon-linkedin"></i>
									</a>


								</div>
							</div>
						</div>
						<div class="col-md-2 col-xs-6 bottommargin">
							<div class="team">
								<div class="team-image">
									<img src="/img/team/editors/Anushka%20Sharma.jpg" alt="Anushka Sharma">
								</div>
								<div class="team-desc">
									<div class="team-title">
										<h5>Anushka <br>Sharma</h5>
										<h6>Assistant Editor</h6>
									</div>
									<a href="https://www.facebook.com/profile.php?id=100000620361777
" class="social-icon inline-block si-small si-light si-rounded si-facebook">
										<i class="icon-facebook"></i>
										<i class="icon-facebook"></i>
									</a>
									<a href="#" class="social-icon inline-block si-small si-light si-rounded si-linkedin">
										<i class="icon-linkedin"></i>
										<i class="icon-linkedin"></i>
									</a>
								</div>
							</div>
						</div>
						<div class="col-md-2 col-xs-6 bottommargin">
							<div class="team">
								<div class="team-image">
									<img src="/img/team/editors/Karan%20Bora.jpg" alt="Nix Maxwell">
								</div>
								<div class="team-desc">
									<div class="team-title">
										<h5>Karan <br>Bora</h5>
										<h6>Assistant Editor</h6>
									</div>
									<a href="https://www.facebook.com/karansingh.bora.55
" class="social-icon inline-block si-small si-light si-rounded si-facebook">
										<i class="icon-facebook"></i>
										<i class="icon-facebook"></i>
									</a>
									<a href="https://www.linkedin.com/in/karan-bora-97264a49/
" class="social-icon inline-block si-small si-light si-rounded si-linkedin">
										<i class="icon-linkedin"></i>
										<i class="icon-linkedin"></i>
									</a>
								</div>
							</div>
						</div>
						<div class="col-md-2 col-xs-6 bottommargin">
							<div class="team">
								<div class="team-image">
									<img src="img/team/editors/Lokesh%20Narayan.jpg" alt="Lokesh Narayan Shankar">
								</div>
								<div class="team-desc">
									<div class="team-title">
										<h5>Lokesh N. <br>Shankar</h5>
										<h6>Assistant Editor</h6>
									</div>
									<a href="https://www.facebook.com/LNShankar27
" class="social-icon inline-block si-small si-light si-rounded si-facebook">
										<i class="icon-facebook"></i>
										<i class="icon-facebook"></i>
									</a>
									<a href="https://www.linkedin.com/in/lokesh-shankar-007153154
" class="social-icon inline-block si-small si-light si-rounded si-linkedin">
										<i class="icon-linkedin"></i>
										<i class="icon-linkedin"></i>
									</a>
								</div>
							</div>
						</div>
						<div class="col-md-2 col-xs-6 bottommargin">
							<div class="team">
								<div class="team-image">
									<img src="img/team/editors/Priyansh%20Soni.jpg" alt="Priyansh Soni">
								</div>
								<div class="team-desc">
									<div class="team-title">
										<h5>Priyansh <br>Soni</h5>
										<h6>Assistant Editor</h6>
									</div>
									<a target="_blank" rel="noopener noreferrer" href="https://www.facebook.com/priyansh.soni.1293
" class="social-icon inline-block si-small si-light si-rounded si-facebook">
										<i class="icon-facebook"></i>
										<i class="icon-facebook"></i>
									</a>
									<a target="_blank" rel="noopener noreferrer" href="https://www.linkedin.com/in/priyanshsoni/
" class="social-icon inline-block si-small si-light si-rounded si-linkedin">
										<i class="icon-linkedin"></i>
										<i class="icon-linkedin"></i>
									</a>
								</div>
							</div>
						</div>
					</div>
					<!-- <div class="row"> -->


					<div class="row">
						<div class="col-md-2 col-xs-6 bottommargin">
							<div class="team">
								<div class="team-image">
									<img src="/img/team/editors/Shrey%20Padhi.jpg" alt="Shrey Padhi">
								</div>
								<div class="team-desc">
									<div class="team-title">
										<h5>Shrey <br>Padhi</h5>
										<h6>Assistant Editor</h6>
									</div>
									<a target="_blank" rel="noopener noreferrer" href="https://www.facebook.com/shrey.padhi
" class="social-icon inline-block si-small si-light si-rounded si-facebook">
										<i class="icon-facebook"></i>
										<i class="icon-facebook"></i>
									</a>
									<a target="_blank" rel="noopener noreferrer" href="https://www.linkedin.com/in/shrey-padhi-317009110/
" class="social-icon inline-block si-small si-light si-rounded si-linkedin">
										<i class="icon-linkedin"></i>
										<i class="icon-linkedin"></i>
									</a>



								</div>
							</div>
						</div>

						<div class="col-md-2 col-xs-6 bottommargin">
							<div class="team">
								<div class="team-image">
									<img src="img/team/editors/Srishti%20Mittal.jpg" alt="Srishti Mittal">
								</div>
								<div class="team-desc">
									<div class="team-title">
										<h5>Srishti <br>Mittal</h5>
										<h6>Assistant Editor</h6>
									</div>
									<a target="_blank" rel="noopener noreferrer" href="https://www.facebook.com/srishti.mittal.35
" class="social-icon inline-block si-small si-light si-rounded si-facebook">
										<i class="icon-facebook"></i>
										<i class="icon-facebook"></i>
									</a>
									<a target="_blank" rel="noopener noreferrer" href="https://www.linkedin.com/in/srishti-m/
" class="social-icon inline-block si-small si-light si-rounded si-linkedin">
										<i class="icon-linkedin"></i>
										<i class="icon-linkedin"></i>
									</a>

								</div>
							</div>

						</div>

						<div class="col-md-2 col-xs-6 bottommargin">
							<div class="team">
								<div class="team-image">
									<img src="/img/team/Columnists/Anjali%20Singh.jpeg" alt="Anjali Singh">
								</div>
								<div class="team-desc">
									<div class="team-title">
										<h5>Anjali <br>Singh</h5></div>
									<a href="https://www.facebook.com/AnjaliSinghF1
" class="social-icon inline-block si-small si-light si-rounded si-facebook">
										<i class="icon-facebook"></i>
										<i class="icon-facebook"></i>
									</a>
									<a href="https://www.linkedin.com/in/anjali-singh-b5a039159/" class="social-icon inline-block si-small si-light si-rounded si-linkedin">
										<i class="icon-linkedin"></i>
										<i class="icon-linkedin"></i>
									</a>
								</div>
							</div>
						<br><br>
						</div>
						<div class="col-md-2 col-xs-6 bottommargin">
							<div class="team">
								<div class="team-image">
									<img src="/img/team/Columnists/Anoushka%20Raj.jpeg" alt="Anoushka Raj">
								</div>
								<div class="team-desc">
									<div class="team-title">
										<h5>Anoushka <br>Raj</h5>
									</div>
									<a href="https://www.fb.com/anoushkaaraj
" class="social-icon inline-block si-small si-light si-rounded si-facebook">
										<i class="icon-facebook"></i>
										<i class="icon-facebook"></i>
									</a>
									<a href="#" class="social-icon inline-block si-small si-light si-rounded si-linkedin">
										<i class="icon-linkedin"></i>
										<i class="icon-linkedin"></i>
									</a>



								</div>
							</div>
							<br><br>
						</div>

						<div class="col-md-2 col-xs-6 bottommargin">
							<div class="team">
								<div class="team-image">
									<img src="/img/team/Columnists/Ishaan%20Gupta.jpeg" alt="Nix Maxwell">
								</div>
								<div class="team-desc">
									<div class="team-title">
										<h5>Ishaan <br>Gupta</h5></div>
									<a href="https://www.facebook.com/ishaan.gupta.9022662
" class="social-icon inline-block si-small si-light si-rounded si-facebook">
										<i class="icon-facebook"></i>
										<i class="icon-facebook"></i>
									</a>
									<a href="#
" class="social-icon inline-block si-small si-light si-rounded si-linkedin">
										<i class="icon-linkedin"></i>
										<i class="icon-linkedin"></i>
									</a>
								</div>
							</div>
							<br><br>
						</div>

						<div class="col-md-2 col-xs-6 bottommargin">
							<div class="team">
								<div class="team-image">
									<img src="img/team/Columnists/Kripi%20Badonia.jpeg" alt="John Doe">
								</div>
								<div class="team-desc">
									<div class="team-title">
										<h5>Kripi <br>Badonia</h5></div>
									<a href="https://facebook.com/kripibadonia
" class="social-icon inline-block si-small si-light si-rounded si-facebook">
										<i class="icon-facebook"></i>
										<i class="icon-facebook"></i>
									</a>
									<a href="#" class="social-icon inline-block si-small si-light si-rounded si-linkedin">
										<i class="icon-linkedin"></i>
										<i class="icon-linkedin"></i>
									</a>
								</div>
							</div>
							<br><br>
						</div>
					</div>


					<!-- <div class="row"> -->

					<div class="row">

						<div class="col-md-2 col-xs-6 bottommargin">
							<div class="team">
								<div class="team-image">
									<img src="img/team/Columnists/Mandeep%20Singh.jpeg" alt="Mandeep Singh">
								</div>
								<div class="team-desc">
									<div class="team-title">
										<h5>Mandeep <br>Singh</h5></div>
									<a href="https://www.facebook.com/mandeepsrr
" class="social-icon inline-block si-small si-light si-rounded si-facebook">
										<i class="icon-facebook"></i>
										<i class="icon-facebook"></i>
									</a>
									<a href="https://www.linkedin.com/in/mandeep-singh-788a8063/
" class="social-icon inline-block si-small si-light si-rounded si-linkedin">
										<i class="icon-linkedin"></i>
										<i class="icon-linkedin"></i>
									</a>
								</div>
							</div>
						</div>

						<div class="col-md-2 col-xs-6 bottommargin">
							<div class="team">
								<div class="team-image">
									<img src="img/team/Columnists/Mihir%20Ranjan.jpeg" alt="Mihir Ranjan">
								</div>
								<div class="team-desc">
									<div class="team-title">
										<h5>Mihir <br>Ranjan</h5><span></span></div>
									<a href="#
" class="social-icon inline-block si-small si-light si-rounded si-facebook">
										<i class="icon-facebook"></i>
										<i class="icon-facebook"></i>
									</a>
									<a href="#
" class="social-icon inline-block si-small si-light si-rounded si-linkedin">
										<i class="icon-linkedin"></i>
										<i class="icon-linkedin"></i>
									</a>
								</div>
							</div>
						</div>

						<div class="col-md-2 col-xs-6 bottommargin">
							<div class="team">
								<div class="team-image">
									<img src="img/team/Columnists/Rishabh%20Chaurasia.jpeg" alt="Rishabh Chaurasia">
								</div>
								<div class="team-desc">
									<div class="team-title">
										<h5>Rishabh <br>Chaurasia</h5>
									</div>
									<a target="_blank" rel="noopener noreferrer" href="https://www.facebook.com/rishabh.chaurasia.984
" class="social-icon inline-block si-small si-light si-rounded si-facebook">
										<i class="icon-facebook"></i>
										<i class="icon-facebook"></i>
									</a>
									<a target="_blank" rel="noopener noreferrer" href="#
" class="social-icon inline-block si-small si-light si-rounded si-linkedin">
										<i class="icon-linkedin"></i>
										<i class="icon-linkedin"></i>
									</a>
								</div>
							</div>
						</div>

						<div class="col-md-2 col-xs-6 bottommargin">
							<div class="team">
								<div class="team-image">
									<img src="img/team/Columnists/Saurabh%20Tiwari.jpeg" alt="Saurabh">
								</div>
								<div class="team-desc">
									<div class="team-title">
										<h5>Saurabh<br>Tiwari</h5>
									</div>
									<a target="_blank" rel="noopener noreferrer" href="https://www.facebook.com/stthegreat
" class="social-icon inline-block si-small si-light si-rounded si-facebook">
										<i class="icon-facebook"></i>
										<i class="icon-facebook"></i>
									</a>
									<a target="_blank" rel="noopener noreferrer" href="#" class="social-icon inline-block si-small si-light si-rounded si-linkedin">
										<i class="icon-linkedin"></i>
										<i class="icon-linkedin"></i>
									</a>

								</div>
							</div>
						</div>

					</div>
				</div>



				<div class="tab-pane fade" id="designers" style="margin-left:10%; margin-right:10%">


					<div class="fancy-title title-border">
						<h3>Designers</h3>
					</div>

					<div class="row">

						<div class="col-md-2 col-xs-6 bottommargin">
							<div class="team">
								<div class="team-image">
									<img src="img/team/Designers/Anubha%20Kabra.jpg" alt="Anubha Kabra">
								</div>
								<div class="team-desc">
									<div class="team-title">
										<h5>Anubha <br>Kabra</h5>
										<h6>Associate Designer</h6>
									</div>
									<a target="_blank" rel="noopener noreferrer" href="https://www.facebook.com/anubha.kabra
" class="social-icon inline-block si-small si-light si-rounded si-facebook">
										<i class="icon-facebook"></i>
										<i class="icon-facebook"></i>
									</a>
									<a target="_blank" rel="noopener noreferrer" href="https://www.linkedin.com/in/anubha-kabra/
" class="social-icon inline-block si-small si-light si-rounded si-linkedin">
										<i class="icon-linkedin"></i>
										<i class="icon-linkedin"></i>
									</a>



								</div>
							</div>

						</div>

						<div class="col-md-2 col-xs-6 bottommargin">
							<div class="team">
								<div class="team-image">
									<img src="/img/team/Designers/Aavriti%20Arora.jpg" alt="Aavriti">
								</div>
								<div class="team-desc">
									<div class="team-title">
										<h5>Aavriti<br> Arora</h5>
										<h6>Assistant Designer</h6>
									</div>
									<a target="_blank" rel="noopener noreferrer" href="https://www.facebook.com/aavriti.arora
" class="social-icon inline-block si-small si-light si-rounded si-facebook">
										<i class="icon-facebook"></i>
										<i class="icon-facebook"></i>
									</a>
									<a target="_blank" rel="noopener noreferrer" href="https://www.linkedin.com/in/aavriti-arora-b42671152/
" class="social-icon inline-block si-small si-light si-rounded si-linkedin">
										<i class="icon-linkedin"></i>
										<i class="icon-linkedin"></i>
									</a>

								</div>
							</div>
						</div>
						<div class="col-md-2 col-xs-6 bottommargin">
							<div class="team">
								<div class="team-image">
									<img src="/img/team/Designers/Pratyush%20Pranjal.jpg" alt="Pratyush Pranjal">
								</div>
								<div class="team-desc">
									<div class="team-title">
										<h5>Pratyush<br> Pranjal</h5>
										<h6>Associate Designer</h6>
									</div>
									<a target="_blank" rel="noopener noreferrer" href="https://www.facebook.com/pratyush.pranjal
" class="social-icon inline-block si-small si-light si-rounded si-facebook">
										<i class="icon-facebook"></i>
										<i class="icon-facebook"></i>
									</a>
									<a target="_blank" rel="noopener noreferrer" href="https://www.linkedin.com/in/pratyush-p-12293698/
" class="social-icon inline-block si-small si-light si-rounded si-linkedin">
										<i class="icon-linkedin"></i>
										<i class="icon-linkedin"></i>
									</a>
								</div>
							</div>
						</div>


						<div class="col-md-2 col-xs-6 bottommargin">
							<div class="team">
								<div class="team-image">
									<img src="img/team/Designers/Akshita%20Mishra.jpg" alt="Akshita Mishra">
								</div>
								<div class="team-desc">
									<div class="team-title">
										<h5>Akshita <br>Mishra</h5>
									</div>
									<a target="_blank" rel="noopener noreferrer" href="#
" class="social-icon inline-block si-small si-light si-rounded si-facebook">
										<i class="icon-facebook"></i>
										<i class="icon-facebook"></i>
									</a>
									<a target="_blank" rel="noopener noreferrer" href="#
" class="social-icon inline-block si-small si-light si-rounded si-linkedin">
										<i class="icon-linkedin"></i>
										<i class="icon-linkedin"></i>
									</a>

								</div>
							</div>
							<br><br>
						</div>

						<div class="col-md-2 col-xs-6 bottommargin">
							<div class="team">
								<div class="team-image">
									<img src="img/team/Designers/Angad%20Bhalla.jpg" alt="Angad Bhalla">
								</div>
								<div class="team-desc">
									<div class="team-title">
										<h5>Angad <br>Bhalla</h5>
									</div>
									<a target="_blank" rel="noopener noreferrer" href="https://www.facebook.com/angad.bhalla14
" class="social-icon inline-block si-small si-light si-rounded si-facebook">
										<i class="icon-facebook"></i>
										<i class="icon-facebook"></i>
									</a>
									<a target="_blank" rel="noopener noreferrer" href="#
" class="social-icon inline-block si-small si-light si-rounded si-linkedin">
										<i class="icon-linkedin"></i>
										<i class="icon-linkedin"></i>
									</a>

								</div>
							</div>
							<br><br>
						</div>

						<div class="col-md-2 col-xs-6 bottommargin">
							<div class="team">
								<div class="team-image">
									<img src="img/team/Designers/pranoy.jpg" alt="Pranoy Kanungo">
								</div>
								<div class="team-desc">
									<div class="team-title">
										<h5>Pranoy <br>Kanungo</h5>
									</div>
									<a target="_blank" rel="noopener noreferrer" href="https://www.facebook.com/pranoy.kanungo
" class="social-icon inline-block si-small si-light si-rounded si-facebook">
										<i class="icon-facebook"></i>
										<i class="icon-facebook"></i>
									</a>
									<a target="_blank" rel="noopener noreferrer" href="https://www.linkedin.com/in/pranoy-kanungo-15938b188
" class="social-icon inline-block si-small si-light si-rounded si-linkedin">
										<i class="icon-linkedin"></i>
										<i class="icon-linkedin"></i>
									</a>

								</div>
							</div>
							<br><br>
						</div>

					</div>
					<div class="row">

						<div class="col-md-2 col-xs-6 bottommargin">
							<div class="team">
								<div class="team-image">
									<img src="/img/team/Designers/Raghav%20Byala.jpg" alt="Raghav Byala">
								</div>
								<div class="team-desc">
									<div class="team-title">
										<h5>Raghav<br> Byala</h5>
									</div>
									<a target="_blank" rel="noopener noreferrer" href="https://www.facebook.com/noob10170
" class="social-icon inline-block si-small si-light si-rounded si-facebook">
										<i class="icon-facebook"></i>
										<i class="icon-facebook"></i>
									</a>
									<a target="_blank" rel="noopener noreferrer" href="#
" class="social-icon inline-block si-small si-light si-rounded si-linkedin">
										<i class="icon-linkedin"></i>
										<i class="icon-linkedin"></i>
									</a>



								</div>
							</div>
						</div>

						<div class="col-md-2 col-xs-6 bottommargin">
							<div class="team">
								<div class="team-image">
									<img src="/img/team/Designers/Samarth%20Yadav.jpg" alt="Samarth Yadav">
								</div>
								<div class="team-desc">
									<div class="team-title">
										<h5>Samarth<br> Yadav</h5>
									</div>
									<a target="_blank" rel="noopener noreferrer" href="https://www.facebook.com/samarth.yadav
" class="social-icon inline-block si-small si-light si-rounded si-facebook">
										<i class="icon-facebook"></i>
										<i class="icon-facebook"></i>
									</a>
									<a target="_blank" rel="noopener noreferrer" href="https://www.linkedin.com/in/samarth-yadav-9b660a147/
" class="social-icon inline-block si-small si-light si-rounded si-linkedin">
										<i class="icon-linkedin"></i>
										<i class="icon-linkedin"></i>
									</a>



								</div>
							</div>
						</div>
						<div class="col-md-2 col-xs-6 bottommargin">
							<div class="team">
								<div class="team-image">
									<img src="/img/team/Designers/Tripti%20Khulbe.jpg" alt="Tripti">
								</div>
								<div class="team-desc">
									<div class="team-title">
										<h5>Tripti<br> Khulbe</h5>
									</div>
									<a target="_blank" rel="noopener noreferrer" href="https://m.facebook.com/tripti.khulbe.1?ref=bookmarks#_=_
" class="social-icon inline-block si-small si-light si-rounded si-facebook">
										<i class="icon-facebook"></i>
										<i class="icon-facebook"></i>
									</a>
									<a target="_blank" rel="noopener noreferrer" href="#" class="social-icon inline-block si-small si-light si-rounded si-linkedin">
										<i class="icon-linkedin"></i>
										<i class="icon-linkedin"></i>
									</a>
								</div>
							</div>
						</div>


					</div>


				</div>
				<div class="tab-pane fade" id="illustrators" style="margin-left:10%; margin-right:10%">

					<div class="fancy-title title-border">
						<h3>Illustrators</h3>
					</div>

					<div class="row">
						<div class="col-md-2 col-xs-6 bottommargin">
							<div class="team">
								<div class="team-image">
									<img src="/img/team/Illustrators/Akshansh%20Aggarwal.jpeg" alt="Akshansh Aggarwal">
								</div>
								<div class="team-desc">
									<div class="team-title">
										<h5>Akshansh<br> Aggarwal</h5>
										<h6>Assistant Illustrator</h6>
									</div>
									<a target="_blank" rel="noopener noreferrer" href="https://www.facebook.com/profile.php?id=100017379041908" class="social-icon inline-block si-small si-light si-rounded si-facebook">
										<i class="icon-facebook"></i>
										<i class="icon-facebook"></i>
									</a>
									<a target="_blank" rel="noopener noreferrer" href="http://linkedin.com/in/akshansh-aggarwal-2016b1114" class="social-icon inline-block si-small si-light si-rounded si-linkedin">
										<i class="icon-linkedin"></i>
										<i class="icon-linkedin"></i>
									</a>


								</div>
							</div>
						</div>
						<div class="col-md-2 col-xs-6 bottommargin">
							<div class="team">
								<div class="team-image">
									<img src="/img/team/Illustrators/Akash%20Chauhan.jpeg" alt="Akash Chauhan">
								</div>
								<div class="team-desc">
									<div class="team-title">
										<h5>Akash<br> Chauhan</h5>
										<h6 style="opacity:0"></h6>
									</div>
									<a target="_blank" rel="noopener noreferrer" href="https://m.facebook.com/profile.php?id=100003618965840&ref=content_filter
" class="social-icon inline-block si-small si-light si-rounded si-facebook">
										<i class="icon-facebook"></i>
										<i class="icon-facebook"></i>
									</a>
									<a target="_blank" rel="noopener noreferrer" href="https://www.linkedin.com/comm/in/akash-chauhan-14b0a1125?midToken=AQFxo0vEYeadTA&trk=eml-email_m2m_invite_single_01-header-24-profile&trkEmail=eml-email_m2m_invite_single_01-header-24-profile-null-8johhn%7Ejalcyyrc%7Erc-null-neptune%2Fprofile%7Evanity%2Eview&lipi=urn%3Ali%3Apage%3Aemail_email_m2m_invite_single_01%3Bq0G9n1qsSi2QqnJCwLYcHA%3D%3D
" class="social-icon inline-block si-small si-light si-rounded si-linkedin">
										<i class="icon-linkedin"></i>
										<i class="icon-linkedin"></i>
									</a>

								</div>
							</div>
							<br><br>
						</div>


						<div class="col-md-2 col-xs-6 bottommargin">
							<div class="team">
								<div class="team-image">
									<img src="/img/team/Illustrators/Anirudh%20Kundu.jpeg" alt="Anirudh Kundu">
								</div>
								<div class="team-desc">
									<div class="team-title">
										<h5>Anirudh<br> Kundu</h5>
									</div>
									<a target="_blank" rel="noopener noreferrer" href="https://m.facebook.com/anirudh.kundu.5?ref=bookmarks" class="social-icon inline-block si-small si-light si-rounded si-facebook">
										<i class="icon-facebook"></i>
										<i class="icon-facebook"></i>
									</a>
									<a target="_blank" rel="noopener noreferrer" href="https://www.linkedin.com/authwall?trk=bf&trkInfo=AQFG8x3bhYWcIAAAAWZkwNT4Gsq5B7Cd4Z4y-OQBvq4pFT2suxlIHyO5whKrSq8pmAyue31suQ97VgCjZyNK4jq9BZWjiwQEMyYUKmUaXOtH6c56qYws1i8OAAD_ezSOp5nXw4U=&originalReferer=&sessionRedirect=https%3A%2F%2Fwww.linkedin.com%2Fin%2Fanirudh-kundu-508587171"
									 class="social-icon inline-block si-small si-light si-rounded si-linkedin">
										<i class="icon-linkedin"></i>
										<i class="icon-linkedin"></i>
									</a>
								</div>
							</div>
							<br><br>
						</div>

						<div class="col-md-2 col-xs-6 bottommargin">
							<div class="team">
								<div class="team-image">
									<img src="/img/team/Illustrators/Dakshita%20Joshi.jpeg" alt="Dakshita Josh">
								</div>
								<div class="team-desc">
									<div class="team-title">
										<h5>Dakshita<br> Joshi</h5>
									</div>
									<a target="_blank" rel="noopener noreferrer" href="#" class="social-icon inline-block si-small si-light si-rounded si-facebook">
										<i class="icon-facebook"></i>
										<i class="icon-facebook"></i>
									</a>
									<a target="_blank" rel="noopener noreferrer" href="#" class="social-icon inline-block si-small si-light si-rounded si-linkedin">
										<i class="icon-linkedin"></i>
										<i class="icon-linkedin"></i>
									</a>
								</div>
							</div>
							<br><br>
						</div>
						<div class="col-md-2 col-xs-6 bottommargin">
							<div class="team">
								<div class="team-image">
									<img src="/img/team/Illustrators/Gopika%20Gopakumar.jpeg" alt="Gopika Gopakumar">
								</div>
								<div class="team-desc">
									<div class="team-title">
										<h5>Gopika<br> Gopakumar</h5>
									</div>
									<a target="_blank" rel="noopener noreferrer" href="https://www.facebook.com/gopika.gopakumar.96" class="social-icon inline-block si-small si-light si-rounded si-facebook">
										<i class="icon-facebook"></i>
										<i class="icon-facebook"></i>
									</a>
									<a target="_blank" rel="noopener noreferrer" href="https://www.linkedin.com/in/gopika-gopakumar-aa18b2142" class="social-icon inline-block si-small si-light si-rounded si-linkedin">
										<i class="icon-linkedin"></i>
										<i class="icon-linkedin"></i>
									</a>

								</div>
							</div>
							<br><br>
						</div>

						<div class="col-md-2 col-xs-6 bottommargin">
							<div class="team">
								<div class="team-image">
									<img src="/img/team/Illustrators/Medhavi%20Thakur.jpeg" alt="Medhavi Thakur">
								</div>
								<div class="team-desc">
									<div class="team-title">
										<h5>Medhavi<br> Thakur</h5>
									</div>
									<a target="_blank" rel="noopener noreferrer" href="https://www.facebook.com/medhavi.thakur.904" class="social-icon inline-block si-small si-light si-rounded si-facebook">
										<i class="icon-facebook"></i>
										<i class="icon-facebook"></i>
									</a>
									<a target="_blank" rel="noopener noreferrer" href="http://www.linkedin.com/in/medhavi-thakur-0006a5101" class="social-icon inline-block si-small si-light si-rounded si-linkedin">
										<i class="icon-linkedin"></i>
										<i class="icon-linkedin"></i>
									</a>

								</div>
							</div>
							<br><br>
						</div>
					</div>
				</div>


				<div class="tab-pane fade" id="photographers" style="margin-right:10%; margin-left:10%">
					<div class="fancy-title title-border">
						<h3>Photographers</h3>
					</div>

					<div class="row">
						<div class="col-md-2 col-xs-6 bottommargin">
							<div class="team">
								<div class="team-image">
									<img src="/img/team/photographer/Ankit%20Dutta.jpeg" alt="Ankit Dutta">
								</div>
								<div class="team-desc">
									<div class="team-title">
										<h5>Ankit<br>Dutta</h5>
									</div>
									<a target="_blank" rel="noopener noreferrer" href="https://www.facebook.com/ankitdutta2222
" class="social-icon inline-block si-small si-light si-rounded si-facebook">
										<i class="icon-facebook"></i>
										<i class="icon-facebook"></i>
									</a>
									<a target="_blank" rel="noopener noreferrer" href="#
" class="social-icon inline-block si-small si-light si-rounded si-linkedin">
										<i class="icon-linkedin"></i>
										<i class="icon-linkedin"></i>
									</a>


								</div>
							</div>
						</div>

						<div class="col-md-2 col-xs-6 bottommargin">
							<div class="team">
								<div class="team-image">
									<img src="/img/team/photographer/Jessjit%20Singh.jpeg" alt="Jessjit Singh">
								</div>
								<div class="team-desc">
									<div class="team-title">
										<h5>Jessjit<br> Singh</h5>
									</div>
									<a target="_blank" rel="noopener noreferrer" href="https://www.facebook.com/jessjit.singh
" class="social-icon inline-block si-small si-light si-rounded si-facebook">
										<i class="icon-facebook"></i>
										<i class="icon-facebook"></i>
									</a>
									<a target="_blank" rel="noopener noreferrer" href="#" class="social-icon inline-block si-small si-light si-rounded si-linkedin">
										<i class="icon-linkedin"></i>
										<i class="icon-linkedin"></i>
									</a>




								</div>
							</div>
						</div>

						<div class="col-md-2 col-xs-6 bottommargin">
							<div class="team">
								<div class="team-image">
									<img src="/img/team/photographer/Kushagra%20Agrawal.jpeg" alt="Kushagra Agrawal">
								</div>
								<div class="team-desc">
									<div class="team-title">
										<h5>Kushagra<br>Krishna Agrawal</h5>
									</div>
									<a target="_blank" rel="noopener noreferrer" href="https://www.facebook.com/kushagra.agrawal.50
" class="social-icon inline-block si-small si-light si-rounded si-facebook">
										<i class="icon-facebook"></i>
										<i class="icon-facebook"></i>
									</a>
									<a target="_blank" rel="noopener noreferrer" href="#" class="social-icon inline-block si-small si-light si-rounded si-linkedin">
										<i class="icon-linkedin"></i>
										<i class="icon-linkedin"></i>
									</a>
								</div>
							</div>
						</div>
						<div class="col-md-2 col-xs-6 bottommargin">
							<div class="team">
								<div class="team-image">
									<img src="/img/team/photographer/krishmodi.jpeg" alt="Krish Modi">
								</div>
								<div class="team-desc">
									<div class="team-title">
										<h5>Krish <br>Modi</h5>
									</div>
									<a target="_blank" rel="noopener noreferrer" href="https://www.facebook.com/nikhil.kerketta.5
" class="social-icon inline-block si-small si-light si-rounded si-facebook">
										<i class="icon-facebook"></i>
										<i class="icon-facebook"></i>
									</a>
									<a target="_blank" rel="noopener noreferrer" href="https://www.linkedin.com/in/nikhil-kerketta-2a0122129
" class="social-icon inline-block si-small si-light si-rounded si-linkedin">
										<i class="icon-linkedin"></i>
										<i class="icon-linkedin"></i>
									</a>


								</div>
							</div>
						</div>
						<div class="col-md-2 col-xs-6 bottommargin">
							<div class="team">
								<div class="team-image">
									<img src="/img/team/photographer/mukul%20tanwar.jpeg" alt="Mukul Tanwar">
								</div>
								<div class="team-desc">
									<div class="team-title">
										<h5>Mukul<br> Tanwar</h5>
									</div>
									<a target="_blank" rel="noopener noreferrer" href="https://m.facebook.com/mukul.tanwar.5?ref=bookmarks
" class="social-icon inline-block si-small si-light si-rounded si-facebook">
										<i class="icon-facebook"></i>
										<i class="icon-facebook"></i>
									</a>
									<a target="_blank" rel="noopener noreferrer" href="http://linkedin.com/in/mukul-tanwar-a17a98131
" class="social-icon inline-block si-small si-light si-rounded si-linkedin">
										<i class="icon-linkedin"></i>
										<i class="icon-linkedin"></i>
									</a>


								</div>
							</div>
						</div>
						<div class="col-md-2 col-xs-6 bottommargin">
							<div class="team">
								<div class="team-image">
									<img src="/img/team/photographer/Priyansh%20Gupta.jpeg" alt="Priyansh Gupta">
								</div>
								<div class="team-desc">
									<div class="team-title">
										<h5>Priyansh <br>Gupta</h5>
									</div>
									<a target="_blank" rel="noopener noreferrer" href="https://www.facebook.com/guptaji.ka.chhora
" class="social-icon inline-block si-small si-light si-rounded si-facebook">
										<i class="icon-facebook"></i>
										<i class="icon-facebook"></i>
									</a>
									<a target="_blank" rel="noopener noreferrer" href="#
" class="social-icon inline-block si-small si-light si-rounded si-linkedin">
										<i class="icon-linkedin"></i>
										<i class="icon-linkedin"></i>
									</a>


								</div>
							</div>
						</div>
					</div>

					<div class="row">

						<div class="col-md-2 col-xs-6 bottommargin">
							<div class="team">
								<div class="team-image">
									<img src="/img/team/photographer/Priyansh%20Verma.jpeg" alt="Priyansh Verma">
								</div>
								<div class="team-desc">
									<div class="team-title">
										<h5>Priyansh <br>Verma</h5>
									</div>
									<a target="_blank" rel="noopener noreferrer" href="https://www.facebook.com/Priyansh31Verma
" class="social-icon inline-block si-small si-light si-rounded si-facebook">
										<i class="icon-facebook"></i>
										<i class="icon-facebook"></i>
									</a>
									<a target="_blank" rel="noopener noreferrer" href="https://www.linkedin.com/in/priyansh-verma-502496157
" class="social-icon inline-block si-small si-light si-rounded si-linkedin">
										<i class="icon-linkedin"></i>
										<i class="icon-linkedin"></i>
									</a>


								</div>
							</div>
						</div>

						<div class="col-md-2 col-xs-6 bottommargin">
							<div class="team">
								<div class="team-image">
									<img src="/img/team/photographer/Sai%20Seth.jpeg" alt="Sai Seth">
								</div>
								<div class="team-desc">
									<div class="team-title">
										<h5>Sai <br>Seth</h5>
									</div>
									<a target="_blank" rel="noopener noreferrer" href="https://www.facebook.com/saisco26
" class="social-icon inline-block si-small si-light si-rounded si-facebook">
										<i class="icon-facebook"></i>
										<i class="icon-facebook"></i>
									</a>
									<a target="_blank" rel="noopener noreferrer" href="https://www.linkedin.com/in/sai-seth-57b716165
" class="social-icon inline-block si-small si-light si-rounded si-linkedin">
										<i class="icon-linkedin"></i>
										<i class="icon-linkedin"></i>
									</a>


								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="tab-pane fade" id="webdevelopers" style="margin-left:10%; margin-right:10%">
					<div class="fancy-title title-border">
						<h3>Developers</h3><br>

					</div>

					<div class="row">
						<div class="col-md-2 col-xs-6 bottommargin">
							<div class="team">
								<div class="team-image">
									<img src="/img/team/WebDevelopers/Manish.jpeg" alt="Manish">
								</div>
								<div class="team-desc">
									<div class="team-title">
										<h5>Manish <br> Sahani</h5>
										<h6>Coordinator</h6>
									</div>
									<a target="_blank" rel="noopener noreferrer" href="https://www.facebook.com/manish.s1999" class="social-icon inline-block si-small si-light si-rounded si-facebook">
										<i class="icon-facebook"></i>
										<i class="icon-facebook"></i>
									</a>
									<a target="_blank" rel="noopener noreferrer" href="https://www.linkedin.com/in/manish-sahani-95640614b/" class="social-icon inline-block si-small si-light si-rounded si-linkedin">
										<i class="icon-linkedin"></i>
										<i class="icon-linkedin"></i>
									</a>


								</div>
							</div>
						</div>

						<div class="col-md-2 col-xs-6 bottommargin">
							<div class="team">
								<div class="team-image">
									<img src="/img/team/WebDevelopers/Nandana.jpeg" alt="Nandana">
								</div>
								<div class="team-desc">
									<div class="team-title">
										<h5>Nandana <br> Tiwari</h5>
										<h6>Coordinator</h6>
									</div>
									<a target="_blank" rel="noopener noreferrer" href="https://www.facebook.com/nandana219" class="social-icon inline-block si-small si-light si-rounded si-facebook">
										<i class="icon-facebook"></i>
										<i class="icon-facebook"></i>
									</a>
									<a target="_blank" rel="noopener noreferrer" href="https://www.linkedin.com/in/nandana-tiwari-b03160171/" class="social-icon inline-block si-small si-light si-rounded si-linkedin">
										<i class="icon-linkedin"></i>
										<i class="icon-linkedin"></i>
									</a>


								</div>
							</div>
						</div>


						<div class="col-md-2 col-xs-6 bottommargin">
							<div class="team">
								<div class="team-image">
									<img src="/img/team/WebDevelopers/Sambhav.jpeg" alt="Sambhav">
								</div>
								<div class="team-desc">
									<div class="team-title">
										<h5>Sambhav <br> Jain</h5>
										<h6>Coordinator</h6>
									</div>
									<a target="_blank" rel="noopener noreferrer" href="https://m.facebook.com/sambhav.jain.1610092" class="social-icon inline-block si-small si-light si-rounded si-facebook">
										<i class="icon-facebook"></i>
										<i class="icon-facebook"></i>
									</a>
									<a target="_blank" rel="noopener noreferrer" href="https://www.linkedin.com/in/sambhav-jain-545b70151" class="social-icon inline-block si-small si-light si-rounded si-linkedin">
										<i class="icon-linkedin"></i>
										<i class="icon-linkedin"></i>
									</a>


								</div>
							</div>
						</div>
						<div class="col-md-2 col-xs-6" style="margin-bottom:100px">
							<div class="team">
								<div class="team-image">
									<img src="/img/team/WebDevelopers/aryan.jpg" alt="Aryan">
								</div>
								<div class="team-desc">
									<div class="team-title">
										<h5>Aryan <br> Ganotra</h5>
									</div>
									<a target="_blank" rel="noopener noreferrer" href="https://m.facebook.com/aryan.ganotra?ref=bookmarks" class="social-icon inline-block si-small si-light si-rounded si-facebook">
										<i class="icon-facebook"></i>
										<i class="icon-facebook"></i>
									</a>
									<a target="_blank" rel="noopener noreferrer" href="https://in.linkedin.com/in/aryan-ganotra-a818aa179" class="social-icon inline-block si-small si-light si-rounded si-linkedin">
										<i class="icon-linkedin"></i>
										<i class="icon-linkedin"></i>
									</a>


								</div>
							</div>
						</div>
                        <div class="col-md-2 col-xs-6 bottommargin">
							<div class="team">
								<div class="team-image">
									<img src="/img/team/WebDevelopers/Gaurav.jpeg" alt="Gaurav">
								</div>
								<div class="team-desc">
									<div class="team-title">
										<h5>Gaurav <br> Khatri</h5>
									</div>
									<a target="_blank" rel="noopener noreferrer" href="https://www.facebook.com/gaurav.khatri.00" class="social-icon inline-block si-small si-light si-rounded si-facebook">
										<i class="icon-facebook"></i>
										<i class="icon-facebook"></i>
									</a>
									<a target="_blank" rel="noopener noreferrer" href="https://www.linkedin.com/in/gaurav-khatri-809104192/" class="social-icon inline-block si-small si-light si-rounded si-linkedin">
										<i class="icon-linkedin"></i>
										<i class="icon-linkedin"></i>
									</a>
								</div>
							</div>
						</div>
						<div class="col-md-2 col-xs-6 bottommargin">
							<div class="team">
								<div class="team-image">
									<img src="/img/team/WebDevelopers/Kushal.jpg" alt="Kushal">
								</div>
								<div class="team-desc">
									<div class="team-title">
										<h5>Kushal <br> Gera</h5>
									</div>
									<a target="_blank" rel="noopener noreferrer" href="https://www.example.com/example" class="social-icon inline-block si-small si-light si-rounded si-facebook">
										<i class="icon-facebook"></i>
										<i class="icon-facebook"></i>
									</a>
									<a target="_blank" rel="noopener noreferrer" href="https://www.example.com/example" class="social-icon inline-block si-small si-light si-rounded si-linkedin">
										<i class="icon-linkedin"></i>
										<i class="icon-linkedin"></i>
									</a>


								</div>
							</div>
						</div>
					</div>
					<div class="row">
					<div class="col-md-2 col-xs-6 bottommargin">
							<div class="team">
								<div class="team-image">
									<img src="/img/team/WebDevelopers/ShivamBansal.jpg" alt="Shivam Bansal">
								</div>
								<div class="team-desc">
									<div class="team-title">
										<h5>Shivam <br> Bansal</h5>
									</div>
									<a target="_blank" rel="noopener noreferrer" href="https://www.example.com/example" class="social-icon inline-block si-small si-light si-rounded si-facebook">
										<i class="icon-facebook"></i>
										<i class="icon-facebook"></i>
									</a>
									<a target="_blank" rel="noopener noreferrer" href="https://www.example.com/example" class="social-icon inline-block si-small si-light si-rounded si-linkedin">
										<i class="icon-linkedin"></i>
										<i class="icon-linkedin"></i>
									</a>


								</div>
							</div>
						</div>
                        <div class="col-md-2 col-xs-6 bottommargin">
							<div class="team">
								<div class="team-image">
									<img src="/img/team/WebDevelopers/ShivamSinghal.jpg" alt="Shivam Singhal">
								</div>
								<div class="team-desc">
									<div class="team-title">
										<h5>Shivam <br> Singhal</h5>
									</div>
									<a target="_blank" rel="noopener noreferrer" href="https://m.facebook.com/shivam.singla.127/" class="social-icon inline-block si-small si-light si-rounded si-facebook">
										<i class="icon-facebook"></i>
										<i class="icon-facebook"></i>
									</a>
									<a target="_blank" rel="noopener noreferrer" href="https://www.linkedin.com/in/shivam-singhal-682321175/" class="social-icon inline-block si-small si-light si-rounded si-linkedin">
										<i class="icon-linkedin"></i>
										<i class="icon-linkedin"></i>
									</a>


								</div>
							</div>
						</div>
						<div class="col-md-2 col-xs-6 bottommargin ">
							<div class="team">
								<div class="team-image">
									<img src="/img/team/WebDevelopers/Shreyansh.jpg" alt="Shreyansh">
								</div>
								<div class="team-desc">
									<div class="team-title">
										<h5>Shreyansh <br> Gupta</h5>
									</div>
									<a target="_blank" rel="noopener noreferrer" href="https://www.facebook.com/shreyansh.gupta.18" class="social-icon inline-block si-small si-light si-rounded si-facebook">
										<i class="icon-facebook"></i>
										<i class="icon-facebook"></i>
									</a>
									<a target="_blank" rel="noopener noreferrer" href="https://www.linkedin.com/in/shreyansh-gupta-b33b41173/" class="social-icon inline-block si-small si-light si-rounded si-linkedin">
										<i class="icon-linkedin"></i>
										<i class="icon-linkedin"></i>
									</a>


								</div>
							</div>
						</div>

					</div>








				</div>


			</div>

		</div>



	</div>


</section>
<!-- #content end -->
@endsection
