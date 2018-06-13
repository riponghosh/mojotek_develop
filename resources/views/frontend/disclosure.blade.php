@extends('frontend.master')

@section('title', 'Home')


@section('content')
 	<div id="sliders-container"></div>
		<div class="fusion-page-title-bar fusion-page-title-bar-breadcrumbs fusion-page-title-bar-left">
			<div class="fusion-page-title-row">
				<div class="fusion-page-title-wrapper">
					<div class="fusion-page-title-captions">
						<h1 class="entry-title">FDA Disclosure</h1>
					</div>
					<div class="fusion-page-title-secondary">
						<div class="fusion-breadcrumbs">
							<span itemscope itemtype="http://data-vocabulary.org/Breadcrumb"><a href="{{url('/')}}" itemprop="url"><span itemprop="title">Home</span></a></span><span class="fusion-breadcrumb-sep">/</span><span class="breadcrumb-leaf">FDA Disclosure</span>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="clearfix" id="main" style="">
			<div class="fusion-row" style="">
				<div id="content" style="width: 100%;">
					<div class="post-33 page type-page status-publish hentry" id="post-33">
						<div class="post-content">
							<p>I understand the statements regarding these products have not been evaluated by the Food and Drug Administration. This product is not intended to treat, cure, or prevent and disease. Do not use if pregnant, nursing or have a serious medical condition. Please always consult a Doctor’s advice before using this or any supplemental dietary product. </p>
						</div>
					</div>
				</div>
			</div><!-- fusion-row -->
		</div><!-- #main -->
@endsection
@section('scripts')
    
@endsection