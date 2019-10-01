@extends('admin/layouts/app')

@section('require-css')

@endsection

@section('main-content')
<section class="content">
	<div class="container-fluid">
		<div class="block-header">
			<span class="m-r-10">Create Category</span>
			
		</div>

		<div class="row clearfix">
			<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
				<div class="card">
					<div class="header">
						<h2>Create</h2>
					</div>
					<div class="body">

						<form action="{{route('category.store')}}" method="post">						
							{{csrf_field()}}

							<label for="email_address">Name</label>
							<div class="form-group">
                                 <div class="form-line">
                                        <input type="text" id="email_address" class="form-control" placeholder="Enter Category" name="cname">
                                  </div>
                             </div>                            
                             <button type="submit" class="btn btn-primary m-t-15 waves-effect">Create</button>
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



