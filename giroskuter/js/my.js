jQuery(function($){
   $(".tel").mask("(999) 999-9999");
});

$('.slideth').lightSlider({
    gallery: true,
    item: 1,
    loop: true,
    controls:false,
    centerSlide: true,
    thumbItem: 4,
        responsive : [
            {
                breakpoint:800,
                settings: {
                    thumbItem: 3,
                  }
            },
            {
                breakpoint:480,
                settings: {
                    thumbItem: 2,
                  }
            }
        ]
});
$('.owl1').owlCarousel({
    loop:true,
    margin:20,
    nav:true,
    navText: ['',''],
    responsive:{
        0:{
            items:1
        },
        600:{
            items:1
        },
        1000:{
            items:1
        }
    }
});
$('.owl11').owlCarousel({
    loop:true,
    margin:20,
    autoHeight:false,
    nav:true,
    navText: ['',''],
    responsive:{
        0:{
            items:1
        },
        600:{
            items:1
        },
        1000:{
            items:1
        }
    }
});
$('.owl2').owlCarousel({
    loop:true,
    margin:20,
    autoHeight:true,
    nav:true,
    autoplay:true,
    autoplayTimeout:3000,
    autoplayHoverPause:true,
    navText: ['',''],
    responsive:{
        0:{
            items:1
        },
        600:{
            items:1
        },
        1000:{
            items:1
        }
    }
});


	$(".modform").validate({
			rules: {
        name: {
          required: true
        },
                mail: {
          required: true,
                    email:true
        }
      },
			submitHandler: function(form) {
			$.ajax({
			type: "POST", 
			url: "mail.php", 
			data: $(".modform").serialize(), 
			success: function(html)
			{		
            $('#t').modal('toggle');
            $('#m1').modal('toggle');
			} 
			}); 
			return false;
		}
	});

	$(".frm1").validate({
			rules: {
        tel: {
          required: true
        },
                name: {
          required: true,
        }
      },
			submitHandler: function(form) {
			$.ajax({
			type: "POST", 
			url: "mail.php", 
			data: $(".frm1").serialize(), 
			success: function(html)
			{		
            $('#t').modal('toggle');
			} 
			}); 
			return false;
		}
	});

	$(".frm2").validate({
			rules: {
        tel: {
          required: true
        },
                name: {
          required: true,
        }
      },
			submitHandler: function(form) {
			$.ajax({
			type: "POST", 
			url: "mail.php", 
			data: $(".frm2").serialize(), 
			success: function(html)
			{		
            $('#t').modal('toggle');
			} 
			}); 
			return false;
		}
	});



$(".frm3").validate({
      rules: {
        tel: {
          required: true
        },
                name: {
          required: true,
        }
      },
      submitHandler: function(form) {
      $.ajax({
      type: "POST", 
      url: "mail.php", 
      data: $(".frm3").serialize(), 
      success: function(html)
      {   
            $('#t').modal('toggle');
      } 
      }); 
      return false;
    }
  });


      $(document).ready(function() {
 
$( ".scrollme" ).click(function() {
var vverx = $('.mainland').offset().top;

$('html, body').animate({ scrollTop: vverx }, 1000);

});
    
});

      $(document).ready(function() {
 
$('.knowmore').click(function(){
        
        $('body').animate({
            scrollTop: $('#parbl').offset().top}, 1000);
        return false; 
});
    
});









$( ".sbi-waves" ).click(function() {
  $('.icnfrma').toggleClass('tam');
    $('.one .frm1 .tel').focus();
});



$( ".knowmore" ).click(function() {
var scrollTop = $('#parbl').offset().top;



$('html, body').animate({ scrollTop: scrollTop }, 1000);

});




$( ".but1" ).click(function() {
  $('.parallaxed .wtatform').val('РЎРєРёРґРєР° 20% РЅР° РјРѕРґРµР»СЊ SBW CLASSIC');
});
$( ".but2" ).click(function() {
  $('.parallaxed .wtatform').val('РЎРєРёРґРєР° 20% РЅР° РјРѕРґРµР»СЊ SMART BALANCE GENESIS');
});
$( ".but3" ).click(function() {
  $('.parallaxed .wtatform').val('РЎРєРёРґРєР° 20% РЅР° РјРѕРґРµР»СЊ SBW SUV');
});
$( ".but4" ).click(function() {
  $('.parallaxed .wtatform').val('РЎРєРёРґРєР° 20% РЅР° РјРѕРґРµР»СЊ SBW TRANSFORMER');
});

$( ".but11" ).click(function() {
  $('.modform .wtatform').val('Р“Р°СЂР°РЅС‚РёР№РЅРѕРµ РѕР±СЃР»СѓР¶РёРІР°РЅРёРµ');
});
$( ".but22" ).click(function() {
  $('.modform .wtatform').val('Р—Р°РїС‡Р°СЃС‚Рё');
});
$( ".but33" ).click(function() {
  $('.modform .wtatform').val('РќРµРіР°СЂР°РЅС‚РёР№РЅС‹Р№ Р РµРјРѕРЅС‚');
});