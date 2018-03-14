ymaps.ready(init);

var myMap, 

    myPlacemark;



function init(){ 

	var coordinates = $('.coordinates').attr('rel');

	var zoom = $('.coordinates').attr('title');

	// var $info = $('.contact_info').html();



	if(coordinates){

		var split = coordinates.split(',');	



	    myMap = new ymaps.Map("map", {

	        center: [split[0], split[1]],

	        zoom: zoom

	    }); 



	    myPlacemark = new ymaps.Placemark([split[0], split[1]], {

	        // balloonContent: $info

	    });

	    

	    myMap.geoObjects.add(myPlacemark);

	}

    

}









$(function(){

	$('.banners').each(function(){
    	var $item = $('li', this);
    	var $prev = $('.prev', this);
    	var $next = $('.next', this);
    	var $num = $('.num span', this);
    	var $size = $('.num ins', this);
    	var time = $(this).data('time');

    	$item.first().addClass('active').fadeIn();
    	$size.text($item.length);

    	$prev.click(function(){
    		var index = $item.filter('.active').index();
    		if(index == 0){
    			index = $item.length
    		}
    		$item.eq(index - 1).addClass('active').fadeIn().siblings().removeClass('active').hide();
    		$num.text(index)
    	});

    	$next.click(function(){
    		var index = $item.filter('.active').index();
    		if(index == $item.length -1){
    			index = -1
    		}
    		$item.eq(index + 1).addClass('active').fadeIn().siblings().removeClass('active').hide();
    		$num.text(index + 2)
    	});

    	setInterval(function(){
    		$next.click();
    		console.log('ok')
    	}, time*1000);
    });



	$('input[name="phone"]').bind('change keyup input click', function(){



		 if ($(this).val().match(/[^0-9()\-\+]/g)) {

            $(this).val($(this).val().replace(/[^0-9()\-\+]/g,''));

        }

	});



	$('.form form').each(function(){

		var $this = $(this);

		var goal = $this.data('goal');



        $this.submit(function(e){

        	e.preventDefault();



            var i = true;

            var email = $this.data('email');



            $this.find('input[type="text"]').removeClass('error');



            if($this.find('input[name="phone"]').val() == ''){

            	i = false

            	$this.find('input[name="phone"]').addClass('error');

            }



            var $items = $this.find('[name]');

            var arr = [];



            $items.each(function(){

            	var nam = $(this).data('name');

            	var val = $(this).val();

            	arr.push(nam+': '+val);

            });



            var m_data = '';



            for(q=0; q <= arr.length-1; q++){

            	m_data = m_data+arr[q]+'\n';

            }



            if(i == true){

            	var m_method=$this.attr('method');

	            var m_action=$this.attr('action');



	            $.ajax({

	                type: m_method,

	                url: m_action,

	                data: {m_data:m_data,email:email},

	                success: function(result){

	                	yaCounter36539175.reachGoal(goal);

	                    $('input[type="text"],textarea').val('');

	                    $('.popup_callback, .popup_big').hide();

	                    $('.popup_thank').fadeIn();

                    	$('.bg_popup').fadeIn();



                    	$('.bg_popup').click(function(){

                    		$('.popup_thank').fadeOut()

	                    	$('.bg_popup').fadeOut()

                    	});



	                    setTimeout(function(){

	                    	$('.popup_thank').fadeOut()

	                    	$('.bg_popup').fadeOut()

	                    }, 5000);

	                }

	            });

            }

        });



    });



	if($('.complect form').data('check') == 0){

		$('.complect .form, .complect h4').remove();

	}

	if($('.banners').data('banner') == 0){

		$('.banners').remove();

	}



	// $('.list_video, .project_inset').each(function(){

	// 	var $link = $(this).text().split('com/');

	// 	$(this).html('<iframe class="player1" frameborder="0" scrolling="no" src="http://player.vimeo.com/video/'+$link[1]+'?controls=0&title=0&amp&byline=0&amp&portrait=0"></iframe>');

	// });



	$('.open_popup_callback').click(function(){

		$('.popup_callback').fadeIn();

		$('.bg_popup').fadeIn();



		$('.bg_popup').click(function(){

			$('.popup_callback').fadeOut();

			$('.bg_popup').fadeOut();

		});

	});



	$('.catalog').each(function(){

		var $btns = $('.catalog_btns button', this);

		var $item = $('.catalog_block', this);



		$('.show button', this).click(function(){

			var link = $('.catalog_btns button.active').data('link');



			$(this).parent('.show').hide();



			$('.catalog_blocks ul').load(link, function(){



				$('.catalog_block .colors').each(function(){



					if($(this).text() == ''){

						$(this).hide();

					}



					// var $(this) = $(this);

					var string = $(this).html().split('||');



					$(this).html('');



					for(var i = 0; i < string.length; i++){

						var current = string.slice(i, i+1);

						var dan = String(current).split('::');



						$(this).append('<span style="background: '+dan[0]+';"></span>');

						

					}

				});



				$('.catalog_block .skidka').each(function(){

					if($(this).text() == ''){

						$(this).remove()

					}

				});



				$('.catalog_block ul li .char').each(function(){



					if($(this).text() == ''){

						$(this).hide();

					}



					var $this = $(this);

					var string = $this.html().split('||');



					$this.html('');



					for(var i = 0; i < string.length; i++){

						var current = string.slice(i, i+1);

						var dan = String(current).split('::');



						$this.append('<p>'+dan[0]+': <span>'+dan[1]+'</span></p>');

						

					}



					$(this).find('p').slice(6).addClass('hide');

				});



				$('.price_block button, .catalog_block ul li .img, .catalog_block ul li .char').click(function(){



					var $button = $(this);



					$('.popup_big input[name="goods"]').val($(this).parents('li').find('h3').text()+', '+'Цена: '+$(this).parents('li').find('.price_block div:first ins').text());

					$('.popup_big .popup_left .title').html($(this).parents('li').find('h3').html());

					$('.popup_big .desc').html($(this).parents('li').find('.goods_desc').html());

					$('.popup_big .char').html($(this).parents('li').find('.char').html());

					$('.popup_big .price').html('Цена: '+$(this).parents('li').find('.price_block div:first').html());

					$('.popup_big .colors').html($(this).parents('li').find('.colors').html());

					$('.popup_big .skidka').html($(this).parents('li').find('.skidka').html());



					$('.popup_big .skidka').each(function(){

						if($(this).text() == ''){

							$(this).hide();

						}

						else{

							$(this).show()

						}

					});



					$('.popup_big .colors').each(function(){

						if($(this).find('span').length == 1){

							$(this).hide();

						}

						else{

							$(this).show()

						}

					});





					$('.popup_big .gallery').html($(this).parents('li').find('.goods_imgs').html());



					$('.popup_big .gallery').each(function(){



						// if($(this).text() == ''){

						// 	$(this).hide();

						// }



						var $this = $(this);

						var string = $this.html().split('||');



						$this.html('');



						$(this).append('<div class="main_img" />');

						$(this).append('<div class="mini_img" />');



						$('.main_img').append('<img src="'+$button.parents('li').find('.img').find('img').attr('src')+'" >');

						$('.mini_img').append('<div><img src="'+$button.parents('li').find('.img').find('img').attr('src')+'" ></div>');



						for(var i = 0; i < string.length; i++){

							var current = string.slice(i, i+1);

							var dan = String(current).split('::');



							$this.find('.main_img').append('<img src="'+dan[0]+'" >');

							$this.find('.mini_img').append('<div><img src="'+dan[0]+'" ></div>');

						}



						var $btn = $('.mini_img div', this);

						var $main = $('.main_img img', this);



						$btn.click(function(){

							$main.eq($(this).index()).addClass('active').siblings().removeClass('active');

							$(this).addClass('active').siblings().removeClass('active');

						}).first().click();

					});



					$('.popup_big').css({'top': $(window).scrollTop() +100}).fadeIn();

					$('.bg_popup').fadeIn();



					$('.bg_popup').click(function(){

						$('.popup_big').fadeOut();

						$('.bg_popup').fadeOut();

					});

				});



			});

		});



		$btns.click(function(){

			// $item.eq($(this).index()).fadeIn().siblings().hide();

			var link = $(this).data('link');

			var $this = $(this);

			$(this).addClass('active').siblings().removeClass('active');



			$('.catalog_blocks ul').load(link, function(){



				if($('.catalog_block li').length < $('.catalog_blocks').data('goodsview')+1){

					$('.show').hide();

				}

				else{

					$('.show').show();

				}



				if($this.hasClass('category_link')){

					$('.catalog_block li').slice($('.catalog_blocks').data('goodsview')).remove();

				}



				$('.catalog_block .colors').each(function(){



					if($(this).text() == ''){

						$(this).hide();

					}



					// var $(this) = $(this);

					var string = $(this).html().split('||');



					$(this).html('');



					for(var i = 0; i < string.length; i++){

						var current = string.slice(i, i+1);

						var dan = String(current).split('::');



						$(this).append('<span style="background: '+dan[0]+';"></span>');

						

					}

				});



				$('.catalog_block .skidka').each(function(){

					if($(this).text() == ''){

						$(this).remove()

					}

				});



				$('.catalog_block ul li .char').each(function(){



					if($(this).text() == ''){

						$(this).hide();

					}



					var $this = $(this);

					var string = $this.html().split('||');



					$this.html('');



					for(var i = 0; i < string.length; i++){

						var current = string.slice(i, i+1);

						var dan = String(current).split('::');



						$this.append('<p>'+dan[0]+': <span>'+dan[1]+'</span></p>');

						

					}



					$(this).find('p').slice(6).addClass('hide');

				});



				$('.price_block button, .catalog_block ul li .img, .catalog_block ul li .char').click(function(){



					var $button = $(this);



					$('.popup_big input[name="goods"]').val($(this).parents('li').find('h3').text()+', '+'Цена: '+$(this).parents('li').find('.price_block div:first ins').text());

					$('.popup_big .popup_left .title').html($(this).parents('li').find('h3').html());

					$('.popup_big .desc').html($(this).parents('li').find('.goods_desc').html());

					$('.popup_big .char').html($(this).parents('li').find('.char').html());

					$('.popup_big .price').html('Цена: '+$(this).parents('li').find('.price_block div:first').html());

					$('.popup_big .colors').html($(this).parents('li').find('.colors').html());

					$('.popup_big .skidka').html($(this).parents('li').find('.skidka').html());



					$('.popup_big .skidka').each(function(){

						if($(this).text() == ''){

							$(this).hide();

						}

						else{

							$(this).show()

						}

					});



					$('.popup_big .colors').each(function(){

						if($(this).find('span').length == 1){

							$(this).hide();

						}

						else{

							$(this).show()

						}

					});





					$('.popup_big .gallery').html($(this).parents('li').find('.goods_imgs').html());



					$('.popup_big .gallery').each(function(){



						// if($(this).text() == ''){

						// 	$(this).hide();

						// }



						var $this = $(this);

						var string = $this.html().split('||');



						$this.html('');



						$(this).append('<div class="main_img" />');

						$(this).append('<div class="mini_img" />');



						$('.main_img').append('<img src="'+$button.parents('li').find('.img').find('img').attr('src')+'" >');

						$('.mini_img').append('<div><img src="'+$button.parents('li').find('.img').find('img').attr('src')+'" ></div>');



						for(var i = 0; i < string.length; i++){

							var current = string.slice(i, i+1);

							var dan = String(current).split('::');



							$this.find('.main_img').append('<img src="'+dan[0]+'" >');

							$this.find('.mini_img').append('<div><img src="'+dan[0]+'" ></div>');

						}



						var $btn = $('.mini_img div', this);

						var $main = $('.main_img img', this);



						$btn.click(function(){

							$main.eq($(this).index()).addClass('active').siblings().removeClass('active');

							$(this).addClass('active').siblings().removeClass('active');

						}).first().click();

					});



					$('.popup_big').css({'top': $(window).scrollTop() +100}).fadeIn();

					$('.bg_popup').fadeIn();



					$('.bg_popup').click(function(){

						$('.popup_big').fadeOut();

						$('.bg_popup').fadeOut();

					});

				});



			});





		}).eq(0).click();



		if(window.location.hash == '#giro'){

			$btns.eq(0).click();

		}

	});

































	// $('.catalog_block .colors').each(function(){



	// 	if($(this).text() == ''){

	// 		$(this).hide();

	// 	}



	// 	var $this = $(this);

	// 	var string = $this.html().split('||');



	// 	$this.html('');



	// 	for(var i = 0; i < string.length; i++){

	// 		var current = string.slice(i, i+1);

	// 		var dan = String(current).split('::');



	// 		$this.append('<span style="background: '+dan[0]+';"></span>');

			

	// 	}

	// });



	$('.triggers ul').each(function(){



		if($(this).text() == ''){

			$(this).hide();

		}



		var $this = $(this);

		var string = $this.html().split('||');



		$this.html('');



		for(var i = 0; i < string.length; i++){

			var current = string.slice(i, i+1);

			var dan = String(current).split('::');



			$this.append('<li><img src="'+dan[0]+'">'+dan[1]+'</li>');

			

		}

	});



	$('.circle_titles').each(function(){



		if($(this).text() == ''){

			$(this).hide();

		}



		var $this = $(this);

		var string = $this.html().split('||');



		$this.html('');



		for(var i = 0; i < string.length; i++){

			var current = string.slice(i, i+1);

			var dan = String(current).split('::');



			$this.append('<div><span>'+dan[1]+'</span><ins>'+dan[2]+'</ins></div>');

			

		}

	});



	$('.main_circle').each(function(){



		if($(this).text() == ''){

			$(this).hide();

		}



		var $this = $(this);

		var string = $this.html().split('||');



		$this.html('');



		for(var i = 0; i < string.length; i++){

			var current = string.slice(i, i+1);

			var dan = String(current).split('::');



			$this.append('<img src="'+dan[0]+'">');

			

		}

	});



	$('.what_pay ul').each(function(){



		if($(this).text() == ''){

			$(this).hide();

		}



		var $this = $(this);

		var string = $this.html().split('||');



		$this.html('');

		var w = 0;



		for(var i = 0; i < string.length; i++){

			var current = string.slice(i, i+1);

			var dan = String(current).split('::');

			w++



			$this.append('<li><img src="'+dan[0]+'"><p><span>'+w+'. </span>'+dan[1]+'</p><ins>'+dan[2]+'</ins></li>');

			

		}

	});



	$('.shema_mono ul').each(function(){



		if($(this).text() == ''){

			$(this).hide();

		}



		var $this = $(this);

		var string = $this.html().split('||');



		$this.html('');

		var w = 0;



		for(var i = 0; i < string.length; i++){

			var current = string.slice(i, i+1);

			var dan = String(current).split('::');

			w++



			$this.append('<li><ins>'+w+'</ins><span>'+dan[0]+'</span><p>'+dan[1]+'</p></li>');

			

		}

	});



	$('.shema_giro ul').each(function(){



		if($(this).text() == ''){

			$(this).hide();

		}



		var $this = $(this);

		var string = $this.html().split('||');



		$this.html('');

		var w = 0;



		for(var i = 0; i < string.length; i++){

			var current = string.slice(i, i+1);

			var dan = String(current).split('::');

			w++



			$this.append('<li><ins>'+w+'</ins><span>'+dan[0]+'</span><p>'+dan[1]+'</p></li>');

			

		}

	});



	$('.logos').each(function(){



		if($(this).text() == ''){

			$(this).hide();

		}



		var $this = $(this);

		var string = $this.html().split('||');



		$this.html('');

		var w = 0;



		for(var i = 0; i < string.length; i++){

			var current = string.slice(i, i+1);

			var dan = String(current).split('::');

			w++



			$this.append('<div class="logo"><img src="'+dan[0]+'" alt=""></div>');

			

		}

	});



	$('.faq ul').each(function(){



		if($(this).text() == ''){

			$(this).hide();

		}



		var $this = $(this);

		var string = $this.html().split('||');



		$this.html('');

		var w = 0;



		for(var i = 0; i < string.length; i++){

			var current = string.slice(i, i+1);

			var dan = String(current).split('::');

			w++



			// $this.append('<div class="logo"><img src="'+dan[0]+'" alt=""></div>');

			$this.append('<li><div><i>'+w+'</i>'+dan[0]+'</div><p><span>'+dan[1]+'</span></p></li>');

			

		}

	});





	$('.open_popup_conf').click(function(){

		$('.popup_conf').css({'top': $(window).scrollTop() + 100}).fadeIn();

		$('.bg_popup').fadeIn();



		$('.bg_popup').click(function(){

			$('.popup_conf').fadeOut();

			$('.bg_popup').fadeOut();

		});

	});































	$('.price_block span').each(function(){

		if($(this).text() == ''){

			$(this).remove().siblings('<br>').remove()

		}

	});



	$(".menu_scroll a").click(function () { 

	    elementClick = $(this).attr("href");

	    destination = $(elementClick).offset().top-50;

        $('body, html').animate( { scrollTop: destination }, 1100 );

	    return false;

    });



    $('.komkol').each(function(){

		var $this = $(this);

		var $item1 = $('.block_img_1', this);

		var $item2 = $('.block_img_2', this);

		var $item3 = $('.block_img_3', this);

		var $item4 = $('.block_img_4', this);

		var $item5 = $('.block_img_5', this);

		var $item6 = $('.block_img_6', this);



		var $item7 = $('.block_img_7', this);

		var $item8 = $('.block_img_8', this);

		var $item9 = $('.block_img_9', this);

		var $item10 = $('.block_img_10', this);

		var $item11 = $('.block_img_11', this);



		var $btn1 = $('.tab_btns button').first();

		var $btn2 = $('.tab_btns button').last();



		$(window).scroll(function(){



			var scrollTop = $(window).scrollTop() - $('.complect_komkol').offset().top;



			if($(window).scrollTop() >= $('.complect_komkol').offset().top - 120){

				$('.complect_komkol_fixed, .ob').addClass('fixed');

			}

			else{

				$('.complect_komkol_fixed, .ob').removeClass('fixed');

			}



		});



		$btn1.click(function(){

			$('.komgiro_item').fadeIn();

			$('.komkol_item').hide();

			$('.ob_mono').hide();

			$('.ob_giro').fadeIn();

			$(this).addClass('active').siblings().removeClass('active');

		});



		$btn2.click(function(){

			$('.komgiro_item').hide();

			$('.komkol_item').fadeIn();

			$('.ob_mono').fadeIn();

			$('.ob_giro').hide();

			$(this).addClass('active').siblings().removeClass('active');

		}).click();



		if(window.location.hash == '#giro'){

			$btn1.click();

		}

	});



    $('.mono_giro').load('mono_giro.html');



	var $animate = $('.animate');



	$('.triggers').addClass('on');

	var i = true;

	var cs = true;

	var pv_count = true;



	$(window).scroll(function(){



		$animate.each(function(){

			if($(window).scrollTop() + $(window).height() -100 > $(this).offset().top){

				$(this).addClass('on');

			}

		});



		if($(window).scrollTop() + $(window).height() -100 > $('.carousel li').offset().top && i == true){

			$('.carousel li').first().addClass('active');

			i = false

		}





		if($(window).scrollTop() >= $('.menu').offset().top){

			$('.menu_scroll').addClass('active');

		}

		else{

			$('.menu_scroll').removeClass('active');

		}



		$('section[id]').each(function(){

			var id = $(this).attr('id');

			// console.log($('.menu_scroll li[id="#'+id+'"]'))



			if($(window).scrollTop() > $(this).offset().top - 100){

				$('.menu_scroll li a[href="#'+id+'"]').parent('li').addClass('active').siblings().removeClass('active');

			}

			else{

				// $('.menu_scroll li').eq(0).removeClass('active');

				// $('.menu_scroll li').removeClass('active');

			}

		});



		if($(window).scrollTop() >= $('.circle_slider').offset().top-$(window).height()/3 && cs == true){

			// $('.mono_giro').load('mono_giro.html').bind(circleSlider());

			circleSlider()

			cs = false

		}



		if($(window).scrollTop() > $('.photo_video').offset().top - $(window).height()){



			if(pv_count == true){



				$('.photo_video_block').load('foto-i-video.html', function(){



					$('.photo_video ul').each(function(){



						if($(this).text() == ''){

							$(this).hide();

						}



						var $this = $(this);

						var string = $this.html().split('||');



						$this.html('');



						for(var i = 0; i < string.length; i++){

							var current = string.slice(i, i+1);

							var dan = String(current).split('::');



							$this.append('<li><a rel="gallery" class="fancy" style="background-image:url('+dan[0]+')" href="'+dan[0]+'"></a></li>');

							

						}



						$(this).find('p').slice(6).addClass('hide');

					});



					$('.video').each(function(){



						if($(this).text() == ''){

							$(this).hide();

						}



						var $this = $(this);

						var string = $this.html().split('||');



						$this.html('');



						for(var i = 0; i < string.length; i++){

							var current = string.slice(i, i+1);

							var current = String(current).split('=');

							var current = String(current[1]).split('&');



							// $this.append('<iframe width="500" height="315" src="https://www.youtube.com/embed/reKGWU6wU7g" frameborder="0" allowfullscreen></iframe>');

							// $this.append('<iframe width="560" height="315" src="https://www.youtube.com/embed/'+current[1]+'?rel=0&amp;showinfo=0" frameborder="0" allowfullscreen></iframe>');

							$this.append('<iframe src="https://www.youtube.com/embed/'+current[0]+'?rel=0&amp;showinfo=0" frameborder="0" allowfullscreen></iframe>');

							

						}



						$(this).find('p').slice(6).addClass('hide');

					});



					$('.photo_video ul li a').fancybox();

				});

				

				pv_count = false;

			}



		}



	});



	// setInterval(function(){

	// 	$('.up_left').click();

	// }, 5000);



	$('.faq').each(function(){

		var $item = $('li div', this);



		$('li', this).each(function(){

			$(this).find('i').text($(this).index()+1);

		});



		$item.click(function(){

			if($(this).hasClass('active')){

				$(this).removeClass('active').siblings('p').slideUp();

			}

			else{

				$(this).addClass('active').siblings('p').slideDown();

				$(this).parent('li').siblings().find('p').slideUp().siblings('div').removeClass('active');

			}

		});

	});



	$('.tabs_block').each(function(){

		var $btn = $('.tabs_btns button', this);

		var $tab = $('.tab', this);



		$btn.click(function(){

			$tab.eq($(this).index()).addClass('active').siblings().removeClass('active');

			$(this).addClass('active').siblings().removeClass('active');

			// $(window).resize();

		}).first().click();



		if(window.location.hash == '#giro'){

			$btn.last().click();

		}

	});



	$(window).load(function() {

	  $('.shtora1').twentytwenty();

	  $('.princit_top').addClass('active');



	  $('.shtora2').twentytwenty();

	  $('.princit_top').addClass('active');

	});



	$('img').each(function(){

		if($(this).attr('src') == ''){

			$(this).remove();

		}

	});



	$(window).resize(function(){

		$('header').height($(window).height());

		$('.kolesa img').height($('header').height() / 2);



		if($(window).height() < 790){

			$('header').addClass('medium_height');

			$('.kolesa img').height($('header').height() / 2.3);

		}

		else{

			$('header').removeClass('medium_height');

		}

	}).resize();



	$('.carousel').each(function(){

		var $prev = $(this).siblings('.btns').find('.prev');

		var $next = $(this).siblings('.btns').find('.next');

		var $item = $('li', this);



		// $item.first().addClass('active');



		$prev.click(function(){

			var index = $item.filter('.active').index();

			if(index == 0){

				index = $item.length

			}

			$item.eq(index-1).addClass('active').siblings().removeClass('active');

		});



		$next.click(function(){

			var index = $item.filter('.active').index();

			if(index == $item.length -1){

				index = -1

			}

			$item.eq(index+1).addClass('active').siblings().removeClass('active');

		});

	});



	$('.ob i').hover(function(){

		$(this).parent('span').addClass('hover');

		},

		function(){

			$(this).parent('span').removeClass('hover');

		}

	);



	$(window).scroll();



});



