<section>
	<div class="row col">
		<div class="bg-lg rounded p-3 p-lg-5">
			<h2 class="text-center mb-4">Отправьте заявку на покупку товара</h2>
			<form action="{{ $modx->makeurl('12') }}" method="post" data-rel="tolightcase">
				<div class="row cbfix">
					<div class="col-12 col-md-6 col-block">
						<div class="form-group">
							<label for="name">Ваше имя *</label>
							<input type="text" class="form-control" id="name" name="name">
						</div>
					</div>
					<div class="col-12 col-md-6 col-block">
						<div class="form-group">
							<label for="phone">Номер телефона *</label>
							<input type="text" class="form-control" id="phone" name="phone">
						</div>
					</div>
					<div class="col-12 col-block text-center">
						<input name="link" value="{{ $modx->makeurl($documentObject['id'], '', '', 'full') }}" type="hidden">
						<input name="title" value="{{ $documentObject['pagetitle'] }}" type="hidden">
						<input name="formid" value="ajaxform" type="hidden">
						<div class="form-check form-group">
							<input class="form-check-input" type="checkbox" value="1" checked="checked" required="required" name="sogl" id="sogl">
							<label class="form-check-label" for="sogl">Я согласен на обработку <a href="[~7~]" target="_blank">моих персональных данных</a></label>
						</div>
						<button type="submit" class="btn btn-primary">Отправить форму</button>
					</div>
				</div>
			</form>
		</div>
	</div>
</section>