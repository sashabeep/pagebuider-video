@php
	$pagebuilder = $modx->runSnippet('PageBuilder',['container'=>'pbcontent','renderTo'=>'array'])[0];
	dump($pagebuilder);
@endphp

@if(!empty($pagebuilder))
	@foreach($pagebuilder as $item)
		@if(View::exists('partials.pagebuilder.'.$item['config']))
			@include('partials.pagebuilder.'.$item['config'],$item)
		@else
			<p>View for config <b>{{ $item['config'] }}</b> not found</p>
		@endif
	@endforeach
@endif
