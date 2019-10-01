@extends('admin/layouts/app')

@section('require-css')

@endsection

@section('main-content')
<section class="content">
	<div class="container-fluid">
		<div class="block-header">
			<span class="m-r-10">File Manager</span>
			
		</div>

		<div class="row clearfix">
			<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
				<iframe src="/laravel-filemanager" style="width: 100%; height: 500px; overflow: hidden; border: none;"></iframe>

			</div>
		</div>

	</div>
</section>
@endsection


@section('require-script')

@endsection



