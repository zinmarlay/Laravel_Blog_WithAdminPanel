@extends('admin/layouts/app')

@section('require-css')

@endsection

@section('main-content')
<section class="content">
	<div class="container-fluid">
		<div class="block-header">
			<span class="m-r-10">Edit Category</span>
			
		</div>

		<div class="row clearfix">
			<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
				<div class="card">
					<div class="header">
						<h2>Edit</h2>
					</div>
					<div class="body">

						<form action="{{route('category.update',$category->id)}}" method="post">						
							{{csrf_field()}}
							{{method_field('PATCH')}}

							<label for="email_address">Name</label>
							<div class="form-group">
                                 <div class="form-line">
                                        <input type="text" id="email_address" class="form-control" placeholder="Enter Category" name="cname" value="{{$category->name}}">
                                  </div>
                             </div>                            
                             <button type="submit" class="btn btn-primary m-t-15 waves-effect">Edit Category</button>
						</form>

					</div>
				</div>
			</div>
		</div>

	</div>
</section>
@endsection


@section('require-script')

@endsection



