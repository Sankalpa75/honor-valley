$(document).ready(function() {
  $("#owl-demo").owlCarousel({
      navigation : false,
      slideSpeed : 1000,
      paginationSpeed : 500,
      singleItem : true,
      autoPlay:true,
      stopOnHover : true,
      navigationText : ["<",">"],
      transitionStyle : "fadeUp"
      /*
        transitionStyle : "fade"
        transitionStyle : "backSlide"
        transitionStyle : "goDown"
      */  
  });
});



jQuery(document).ready(function(){

        jQuery("#gallery").unitegallery({
          grid_space_between_cols:5,
          grid_space_between_rows:5,
          tile_enable_border:false,
          tile_enable_shadow:false,
          grid_padding:0,
          tile_width:250,
          tile_height:200,
          grid_num_rows:20,
        });

      });
      