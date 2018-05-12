/*$(document).ready(function() {

  $("#form").submit(function() {
    $.ajax({
      type: "POST",
      url: "mail.php",
      data: form_data,
    }).done(function() {
      $(this).find("input").val("");
      alert("Спасибо за заявку! Скоро мы с вами свяжемся.");
      $("#form").trigger("reset");
    });
    return false;
  });
  
});
*/
/*  //устанавливаем обработчик события отправки  формы 
$('form').submit(function(e) { 
  e.preventDefault(); // отменяет перезагрузку страницы
   var form_data = $(this).serialize();
   $.ajax({
     url: "mailer/smart.php", // ваш обработчик
     type: "POST",
     data: form_data,
     success: function(response) {
      alert('Данные отправились')
     },
     error: function(response) {
       alert('Ошибка! Попробуйте еще раз.');
     }
   });
});*/