//Carousel Interval Customiser
$.fn.carousel.Constructor.prototype.cycle = function (event) {
    
    if (!event) {
        this._isPaused = false;
      }

      if (this._interval) {
        clearInterval(this._interval)
        this._interval = null;
      }

      if (this._config.interval && !this._isPaused) {
          
        var $ele = $('.carousel-item-next');
        var newInterval = $ele.data('interval') || this._config.interval;
        this._interval = setInterval(
          (document.visibilityState ? this.nextWhenVisible : this.next).bind(this),
          newInterval
        );
      }
};


//Back to top Button Animator
$(document).ready(function () {
  $(window).scroll(function () {
    if ($(this).scrollTop() > 700) {
      $('#topBtn,.fa-chevron-up').fadeIn(400);
    } else {
      $('#topBtn,.fa-chevron-up').fadeOut();
    }
  });

  $('#topBtn').click(function () {
    $("html, body").animate({
      scrollTop: 0
    }, 500);
      return false;
  });

});


//FAQ Button Icon Rotate
$(document).ready(function(){
  $("#btn-faq").click(function(){
    $(".rotate").toggleClass("down"); 
   });
});

//Hover over course name expands icon-HomePage
$(document).ready(function(){
  $("#col-ms").hover(function(){
    $("#course-icon-ms").addClass("course-icon-hover");
    $("#course-name-ms").addClass("course-link-hover");
  },function(){
    $("#course-icon-ms").removeClass("course-icon-hover");
    $("#course-name-ms").removeClass("course-link-hover");
  });

  $("#col-callcentre").hover(function(){
    $("#course-icon-callcentre").addClass("course-icon-hover");
    $("#course-name-callcentre").addClass("course-link-hover");
  },function(){
    $("#course-icon-callcentre").removeClass("course-icon-hover");
    $("#course-name-callcentre").removeClass("course-link-hover");
  });

  $("#col-learn").hover(function(){
    $("#course-icon-learn").addClass("course-icon-hover");
    $("#course-name-learn").addClass("course-link-hover");
  },function(){
    $("#course-icon-learn").removeClass("course-icon-hover");
    $("#course-name-learn").removeClass("course-link-hover");
  });
});

/*Contact Form*/
$(document).ready(function(){
  $("#contact-form-link").click(function(){
    $(".queryForm").show();
    $(".contact-form-submit").show();
    $('.query-form').modal({
      backdrop: 'static',
      keyboard: false
    });
  });
});

$(document).ready(function(){
  $(".modal-close").click(function(){
    $(".contactStatus").html('');
    $(".contactName-info").html('');
    $(".contactEmail-info").html('');
    $(".query-info").html('');
  });
});

function sendContact_home(){
  var valid;
  valid = validateContact();
  if(valid) {
    jQuery.ajax({
      url: "send_form_email.php",
      data: 'name='+$(".contactName").val()+'&email='+$(".contactEmail").val()+'&query='+$(".query-box").val(),
      type: "POST",
      success: function(data){
        $(".contactStatus").html(data);
        $(".contactName").val("");
        $(".contactEmail").val("");
        $(".query-box").val("");
        $(".queryForm").hide();
        $(".contact-form-submit").hide();
      },
      error: function(){}
    });
  }
}

function sendContact_sub(){
  var valid;
  valid = validateContact();
  if(valid) {
    jQuery.ajax({
      url: "../send_form_email.php",
      data: 'name='+$(".contactName").val()+'&email='+$(".contactEmail").val()+'&query='+$(".query-box").val(),
      type: "POST",
      success: function(data){
        $(".contactStatus").html(data);
        $(".contactName").val("");
        $(".contactEmail").val("");
        $(".query-box").val("");
        $(".queryForm").hide();
        $(".contact-form-submit").hide();
      },
      error: function(){}
    });
  }
}

function validateContact(){
  var valid = true;
  $("#inputBox").css('background-color','');
  $(".info").html('');
  if(!$(".contactName").val()){
    $(".contactName-info").html("(Required)");
    valid = false;
  }
  else if(!$(".contactName").val().match(/^[A-Za-z .'-]+$/)){
    $(".contactName-info").html("(Invalid Name)");
    valid = false;
  }
  if(!$(".contactEmail").val()){
    $(".contactEmail-info").html("(Required)");
    valid = false;
  }
  if(!$(".contactEmail").val().match(/^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$/)){
    $(".contactEmail-info").html("(Invalid Email Address)");
    valid = false;
  }
  if(!$(".query-box").val()){
    $(".query-info").html("(Required)");
    valid = false;
  }
  else if($(".query-box").val().length < 2){
    $(".query-info").html("(Invalid Query)");
    valid = false;
  }
  return valid;
}

/*Sticky Navbar*/


/*$(document).ready(function(){
  var submenu = $(".sub-menu");
$(".nav-link").focusin(function(){
  $(this).find(submenu).addClass("visible");
});
$(".nav-link").focusout(function(){
  $(this).find(submenu).removeClass("visible");
});
$(".nav-item").hover(function(){
  $(this).find(submenu).addClass("visible");
}, function(){
  $(this).find(submenu).removeClass("visible");
});
});*/


//Contact Form
/*function openForm() {
  document.getElementById("contact-form").style.display = "block";
}

  function closeForm() {
  document.getElementById("contact-form").style.display = "none";
}
*/

/*
$(document).ready(function(){
  var form = $('.form-email');
  $('#email-bottom').click(function(e){
    e.preventDefault();
    $("#email-bottom").css("pointer-events", "none");
    if(form.css('display','none')||form.hasClass('animated fadeOutDownBig')){
      form.css('display','block').removeClass('animated fadeOutDownBig').addClass('animated fadeInUpBig');
    }
  });
  $(".cancel").click(function(e){
    e.preventDefault();
    $("#email-bottom").css("pointer-events", "auto");
    if(form.css('display','block').hasClass('animated fadeInUpBig')){
      form.removeClass('animated fadeInUpBig').addClass('animated fadeOutDownBig');
    }
    else{
      form.removeClass('animated fadeOutDownBig').addClass('animated fadeInUpBig');
    }
  });
});
*/