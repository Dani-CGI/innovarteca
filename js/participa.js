
$(document).ready(function () {
    $("#participa").bind("submit1", function () {
      $.ajax({
        type: $(this).attr("method"),
        url: "sendMail/procesar1.php",
        data: $(this).serialize(),
        success: function (respuesta) {
          if (respuesta == "ok") {
            $("#alerta1")
              .removeClass("collapse")
              .removeClass("alert-danger")
              .removeClass("alert-success")
              .addClass("alert-success");
            $("#btn_send_frm1").addClass("collapse");
            $(".respuesta1").html("Enviado.");
            $(".mensaje-alerta1").html(
              "<br>El mensaje se enviÃ³ correctamente, a la brevedad te llegarÃ¡ una copia a tu correo electrÃ³nico. <br> En caso de no encontrarlo, verificÃ¡ la casilla de correo no deseado."
            );
            $(".card-body1").css("display", "none");
          } else {
            $("#alerta1")
              .removeClass("collapse")
              .removeClass("alert-danger")
              .removeClass("alert-success")
              .addClass("alert-danger");
            $(".respuesta1").html("Error al enviar.");
            $(".mensaje-alerta1").html(
              "<br>No se pudo enviar el mensaje, completÃ¡ todos los campos e intentalo de nuevo."
            );
          }
        },
        error: function () {
          $("#alerta1")
            .removeClass("collapse")
            .removeClass("alert-danger")
            .removeClass("alert-success")
            .addClass("alert-danger");
          $(".respuesta1").html("Error al enviar.");
          $(".mensaje-alerta1").html(
            "<br>No se pudo enviar tu mensaje, intentalo de nuevo en unos instantes."
          );
        },
      });
      return false;
    });
  });