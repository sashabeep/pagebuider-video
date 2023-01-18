@if(!empty($item['images']))
<section class="{{ $item['padding'] }}">
	@if($item['title'])<h2 class="text-center mb-4">{{ $item['title'] }}</h2>@endif
	<div class="row cbfix">
		@foreach($item['images'] as $image)
		<div class="col-xs-6 col-sm-6 col-md-3 col-lg-2 col-block">
			<a href="{{ $image['image'] }}" title="{{ $image['title'] }}" data-rel="lightase:photos" class="onephoto img-thumbnail rounded">
				<img class="img-responsive" src="{{\Helper::phpThumb($image['image'], 'w=480,h=360,zc=1')}}" alt="{{ $image['title'] }}">
			</a>
		</div>
		@endforeach
	</div>
</section>
@endif