$(document).ready(function() {
	$("#form2").submit(function (event) {
		
		event.preventDefault();
		


		$.ajax({
		type: $(this).attr("method"),
		url: $(this).attr("action"),
		data: new FormData(this),
		contentType: false,
		cache: false,
		processData: false,
		success: function(data){
			if (data==0) {
				alert("Вход выполнен!");
			}
			if (data==1) {
				alert("Не известная ошибка");
			}
			
			
			
			}
		

		});
		
	});

});