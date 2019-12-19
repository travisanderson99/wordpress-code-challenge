@extends('layouts.app')

@section('content')
	@include('partials.page-header')

	@php
	$args = array(
		'posts_per_page' => 10,
		'post_type' => 'post',
		'orderby' => 'date',
		'order' => 'DESC',
  	);
	$posts = new \WP_Query($args); 
	@endphp

	@if($posts->have_posts())
		<div class="post-wrapper ajax-load-posts mt-5">
			@while($posts->have_posts())
				@php($posts->the_post())
				@if($posts->current_post == 0)
					<div class="featured-post">
						<!-- Featured post here -->
					</div>
				@else
					@if($posts->current_post == 1)
						<h2>More News</h2>
					@endif
					<!-- Additional posts here -->
				@endif
			@endwhile
		</div>
		<a id="load-posts" class="btn btn-success text-white">Load More</a>
	@endif
@endsection
