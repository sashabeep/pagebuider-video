@if(!empty($item['features']))
<section class="{{ $item['padding'] }}">
	@if(!empty($item['title']))<div class="row col text-center mb-4"><h2>{{ $item['title'] }}</h2></div>@endif
	<div class="row">
		<div class="col-12 col-lg-10 offset-lg-1">
			<div class="row xs-up-1 md-up-2 lg-up-3 cbfix">
				@foreach($item['features'] as $feature)
					<div class="col col-block">
						<div class="card text-center h-100">
							<div class="card-body">
								<p><i class="fa {{ $feature['icon'] }} text-primary fa-4x"></i></p>
								<h4 class="card-title">{{ $feature['title'] }}</h4>
								<p class="card-text text-muted">{{ $feature['content'] }}</p>
							</div>
						</div>
					</div>
				@endforeach
			</div>
		</div>
	</div>
</section>
@endif
