<div class="uk-section uk-section-primary tm-hero" style="background: #1a91a1; padding-top: 100px;">
    <div class="uk-container-small uk-text-center uk-margin-auto uk-padding-small uk-light">



             <div class="container d-flex flex-column flex-md-row align-items-center text-center text-md-left" style="margin-left: 230px;">
         <img src="{{ asset('graduation.png') }}" class="mr-md-32pt mb-32pt mb-md-0" alt="student" style="width: 110px;">
         <div class="flex mb-32pt mb-md-0" style="margin-left: 16px;">
             <h2 class="text-white mb-0" style="text-transform: uppercase;">{{ auth()->user()->name }} {{ auth()->user()->surname}}</h2>
           <a class="btn btn-outline-white" href="/u/profile" style="margin-top: 20px; padding-top: .5rem;
padding-bottom: .5rem;"> Edit Account </a>
         </div>

     </div>


    </div>
</div>
