(function () {
    window.onload = function () {
      var preloader = document.querySelector('.page-loading');
      preloader.classList.remove('active');
      setTimeout(function () {
        preloader.remove();
      }, 2000);
    };
  })();
  var msend = new bootstrap.Modal(document.getElementById('modalSend'), {
      keyboard: false,
  });
  // msend.show();