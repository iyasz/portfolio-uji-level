$(document).ready(function() {
  setInterval(function() {
    $('.loader').addClass('animate');
  }, 1100)
  
  setTimeout(function() {
    $('.loader').remove();
    $('body').css('overflow', 'auto');
    }, 2030);
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

words[0] = "<span style='color: #000'>" + words[0] + "</span>";

words[1] = "<span style='color: #000'>" + words[1] + "</span>";

textElement.html(words.join(" "));

// tooltip bootstrap
const tooltipTriggerList = document.querySelectorAll('[data-bs-toggle="tooltip"]')
const tooltipList = [...tooltipTriggerList].map(tooltipTriggerEl => new bootstrap.Tooltip(tooltipTriggerEl))