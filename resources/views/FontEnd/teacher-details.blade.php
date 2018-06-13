@section('title')
Teacher details
@endsection

@include('FontEnd.header')
<div class="container">
<div class="row">

<div class="col-md-4">
<img src="{{asset($teacher->feature_image)}}" alt="" class="img-circle" 
style="width:300px;height:300px;border:1px solid blue">
<br>
<br>
<h3>{{$teacher->name}}</h3>
<h4>{{$teacher->degisnation}}</h4>
</div>
<div class="col-md-8">

<h2>Contact info</h2>
<hr>
<p><span>Email::</span>{{$teacher->email}}</p>
<p><span>Phone::</span>{{$teacher->phone}}</p>
<br>
<h2>Address</h2>
<hr>
<p>{{$teacher->address}}</p>
<br>
<h2>Education info</h2>
<hr>
<p><span>S.S.C Passing year</span>{{$teacher->ssc}}</p>
<p><span>H.S.C Passing Year</span>{{$teacher->hsc}}</p>
<p>{{$teacher->honours}}</p>
<br>
<h2>Working with us</h2>
<hr>
<p>Since {{$teacher->joing_date}} to present</p>
</div>
</div>
</div>	
@include('FontEnd.footer')