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
    timeout: 3000,
});

$('#btn-follow').on('click', function(){
  iziToast.show({
    title: "😍",
    message: "Berhasil Di follow!",
    position: "topCenter",
    drag: false,
    pauseOnHover: false,
    color: "green",
    iconUrl: null,
    timeout: 3000,
  });
})

// navbar 
$('.nav-link').on('click', function(){
  $('.nav-link').removeClass('active');
  $(this).addClass('active')
})

// navtabs projects 
$('.nav-tabs a').on('shown.bs.tab', function (e) {
  var targetPane = $(e.target).attr("href");
  $(targetPane).addClass('show');
});


// coloring name 
var textElement = $("#name-author");

var words = textElement.text().split(" ");

words[0] = "<span style='color: #9d78f3'>" + words[0] + "</span>";

words[1] = "<span style='color: #f3789b'>" + words[1] + "</span>";

textElement.html(words.join(" "));

const tooltipTriggerList = document.querySelectorAll('[data-bs-toggle="tooltip"]')
const tooltipList = [...tooltipTriggerList].map(tooltipTriggerEl => new bootstrap.Tooltip(tooltipTriggerEl))