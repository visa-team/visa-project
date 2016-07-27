@extends('admin.layouts.master')
@section('title')
	Sản phẩm
@endsection
@section('title.name')
	Thêm sản phẩm
@endsection

@section('link')
	<li><a href="{{ route('admin.product'') }}">
		<img src="{{ asset('images/icons/control/16/add.png') }}" />
		<span>Thêm mới</span>
	</a></li>
	
	<li><a href="">
		<img src="{{ asset('images/icons/control/16/list.png') }}" />
		<span>Danh sách</span>
	</a></li>
@endsection

@section('content')
	<form class="form" id="form" action="{{ route('admin.post.product') }}" method="post" enctype="multipart/form-data">
		{{ method_field('POST') }}
		{{ csrf_field() }}
		<fieldset>
			<div class="widget">
			    <div class="title">
					<img src="{{ asset('images/icons/dark/add.png') }}" class="titleIcon" />
					<h6>Thêm mới Sản phẩm</h6>
				</div>
				
			    <ul class="tabs">
	                <li><a href="#tab1">Thông tin chung</a></li>
	                <li><a href="#tab2">Nội dung sản phẩm</a></li>
	                <li><a href="#tab3">SEO Onpage</a></li>
				</ul>
				
				<div class="tab_container">
				    <div id='tab1' class="tab_content pd0">
				        <div class="formRow">
							<label class="formLeft" for="param_name">Tiêu đề:<span class="req">*</span></label>
							<div class="formRight">
								<span class="oneTwo">
									<input style="width:500px;" name="title" id="param_name" _autocheck="true" type="text" value="{{ old('title') }}" />
								</span>
								<span name="name_autocheck" class="autocheck"></span>
								<div name="name_error" class="clear error">
									@if($errors->has('title'))
										{{ $errors->first('title') }}
									@endif
								</div>
							</div>
							<div class="clear"></div>
						</div>

						<div class="formRow">
							<label class="formLeft" for="param_name">Slug:</label>
							<div class="formRight">
								<span class="oneTwo">
									<input style="width:500px;" name="slug" id="param_name" _autocheck="true" type="text" value="{{ old('slug') }}" />
								</span>
								<span name="name_autocheck" class="autocheck"></span>
								<div name="name_error" class="clear error">
									@if($errors->has('slug'))
										{{ $errors->first('slug') }}
									@endif
								</div>
							</div>
							<div class="clear"></div>
						</div>

						<div class="formRow">
							<label class="formLeft">Hình ảnh:<span class="req">*</span></label>
							<div class="formRight">
								<div class="left"><input type="file"  id="image" name="image"></div>
								<div name="image_error" class="clear error">
									@if($errors->has('image'))
										{{ $errors->first('image') }}
									@endif
								</div>
							</div>
							<div class="clear"></div>
						</div>

						<div class="formRow">
							<label class="formLeft" for="param_sale">Tóm tắt:</label>
							<div class="formRight">
								<span class="oneTwo"><textarea name="summary" id="param_sale" rows="10" cols="80">{{ old('summary') }}</textarea></span>
								<span name="sale_autocheck" class="autocheck"></span>
								<div name="name_error" class="clear error">
									@if($errors->has('summary'))
										{{ $errors->first('summary') }}
									@endif
								</div>
							</div>
							<div class="clear"></div>
						</div>

						<div class="formRow">
							<label class="formLeft" for="param_sale">Nội dung:</label>
							<div class="formRight">
								<span class="oneTwo"><textarea name="content" id="param_sale" rows="4" cols="">{{ old('content') }}</textarea></span>
								<span name="sale_autocheck" class="autocheck"></span>
								<div name="name_error" class="clear error">
									@if($errors->has('content'))
										{{ $errors->first('content') }}
									@endif
								</div>
							</div>
							<div class="clear"></div>
						</div>

						<div class="formRow hide"></div>
					</div>

					
	    		</div><!-- End tab_container-->
	        		
	    		<div class="formSubmit">
	       			<input type="submit" value="Thêm mới" class="redB" />
	       			<input type="reset" value="Hủy bỏ" class="basic" />
	       		</div>
	    		<div class="clear"></div>
			</div>
		</fieldset>
	</form>
@endsection

@section('js')
	<script type="text/javascript">
		(function($)
		{
			$(document).ready(function()
			{
				var main = $('#form');
				
				// Tabs
				main.contentTabs();
			});
		})(jQuery);
	</script>
	<script src='{{ asset('js/tinymce/tinymce.min.js') }}'></script>
	<script>
		tinymce.init({
		    selector: '#content',
		    theme: 'modern',
		    height: 300,
		    plugins: [
		      'advlist autolink link image lists charmap print preview hr anchor pagebreak spellchecker',
		      'searchreplace wordcount visualblocks visualchars code fullscreen insertdatetime media nonbreaking',
		      'save table contextmenu directionality emoticons template paste textcolor'
		    ],
		    toolbar: 'insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image | print preview media fullpage | forecolor backcolor emoticons'
		});
	</script>
@endsection

@section('css')
	<style type="text/css">
		.form input[type=number] {
		    font-size: 11px;
		    padding: 7px 6px;
		    background: white;
		    border: 1px solid #DDD;
		    width: 100%;
		    font-family: Arial, Helvetica, sans-serif;
		    box-shadow: 0 0 0 2px #f4f4f4;
		    -webkit-box-shadow: 0 0 0 2px #f4f4f4;
		    -moz-box-shadow: 0 0 0 2px #f4f4f4;
		    color: #656565;
		}	
		span.one {
		    width: 37%;
		    display: table-cell;
		    vertical-align: middle;
		    line-height: 25px;
		}
	</style>
@endsection