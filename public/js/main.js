$(document).ready(function() {

    $('.loader-view').addClass('animate');
    setTimeout(function() {
      $('.loader').remove();
    //   $('body').css('overflow', 'visible');
    }, 1200);
  });

  iziToast.show({
    title: "Benar",
    message: "Jawaban Anda Benar!",
    position: "topCenter",
    drag: false,
    pauseOnHover: false,
    color: "green",
    iconUrl: null,
    timeout: 4100,
});

$('.nav-link').on('click', function(){
  $('.nav-link').removeClass('active');
  $(this).addClass('active')
})

const tooltipTriggerList = document.querySelectorAll('[data-bs-toggle="tooltip"]')
const tooltipList = [...tooltipTriggerList].map(tooltipTriggerEl => new bootstrap.Tooltip(tooltipTriggerEl))