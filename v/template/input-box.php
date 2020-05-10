<div class="row">
	<div class="col-12">
		<div class="input-group mb-3 border border-dark rounded">
			<div class="input-group-prepend">
				<select class="custom-select bg-dark text-light" id="urlProtocol">
					<option value="ssl" selected>https://</option>
					<option value="nonssl">http://</option>
				</select>
			</div>
			<input type="text" class="form-control" placeholder="example.com" id="targetUrl">
			<div class="input-group-append">
				<button class="btn btn-dark" type="button" onclick="ConfigureSitemap();">Start<i class="fas fa-angle-right m-1"></i></button>
			</div>
		</div>
	</div>
</div>

<div class="row">
	<div class="col-4">
		<span>Advanced Option</span>
		<div class="custom-control custom-switch">
			<input type="checkbox" class="custom-control-input" id="lastmod" checked>
			<label class="custom-control-label" for="lastmod">lastmod</label>
		</div>
		<div class="custom-control custom-switch">
			<input type="checkbox" class="custom-control-input" id="changefreq" checked>
			<label class="custom-control-label" for="changefreq">changefreq</label>
		</div>
		<div class="custom-control custom-switch">
			<input type="checkbox" class="custom-control-input" id="priority" checked>
			<label class="custom-control-label" for="priority">priority</label>
		</div>
	</div>

	<div class="col-8">
		<i class="far fa-question-circle text-info"></i> Help:<br>
		<b>lastmod:</b> The date of last modification of the URL. <span class="badge badge-secondary">Optional</span><br>
		<b>changefreq:</b> How frequently a page is likely to change. <span class="badge badge-secondary">Optional</span><br>
		<b>priority:</b> The priority of a URL relative to other URLs. <span class="badge badge-secondary">Optional</span><br>
	</div>
</div>

<div class="row mt-3">
	<div class="col-8 p-2">
		<div class="card p-2" style="display: none; height: 117px;" id="ongoingStatusHolder">
			<b>Status:</b>
			<div id="ongoingStatus"></div>
		</div>
	</div>
	<div class="col-4 p-2">
		<div class="text-center">
			<div id="loadingGif" style="display: none;">
				<img src="./v/resource/image/loading.gif" class="d-inline-block" height="117px;">
			</div>
			<a style="font-size: 300%; text-decoration: none; display: none;" href="" download="sitemap.xml" id="downloadBtn">
				<i class="fas fa-download text-info m-4"></i>
			</a>
		</div>
	</div>
</div>

