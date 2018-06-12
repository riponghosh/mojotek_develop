@extends('frontend.master')

@section('title', 'Home')


@section('content')
 	<div id="sliders-container"></div>
		<div class="fusion-page-title-bar fusion-page-title-bar-breadcrumbs fusion-page-title-bar-left">
			<div class="fusion-page-title-row">
				<div class="fusion-page-title-wrapper">
					<div class="fusion-page-title-captions">
						<h1 class="entry-title">Cart</h1>
					</div>
					<div class="fusion-page-title-secondary">
						<div class="fusion-breadcrumbs">
							<span itemscope itemtype="http://data-vocabulary.org/Breadcrumb"><a href="../index.html" itemprop="url"><span itemprop="title">Home</span></a></span><span class="fusion-breadcrumb-sep">/</span><span itemscope itemtype="http://data-vocabulary.org/Breadcrumb"><a href="../shop/index.html" itemprop="url"><span itemprop="title">Shop</span></a></span><span class="fusion-breadcrumb-sep">/</span><span class="breadcrumb-leaf">Cart</span>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="clearfix" id="main" style="">
			<div class="fusion-row" style="">
				<div id="content" style="width: 100%;">
					<div class="post-48 page type-page status-publish hentry" id="post-48">
						<span class="entry-title" style="display: none;">Cart</span> <span class="vcard" style="display: none;"><span class="fn"><a href="../author/alexs/index.html" rel="author" title="Posts by Alex">Alex</a></span></span> <span class="updated" style="display:none;">2016-07-15T02:02:21+00:00</span>
						<div class="post-content">
							<div class="woocommerce">
								<p class="cart-empty">Your cart is currently empty.</p>
								<p class="return-to-shop"><a class="button wc-backward" href="../shop/index.html">Return to shop</a></p>
							</div>
						</div>
					</div>
				</div><!--WPFC_FOOTER_START-->
			</div><!-- fusion-row -->
		</div><!-- #main -->
@endsection
@section('scripts')
    
@endsection