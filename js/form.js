$(document).ready(function() {

	$(".form_post").submit(function() {
		$.ajax({
			type: "POST",
			url: "PHPmailer/mailer/smart.php",
			// url: "mail.php",
			data: $(this).serialize()
		}).done(function() {
			$(this).find("input").val("");
			alert("РЎРїР°СЃРёР±Рѕ Р·Р° Р·Р°СЏРІРєСѓ! РЎРєРѕСЂРѕ РјС‹ СЃ РІР°РјРё СЃРІСЏР¶РµРјСЃСЏ.");
			$("#form").trigger("reset");
		});
		return false;
	});
	
});