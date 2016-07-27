<!DOCTYPE>
<html lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="csrf_token" content="{{ csrf_token() }}">
	<title>@yield('head.title')</title>

	<meta name="robots" content="noindex, nofollow" />

	<link rel="shortcut icon" href="{{ asset('admin/images/icon.png') }}" type="image/x-icon"/>
	<link rel="stylesheet" type="text/css" href="{{ asset('admin/crown/css/main.css') }}" />
	<link rel="stylesheet" type="text/css" href="{{ asset('admin/css/css.css') }}" media="screen" />

	<script type="text/javascript">
        var baseURL = "{!! asset('/') !!}";
    </script>
	@yield('css')
</head>

<body>
	
	<!-- Left side content -->
	<div id="left_content">
		<div id="leftSide" style="padding-top:30px;">
		
		    <!-- Account panel -->
			
		<div class="sideProfile">
			<a href="#" title="" class="profileFace"><img width="40" src="{{asset('admin/images/user.png')}}" /></a>
			<span>Xin chào: <strong></strong></span>
			<span>22 phút trước</span>
			<div class="clear"></div>
		</div>
		<div class="sidebarSep"></div>		    
				    <!-- Left navigation -->
					
		<ul id="menu" class="nav">
			<li class="home" >
				<a href="">
					<span>Bảng điều khiển</span>
					<strong></strong>
				</a>
			</li>
			<li class="tran">
				<a href="#0" class=" exp" >
					<span>Quản lý bán hàng</span>
					<strong>1</strong>
				</a>
					
				<ul class="sub">
					<li>
						<a href="">Đơn hàng</a>
					</li>
				</ul>
			</li>
			<li class="product">

				<a href="">
					<span>Tin tức</span>
					<strong>3</strong>
				</a>
			
				<ul class="sub">
					<li>
						<a href="{{ route('admin.product.list') }}">Danh mục</a>
					</li>
					<li>
						<a href="">Danh mục</a>
					</li>
					<li>
						<a href="">Mục sản phẩm</a>
					</li>
				</ul>
			</li>
			<li class="account">
					<a href="" class=" exp" >
						<span>Tài khoản</span>
						<strong>3</strong>
					</a>
					<ul class="sub">
						<li >
							<a href="">Ban quản trị</a>
						</li>
						<li >
							<a href="">Nhóm quản trị</a>
						</li>
						<li>
							<a href="">Thành viên</a>
						</li>
					</ul>
			</li>
			<li class="support">
				<a href="#">
					<span>Hỗ trợ và liên hệ</span>
					<strong>3</strong>
				</a>
			
				<ul class="sub">
					<li>
						<a href="">Nhà cung cấp</a>
					</li>
					<li>
						<a href="">Hỗ trợ	</a>
					</li>
					<li>
						<a href="">Liên hệ</a>
					</li>
				</ul>
			</li>
			<li class="content">
				<a href="#">
					<span>Nội dung</span>
					<strong>3</strong>
				</a>
				<ul class="sub">
					<li>
						<a href="">Slide</a>
					</li>
					<li >
						<a href="">Tin tức</a>
					</li>
					<li>
						<a href="">Quản lí trang</a>
					</li>
				</ul>
			</li>
			<li class="setting">
				<a href="#">
					<span>Cài đặt</span>
					<strong>1</strong>
				</a>
				<ul class="sub">
					<li>
						<a href="">Cấu hình website</a>
					</li>
				</ul>
			</li>
		</ul>
		</div>
		<div class="clear"></div>
	</div>
	
	
	<!-- Right side -->
	<div id="rightSide">
	    <!-- Account panel top -->
		<div class="topNav">
			<div class="wrapper">
				<div class="welcome">
					<span>Xin chào: <b>Admin</b></span>
				</div>
				<div class="userNav">
					<ul>
						<li><a href="" target="_blank">
							<img style="margin-top:7px;" src="{{ asset('admin/images/icons/light/home.png') }}" />
							<span>Trang chủ</span>
						</a></li>
						<!-- Logout -->
						<li><a href="">
							<img src="{{ asset('admin/images/icons/topnav/logout.png') }}" alt="" />
							<span>Đăng xuất</span>
						</a></li>
					</ul>
				</div>
				<div class="clear"></div>
			</div>
		</div>
	    <!-- Main content -->
		<!-- Common -->
<!-- Title area -->
		<div class="titleArea">
			<div class="wrapper">
				<div class="pageTitle">
					<h5>@yield('title')</h5>
					<span>@yield('title.name')</span>
				</div>
				
				<div class="horControlB menu_action">
					<ul>
						@yield('link')
					</ul>
				</div>
				
				<div class="clear"></div>
			</div>
		</div>
		<div class="line"></div>

<!-- Message -->

