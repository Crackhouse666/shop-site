/*слайдер*/
$(document).ready(function(){
  $('.slider').slick({
  	autoplay: true, /*автодвижение*/
  	autoplaySpeed: 3500, /*3.5 секунд*/
  	dots: true,   /*подключаем точки*/
  	arrows: false,   /*выключаем стрелки*/
  });
})

/*Переключатель Авторизация/Регистрация*/

$(document).ready(function(){
	$(".dws-form").on("click", ".tab", function(){ //если произошел клик по классу tab то запускается функция
		// удаляем классы active 
		$(".dws-form").find(".active").removeClass("active");
		
		console.log($(this).index());

		// добавляем класс active по вкладке по которой кликнули
		$(this).addClass("active");
		$(".tab-form").eq($(this).index()).addClass("active");
	});
});

