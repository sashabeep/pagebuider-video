@php
	$dlOpts = [
		'api'=>1,
		'tvList'=>'image,data',
		'tvPrefix'=>'',
		'idType'=>$item['idtype'],
		'display'=>$item['display'],
		'dateFormat'=>'%d.%m.%Y',
		'summary'=>'notags,len:100',
		'dotSummary'=>1,
	];
	
	if($item['idtype'] == 'documents'){
		$dlOpts['sortType'] = 'doclist';
		$dlOpts['documents'] = $item['ids'];
	}else{
		$dlOpts['parents'] = $item['ids'];
	}	

	$docs = json_decode($modx->runSnippet('DocLister',$dlOpts),true);
	//dump($docs);
@endphp

@if(!empty($docs))
<section class="{{ $item['padding'] }}">
	@if($item['title'])<h2 class="mb-4 text-center">Подборка статей по теме страницы</h2>@endif
	<div class="row xs-up-1 sm-up-1 md-up-2 lg-up-3 cbfix">
		@foreach($docs as $doc)
			@include('partials.content.blogitem',['item'=>$doc])
		@endforeach
	</div>
</section>
@endif