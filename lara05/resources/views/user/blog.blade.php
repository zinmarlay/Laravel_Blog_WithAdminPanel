@extends('user/layouts/app')
@section('main-content')
  <section class="resume-section p-3 p-lg-5 d-flex justify-content-center" id="experience">
      <div class="w-100">
        <h2 class="mb-5">{{$category->name}}</h2>

       <?php 
          $categoryPaginate=$category->posts()->orderBy('id','desc')->paginate(2);
        ?>

        @foreach($categoryPaginate as $post)
       <!-- posts means from Category model function name -->
       
        <div class="resume-item d-flex flex-column flex-md-row justify-content-between mb-5">
          <div class="resume-content">
           <a href="{{route('post',$post->id)}}"><h3 class="mb-0">{{$post->title}}</h3></a>
            <p>{!!str_limit($post->description,$limit=200)!!}</p>
          </div>
          <div class="resume-date text-md-right">
            <span class="text-primary">{{$post->created_at->diffForHumans()}}</span>
          </div>
        </div>
       

       @endforeach      

        {{$categoryPaginate->links()}}

      </div>

    </section>
@endsection