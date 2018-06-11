@extends('frontend.master')

@section('title', 'Sign up')


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
            
            
            

          <div class="narrow-container">
  <div class="c-spacer--xxx-large c-spacer"></div>
<div class="c-card">
  <form id="signup-form" autocomplete="false" action="{{ route('register') }}" accept-charset="UTF-8" method="post">
    {{ csrf_field() }}
    <!-- <input name="utf8" type="hidden" value="&#x2713;" /> -->
    <!-- <input type="hidden" name="authenticity_token" value="+Q+y0ggtCMVxjRVFlPPGyrX0MbzQcMPFKEmmUUiKbc3B5EADjDTMpiteWIGfk5ZwB2koAlxCsOp5AWSn1p6LSQ==" /> -->

    <div class="c-cell">

      <div class="c-cell__content">


          <div class="c-cell__body">
            <h1 class="c-text--heading c-text--parent c-text--center c-text">Signup</h1>
          </div>

      </div>


      
    </div>
    

    
  <label class="c-input--default c-input--text c-input js-field-with-hint js-ui-input-wrapper" data-validate-while-typing="true" data-hint="Pick something you really like. Once chosen, you’re stuck with it, so choose wisely.
Please use letters and numbers only. " for="user_login">
    <div class="c-input__content js-input-content">
        <input type="text" name="name" id="user_login" class="c-input__value " placeholder="Username" autocomplete="username" data-validate="required login" data-validate-while-typing="true" data-hint="Pick something you really like. Once chosen, you’re stuck with it, so choose wisely.
  Please use letters and numbers only. " required autofocus/>
        @if ($errors->has('name'))
            <span class="help-block">
                <strong>{{ $errors->first('name') }}</strong>
            </span>
        @endif

    </div>

  </label>


    
  <label class="c-input--default c-input--text c-input js-ui-input-wrapper" data-validate-while-typing="true" for="user_email">
    <div class="c-input__content js-input-content">
        <input type="email" name="email" id="user_email" class="c-input__value " placeholder="Email address" autocomplete="email" data-validate="required email" data-validate-while-typing="true" required />
        @if ($errors->has('email'))
            <span class="help-block">
                <strong>{{ $errors->first('email') }}</strong>
            </span>
        @endif


    </div>

  </label>


    
  <label class="c-input--default c-input--password c-input js-field-with-hint js-password-input js-ui-input-wrapper" data-validate-while-typing="true" data-hint="Use 7 characters and at least 1 number." for="user_password">
    <div class="c-input__content js-input-content">
        <input type="password" name="password" id="user_password" class="c-input__value " placeholder="Password" data-validate="required" data-validate-while-typing="true" data-hint="Use 7 characters and at least 1 number." data-server-validate="/member/signup/validate" required/>


        <div class="c-input__icon js-input-icon">
          <div class="u-cursor-pointer js-password-icon">
            <div class="c-icon--medium c-icon"><svg width="24" height="24" viewBox="0 0 24 24" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"><path d="M12,15 C5.372583,15 0,7.5 0,7.5 C0,7.5 5.372583,0 12,0 C18.627417,0 24,7.5 24,7.5 C24,7.5 18.627417,15 12,15 Z M12,10.5 C13.6568543,10.5 15,9.15685425 15,7.5 C15,5.84314575 13.6568543,4.5 12,4.5 C10.3431457,4.5 9,5.84314575 9,7.5 C9,9.15685425 10.3431457,10.5 12,10.5 Z" transform="translate(0.000000, 4.500000)" fill="#BBB" fill-rule="nonzero" stroke="none" stroke-width="1"/></svg>
            </div>
          </div>
        </div>
    </div>

  </label>

  <label class="c-input--default c-input--password c-input js-field-with-hint js-password-input js-ui-input-wrapper" data-validate-while-typing="true" data-hint="Use 7 characters and at least 1 number." for="user_password">
    <div class="c-input__content js-input-content">
        <input type="password" name="password_confirmation" id="user_password" class="c-input__value " placeholder="Confirm Password" data-validate="required" data-validate-while-typing="true" data-hint="Use 7 characters and at least 1 number." data-server-validate="/member/signup/validate" required/>


        <div class="c-input__icon js-input-icon">
          <div class="u-cursor-pointer js-password-icon">
            <div class="c-icon--medium c-icon"><svg width="24" height="24" viewBox="0 0 24 24" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"><path d="M12,15 C5.372583,15 0,7.5 0,7.5 C0,7.5 5.372583,0 12,0 C18.627417,0 24,7.5 24,7.5 C24,7.5 18.627417,15 12,15 Z M12,10.5 C13.6568543,10.5 15,9.15685425 15,7.5 C15,5.84314575 13.6568543,4.5 12,4.5 C10.3431457,4.5 9,5.84314575 9,7.5 C9,9.15685425 10.3431457,10.5 12,10.5 Z" transform="translate(0.000000, 4.500000)" fill="#BBB" fill-rule="nonzero" stroke="none" stroke-width="1"/></svg>
            </div>
          </div>
        </div>
    </div>

  </label>


    <div class="c-spacer--x-large c-spacer"></div>
    <fieldset class="form__fieldset">
      <div class="field field--stacked field--plain">
        <div class="field__details u-fill-width u-padding-top-large u-padding-bottom-none">
            <label class="c-checkbox hidden">
                <input type="checkbox" name="user_setting[is_newsletter_subscriber]" id="user_setting_is_newsletter_subscriber" value="1" />

                <span class="c-checkbox__button"></span>

                <span class="c-checkbox__label">Subscribe to our newsletters</span>
            </label>

          <div class="c-spacer"></div>
          <div class="c-text--caption c-text--left c-text">By registering I confirm that I’ve read and accepted Sweetkandi’s <a target="_blank" href="../../terms-and-conditions.html">Terms &amp; Conditions</a> and <a target="_blank" href="../../privacy-policy.html">Privacy Policy</a>. I confirm I’m at least 18 years old.</div>
        </div>
      </div>
    </fieldset>

    <div class="c-cell">

  <div class="c-cell__content">


      <div class="c-cell__body">
      <button name="button" type="submit" class="c-button--filled c-button--normal c-button "><span class="c-button__content">Sign Up</span></button>
</div>

  </div>


  
</div>    <div class="c-spacer"></div>
    <div class="c-text--subtitle c-text--parent c-text--center c-text">
      <a class="c-link c-link--default" href="../../help/103.html">Having trouble?</a>
</div>    <div class="c-spacer--xx-large c-spacer"></div>

    
    
    
</form></div>

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