@extends('user/layouts/app')

@section('fb-meta')
<meta property="og:url"           content="{{URL::current()}}" />
  <meta property="og:type"          content="website" />
  <meta property="og:title"         content="{{$post->title}}" />
  <meta property="og:description"   content="{{$post->descrption}}" />
  <meta property="og:image"         content="{{$post->image}}" />
@endsection

@section('main-content')
 <section class="resume-section p-3 p-lg-5 d-flex align-items-center" id="about">
      <div class="w-100">
        <h1 class="mb-0">{{$post->title}}</h1>
          <div class="subheading mb-3">
            <a href="{{route('blog',$post->category_id)}}">
            {{$post->category->name}}
          </a>
          </div>
       
          <div class="fb-like" data-href="{{URL::current()}}" data-width="" data-layout="button_count" data-action="like" data-size="large" data-show-faces="true" data-share="true"></div>
       

        <div class="lead mb-3">{{$post->created_at->diffForHumans()}}</div>
         <p class="lead mb-5"><img src="{{$post->image}}" alt="" class="w-100"></p>
        <p class="lead mb-5">{!!$post->description!!}</p>  
        <div class="fb-comments" data-href="{{URL::current()}}" data-width="" data-numposts="5"></div>     
      </div>
    </section>
@endsection