<div class="col col-block">
	<div class="card h-100">
		@if($item['image'])
			<a href="{{ $item['url'] }}"><img src="{{ $modx->runSnippet('phpthumb', ['input'=>$item['image'], 'options'=>'w=400,h=280,zc=1'],0 ) }}" alt="{{ $item['title'] }}" class="card-img-top w-100"></a>
		@endif
		<div class="card-body">
			@if($item['data']==1)
				<b>{!! $item['date'] !!}</b>
			@endif
			<h5 class="card-title"><a href="{{ $item['url'] }}">{{ $item['pagetitle' ]}}</a></h5>
			<p class="card-text">{!! $item['summary'] !!}</p>
		</div>
		<div class="card-footer">
			<a href="{{ $item['url'] }}" class="btn btn-primary">Подробнее</a>
		</div>
	</div>
</div>