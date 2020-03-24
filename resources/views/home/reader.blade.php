<html lang="en">


<head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="shortcut icon" href="{{ asset('video/assets/images/favicon.jpg') }}">
        <meta name="description" content="">
        <title>Course View</title>

        <!-- Your stylesheet-->
        <link rel="stylesheet" href="{{ asset('video/assets/css/uikit.css') }}">
        <link rel="stylesheet" href="{{ asset('video/assets/css/main.css') }}">
        <!-- font awesome -->
        <link rel="stylesheet" href="{{ asset('video/assets/css/fontawesome.css') }}">
        <!--  javascript -->
        <script src="{{ asset('video/assets/js/simplebar.js') }}"></script>
        <script src="{{ asset('video/assets/js/uikit.js') }}"></script>

        <meta name="csrf-token" content="{{ csrf_token() }}">

        <style>
        [class~="night-mode"] [class~="uk-background-success"], [class~="night-mode"] [class~="course-card"] h4, [class~="night-mode"] [class~="side-menu-slide"], [class~="night-mode"] [class~="tm-show-on-mobile"], [class~="night-mode"] [class~="course-badge"], .night-mode .side-nav .side-nav-bg, [class~="night-mode"] [class~="tm-mobile-user-close-icon"], [class~="night-mode"] [class~="uk-background-grey"] {
    background:
    #0c1733 !important;
}

[class~="night-mode"] [class~="uk-background-default"], [class~="night-mode"] [class~="uk-section-danger"], .night-mode .uk-background-primary, .night-mode .uk-background-danger, .night-mode .uk-background-secondary, [class~="night-mode"] [class~="uk-background-muted"], [class~="night-mode"] [class~="uk-section-success"], [class~="night-mode"] [class~="uk-section-grey"] {
    background:
    #0c1733 !important;
}

[class~="night-mode"] [class~="uk-offcanvas-bar"], [class~="night-mode"] [class~="uk-card-default"]:hover {
    background:
    #0c1733 !important;
}
[class~="night-mode"] [class~="video-list"] [class~="uk-active"] {
    background:
    #2d80d3;
}

.btn-success{
  background-color: #15c377;

border-color: #15c377;

color: #fff;

font-size: 14px;

padding: 0px 16px;

line-height: inherit;

color: #8b95a5;

letter-spacing: 1px;

border-radius: 2px;

background-color:
#fff;

border-color: #ebebeb;

outline: none !important;

-webkit-transition: 0.15s linear;

transition: 0.15s linear;

display: inline-block;

font-weight: 400;

color:
#212529;

text-align: center;

vertical-align: middle;

-webkit-user-select: none;

-moz-user-select: none;

-ms-user-select: none;

user-select: none;

border: 1px solid
transparent;

    border-top-color: transparent;
    border-right-color: transparent;
    border-bottom-color: transparent;
    border-left-color: transparent;

border-top-color:
transparent;

border-right-color:
transparent;

border-bottom-color:
transparent;

border-left-color:
transparent;

font-size: 1rem;

border-radius: .25rem;

transition: color .15s ease-in-out, background-color .15s ease-in-out, border-color .15s ease-in-out, box-shadow .15s ease-in-out;
}

