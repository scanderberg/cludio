	$(function () {

		$(".slider-vertical").slider({
			orientation: "horizontal",
			range: "min",
			min: 5,
			max: 120,

			slide: function (event, ui) {
				$("#amount").val(ui.value);
				$("#amounts").val(ui.value);

				$(".chf span").html(ui.value);
				$(".ch2").html(ui.value * 2);
				$("#amounted").val(ui.value);
				$(".by input").val(ui.value * 1150);
				$('.udlin').width(ui.value * 3);
				$('.udlin img').css('margin-left', ui.value * 3);
				$('.vertdlin').height(ui.value * 1);
				$('.vertdlin img').css('margin-top', ui.value * 3);
				$('.udlin2').width(ui.value * 3);
				$('.udlins2').width(ui.value * 3);

				if ($("#amount").val() < 14) {
					$('.tonn').html(14);
					$(".gruzpodiem").html(14);
					$(".dlinastrl").html(14);
					$(".ciasrabot").html(7);
					$(".mkad").html(45);
					$(".cperhour").html(1150);
					$(".persmen").html(9000);
				}
				if ($("#amount").val() > 14) {
					$('.tonn').html(16);
					$(".gruzpodiem").html(16);
					$(".dlinastrl").html(18);
					$(".ciasrabot").html(7);
					$(".mkad").html(45);
					$(".cperhour").html(1400);
					$(".persmen").html(11000);
				}
				if ($("#amount").val() > 16) {
					$('.tonn').html(25);
					$(".gruzpodiem").html(25);
					$(".dlinastrl").html(22);
					$(".ciasrabot").html(7);
					$(".mkad").html(50);
					$(".cperhour").html(1700);
					$(".persmen").html(14000);
				}
				if ($("#amount").val() > 26) {
					$('.tonn').html(32);
					$(".gruzpodiem").html(32);
					$(".dlinastrl").html(32);
					$(".ciasrabot").html(7);
					$(".mkad").html(100);
					$(".cperhour").html(2300);
					$(".persmen").html(18500);
				}
				if ($("#amount").val() > 32) {
					$('.tonn').html(35);
					$(".gruzpodiem").html(35);
					$(".dlinastrl").html(34);
					$(".ciasrabot").html(7);
					$(".mkad").html(150);
					$(".cperhour").html(3125);
					$(".persmen").html(25000);
				}
				if ($("#amount").val() > 35) {
					$('.tonn').html(40);
					$(".gruzpodiem").html(40);
					$(".dlinastrl").html(34);
					$(".ciasrabot").html(7);
					$(".mkad").html(200);
					$(".cperhour").html(4000);
					$(".persmen").html(32000);
				}
				if ($("#amount").val() > 40) {
					$('.tonn').html(50);
					$(".gruzpodiem").html(50);
					$(".dlinastrl").html(40);
					$(".ciasrabot").html(7);
					$(".mkad").html(280);
					$(".cperhour").html(4600);
					$(".persmen").html(37000);
				}
				if ($("#amount").val() > 50) {
					$('.tonn').html(70);
					$(".gruzpodiem").html(70);
					$(".dlinastrl").html(52);
					$(".ciasrabot").html(7);
					$(".mkad").html("договорная");
					$(".cperhour").html(6500);
					$(".persmen").html(52000);
				}
				if ($("#amount").val() > 70) {
					$('.tonn').html(90);
					$(".gruzpodiem").html(90);
					$(".dlinastrl").html(52);
					$(".ciasrabot").html(7);
					$(".mkad").html("договорная");
					$(".cperhour").html(10000);
					$(".persmen").html(80000);
				}
				if ($("#amount").val() > 90) {
					$('.tonn').html(120);
					$(".gruzpodiem").html(120);
					$(".dlinastrl").html(56);
					$(".ciasrabot").html(7);
					$(".mkad").html("договорная");
					$(".cperhour").html(12500);
					$(".persmen").html(100000);
				}
			}


		});
		//bashnkran
		$("#bash").slider({
			orientation: "horizontal",
			range: "min",
			min: 1,
			max: 8,
			slide: function (event, ui) {
				$("#amountbash").val(ui.value);
				$('.udlins').width(ui.value * 40);
				$('.udlins img').css('margin-left', ui.value * 40);





				$('.udlins2').width(ui.value * 40);


				if ($("#amountbash").val() == 1) {
					$('.guston').html(1);
					$(".gusstr").html(30);
					$(".podiem").html(112.9);
					$("h4.krangp").html("Кран г/п 1 тонна, стрела 30м");

				}


				if ($("#amountbash").val() == 2) {
					$('.guston').html(2);
					$(".gusstr").html(30);
					$(".podiem").html(109.5);
					$("h4.krangp").html("Кран г/п 2 тонны, стрела 30м");

				}

				if ($("#amountbash").val() == 3) {
					$('.guston').html(3);
					$(".gusstr").html(35);
					$(".podiem").html(117.3);
					$("h4.krangp").html("Кран г/п 3 тонны, стрела 35м");

				}

				if ($("#amountbash").val() == 4) {
					$('.guston').html(4);
					$(".gusstr").html(40);
					$(".podiem").html(125,1);
					$("h4.krangp").html("Кран г/п 4 тонны, стрела 40м");

				}

				if ($("#amountbash").val() == 5) {
					$('.guston').html(5);
					$(".gusstr").html(42);
					$(".podiem").html(157.2);
					$("h4.krangp").html("Кран г/п 5 тонн, стрела 42м");

				}

				if ($("#amountbash").val() == 6) {
					$('.guston').html(6);
					$(".gusstr").html(45);
					$(".podiem").html(161);
					$("h4.krangp").html("Кран г/п 6 тонн, стрела 45м");

				}

if ($("#amountbash").val() == 7) {
					$('.guston').html(7);
					$(".gusstr").html(50);
					$(".podiem").html(161);
					$("h4.krangp").html("Кран г/п 7 тонн, стрела 50м");

				}

				if ($("#amountbash").val() == 8) {
					$('.guston').html(8);
					$(".gusstr").html(50);
					$(".podiem").html(164.2);
					$("h4.krangp").html("Кран г/п 8 тонн, стрела 50м");

				}







			}
		});

		$("#gusen").slider({
			orientation: "horizontal",
			range: "min",
			min: 120,
			max: 1600,
			step:20,
			slide: function (event, ui) {
				$("#amountgus").val(ui.value);
				$('.vertdlin').height(ui.value * 0.1);
				$('.vertdlin img').css('margin-top', ui.value * 0.1);
//if gusenkrans
				if ($("#amountgus").val() > 121) {
					$('.gustn').html(120);
					$(".guston").html(120);
					$(".gusstr").html(72);
					$(".udlinstr").html(72);
					
				}
				if ($("#amountgus").val() == 400) {
					$('.gustn').html(400);
					$(".guston").html(400);
					$(".gusstr").html(72);
					$(".udlinstr").html(72);
					
				}
				if ($("#amountgus").val() > 401 ) {
					$('.gustn').html(500 );
					$(".guston").html(500 );
					$(".gusstr").html(96 );
					$(".udlinstr").html(96);
					$(".chintxt").html("Основная стрела");
					
				}
				if ($("#amountgus").val() > 501  ) {
					$('.gustn').html(750 );
					$(".guston").html(750 );
					$(".gusstr").html(107  );
					$(".udlinstr").html(107 );
					$(".chintxt").html("Основная стрела");
					
				}
				if ($("#amountgus").val() > 751   ) {
					$('.gustn').html(1600  );
					$(".guston").html(1600  );
					$(".gusstr").html(156   );
					$(".udlinstr").html(156 );
					$(".chintxt").html("Основная стрела");
					$("#amountgus").css("width","100px");
					
				}
				
			}


		});
		
	});