function circleSlider(){



	setTimeout(function(){



		$('.select_mono_giro button').click(function(){

			$('.mono_giro div').eq($(this).index()).addClass('active').siblings().removeClass('active');

			$(this).addClass('active').siblings().removeClass('active');

		}).first().click();



		if(window.location.hash == '#giro'){

			$('.select_mono_giro button').last().click();

		}



		$('.circle_block').each(function(){

			var $btn_up_right = $('.up_right', this);

			var $btn_up_left = $('.up_left', this);



			var $circle = $('.circle', this);

			var $span = $('.circle span');

			var $mainCircle = $('.main_circle img');

			var $mono = $('.mono img');

			var $giro = $('.giro img');

			var $circle_titles = $('.circle_titles div');



			$span.first().addClass('active');

			$mainCircle.first().addClass('active');

			$mono.first().addClass('active');

			$giro.first().addClass('active');

			$circle_titles.first().addClass('active');



			var road = 0;



			 $('.road_left', this).click(function(){

				road = road - 45;

				$circle.css({'transform':'rotate('+road+'deg'+')'});



				var index = $span.filter('.active').index();

				if(index == $span.length - 1){

					index = -1

				}

				$span.eq(index+1).addClass('active').siblings().removeClass('active');

				$mainCircle.eq(index+1).addClass('active').siblings().removeClass('active');

				$circle_titles.eq(index+1).addClass('active').siblings().removeClass('active');





				var indexMono = $mono.filter('.active').index();



				if(indexMono == $mono.length - 1){

					indexMono = -1

				}



				var i = 0;



				var set = setInterval(function(){

					if(i < 3){

						$mono.eq(indexMono+1).addClass('active').siblings().removeClass('active');

						$giro.eq(indexMono+1).addClass('active').siblings().removeClass('active');

						i++

						indexMono++

					}

					else{

						clearInterval(set)

					}

				}, 70);

			});



			$('.road_right', this).click(function(){

				road = road + 45;

				$circle.css({'transform':'rotate('+road+'deg'+')'});



				var index = $span.filter('.active').index();

				if(index == 0){

					index = $span.length

				}

				$span.eq(index-1).addClass('active').siblings().removeClass('active');

				$mainCircle.eq(index-1).addClass('active').siblings().removeClass('active');

				$circle_titles.eq(index-1).addClass('active').siblings().removeClass('active');





				var indexMono = $mono.filter('.active').index();



				if(indexMono == 0){

					indexMono = $mono.length

				}



				var i = 0;



				var set = setInterval(function(){

					console.log(i)

					if(i < 3){

						$mono.eq(indexMono-1).addClass('active').siblings().removeClass('active');

						$giro.eq(indexMono-1).addClass('active').siblings().removeClass('active');

						i++

						indexMono--

					}

					else{

						clearInterval(set)

					}

				}, 70);

			});

		});

	});



}