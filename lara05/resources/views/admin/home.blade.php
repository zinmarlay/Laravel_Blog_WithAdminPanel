@extends('admin/layouts/app')

@section('require-css')

@endsection

@section('main-content')
<section class="content">
	<div class="container-fluid">
		<div class="block-header">
			<span class="m-r-10">Edit Home Page</span>			
		</div>

		<div class="row clearfix">
			<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
				<div class="card">
					<div class="header">Edit</div>
				<div class="body">
					<form action="{{route('homepage.update',$home->id)}}" method="post">
						{{csrf_field()}}
						{{method_field('PATCH')}}

						<div class="form-group form-float">
							<div class="form-line">
								<input type="text" name="title" class="form-control"
								 value="{{$home->title}}">
								<label class="form-label">Enter Title</label>
							</div>
						</div>
						<div class="form-group form-float">
							<div class="form-line">
								<input type="text" name="address" class="form-control" value="{{$home->address}}">
								<label class="form-label">Enter Address</label>
							</div>
						</div>
						<div class="form-group form-float">
							<div class="form-line">
								<input type="email" name="email" class="form-control" value="{{$home->email}}">
								<label class="form-label">Enter Email</label>
							</div>
						</div>
						<div class="form-group form-float">
							<div class="form-line">

						<textarea name="desc" class="form-control">
{{$home->description}}</textarea>
								<label class="form-label">Enter Description</label>
							</div>
						</div>
						<div class="form-group form-float">
							<div class="form-line">
								<input type="text" name="linkedin" class="form-control" value="{{$home->linkedin}}">
								<label class="form-label">Enter Linkedin</label>
							</div>
						</div>
						<div class="form-group form-float">
							<div class="form-line">
								<input type="text" name="github" class="form-control" value="{{$home->github}}">
								<label class="form-label">Enter Github</label>
							</div>
						</div>
						<div class="form-group form-float">
							<div class="form-line">
								<input type="text" name="twitter" class="form-control"
								value="{{$home->twitter}}">
								<label class="form-label">Enter Twitter</label>
							</div>
						</div>
						<div class="form-group form-float">
							<div class="form-line">
								<input type="text" name="facebook" class="form-control"
								value="{{$home->facebook}}">
								<label class="form-label">Enter Facebook</label>
							</div>
						</div>
						<button type="submit" class="btn btn-primary m-t-15 waves-effect">Save</button>
					</form>					
				</div>
			</div>
			</div>
		</div>
</section>
@endsection


@section('require-script')

@endsection



