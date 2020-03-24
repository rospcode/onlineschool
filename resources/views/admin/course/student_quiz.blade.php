<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Responsive admin dashboard and web application ui kit. Sidebar is the main navigation for most of admin templates and web apps.">
    <meta name="keywords" content="sidebar, iconic">

    <title></title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,500,300i" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('homee/assets/css/core.min.css') }}" rel="stylesheet">
    <link href="{{ asset('homee/assets/css/app.min.css') }}" rel="stylesheet">
    <link href="{{ asset('homee/assets/css/style.min.css') }}" rel="stylesheet">


    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" >
    <link href="https://cdn.jsdelivr.net/gh/lykmapipo/themify-icons@0.1.2/css/themify-icons.css" rel="stylesheet" />

    <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>


    <!-- Favicons -->
    <link rel="apple-touch-icon" href="favicon-96x96.png">
    <link rel="icon" href="favicon-96x96.png">

    <style>
    html, body {
  height: 100%;
  margin: 0;
}
.footer,
.push {
  height: 50px;
}
    .bottom__container {
      max-width: 1200px;
      margin: auto;
      display: flex;
        justify-content: space-between;
      align-items: center;
  }

  .progress {
      width: 40%;
      height: 10px;
      position: relative;
      border-radius: 5px;
    overflow:hidden;
      background-color: #ecedf5;
  }
  .progress__inner {
      position: absolute;
      top: 0;
      border-radius: 5px;
      height: 100%;
      left: 0;
      width: 0%;
      background-color: #5861af;
    transition:.4s width linear
  }

  .navigation__btn path{
    fill:#A7AACB
  }
  .navigation {
      display: flex;
      align-items: center;
  }

  .navigation__btn {
      display: flex;
      align-items: center;
      width: 44px;
      border: 1px solid #A7AACB;
      justify-content: center;
      height: 44px;
  }

  .navigation__btn--left{
    border-top-left-radius:6px;
      border-bottom-left-radius:6px
  }

  .navigation__btn--right{
    border-top-right-radius:6px;
      border-bottom-right-radius:6px
  }

  .quiz__question{
    font-weight:900;
    letter-spacing:1px;
      margin-top: 0;
      font-size: 34px;
      margin-bottom: 50px;
  }

  .container {
      display: flex;
      height: calc(100% - 74px);
      width: 100%;
      align-items: center;
      justify-content: center;
      padding: 15px 10px;
  }
  .answer:first-of-type{
    margin-right:15px;
  }
  .answer__input {
      appearance: none;
      -moz-appearance: none;
      -webkit-appearance: none;
      width: 1px;
      height: 1px;
      position: absolute;
    outline:none !important;
  }

  .answer__label {
      width: 140px;
      border: 1px solid #A7AACB;
      display: inline-block;
      border-radius: 6px;
      padding: 0px 15px;
    padding-left:55px;
    line-height: 56px;
      font-size: 15px;
    color: #A7AACB;
    text-align:left;
      font-weight: 600;
  }

  .answer {
      display: inline-block;
    margin-right:10px;
  }



  .quiz__step {
      text-align: center;
  }

  .answer__input:checked + .answer__label{
    border-color:#5861af;
    color:#14152C;
    box-shadow: 0px 0px 1px 4px rgba(88,97,175, 0.2)
  }

  .answer__input:checked + .answer__label .answer__tick{
    opacity:1;
    visibility:visible;
  }

  .answer__char {
      line-height: 24px;
      display: inline-block;
      width: 26px;
      text-align: center;
      font-size: 13px;
      border-radius: 4px;
      color: #c8cae0;
      border: 1px solid #c8cae0;
      font-weight: 600;
      vertical-align: middle;
      margin-right: 15px;
  }
  .answer__tick {
      display: inline-block;
      vertical-align: middle;
      background-color: #5861af;
      margin-left: 20px;
      line-height: 14px;
      border-radius: 50%;
      padding: 4px;
    opacity:0;
    visible:hidden;
  }

  .answer__tick path{
    fill:#fff
  }
  .quiz__inner {
      max-width: 800px;
      display: flex;
      flex-wrap: wrap;
      justify-content: center;
  }

  .quiz__step:not(.quiz__step--current){
    visibility:hidden;
    opacity:0;
    display:none;
  }
  .question__emoji{
    font-size:45px;
    margin-bottom:15px;
        display: inline-block;
      margin-right: 15px;
  }
  .navigation__btn--disabled {
      opacity: 0.4;
  }
  .submit__container {
      margin-top: 25px;
  }
  .submit {
      background-color: #5861af;
      line-height: 50px;
      display: inline-block;
      border-radius: 25px;
      padding: 0 15px;
      font-size: 13px;
      text-decoration: none;
      color: #fff;
      letter-spacing: 1px;
      box-shadow: 0px 6px 11px rgba(88,97,175, 0.6);
      min-width: 130px;
      font-weight: 700;
      text-transform: uppercase;
  }

  .thanks__tick {
      line-height: 50px;
      width: 50px;
      font-size: 25px;
      color: #fff;
      background-color: #5861af;
      border-radius: 50%;
      display: inline-block;
      text-align: center;
  }
  .thanks__title {
      font-weight: 900;
      letter-spacing: 1px;
      margin-top: 15px;
      text-align: center;
      font-size: 40px;
  }
  .thanks{
    text-align:center;
  }
