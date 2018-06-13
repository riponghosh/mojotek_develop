@extends('frontend.master')

@section('title', 'Home')


@section('content')
 	<div id="sliders-container"></div>
		<div class="fusion-page-title-bar fusion-page-title-bar-breadcrumbs fusion-page-title-bar-left">
			<div class="fusion-page-title-row">
				<div class="fusion-page-title-wrapper">
					<div class="fusion-page-title-captions">
						<h1 class="entry-title">Contact Us</h1>
					</div>
					<div class="fusion-page-title-secondary">
						<div class="fusion-breadcrumbs">
							<span itemscope itemtype="http://data-vocabulary.org/Breadcrumb"><a href="{{url('/')}}" itemprop="url"><span itemprop="title">Home</span></a></span><span class="fusion-breadcrumb-sep">/</span><span itemscope itemtype="http://data-vocabulary.org/Breadcrumb"><a href="{{url('/about')}}" itemprop="url"><span itemprop="title">About</span></a></span><span class="fusion-breadcrumb-sep">/</span><span class="breadcrumb-leaf">Contact Us</span>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="clearfix" id="main" style="">
			<div class="fusion-row" style="">
				<div id="content" style="width: 100%;">
					<div class="post-25 page type-page status-publish hentry" id="post-25">
						<span class="entry-title" style="display: none;">Contact Us</span> 
						<div class="post-content">
							<p>2903 West New Haven Ave<br>
							West Melbourne, FL 32904</p>
							<p>(888) 603-6033</p>
							<p>Email:</p>
							<p><a href="mailto:13pasturesinfo@gmail.com">13pasturesinfo@gmail.com</a></p>
							<p>&nbsp;</p>
							<p>Effective as of January 01, 2017</p>
						</div>
					</div>
				</div>
			</div><!-- fusion-row -->
		</div><!-- #main -->
@endsection
@section('scripts')
    
@endsection