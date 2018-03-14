jQuery(document).ready(function () {

  // Hide all elements which should be hidden by default
  jQuery('.is_hidden').each(function(){
    var id = jQuery(this).attr('id');
    jQuery('#'+id).css('display','none');
  });
  prepareMath();


  jQuery('body').on('change', '.field_class, .field_class_checkbox', function(){
    refreshMath(jQuery(this).parents('.nform').attr('id'), this);
  });
  jQuery('body').on('input', '.field_class', function(){
    refreshMath(jQuery(this).parents('.nform').attr('id'), this);
  });

  /* Conditional Logic (Combined) */
  jQuery('body').on('change', '.field_class, .field_class_checkbox', function(){
    eartforms_cl(this);
  });
  jQuery('body').on('input', '.field_class', function(){
    eartforms_cl(this);
  });

  jQuery('.nform .getreferal').each(function(){
    var refid = getCookieFC("idev");
    if (refid != null) {
	    if (refid.indexOf('-') > 0) {
	    	refid = refid.substr(0,refid.indexOf('-'));
	    }
	    jQuery(this).val(refid);
    } 
  });

  jQuery('.is_hidden').hide();

  var width = (window.innerWidth > 0) ? window.innerWidth : screen.width;



  if (width<=740)
  {

    jQuery('.add-on').each(function(){
      var he = jQuery(this).prev('input').outerHeight();
      he = parseInt(he);
      jQuery(this).css({'height':he+'px'});
    });

    jQuery('.c_image').each(function(){
      var he = jQuery(this).next('input').outerHeight();
      he = parseInt(he);
      jQuery(this).css({'height':he+'px'});
    });
  }

  load_user_form();

});

setInterval(function()
{
  jQuery('.save_form').each(function()
  {
    var id = jQuery(this).attr('id').split('_');
    save_user_form(id[1], jQuery(this).attr('id'));
  });
}, 3000);