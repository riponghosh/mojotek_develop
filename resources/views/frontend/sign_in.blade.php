@extends('frontend.master')

@section('title', 'Sign in')


@section('content')
 	<div class="site-wrapper">
      




<section class="site-content">
  <div class="">
    <div class="container">
      

    <div class="u-ui-margin-vertical-x-large js-notification">
      <div class="c-cell--wide c-cell">
        <div class="c-cell__image">
          <div class="c-icon--large c-icon--cs3 c-icon">
            <svg width="24" height="24" viewBox="0 0 64 64" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
              <path d="M32 64c17.673 0 32-14.327 32-32 0-17.673-14.327-32-32-32-17.673 0-32 14.327-32 32 0 17.673 14.327 32 32 32zm-4-45.995c0-2.212 1.795-4.005 4-4.005 2.209 0 4 1.792 4 4.005v2.064c0 3.931-1.815 17.931-4 17.931-1.914 0-4-13.882-4-17.931v-2.063zm0 27.995c0-2.209 1.795-4 4-4 2.209 0 4 1.795 4 4 0 2.209-1.795 4-4 4-2.209 0-4-1.795-4-4z"></path>
            </svg>
          </div>
        </div>

      <div class="c-cell__content">


          <div class="c-cell__body">
            By continuing to use Sweetkandi, you agree to our delicious <a href="../../cookie-policy.html">cookie policy</a> to help to make your Sweetkandi experience even better.
          </div>

      </div>

      <div class="c-cell__suffix"><button name="button" type="button" class="c-button--normal c-button--medium c-button js-close-notification js-cookie-consent"><span class="c-button__content">Close</span></button></div>

      
      </div>    
    </div>

    </div>

    <div class="row">
      <section id="content" class="grid12 site-content__content-section">
        <div class="body-content">
            
            
            

          <div class="c-spacer--xxx-large c-spacer"></div>
<div class="narrow-container">
  <div class="c-card">
    <form class="js-login-form" action="{{ route('login') }}" accept-charset="UTF-8" method="post">
      <!-- <input name="utf8" type="hidden" value="&#x2713;" /> -->
      <!-- <input type="hidden" name="authenticity_token" value="w58hpklpp6Tk65YpwDaEBXlk4pdQbHQWgaoBUVvnAaePZ0XBHmWsbVDH1ymVzlHzgMbn7jggl2+gVNzgT4xdhg==" /> -->
    {{ csrf_field() }}
      <div class="c-cell">

        <div class="c-cell__content">


            <div class="c-cell__body">
              <div class="u-text-center">
                <h2 class="c-text--heading c-text--left c-text">Log in</h2>
              </div>
            </div>

        </div>


        
      </div>
      <div class="js-error-tip tip tip-error tip-standalone tip-standalone--wide u-margin-top-medium ">
        Incorrect username and/or password
      </div>

        
  <label class="c-input--default c-input--text c-input js-ui-input-wrapper" for="login">
    <div class="c-input__content js-input-content">
        <input type="email" name="email" id="login" class="c-input__value " placeholder="email" autocomplete="true" data-validate="required" />

        @if ($errors->has('email'))
            <span class="help-block">
                <strong>{{ $errors->first('email') }}</strong>
            </span>
        @endif
    </div>

  </label>


        
  <label class="c-input--default c-input--password c-input js-password-input js-ui-input-wrapper" for="password">
    <div class="c-input__content js-input-content">
        <input type="password" name="password" id="password" class="c-input__value " placeholder="Password" data-validate="required" />
        @if ($errors->has('password'))
              <span class="help-block">
                  <strong>{{ $errors->first('password') }}</strong>
              </span>
          @endif


        <div class="c-input__icon js-input-icon">
          <div class="u-cursor-pointer js-password-icon">
            <div class="c-icon--medium c-icon"><svg width="24" height="24" viewBox="0 0 24 24" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"><path d="M12,15 C5.372583,15 0,7.5 0,7.5 C0,7.5 5.372583,0 12,0 C18.627417,0 24,7.5 24,7.5 C24,7.5 18.627417,15 12,15 Z M12,10.5 C13.6568543,10.5 15,9.15685425 15,7.5 C15,5.84314575 13.6568543,4.5 12,4.5 C10.3431457,4.5 9,5.84314575 9,7.5 C9,9.15685425 10.3431457,10.5 12,10.5 Z" transform="translate(0.000000, 4.500000)" fill="#BBB" fill-rule="nonzero" stroke="none" stroke-width="1"/></svg>
            </div>
          </div>
        </div>
  </div>

</label>


      <div class="c-cell">

        <div class="c-cell__content">


            <div class="c-cell__body">
                <button name="button" type="submit" class="c-button--filled c-button--normal c-button "><span class="c-button__content">Log in</span></button>
            </div>

        </div>


        
      </div>     
        <div class="c-spacer"></div>

        <div class="c-text--body c-text--parent c-text--center c-text hidden"><a html="{:rel=&gt;:nofollow}" href="reset_password.html">Forgotten your password?</a></div>
        <div class="c-spacer--xx-large c-spacer"></div>
        <div class="c-text--body c-text--parent c-text--center c-text hidden">
          <a class="c-link c-link--default" href="../../help/103.html">Having trouble?</a>
        </div>        
        <div class="c-spacer--xx-large c-spacer"></div>
</form>
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