.video-responsive{
  width: 90% !important;
margin: 0px auto !important;
}
</style>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-visibility/1.0.11/jquery-visibility.min.js"></script>
    </head>
    <body class="night-mode">
        <!-- Flash Message -->

        <div class="tm-course-lesson">
            <!-- mobile-sidebar  -->
            <i class="fas fa-video icon-large tm-side-right-mobile-icon uk-hidden@m" uk-toggle="target: #filters"></i>
            <div class="uk-grid-collapse" id="course-fliud" uk-grid>
                <div class="uk-width-3-4@m uk-margin-auto">
                    <header class="tm-course-content-header uk-background-grey">
                        <a href="" class="back-to-dhashboard uk-margin-small-left" uk-tooltip="title: Back to Course Dashboard  ; delay: 200 ; pos: bottom-left ;animation:uk-animation-scale-up ; offset:20"> {{ $course->course_title }} > Resources</a>

                    </header>
                    <!--Course-side icon make Hidden sidebar -->

                    <i class="fas fa-angle-right icon-large uk-float-right tm-side-course-icon  uk-visible@m" uk-toggle="target: #course-fliud; cls: tm-course-fliud"></i>
                    <!--Course-side active icon -->
                    <i class="fas fa-angle-right icon-large uk-float-right tm-side-course-active-icon uk-visible@m" uk-toggle="target: #course-fliud; cls: tm-course-fliud" uk-tooltip="title: Open sidebar  ; delay: 200 ; pos: bottom-right ;animation:uk-animation-scale-up ; offset:20"></i>


                    <a href="/u/view/course/resources/{{ $course->course_link }}" class="btn btn-success btn-sm uk-float-right tm-side-course-icon  uk-visible@m">Go Back</a>
                    <!-- PreLoader -->
                    <div id="spinneroverlay">
                        <div class="spinner"></div>
                    </div>
                    <ul id="component-nav" class="uk-switcher uk-position-relative uk-padding">
                          <?php $count_ins = 0; ?>
                         @foreach($get_information as $lesson)

                          @if($lesson->lesson_type == "video")
                          <li data-course-id="{{$lesson->id}}" data-video_duration-id="{{ $count_ins }}">
                              <div class="navigation-controls">
                                  <a href="#" class="previous uk-animation-fade" uk-switcher-item="previous" uk-tooltip="title: Previous Video  ; pos: right ;animation:uk-animation-scale-up ; offset:20"><i class="fa fa-angle-left" style="font-size: 20px; color: black;"></i> </a>
                                  <a href="#" class="next " uk-switcher-item="next" id="next" uk-tooltip="title: Next Video  ; pos: left ;animation:uk-animation-scale-up ; offset:20"><i class="fa fa-angle-right" style="font-size: 20px; color: black;"></i> </a>
                              </div>
                              <div class="video-responsive">
                                  <video controls src="http://capabilitylegal.com/logoreveal.webm" frameborder="0" uk-video="autoplay: false" allowfullscreen uk-responsive id="vid_play<?php echo $count_ins; ?>"></video>
                              </div>
                          </li>


                          @else

                          <li data-course-id="{{$lesson->id}}" data-video_duration-id="{{ $count_ins }}">
                              <div class="navigation-controls">
                                  <a href="#" class="previous uk-animation-fade" uk-switcher-item="previous" uk-tooltip="title: Previous Video  ; pos: right ;animation:uk-animation-scale-up ; offset:20"><i class="fa fa-angle-left" style="font-size: 20px; color: black;"></i> </a>
                                  <a href="#" class="next " uk-switcher-item="next" id="next" uk-tooltip="title: Next Video  ; pos: left ;animation:uk-animation-scale-up ; offset:20"><i class="fa fa-angle-right" style="font-size: 20px; color: black;"></i> </a>
                              </div>
                              <div class="video-responsive">
                                  <iframe controls src="{{ asset('Capability.pdf')}}" frameborder="0" uk-video="autoplay: false" allowfullscreen uk-responsive id="vid_play<?php echo $count_ins; ?>"></iframe>
                              </div>
                          </li>





                          @endif
  <?php $count_ins++; ?>


                        @endforeach






                    </ul>
                </div>
                <div class="uk-width-1-4@m uk-offcanvas tm-filters uk-background-default tm-side-course uk-animation-slide-right-medium uk-overflow-hidden" id="filters" uk-offcanvas="overlay: true; container: false; flip: true">
                    <div class="uk-offcanvas-bar uk-padding-remove uk-preserve-color">
                        <!-- Sidebar menu-->
                        <ul class="uk-child-width-expand uk-tab tm-side-course-nav uk-margin-remove uk-position-z-index" uk-switcher="animation: uk-animation-slide-right-medium, uk-animation-slide-left-small" style="box-shadow: 0px 0px 7px 1px gainsboro;" uk-switcher>
                            <li class="uk-active">
                                <a href="#" uk-tooltip="title: Course Videos ; delay: 200 ; pos: bottom-left ;animation:uk-animation-scale-up"> <i class="fas fa-archive icon-medium"></i>  Contents </a>
                            </li>

                        </ul>
                        <!-- Sidebar contents -->
                        <ul class="uk-switcher">
                            <!-- Course Video tab  -->
                            <li>
                                <div class="demo1" data-simplebar>
                                    <ul class="course-list video-list" uk-switcher="connect: #component-nav; animation: uk-animation-slide-right-small, uk-animation-slide-left-medium">
                                      <?php $count_is = 0; ?>
                                      @foreach($get_information as $lesson)

                                        <!--  Lesson one -->
                                          @if($lesson->lesson_type == "video")
                                        <li>
                                            <a href="#">


                                                <img src="{{ asset('word-logo.png') }} "  style="width: 100px; height: 60px;"  alt="">
                                                <i class="fas fa-play-circle play-icon"></i>
                                                <span class="now-playing">  Now Playing </span>
                                                <span class="uk-text-truncate">{{ $lesson->lesson_title }}</span>
                                                <time id="time<?php echo $count_is; ?>">{{ $lesson->duration}}</time>
                                            </a>



                                        <script>



                                        document.getElementById("vid_play<?php echo $count_is; ?>").onplaying = function() {

                                            savewatch("Played");

                                        };


                                        document.getElementById("vid_play<?php echo $count_is; ?>").onpause = function() {
                                             savewatch("Paused");
                                        };

                                        document.getElementById("vid_play<?php echo $count_is; ?>").onended = function() {

                                             savewatch("End");

                                            document.getElementById("next").click();
                                        };

                                        var vid = document.getElementById("vid_play<?php echo $count_is; ?>");
                                        vid.currentTime = {{$lesson->time}};



                                        var vid = document.getElementById("vid_play<?php echo $count_is; ?>");
                                        vid.onloadedmetadata = function() {
                                          var hold = vid.duration;



                                          var numdays = Math.floor(hold / 86400);

                                          var numhours = Math.floor((hold % 86400) / 3600);

                                          var numminutes = Math.floor(((hold % 86400) % 3600) / 60);

                                          var numseconds = ((hold % 86400) % 3600) % 60;


                                          if(Math.round(numhours) == 0 && Math.round(numminutes) != 0){
                                          document.getElementById("time<?php echo $count_is; ?>").innerHTML =   Math.round(numminutes) + "min ";
                                          }else if(Math.round(numhours) == 0 && Math.round(numminutes) == 0 && Math.round(numseconds) != 0){
                                            document.getElementById("time<?php echo $count_is; ?>").innerHTML = Math.round(numseconds) + "Sec ";
                                          }else{
                                            document.getElementById("time<?php echo $count_is; ?>").innerHTML =  Math.round(numhours) + "hr " +  Math.round(numminutes) + "min ";
                                          }






                                        };




                                        </script>
                                            </li>

                                            @else


                                            <li class="reader" data-id="{{ $lesson->id }}" >
                                                <a href="#">


                                                    <img src="{{ asset('word-logo.png') }} "  style="width: 100px; height: 60px;"  alt="">
                                                    <i class="fas fa-file play-icon"></i>
                                                    <span class="now-playing">  Reading </span>
                                                    <span class="uk-text-truncate">{{ $lesson->lesson_title }}</span>
                                                    <time id="time<?php echo $count_is; ?>">1Min</time>
                                                </a>
                                              </li>










                                        @endif
                                                  <?php $count_is++; ?>

                                        @endforeach

                                    </ul>
                                </div>


                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!-- app end -->

        <script>

        $.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
});



