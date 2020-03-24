@extends('home.layouts.master')
@section('page')
Results for search
 @endsection

 @section('searchname')
{{ $search_name }}
 @endsection

 @section('style')
 <link rel="stylesheet" href="{{ asset('assets/css/uikit.css') }}">
       <link rel="stylesheet" href="{{ asset('assets/css/main.css') }}">
       <!-- font awesome -->
       <link rel="stylesheet" href="{{ asset('assets/css/fontawesome.css') }}">
       <!--  javascript -->
       <script src="{{ asset('assets/js/simplebar.js') }}"></script>
       <script src="{{ asset('assets/js/uikit.js') }}"></script>
       <style>
       [dir="ltr"] .container, [dir="ltr"] .container-fluid {
    padding-right: 1.5rem;
    padding-left: 1.5rem;
}
</style>
       @endsection

 @section('content')
 <section id="gallery-view" >

 <div class="">

            <ul class="uk-switcher switcher-container">
                <li>
                    <div class="topic1 hero-bg">
                        <div uk-grid>
                            <div class="uk-width-1-2@m">
                                <h1 class="uk-animation-fade"> Search Results  </h1>
                                <p>we found {{ count($getcourses) }} results from your search: '{{ $search_name }}' </p>
                            </div>
                            <div class="uk-width-1-2@m uk-visible@m">

                            </div>
                        </div>
                    </div>
                </li>

                    <div class="topic1 hero-bg">
                        <h1> Search Results </h1>
                        <h6>{{ $search_name }} </h6>
                    </div>
                </li>



            </ul>
            <!-- mobile catagory button-->
            <button class="uk-button uk-hidden@m  mobile-catagory-button" type="button" uk-toggle="target: #tabs-moible; cls: tabs-moible"> Open subcatagory </button>
            <ul class="uk-subnav uk-subnav-pill tabs-moible-hidden" uk-switcher="connect: .switcher-container" id="tabs-moible">
                <li class="uk-active">
                    <a href=""> Search </a>
                </li>




            </ul>
            <ul class="uk-switcher switcher-container">



                <li>
                    <!--  Web development -->
                    <div class="uk-container">
                        <div class="uk-clearfix boundary-align">
                            <div class="uk-float-left section-heading none-border">
                                <h2>Search results</h2>
                                <p>Browse for searched courses</p>
                            </div>

                        </div>
                        <!-- Filter course  -->


                        <div class="uk-child-width-1-2@s uk-child-width-1-3@m uk-grid-match uk-margin" uk-scrollspy="cls: uk-animation-slide-bottom-small; target: > div ; delay: 200" uk-grid>



                           @foreach($getcourses as $getcourse)

                               <!-- Course   -->
                            <div>
                                <div class="uk-card-default uk-card-hover uk-card-small Course-card uk-inline-clip uk-transition-toggle" tabindex="0">


                                    <a href="/view/course/{{$getcourse->id}}" class="uk-link-reset">
                                        <img src="{{ asset('img/courses') }}/{{ $getcourse->course_img}}" class="course-img">
                                        <div class="uk-card-body">
                                            <h4>
                           {{ $getcourse->course_title }}
                           </h4>
                                            <p>@if(strlen($getcourse->course_notes) > '150')
                                                {!! substr($getcourse->course_notes, 0,40) !!}...
                                                @else
                                                {!! $getcourse->course_notes !!}
                                                @endif
                                            </p>
                                            <p>
                                                 <strong>Duration:</strong> {{$getcourse->course_duration}}
                                            </p>
                                            <p>
                                                 <strong>Time:</strong> {{ $getcourse->course_time}}
                                            </p>
                                            <hr class="uk-margin-remove-top">
                                            <div class="uk-clearfix">
                                              <div class="uk-float-left">

                                                 <a href="/view/course/{{ $getcourse->id}}" class="btn btn-success">View More</a>

                                              </div>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            </div>
                            @endforeach
                        </div>
                    </div>
                </li>
            </ul>
        </div>
 </section>










@endsection
