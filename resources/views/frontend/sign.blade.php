@extends('frontend.master')

@section('title', 'Sign')


@section('content')
 	<div id="sliders-container"></div>
    <div class="fusion-page-title-bar fusion-page-title-bar-breadcrumbs fusion-page-title-bar-left">
      <div class="fusion-page-title-row">
        <div class="fusion-page-title-wrapper">
          <div class="fusion-page-title-captions">
            <h1 class="entry-title">My Account</h1>
          </div>
          <div class="fusion-page-title-secondary">
            <div class="fusion-breadcrumbs">
              <span itemscope itemtype="http://data-vocabulary.org/Breadcrumb"><a href="../index.html" itemprop="url"><span itemprop="title">Home</span></a></span><span class="fusion-breadcrumb-sep">/</span><span itemscope itemtype="http://data-vocabulary.org/Breadcrumb"><a href="../shop/index.html" itemprop="url"><span itemprop="title">Shop</span></a></span><span class="fusion-breadcrumb-sep">/</span><span class="breadcrumb-leaf">My Account</span>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="clearfix" id="main" style="">
      <div class="fusion-row" style="">
        <div id="content" style="width: 100%;">
          <div class="post-50 page type-page status-publish hentry" id="post-50">
            <span class="entry-title" style="display: none;">My Account</span> <span class="vcard" style="display: none;"><span class="fn"><a href="../author/alexs/index.html" rel="author" title="Posts by Alex">Alex</a></span></span> <span class="updated" style="display:none;">2016-07-15T02:02:21+00:00</span>
            <div class="post-content">
              <div class="woocommerce">
                @if($errors)
                <ul class="woocommerce-error" role="alert">
                    <li><strong>ERROR</strong>: The username or password you entered is incorrect.</li>
                </ul>
                @endif
                <div class="u-columns col2-set" id="customer_login">
                  <div class="u-column1 col-1">
                    <h2>Login</h2>
                    <form class="woocommerce-form woocommerce-form-login login" method="post" action="{{ route('login') }}">
                      {{ csrf_field() }}
                      <p class="woocommerce-form-row woocommerce-form-row--wide form-row form-row-wide"><label for="email">Username or email address&nbsp;<span class="required">*</span></label> <input autocomplete="email" class="woocommerce-Input woocommerce-Input--text input-text" id="username" name="email" type="text" value=""></p>
                      <p class="woocommerce-form-row woocommerce-form-row--wide form-row form-row-wide"><label for="password">Password&nbsp;<span class="required">*</span></label> <input autocomplete="current-password" class="woocommerce-Input woocommerce-Input--text input-text" id="password" name="password" type="password"></p>
                      <p class="form-row"><input id="woocommerce-login-nonce" name="woocommerce-login-nonce" type="hidden" value="82e556f5cb"><input name="_wp_http_referer" type="hidden" value="/my-account/"> <button class="woocommerce-Button button" name="login" type="submit" value="Log in">Log in</button> <label class="woocommerce-form__label woocommerce-form__label-for-checkbox inline"><input class="woocommerce-form__input woocommerce-form__input-checkbox" id="rememberme" name="rememberme" type="checkbox" value="forever"> <span>Remember me</span></label></p>
                      <p class="woocommerce-LostPassword lost_password"><a href="lost-password/index.html">Lost your password?</a></p>
                    </form>
                  </div>
                  <div class="u-column2 col-2">
                    <h2>Register</h2>
                    <form class="woocommerce-form woocommerce-form-register register" method="post"  action="{{ route('register') }}">
                      {{ csrf_field() }}
                      <p class="woocommerce-form-row woocommerce-form-row--wide form-row form-row-wide"><label for="reg_username">Username&nbsp;<span class="required">*</span></label> <input autocomplete="username" class="woocommerce-Input woocommerce-Input--text input-text" id="reg_username" name="username" type="text" value=""></p>
                      <p class="woocommerce-form-row woocommerce-form-row--wide form-row form-row-wide"><label for="reg_email">Email address&nbsp;<span class="required">*</span></label> <input autocomplete="email" class="woocommerce-Input woocommerce-Input--text input-text" id="reg_email" name="email" type="email" value=""></p>
                      <p class="woocommerce-form-row woocommerce-form-row--wide form-row form-row-wide"><label for="reg_password">Password&nbsp;<span class="required">*</span></label> <input autocomplete="new-password" class="woocommerce-Input woocommerce-Input--text input-text" id="reg_password" name="password" type="password"></p>
                      <div class="woocommerce-privacy-policy-text"></div>
                      <p class="woocommerce-FormRow form-row"><input id="woocommerce-register-nonce" name="woocommerce-register-nonce" type="hidden" value="c189c82b9a"><input name="_wp_http_referer" type="hidden" value="/my-account/"> <button class="woocommerce-Button button" name="register" type="submit" value="Register">Register</button></p>
                    </form>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div><!--WPFC_FOOTER_START-->
      </div><!-- fusion-row -->
    </div><!-- #main -->
@endsection
@section('scripts')
    
@endsection