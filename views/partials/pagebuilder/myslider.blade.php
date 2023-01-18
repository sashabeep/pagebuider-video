@if(!empty($item['slides']))
<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
	<ol class="carousel-indicators">
		@foreach($item['slides'] as $slide)
			<li data-target="#carouselExampleIndicators" data-slide-to="{{ $loop->index }}" @if($loop->first) class="active" @endif></li>
		@endforeach
	</ol>
	<div class="carousel-inner">
		@foreach($item['slides'] as $slide)
			<div class="carousel-item s-pad2x text-center text-white @if($loop->first) active @endif" style="background-image:url({{ $slide['image'] }})">
				<div class="row col">
					@if($slide['title'])<h2 class="display-3">{{ $slide['title'] }}</h2>@endif
					@if($slide['content'])<p>{{ $slide['content'] }}</p>@endif
					@if($slide['btn_link'])<a href="@evoParser($slide['btn_link'])" class="btn btn-primary">{{ $slide['btn_text'] }}</a>@endif
				</div>
			</div>
		@endforeach
	</div>
	<a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
		<span class="carousel-control-prev-icon" aria-hidden="true"></span>
		<span class="sr-only">Назад</span>
	</a>
	<a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
		<span class="carousel-control-next-icon" aria-hidden="true"></span>
		<span class="sr-only">Вперед</span>
	</a>
</div>
@endif