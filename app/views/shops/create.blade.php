@extends('layouts.default')
@section('title')
Sign in ::
@parent
@stop

{{-- Content --}}
@section('content')

@extends('layouts.default')
@section('title')
Sign in ::
@parent
@stop

{{-- Content --}}
@section('content')

<div id="step1">
	<div class="page-head">
	    <h1>Create your shop <span class="pull-right">Step 1 of 3</span></h1>
	</div>

	<p>Donec lobortis velit ac est malesuada, sit amet congue sapien malesuada. Ut cursus fringilla nibh ut venenatis. Cras hendrerit venenatis sem, quis maximus lorem imperdiet vel. Pellentesque ultrices euismod congue. Nullam faucibus tellus nec leo tincidunt, sit amet volutpat nulla tincidunt. </p>

	<div class="row">
	    <div class="col-md-4">
	    	<div class="radio">
	    		<label><input type="radio" name="server" value="aws" /> I wish to use Amazon web server</label>
	    	</div>
	    	<div class="radio">
	    		<label><input type="radio" name="server" value="vps" /> I wish to use my personal server</label>
	    	</div>
	    </div>
	    <div class="col-md-8">
	        <h5>Some important notes</h5>
	        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur laoreet magna eget magna aliquam, sit amet varius dui consectetur. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
	        <p>Aliquam est lacus, finibus euismod tristique id, suscipit ac ligula. Aenean vel feugiat dui. Nulla facilisi. Fusce volutpat accumsan urna sit amet eleifend. Proin tincidunt commodo ex, quis fringilla nisi scelerisque eget.</p>
	        <p> Donec lobortis velit ac est malesuada, sit amet congue sapien malesuada. Ut cursus fringilla nibh ut venenatis. Cras hendrerit venenatis sem, quis maximus lorem imperdiet vel. Pellentesque ultrices euismod congue. Nullam faucibus tellus nec leo tincidunt, sit amet volutpat nulla tincidunt.</p>
	    </div>
	</div>
	<div class="row">
		<div class="col-sm-12">
			<a href="#" class="btn btn-primary btn-lg" onclick="$('#step1').hide(); $('#step2').show();">Next</a>
		</div>
	</div>
</div>

<div id="step2" style="display:none;">
	<div class="page-head">
	    <h1>Create your shop <span class="pull-right">Step 2 of 3</span></h1>
	</div>

	<p>Aliquam est lacus, finibus euismod tristique id, suscipit ac ligula. Aenean vel feugiat dui. Nulla facilisi. Fusce volutpat accumsan urna sit amet eleifend. Proin tincidunt commodo ex, quis fringilla nisi scelerisque eget.</p>

	<div class="row">
	    <div class="col-md-4">
            <fieldset>
                <div class="form-group">
                        <label for="api-key">Amazon AWS API Key</label>
                        <input class="form-control" placeholder="Amazon API key" type="text" name="api-key" id="api-key" value="">
                </div>
            </fieldset>
	    </div>
	    <div class="col-md-8">
	        <h5>Some important notes</h5>
	        <p>Donec lobortis velit ac est malesuada, sit amet congue sapien malesuada. Ut cursus fringilla nibh ut venenatis. Cras hendrerit venenatis sem, quis maximus lorem imperdiet vel. Pellentesque ultrices euismod congue. Nullam faucibus tellus nec leo tincidunt, sit amet volutpat nulla tincidunt.</p>
	    </div>
	</div>
	<div class="row">
		<div class="col-sm-12">
			<a href="#" class="btn btn-default btn-lg" onclick="$('#step2').hide(); $('#step1').show();">Back</a>
			<a href="#" class="btn btn-primary btn-lg" onclick="$('#step2').hide(); $('#step3').show();">Next</a>
		</div>
	</div>
</div>

