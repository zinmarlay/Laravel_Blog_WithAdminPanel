@extends('admin/layouts/app')

@section('require-css')
<link rel="stylesheet" href="//cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css">
@endsection

@section('main-content')

<section class="content">
	<div class="container-fluid">
		
		<div class="block-header">
			<span class="m-r-10">Category</span>
			<a type="button" class="btn bg-blue btn-circle waves-effect waves-circle waves-float" href="{{route('category.create')}}"><i class="material-icons">add</i>
			</a>
		</div>

		<div class="row clearfix">
			<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
				<div class="card">
					<div class="header">
						<h2>All Category</h2>
					</div>
					<div class="body">
						<table id="myTable">
							<thead>
								<tr>
									<th>ID</th>
									<th>Title</th>
									<th>Edit</th>
									<th>Delete</th>
								</tr>
							</thead>
							<tbody>
								@foreach($categories as $category)
								<tr>
									<td>{{$loop->index+1}}</td>
									<td>{{$category->name}}</td>
									<td><a href="{{route('category.edit',$category->id)}}" type="button" class="btn bg-blue btn-circle waves-effect waves-circle waves-float">
                                    <i class="material-icons">edit</i>
                                </a></td>
									<td>
										<form id="delete-form-{{$category->id}}" style=
											"display:none;" action="{{route('category.destroy',$category->id)}}" method="post">

											{{csrf_field()}}
											{{method_field('DELETE')}}

										</form>

										<a href="" onclick="

											if(confirm('Are you sure want to delete this?')){
												event.preventDefault();
												document.getElementById('delete-form-{{$category->id}}'
												).submit();

											}else{
												event.preventDefault();
											}"										
										type="button" class="btn bg-red btn-circle waves-effect waves-circle waves-float">

                                   		 <i class="material-icons">clear</i>

                               			 </a>

                           			 </td>
								</tr>
								@endforeach


							</tbody>
						</table>
					</div>
				</div>
			</div>
		</div>

	</div>
</section>
@endsection


@section('require-script')
<script type="text/javascript" src="//cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
<script type="text/javascript">	
	$('#myTable').DataTable();
</script>
@endsection



