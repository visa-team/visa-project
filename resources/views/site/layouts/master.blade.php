<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8"/>
	<title>@yield('head.title')</title>
    <link rel="stylesheet" type="text/css" href="{{asset('css/bootstrap.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('css/style.css')}}">
    <link rel="stylesheet" id="camera-css"  href="{{asset('css/camera.css')}}" type="text/css" media="all">     
    <script type='text/javascript' src="{{asset('js/jquery.min.js')}}"></script>
    <script type='text/javascript' src="{{asset('js/jquery.mobile.customized.min.js')}}"></script>
    <script type='text/javascript' src="{{asset('js/jquery.easing.1.3.js')}}"></script> 
    <script type='text/javascript' src="{{asset('js/camera.min.js')}}"></script> 
    <script type='text/javascript' src="{{asset('js/myjavasript.js')}}"></script> 
    @yield('head.css')
</head>
<body>
  <div id="wrapper">
      <div id="header">
          @include('site.partials.header')
      </div>
      <div id="content" class="">
                <!-- <div class="home-slide">
                    <div class="container">
                        <div class="camera_wrap camera_azure_skin" id="camera_wrap_1">
                            <div data-thumb="{{asset('images/slides/thumbs/bridge.jpg')}}" data-src="{{asset('images/slides/bridge.jpg')}}">
                                <div class="camera_caption fadeFromBottom">
                                    Camera is a responsive/adaptive slideshow. <em>Try to resize the browser window</em>
                                </div>
                            </div>
                            <div data-thumb="{{asset('images/slides/thumbs/leaf.jpg')}}" data-src="{{asset('images/slides/leaf.jpg')}}">
                                <div class="camera_caption fadeFromBottom">
                                    It uses a light version of jQuery mobile, <em>navigate the slides by swiping with your fingers</em>
                                </div>
                            </div>
                            <div data-thumb="{{asset('images/slides/thumbs/road.jpg')}}" data-src="{{asset('images/slides/road.jpg')}}">
                                <div class="camera_caption fadeFromBottom">
                                    <em>It's completely free</em> (even if a donation is appreciated)
                                </div>
                            </div>
                            <div data-thumb="{{asset('images/slides/thumbs/sea.jpg')}}" data-src="{{asset('images/slides/sea.jpg')}}">
                                <div class="camera_caption fadeFromBottom">
                                    Camera slideshow provides many options <em>to customize your project</em> as more as possible
                                </div>
                            </div>
                            <div data-thumb="{{asset('images/slides/thumbs/shelter.jpg')}}" data-src="{{asset('images/slides/shelter.jpg')}}">
                                <div class="camera_caption fadeFromBottom">
                                    It supports captions, HTML elements and videos and <em>it's validated in HTML5</em> (<a href="http://validator.w3.org/check?uri=http%3A%2F%2Fwww.pixedelic.com%2Fplugins%2Fcamera%2F&amp;charset=%28detect+automatically%29&amp;doctype=Inline&amp;group=0&amp;user-agent=W3C_Validator%2F1.2" target="_blank">have a look</a>)
                                </div>
                            </div>
                            <div data-thumb="{{asset('images/slides/thumbs/tree.jpg')}}" data-src="{{asset('images/slides/tree.jpg')}}">
                                <div class="camera_caption fadeFromBottom">
                                    Different color skins and layouts available, <em>fullscreen ready too</em>
                                </div>
                            </div>
                        </div>
                  </div>
                </div> -->
                @yield('content.slide')
          <div class="container" style="margin-bottom:20px;">
              @include('site.partials.content_top')
          </div>
          <div class="container">
              <!-- <div class="row">
                  @include('site.partials.content_center')
                  <div class="col-md-6" style="margin-top:50px;">
                      <img src="{{asset('images/003.jpg')}}">
                  </div>
              </div> -->
              @yield('content.top.img')
          </div>
          <div class="container content-center">
              @yield('content.center')
              <!-- <h3>Learn more</h3>
              <div class="row">
                  <div class="col-md-3">
                      <div class="photo-content">
                          <a href="#"><img src="{{asset('images/visa-information.jpg')}}"></a>
                      </div>
                      <a href=""><h4>How it Works?</h4></a>
                      <div class="title-content">Apply online for a visa approval letter in 4 easy steps.</div>
                  </div>
                  <div class="col-md-3">
                      <div class="photo-content">
                          <a href="#"><img src="{{asset('images/visa-information.jpg')}}"></a>
                      </div>
                      <a href=""><h4>How it Works?</h4></a>
                      <div class="title-content">Apply online for a visa approval letter in 4 easy steps.</div>
                  </div>
                  <div class="col-md-3">
                      <div class="photo-content">
                          <a href="#"><img src="{{asset('images/visa-information.jpg')}}"></a>
                      </div>
                      <a href=""><h4>How it Works?</h4></a>
                      <div class="title-content">Apply online for a visa approval letter in 4 easy steps.</div>
                  </div>
                  <div class="col-md-3">
                      <div class="photo-content">
                          <a href="#"><img src="{{asset('images/visa-information.jpg')}}"></a>
                      </div>
                      <a href=""><h4>How it Works?</h4></a>
                      <div class="title-content">Apply online for a visa approval letter in 4 easy steps.</div>
                  </div>
              </div> -->
          </div>
          <div class="container content-center">
              @yield('content.center.1')
              <!-- <h3>More Our Extra Services</h3>
              <div class="row">
                  <div class="col-md-3">
                      <div class="photo-contetn">
                          <a href="#"><img src="{{asset('images/visa-information.jpg')}}"></a>
                      </div>
                      <a href=""><h4>How it Works?</h4></a>
                      <div class="title-content">Apply online for a visa approval letter in 4 easy steps.</div>
                  </div>
                  <div class="col-md-3">
                      <div class="photo-content">
                          <a href="#"><img src="{{asset('images/visa-information.jpg')}}"></a>
                      </div>
                      <a href=""><h4>How it Works?</h4></a>
                      <div class="title-content">Apply online for a visa approval letter in 4 easy steps.</div>
                  </div>
                  <div class="col-md-3">
                      <div class="photo-content">
                          <a href="#"><img src="{{asset('images/visa-information.jpg')}}"></a>
                      </div>
                      <a href=""><h4>How it Works?</h4></a>
                      <div class="title-content">Apply online for a visa approval letter in 4 easy steps.</div>
                  </div>
                  <div class="col-md-3">
                      <div class="photo-content">
                          <a href="#"><img src="{{asset('images/visa-information.jpg')}}"></a>
                      </div>
                      <a href=""><h4>How it Works?</h4></a>
                      <div class="title-content">Apply online for a visa approval letter in 4 easy steps.</div>
                  </div>
              </div> -->
          </div>
          <div class="container content-bottom">
              <div class="row">
                <div class="col-md-12 photo">
                    <img src="{{asset('images/banner.jpg')}}" />
                </div>
              </div>
          </div>
      </div>
      <div id="footer">
          @include('site.partials.footer')
      </div>
  </div>
</body>
</html>