/**
        $(document).bind("mouseleave", function(e) {
var data_video_id = $(".uk-active").data("video_duration-id");
var lesson_id = $(".uk-active").data("course-id");
var video_leaving = $("#vid_play"+data_video_id);

   $.ajax({
     type: "POST",
     url: "{{ route('save.watch') }}",
     data: {time: video_leaving[0].currentTime, lesson_id: lesson_id, csrf: $('meta[name="csrf-token"]').attr('content')},
     success: function(response){
        console.log(response);
     }, error: function(errors){
      //var error = errors.responseJSON;

      console.log(errors);
     }
   })

});
**/

$(".reader").click(function(){



var read = $(this).data("id");
     var countDownDate = new Date(new Date().getTime() + 2000);

     // Update the count down every 1 second
     var x = setInterval(function() {

     // Get today's date and time
     var now = new Date().getTime();

     // Find the distance between now and the count down date
     var distance = countDownDate - now;

     // Time calculations for days, hours, minutes and seconds
     var days = Math.floor(distance / (1000 * 60 * 60 * 24));
     var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
     var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
     var seconds = Math.floor((distance % (1000 * 60)) / 1000);




     // If the count down is finished, write some text
     if (distance < 0) {
     clearInterval(x);



     $.ajax({
       type: "POST",
       url: "{{ route('save.watch2') }}",
       data: {time: "1Min", lesson_id: read, type: "Doc", csrf: $('meta[name="csrf-token"]').attr('content')},
       success: function(response){
        if(response == "success"){

        $(".reader").click();
        }
       }, error: function(errors){
           console.log("nop");
       }
     })

   //     window.location = "expired/time";
       }
     }, 1000);


});


$(document).bind("mouseleave", function(e) {
var data_video_id = $(".uk-active").data("video_duration-id");
var lesson_id = $(".uk-active").data("course-id");
var video_leaving = $("#vid_play"+data_video_id);

$(document).on('hide.visibility', function() {

    document.getElementById("vid_play"+data_video_id).pause();
});

});

function savewatch(type){
  var data_video_id = $(".uk-active").data("video_duration-id");
  var lesson_id = $(".uk-active").data("course-id");
  var video_leaving = $("#vid_play"+data_video_id);


     $.ajax({
       type: "POST",
       url: "{{ route('save.watch') }}",
       data: {time: video_leaving[0].currentTime, lesson_id: lesson_id, type: type, csrf: $('meta[name="csrf-token"]').attr('content')},
       success: function(response){
          console.log(response);
       }, error: function(errors){
      var error = errors.responseJSON;

    console.log(errors.responseText);
       }
     })
}




</script>

    </body>

</html>
