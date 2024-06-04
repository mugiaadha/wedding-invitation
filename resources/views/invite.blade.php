@extends('layout.main')

@section("content")
    <!-- Basic example -->
	<div class="flicker-example">
		<ul>
			<li data-background="img/flicker-1.jpg">
				<div class="flick-title">Flickerplate Is Working</div>
				<div class="flick-sub-text">Heaven forbid this package you downloaded is broken. That wouldn't be embarrassing at all.</div>
			</li>
			
			<li data-background="img/flicker-2.jpg">
				<div class="flick-title">Editable via Javascript or CSS</div>
				<div class="flick-sub-text">Take a look at the extensive documentation to see how you can change the settings in multiple ways.</div>
			</li>
			
			<li data-background="img/flicker-3.jpg">
				<div class="flick-title">Touch Enabled Through the Hammer.js Library</div>
				<div class="flick-sub-text"><a href="http://hammerjs.github.io/">Hammer.js</a> is a great touch library that has been included as part of the Flickerplate package.</div>
			</li>
		</ul>
	</div>

	<script>
		new flickerplate('.flicker-example');
	</script>
@endsection