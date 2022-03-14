var mclient = new bootstrap.Modal(document.getElementById('modalClient'), {
    keyboard: false,
});
mclient.show();

function play() {
    var audio = document.getElementById('audio');
    if (audio.paused) {
        audio.play();
        $('#play').removeClass('bi-play-fill')
        $('#play').addClass('bi-pause')
    }else{
        audio.pause();
        audio.currentTime = 0
        $('#play').addClass('bi-play-fill')
        $('#play').removeClass('bi-pause')
    }
}

//MENU ONE PAGE
function ouTer(e)
{
  $('html, body').animate({scrollTop:$(e).position().top}, 1);
}

function presTe(e)
{
    $('input[name="present"]').val(e);
}

Fancybox.bind("[data-fancybox]", {
    // Your options go here
});

AOS.init();

new ClipboardJS('.btn-copy');