<div id="step3" style="display:none;">
	<div class="page-head">
	    <h1>Create your shop <span class="pull-right">Step 3 of 3</span></h1>
	</div>

	<p>Donec lobortis velit ac est malesuada, sit amet congue sapien malesuada. Ut cursus fringilla nibh ut venenatis. Cras hendrerit venenatis sem, quis maximus lorem imperdiet vel. Pellentesque ultrices euismod congue. Nullam faucibus tellus nec leo tincidunt, sit amet volutpat nulla tincidunt.</p>

	<div class="row">
	    <div class="col-md-4">
            <fieldset>
                <div class="form-group">
					<label for="shop-title">Shop title</label>
					<input class="form-control" placeholder="Shop title" type="text" name="title" id="shop-title" value="">
                </div>
                <div class="form-group">
					<label>Select Categories</label>
			    	<div class="checkbox">
			    		<label><input type="checkbox" name="category" value="" /> Clothes</label>
			    	</div>
			    	<div class="checkbox">
			    		<label><input type="checkbox" name="category" value="" /> Cars</label>
			    	</div>
			    	<div class="checkbox">
			    		<label><input type="checkbox" name="category" value="" /> Computers</label>
			    	</div>
			    	<div class="checkbox">
			    		<label><input type="checkbox" name="category" value="" /> Food</label>
			    	</div>
			    	<div class="checkbox">
			    		<label><input type="checkbox" name="category" value="" /> Home accessories</label>
			    	</div>
			    	<div class="checkbox">
			    		<label><input type="checkbox" name="category" value="" /> Sporting goods</label>
			    	</div>
			    	<div class="checkbox">
			    		<label><input type="checkbox" name="category" value="" /> Collectibles</label>
			    	</div>
			    	<div class="checkbox">
			    		<label><input type="checkbox" name="category" value="" /> Other</label>
			    	</div>
                </div>
                <div class="form-group">
					<label for="admin-name">Administrator name</label>
					<input class="form-control" placeholder="Username" type="text" name="username" id="admin-name" value="">
                </div>
                <div class="form-group">
					<label for="password">Password</label>
					<input class="form-control" placeholder="Password" type="password" name="password" id="password" value="">
                </div>
            </fieldset>
	    </div>
	    <div class="col-md-8">
	        <h5>Some important notes</h5>
	        <p>Aliquam est lacus, finibus euismod tristique id, suscipit ac ligula. Aenean vel feugiat dui. Nulla facilisi. Fusce volutpat accumsan urna sit amet eleifend. Proin tincidunt commodo ex, quis fringilla nisi scelerisque eget.</p>
	        <div class="form-group">
				<div class="input-group">
					<input type="text" class="form-control input" placeholder="Search for...">
					<span class="input-group-btn"><button class="btn btn btn-success" type="button">Search</button></span>
				</div>
	        </div>

	        <div class="themes-list">
		        <div class="row">
	        		<div class="col-md-2 theme-image">
						<img src="https://0.s3.envato.com/files/117839781/icon_passion_magento.jpg">
					</div>
					<div class="col-md-4">
						<p class="theme-title"><a href="#">Passion – Ultimate Magento Theme</a></p>
						<p class="theme-price">$89</p>
					</div>
					<div class="col-md-6 theme-description">
						<p>High Resolution: Yes, Compatible Browsers: IE9, IE10, IE11, Firefox, Safari, Opera, Chrome, Compatible With: Bootstrap 3.x, Software Version: Magento 1.9.1.0, Magento 1.9.0.1, Magento 1.9.0.0, Magento 1.8.1.0, Magento 1.8.0.0, Magento 1.7.0.2, Magento 1.7.0.1, Magento 1.7.0.0, Columns: 4+</p>
					</div>
				</div>
				<div class="row">
	        		<div class="col-md-2 theme-image">
						<img src="https://0.s3.envato.com/files/116509320/80x80.PNG">
					</div>
					<div class="col-md-4">
						<p class="theme-title"><a href="#">MT Horo Elegant Responsive Magento Theme</a></p>
						<p class="theme-price">$84</p>
					</div>
					<div class="col-md-6 theme-description">
						<p>High Resolution: No, Compatible Browsers: IE9, IE10, IE11, Firefox, Safari, Chrome, Compatible With: Bootstrap 3.x, Software Version: Magento 1.9.1.0, Magento 1.9.0.1, Magento 1.9.0.0, Magento 1.8.1.0, Magento 1.8.0.0, Magento 1.7.0.2, Magento 1.7.0.1, Magento 1.7.0.0, Magento 1.6.2.0, Magento 1.6.1.0, Magento 1.6.0.0, Columns: 4+</p>
					</div>
				</div>
				<div class="row">
	        		<div class="col-md-2 theme-image">
						<img src="https://0.s3.envato.com/files/117728192/thumb.png">
					</div>
					<div class="col-md-4">
						<p class="theme-title"><a href="#">Optimal - Magento Responsive Theme</a></p>
						<p class="theme-price">$69</p>
					</div>
					<div class="col-md-6 theme-description">
						<p>High Resolution: Yes, Compatible Browsers: IE8, IE9, IE10, IE11, Firefox, Safari, Opera, Chrome, Software Version: Magento 1.9.1.0, Magento 1.9.0.1, Magento 1.9.0.0, Columns: 2</p>
					</div>
				</div>
				<div class="row">
	        		<div class="col-md-2 theme-image">
						<img src="https://0.s3.envato.com/files/117464326/logo.png">
					</div>
					<div class="col-md-4">
						<p class="theme-title"><a href="#">Ves Clothing Magento Theme</a></p>
						<p class="theme-price">$50</p>
					</div>
					<div class="col-md-6 theme-description">
						<p>High Resolution: No, Compatible Browsers: IE8, IE9, IE10, IE11, Firefox, Safari, Opera, Chrome, Compatible With: Bootstrap 3.x, Software Version: Magento 1.9.1.0, Magento 1.9.0.1, Magento 1.9.0.0, Columns: 3</p>
					</div>
				</div>
				<div class="row">
	        		<div class="col-md-2 theme-image">
						<img src="https://0.s3.envato.com/files/117309631/Thumbnail.png">
					</div>
					<div class="col-md-4">
						<p class="theme-title"><a href="#">Ves Shop - Magento Theme</a></p>
						<p class="theme-price">$50</p>
					</div>
					<div class="col-md-6 theme-description">
						<p>High Resolution: No, Compatible Browsers: IE8, IE9, IE10, IE11, Firefox, Safari, Opera, Chrome, Compatible With: Bootstrap 3.x, Software Version: Magento 1.9.1.0, Magento 1.9.0.1, Magento 1.9.0.0, Columns: 3</p>
					</div>
				</div>
	        </div>
	    </div>
	</div>
	<div class="row">
		<div class="col-sm-12">
			<a href="#" class="btn btn-default btn-lg" onclick="$('#step3').hide(); $('#step2').show();">Back</a>
			<a href="#" class="btn btn-primary btn-lg">Finish</a>
		</div>
	</div>
</div>

@stop



@stop