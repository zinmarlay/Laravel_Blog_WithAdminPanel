@extends('admin/layouts/app')

@section('require-css')
	  <link href="{{asset('admin/plugins/bootstrap-select/css/bootstrap-select.css')}}" rel="stylesheet" />
@endsection

@section('main-content')
<section class="content">
	<div class="container-fluid">
		<div class="block-header">
			<span class="m-r-10">Create Posts</span>
			
		</div>

		<div class="row clearfix">
			<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
				<div class="card">
					<div class="header">
						<h2>Create</h2>
					</div>
					<div class="body">
						<form action="{{route('post.store')}}" method="post">

							{{csrf_field()}}
							
							<label for="email_address">Title</label>
							<div class="form-group">
                                 <div class="form-line">
                                        <input type="text" name="title" id="email_address" class="form-control" placeholder="Enter post title">
                                  </div>
                             </div>

                             <div class="form-group">
                             	<label for="email_address">Select Category</label>
                             	<div class="form-group">
                             	
                             	<select class="form-control show-tick" name="category">               
                             			@foreach($categories as $category)               			          
	                             		<option value="{{$category->id}}">
	                             		{{$category->name}}
	                             		</option>
	                             		
	                             		@endforeach
	                                    
                             	</select>
                             	</div>
                             </div>

                              <div class="input-group">
								   <span class="input-group-btn">
								     <a id="lfm" data-input="thumbnail" data-preview="holder" class="btn btn-primary">
								       <i class="fa fa-picture-o"></i> Browse
								     </a>
								   </span>
								   <input id="thumbnail" class="form-control" type="text" name="filepath">
							</div>
							<img id="holder" style="margin-top:15px;max-height:100px;">

                             <div class="form-group">
                             	<textarea id="MyTextarea" name="description"></textarea>
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
<script src="//cdn.ckeditor.com/4.6.2/standard/ckeditor.js"></script>

<!-- WYSIWYG Editor Integration -->
<script src="/vendor/laravel-filemanager/js/stand-alone-button.js"></script> 
<script src="/vendor/laravel-filemanager/js/lfm.js"></script>
<!-- -->

 <script>
	  var options = {
	    filebrowserImageBrowseUrl: '/laravel-filemanager?type=Images',
	    filebrowserImageUploadUrl: '/laravel-filemanager/upload?type=Images&_token=',
	    filebrowserBrowseUrl: '/laravel-filemanager?type=Files',
	    filebrowserUploadUrl: '/laravel-filemanager/upload?type=Files&_token='
	  };	
        CKEDITOR.replace( 'MyTextarea',options);
         $('#lfm').filemanager('file');// this need for WYSIWYG Editor Integration
 </script>
@endsection



