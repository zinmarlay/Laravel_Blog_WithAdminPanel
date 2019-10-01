@extends('user/layouts/app')
@section('main-content')
 <section class="resume-section p-3 p-lg-5 d-flex align-items-center" id="about">
      <div class="w-100">
        <h1 class="mb-0">{{$home->title}} </h1>
        <div class="subheading mb-5">{{$home->address}} 
          <a href="mailto:name@email.com">{{$home->email}} </a>
        </div>
        <p class="lead mb-5">{{$home->description}} </p>
        <div class="social-icons">
          <a href="{{$home->linkedin}} ">
            <i class="fab fa-linkedin-in"></i>
          </a>
          <a href="{{$home->github}} ">
            <i class="fab fa-github"></i>
          </a>
          <a href="{{$home->twitter}} ">
            <i class="fab fa-twitter"></i>
          </a>
          <a href="{{$home->facebook}} ">
            <i class="fab fa-facebook-f"></i>
          </a>
        </div>
      </div>
    </section>
@endsection