</style>
  </head>

  <body>

<div class="container">

  <form class="quiz">
    <div class="quiz__inner">
    <div data-question="1" class="quiz__step--1 quiz__step--current quiz__step">
      <div class="question__emoji"> </div>
      <h1 class="quiz__question">Random Question 1</h1>
      <div class="answer">
        <input data-char="65" class="answer__input" type="radio" id="smoke_yes" name="smoke" value="Yes">
        <label  class="answer__label" for="smoke_yes">Yes</label>
      </div>
      <div class="answer">
        <input data-char="66" class="answer__input" type="radio" id="smoke_no" name="smoke" value="No">
        <label class="answer__label" for="smoke_no">No</label>
      </div>
    </div>
<div data-question="2" class="quiz__step--2 quiz__step">
  <div class="question__emoji"></div>
      <h1 class="quiz__question">Random Question 2</h1>
      <div class="answer">
        <input  class="answer__input" type="radio" id="pizza_yes" name="pizza" value="Yes">
        <label  class="answer__label" for="pizza_yes">Yes</label>
      </div>
      <div class="answer">
        <input class="answer__input" type="radio" id="pizza_no" name="pizza" value="No">
        <label class="answer__label" for="pizza_no">No<div class="answer__tick">
    <svg width="14" height="14" viewBox="0 0 24 24">
        <path d="M21,7L9,19L3.5,13.5L4.91,12.09L9,16.17L19.59,5.59L21,7Z"></path>
    </svg>
</div></label>
      </div>
    </div>
<div data-question="3" class="quiz__step--3 quiz__step">
  <div class="question__emoji"></div>
      <h1 class="quiz__question">Random Question 3</h1>
      <div class="answer">
        <input  class="answer__input" type="radio" id="aliens_yes" name="aliens" value="Yes">
        <label  class="answer__label" for="aliens_yes">Yes</label>
      </div>
      <div class="answer">
        <input class="answer__input" type="radio" id="aliens_no" name="aliens" value="No">
        <label class="answer__label" for="aliens_no">No<div class="answer__tick">
    <svg width="14" height="14" viewBox="0 0 24 24">
        <path d="M21,7L9,19L3.5,13.5L4.91,12.09L9,16.17L19.59,5.59L21,7Z"></path>
    </svg>
</div></label>
      </div>

    </div>
    <div data-question="4" class="quiz__step--4 quiz__step">
      <div class="question__emoji"></div>
          <h1 class="quiz__question">Random Question 3</h1>
          <div class="answer">
            <input  class="answer__input" type="radio" id="aliens_yess" name="aliens" value="Yes">
            <label  class="answer__label" for="aliens_yess">Yes</label>
          </div>
          <div class="answer">
            <input class="answer__input" type="radio" id="aliens_noo" name="aliens" value="No">
            <label class="answer__label" for="aliens_noo">No<div class="answer__tick">
        <svg width="14" height="14" viewBox="0 0 24 24">
            <path d="M21,7L9,19L3.5,13.5L4.91,12.09L9,16.17L19.59,5.59L21,7Z"></path>
        </svg>
    </div></label>
          </div>

        </div>
<div data-question="5" class="quiz__step--5 quiz__step quiz__summary">

      <h1 class="quiz__question">Summary</h1>
  <div id="summary"></div>
              <div class="submit__container">
      <a href="#" class="submit">Submit</a>
    </div>
    </div>
      </div>
  </form>
</div>

<footer class="bottom">
  <section class="bottom__container">
    <div class="progress">
    <div class="progress__inner"></div>
  </div>
  <div class="navigation">
    <div class="navigation__btn navigation__btn--left"><svg width="20" height="20" viewBox="0 0 24 24">
    <path d="M20,11V13H8L13.5,18.5L12.08,19.92L4.16,12L12.08,4.08L13.5,5.5L8,11H20Z"></path>