<!-- Main content wrapper -->
		<div class="wrapper" id="main_product">
			@yield('content')
		</div>
        <div class="clear mt30"></div>
		
	    <!-- Footer -->
	    <div id="footer">
	    	<div class="wrapper">
	        	<div>Copy © 2016 luxury.com</div>
	        </div>
	     </div>
	</div>
	<div class="clear"></div>

	<script type="text/javascript">
		var admin_url 	= '';
		var base_url 	= '';
		var public_url 	= '';
	</script>

	<script type="text/javascript" src="{{ asset('admin/js/jquery/jquery.min.js') }}"></script>
	<script type="text/javascript" src="{{ asset('admin/js/jquery/jquery-ui.min.js') }}"></script>

	<script type="text/javascript" src="{{ asset('admin/crown/js/plugins/spinner/jquery.mousewheel.js') }}"></script>

	<script type="text/javascript" src="{{ asset('admin/crown/js/plugins/forms/uniform.js') }}"></script>
	<script type="text/javascript" src="{{ asset('admin/crown/js/plugins/forms/jquery.tagsinput.min.js') }}"></script>
	<script type="text/javascript" src="{{ asset('admin/crown/js/plugins/forms/autogrowtextarea.js') }}"></script>
	<script type="text/javascript" src="{{ asset('admin/crown/js/plugins/forms/jquery.maskedinput.min.js') }}"></script>
	<script type="text/javascript" src="{{ asset('admin/crown/js/plugins/forms/jquery.inputlimiter.min.js') }}"></script>

	<script type="text/javascript" src="{{ asset('admin/crown/js/plugins/tables/datatable.js') }}"></script>
	<script type="text/javascript" src="{{ asset('admin/crown/js/plugins/tables/tablesort.min.js') }}"></script>
	<script type="text/javascript" src="{{ asset('admin/crown/js/plugins/tables/resizable.min.js') }}"></script>

	<script type="text/javascript" src="{{ asset('admin/crown/js/plugins/ui/jquery.tipsy.js') }}"></script>
	<script type="text/javascript" src="{{ asset('admin/crown/js/plugins/ui/jquery.collapsible.min.js') }}"></script>
	<script type="text/javascript" src="{{ asset('admin/crown/js/plugins/ui/jquery.progress.js') }}"></script>
	<script type="text/javascript" src="{{ asset('admin/crown/js/plugins/ui/jquery.timeentry.min.js') }}"></script>
	<script type="text/javascript" src="{{ asset('admin/crown/js/plugins/ui/jquery.colorpicker.js') }}"></script>
	<script type="text/javascript" src="{{ asset('admin/crown/js/plugins/ui/jquery.jgrowl.js') }}"></script>
	<script type="text/javascript" src="{{ asset('admin/crown/js/plugins/ui/jquery.breadcrumbs.js') }}"></script>
	<script type="text/javascript" src="{{ asset('admin/crown/js/plugins/ui/jquery.sourcerer.js') }}"></script>

	<script type="text/javascript" src="{{ asset('admin/crown/js/custom.js') }}"></script>


	<!-- <script type="text/javascript" src="{{ asset('js/ckeditor/ckeditor.js') }}"></script>  -->
	<script type="text/javascript" src="{{ asset('admin/js/jquery/chosen/chosen.jquery.min.js') }}"></script>
	<script type="text/javascript" src="{{ asset('admin/js/jquery/scrollTo/jquery.scrollTo.js') }}"></script>
	<script type="text/javascript" src="{{ asset('admin/js/jquery/number/jquery.number.min.js') }}"></script>
	<script type="text/javascript" src="{{ asset('admin/js/jquery/formatCurrency/jquery.formatCurrency-1.4.0.min.js') }}"></script>
	<script type="text/javascript" src="{{ asset('admin/js/jquery/zclip/jquery.zclip.js') }}"></script>

	<script type="text/javascript" src="{{ asset('admin/js/jquery/colorbox/jquery.colorbox.js') }}"></script>

	<link rel="stylesheet" type="text/css" href="{{ asset('admin/js/jquery/colorbox/colorbox.css') }}" media="screen" />

	<script type="text/javascript" src="{{ asset('admin/js/custom_admin.js') }}" type="text/javascript"></script>
	<script src="{{ asset('admin/js/tinymce/tinymce.min.js') }}"></script>
	<script src="{{ asset('admin/js/myscript.js') }}"></script>

	<script type="text/javascript" src="{{ asset('admin/js/ckeditor/ckeditor.js') }}"></script>

    <script type="text/javascript" src="{{ asset('admin/js/ckfinder/ckfinder.js') }}"></script>

    <!-- <script type="text/javascript">  
        CKEDITOR.replace( 'summary' );  
    </script>   -->

    <script type="text/javascript">  
        CKEDITOR.replace( 'content' );  
    </script>  

	<script>
		tinymce.init({
		    selector: '#content',
		    theme: 'modern',
		    height: 300,
		    entity_encoding : "raw",
		    plugins: [
		      'advlist autolink link image lists charmap print preview hr anchor pagebreak spellchecker',
		      'searchreplace wordcount visualblocks visualchars code fullscreen insertdatetime media nonbreaking',
		      'save table contextmenu directionality emoticons template paste textcolor'
		    ],
		    content_css: 'css/content.css',
		    toolbar: 'insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image | print preview media fullpage | forecolor backcolor emoticons'
		});
	</script>
	@yield('js')
</body>
</html>