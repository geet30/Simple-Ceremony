<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta name="theme-color" content="#E5E5E5">
      <link rel="apple-touch-icon" sizes="180x180" href="/images/favicon//apple-touch-icon.png">
      <link rel="icon" type="image/png" sizes="32x32" href="/images/favicon/favicon-32x32.png">
      <link rel="icon" type="image/png" sizes="96x96" href="/images/favicon/favicon-96x96.png">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
      <link href="/css/app.css" rel="stylesheet">
      <link href="/custom-css/select-2.css" rel="stylesheet">
      <link href="/custom-css/slick.css" rel="stylesheet">
      <link href="https://intl-tel-input.com/node_modules/intl-tel-input/build/css/intlTelInput.css?1549804213570" rel="stylesheet">
      <link href="/custom-css/calendar.css" rel="stylesheet">
      <link href="/fonts/stylesheet.css" rel="stylesheet">
   </head>
   <body class="dashboard-bg antialiased" data-barba="wrapper">
      <main>
         @yield('content')
      </main>
   </body>
   <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
   <script type="text/javascript" src="https://kenwheeler.github.io/slick/slick/slick.js"></script>
   <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
   <script src="https://intl-tel-input.com/node_modules/intl-tel-input/build/js/intlTelInput.js?1549804213570"></script>
   <script src="https://cdn.jsdelivr.net/gh/wrick17/calendar-plugin@master/calendar.min.js"></script>
   <script src="/js/app.js" defer></script>
<script>
   jQuery(document).ready(function () {
  ImgUpload();
});

function ImgUpload() {
  var imgWrap = "";
  var imgArray = [];

  $('.upload__inputfile').each(function () {
    $(this).on('change', function (e) {
      imgWrap = $(this).closest('.upload__box').find('.upload__img-wrap');
      var maxLength = $(this).attr('data-max_length');

      var files = e.target.files;
      var filesArr = Array.prototype.slice.call(files);
      var iterator = 0;
      filesArr.forEach(function (f, index) {

        if (!f.type.match('image.*')) {
          return;
        }

        if (imgArray.length > maxLength) {
          return false
        } else {
          var len = 0;
          for (var i = 0; i < imgArray.length; i++) {
            if (imgArray[i] !== undefined) {
              len++;
            }
          }
          if (len > maxLength) {
            return false;
          } else {
            imgArray.push(f);

            var reader = new FileReader();
            reader.onload = function (e) {
              var html = "<div class='upload__img-box'><div style='background-image: url(" + e.target.result + ")' data-number='" + $(".upload__img-close").length + "' data-file='" + f.name + "' class='img-bg'><div class='upload__img-close'></div></div></div>";
              imgWrap.append(html);
              iterator++;
            }
            reader.readAsDataURL(f);
          }
        }
      });
    });
  });

  $('body').on('click', ".upload__img-close", function (e) {
    var file = $(this).parent().data("file");
    for (var i = 0; i < imgArray.length; i++) {
      if (imgArray[i].name === file) {
        imgArray.splice(i, 1);
        break;
      }
    }
    $(this).parent().parent().remove();
  });
}
</script>
  </html>