</svg></div>
    <div class="navigation__btn navigation__btn--right"><svg width="20" height="20" viewBox="0 0 24 24">
  <path d="M4,11V13H16L10.5,18.5L11.92,19.92L19.84,12L11.92,4.08L10.5,5.5L16,11H4Z"></path>
</svg></div>
  </div>
  </section>
</footer>

      <!-- Scripts -->
      <script src="{{ asset('homee//assets/js/core.min.js') }}"></script>
      <script src="{{ asset('homee/assets/js/app.min.js') }}"></script>
      <script src="{{ asset('homee/assets/js/script.min.js') }}"></script>
      <script type="text/javascript">
      const numberSteps = $('.quiz__step').length - 1;
let disableButtons = false;
const tick = '<div class="answer__tick"><svg width="14" height="14" viewBox="0 0 24 24"><path d="M21,7L9,19L3.5,13.5L4.91,12.09L9,16.17L19.59,5.59L21,7Z"></path></svg></div>';
let thanks = '<div class="thanks"><div class="thanks__tick">✔ </div><h1 class="thanks__title">Thank you!</h1></div>';

$('.answer__input').on('change', function(e) {
    if($(this).next().children('.answer__tick').length>0){
      return false;
      alert("check");
    }
  $(this).next().append(tick)
});


$('.navigation__btn--right').click(function(e){
let currentIndex = Number($('.quiz__step--current').attr('data-question'));
  if($('.quiz__step--current input:checked').length == 0){
     //console.log('input empty');
     return false;
 }
  //console.log({'currentIndex': currentIndex, 'numberSteps': numberSteps-1})
  if(currentIndex == numberSteps + 1 || disableButtons==true){
    //console.log('last')
    return false;
  }
  if(currentIndex + 1 == numberSteps + 1 ){
    $(this).addClass('navigation__btn--disabled');
  }
  if(currentIndex == numberSteps){
  $('.summary__item').remove();
    $('.quiz__step:not(.quiz__summary)').each(function(index, item){
      console.log(item)
      let icon = $(item).children('.question__emoji').text()
      let answer = $(item).children('.answer').find('input:checked').val();
      let node = '<div class="summary__item"><div class="question__emoji">'+icon+'</div>'+answer+'</div>'
      $('#summary').append(node)
    })
  }
  const percentage = (currentIndex * 100)/ numberSteps;
  $('.progress__inner').width(percentage+ '%');
  console.log('input ok')
  $('.quiz__step--current').hide('300');
  $('.quiz__step--current').removeClass('quiz__step--current');
  $('.quiz__step--'+(currentIndex+1)).show('300').addClass('quiz__step--current');
  currentIndex = Number($('.quiz__step--current').attr('data-question'));
   if(currentIndex > 1 ){
    $('.navigation__btn--left').removeClass('navigation__btn--disabled');
  }
});
/*
function keypressEvent(e){
    let key = e.which || e.keyCode;

  if(key==65 || key==66){
    $('.quiz__step--current input[data-char="'+key+'"]').prop('checked', true).change();
    console.log($('.quiz__step--current input[data-char="'+key+'"]'))
   // $('.quiz__step--current input[data-char="'+key+'"] + .answer__label').change();
  }
}
*/



$('.navigation__btn--left').click(function(e){
let currentIndex = Number($('.quiz__step--current').attr('data-question'));

  console.log({'currentIndex': currentIndex, 'numberSteps': numberSteps-1})
  if(currentIndex == 1 || disableButtons==true){
    console.log('first')
    $(this).addClass('navigation__btn--disabled');
    return false;
  }


  $('.navigation__btn--right').removeClass('navigation__btn--disabled')

  console.log('input ok')
  $('.quiz__step--current').hide('300');
  $('.quiz__step--current').removeClass('quiz__step--current');
  $('.quiz__step--'+(currentIndex-1)).show('300').addClass('quiz__step--current');
  currentIndex = Number($('.quiz__step--current').attr('data-question'));
  if(currentIndex == 1 ){
    $(this).addClass('navigation__btn--disabled');
  }
    const percentage = ((currentIndex-1)  * 100)/ numberSteps+1;
  $('.progress__inner').width(percentage+ '%');
$('.quiz__step--current').keyup(keypressEvent);
});
$('.submit').click(function(e){
  e.preventDefault();
  $('.quiz').remove();
  $(thanks).appendTo('.container');
  disableButtons=true;
  $('.navigation__btn').addClass('navigation__btn--disabled')
})
</script>



  </body>


</html>
