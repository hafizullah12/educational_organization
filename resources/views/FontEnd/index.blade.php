@section('title')
Unique Coaching Center
@endsection
@include('FontEnd.header')
@include('FontEnd.slider')

		<!-- about -->
		
<div class="banner-bottom-w3l" id="about">
		<div class="container">
			<div class="title-div">
				<h3 class="tittle">
					<span>W</span>elcome
				</h3>
				<div class="tittle-style">

				</div>
			</div>
			<div class="welcome-sub-wthree">
				<div class="col-md-6 banner_bottom_left">
					<h4>Chairman's Message
					</h4>
					<p>Lorem Ipsum convallis diam consequat magna vulputate malesuada. Cras a ornare elit, Nulla viverra pharetra sem eget.</p>
					<p>Pellentesque convallis diam consequat magna vulputate malesuada. Cras a ornare elit. Nulla viverra pharetra sem, eget
						pulvinar neque pharetra ac.Lorem Ipsum convallis diam consequat magna vulputate malesuada. Cras a ornare elit. Nulla
						viverra pharetra sem.</p>
				</div>
				<!-- Stats-->
				<div class="col-md-6 stats-info-agile">
					<div class="col-xs-6 stats-grid">
					
						<div class="clearfix"></div>
					</div>
				</div>
				<!-- //Stats -->
				<div class="clearfix"> </div>
			</div>
		</div>
	</div>
	<!-- //about -->
	<!-- services -->
	<div class="services">
		<div class="container">
			<div class="title-div">
				<h3 class="tittle">
					<span>O</span>ur
					<span>S</span>ervices
				</h3>
				<div class="tittle-style">

				</div>
			</div>
			<div class="services-moksrow">
				<div class="col-xs-4 services-grids-w3l">
					<div class="servi-shadow">
						<span class="fa fa-bullhorn icon" aria-hidden="true"></span>
						<h4>Popular Courses</h4>
						<p>Phasellus at placerat ante nulla adipiscing elit</p>
					</div>
				</div>
				<div class="col-xs-4 services-grids-w3l">
					<div class="servi-shadow">
						<span class="fa fa-certificate icon" aria-hidden="true"></span>
						<h4>Certification</h4>
						<p>Phasellus at placerat ante nulla adipiscing elit</p>
					</div>
				</div>
				<div class="col-xs-4 services-grids-w3l">
					<div class="servi-shadow">
						<span class="fa fa-book icon" aria-hidden="true"></span>
						<h4>Book Library</h4>
						<p>Phasellus at placerat ante nulla adipiscing elit</p>
					</div>
				</div>
				<div class="clearfix"> </div>
			</div>
			<div class="services-moksrow">
				<div class="col-xs-4 services-grids-w3l">
					<div class="servi-shadow">
						<span class="fa fa-users icon" aria-hidden="true"></span>
						<h4>Best Teachers</h4>
						<p>Phasellus at placerat ante nulla adipiscing elit</p>
					</div>
				</div>
				<div class="col-xs-4 services-grids-w3l">
					<div class="servi-shadow">
						<span class="fa fa-bus icon" aria-hidden="true"></span>
						<h4>Transport Facility</h4>
						<p>Phasellus at placerat ante nulla adipiscing elit</p>
					</div>
				</div>
				<div class="col-xs-4 services-grids-w3l">
					<div class="servi-shadow">
						<span class="fa fa-laptop icon" aria-hidden="true"></span>
						<h4>Excellent Lab</h4>
						<p>Phasellus at placerat ante nulla adipiscing elit</p>
					</div>
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>
	</div>
	<!-- //services -->
	<!-- news -->


	<div class="container">
	<div class="title-div">
				<h3 class="tittle">
					<span>O</span>ur
					<span> A</span>ctivities
				</h3>
				<div class="tittle-style">

				</div>
			</div>
	<div class="row">
	
				@foreach($posts as $post)
				<div class="col-md-6">
				<img src="{{asset('public/feature_img/ss.jpg')}}" style="height:200px;width:260px;">

				<h2><a href="{{url('activity-details',$post->id)}}">{{$post->title}}</a></h2>
				<hr>
				<h3>Published On:{{$post->date}}</h3>
				<hr>
				<p>{{str_limit(strip_tags($post->description,100))}}</p>
				<a href="{{url('activity-details',$post->id)}}" class="pull-right">read more</a>
				</div>
				@endforeach

</div>
	</div>

	
	<div class="middle-sec-agile">
		<div class="container">
			<h4>Our
				<span>Best Study</span> Institute</h4>


				<div class="row">
					@foreach($teachers as $teacher)
						<div class="col-md-4"style="border:3px solid red">
							<div class="card" style="width: 18rem;">
								<img class="card-img-top img-circle" 
								src="{{asset($teacher->feature_image)}}"
								style="margin-left:26px;width:300px;height:300px;border:3px solid red"
								alt="Card image cap">
								<hr>
								<div class="card-body">
									<h5 class="card-title">{{$teacher->name}}</h5>
									<p class="card-text">{{$teacher->degisnation}}</p>
									<p>{{$teacher->email}}</p>
									<p>{{$teacher->phone}}</p>
									<a href="{{url('/teacher-details',$teacher->id)}}" class="btn btn-primary pull-right">See Details</a>
								</div>
								</div>
						</div>
					@endforeach
			
		
			</div>
			</div>

		</div>
		<div class="pencil-img">
			<img src="" alt="" />
		</div>
	</div>
	<!-- //middle section -->
	
	
	@include('FontEnd.testimonials')
	@include('FontEnd.footer')