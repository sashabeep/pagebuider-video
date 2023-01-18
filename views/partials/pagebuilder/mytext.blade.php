<section class="{{ $item['padding'] }}">
	<div class="row col">
		@if($item['title'])
			<h1 class="display-4">{{ $item['title'] }}</h1>
		@endif
		@evoParser($item['content'])
	</div>
</section>