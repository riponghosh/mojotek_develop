@extends('frontend.master')

@section('title', 'Sign')


@section('content')
 	<div class="site-wrapper">
      




<section class="site-content">
  <div class="">
    <div class="container">
      

    <div class="u-ui-margin-vertical-x-large js-notification">
      <div class="c-cell--wide c-cell">
    <div class="c-cell__image"><div class="c-icon--large c-icon--cs3 c-icon"><svg width="24" height="24" viewBox="0 0 64 64" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
  <path d="M32 64c17.673 0 32-14.327 32-32 0-17.673-14.327-32-32-32-17.673 0-32 14.327-32 32 0 17.673 14.327 32 32 32zm-4-45.995c0-2.212 1.795-4.005 4-4.005 2.209 0 4 1.792 4 4.005v2.064c0 3.931-1.815 17.931-4 17.931-1.914 0-4-13.882-4-17.931v-2.063zm0 27.995c0-2.209 1.795-4 4-4 2.209 0 4 1.795 4 4 0 2.209-1.795 4-4 4-2.209 0-4-1.795-4-4z"></path>
</svg>
</div></div>

  <div class="c-cell__content">


      <div class="c-cell__body">
        By continuing to use Sweetkandi, you agree to our delicious <a href="../../cookie-policy.html">cookie policy</a> to help to make your Sweetkandi experience even better.
</div>

  </div>

    <div class="c-cell__suffix"><button name="button" type="button" class="c-button--normal c-button--medium c-button js-close-notification js-cookie-consent"><span class="c-button__content">Close</span></button></div>

  
</div>    </div>

    </div>

    <div class="row">
      <section id="content" class="grid12 site-content__content-section">
        <div class="body-content">
            
            
            

            <div class="c-spacer--xxx-large c-spacer"></div>
<div class="narrow-container js-sign-in-dialog">
  <div class="c-card">
    <div class="u-ui-padding-x-large">
      

      <div class="c-spacer--x-large c-spacer"></div>

        <div class="c-text--heading c-text--parent c-text--center c-text">Join Sweetkandi</div>
<div class="c-spacer--xx-large c-spacer"></div>
<div class="c-text--body c-text--center c-text">Sell pre-loved clothes with 0% fees. Join now!</div>


      <div class="c-spacer--xxx-large c-spacer"></div>

      <div class="u-ui-margin-top-large">
  <a class="c-button--facebook c-button--normal c-button js-facebook-login hidden" data-registration-source="null" data-track="null" data-redirect-url="null" href="https://www.facebook.com/v2.1/dialog/oauth?app_id=615069491882290&amp;redirect_uri=https%3A%2F%2Fwww.Sweetkandi.co.uk%2Fmember%2Ffacebook%2Ffacebook_login&amp;scope=email%2Cuser_friends"><span class="c-button__content">Continue with Facebook</span></a>

  <div class="c-spacer--x-large c-spacer hidden"></div>
  <button name="button" type="button" class="c-button--google c-button--normal c-button js-google-auth hidden" data-redirect-url="null"><span class="c-button__content">Continue with Google</span></button>

  <div class="c-spacer--x-large c-spacer"></div>
  <div class="u-flexbox">
    <div class="u-flex-grow">
      <a class="c-button--inverse c-button--normal c-button--amplified c-button " href="{{url('/sign-up')}}"><span class="c-button__content">Sign Up</span></a>
    </div>

    <div>
      <hr class="c-divider--vertical c-divider" />
    </div>

    <div class="u-flex-grow">
      <a class="c-button--inverse c-button--normal c-button--amplified c-button " href="{{url('/sign-in')}}"><span class="c-button__content">Log In</span></a>
    </div>
  </div>
</div>

    </div>
</div>
</div>

        </div>

        
      </section>

    </div>

    
  </div>
</section>

      

    </div>
  </div>
@endsection
@section('scripts')
    
@endsection