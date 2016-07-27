jQuery(function(){
    jQuery('#camera_wrap_1').camera({
      thumbnails: true,
      height: '400px',
    });

    jQuery('#camera_wrap_2').camera({
      height: '400px',
      loader: 'bar',
      pagination: false,
      thumbnails: true
    });
});