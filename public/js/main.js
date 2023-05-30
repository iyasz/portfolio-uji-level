$(document).ready(function() {
  setInterval(function() {
    $('.loader').addClass('animate');
  }, 1100)
  
  setTimeout(function() {
    $('.loader').remove();
    $('body').css('overflow', 'auto');
    }, 2030);
  });

  $(".nav-link.navbar").on("click", function (e) {
    e.preventDefault();
  
    var linkHref = $(this).attr("href");
    $("html, body").animate(
      {
        scrollTop: $(linkHref).offset().top - 90,
      },
      800
    );
    return false;
  });

$(document).ready(function() {
    $('#statusUpdateBtn').on('click', function() {
      $('#updateStatus').modal('show');
    });
});



$('.editProject').on('click', function(){
  $.ajax({
    type: 'GET',
    url: '/project/searchValue/'+$(this).val(),
    success: function(e){
      console.log(e)
      var pemisah = "https://github.com/iyasz/";
      var kata = e.github_url.replace(pemisah, "");
      $('#githubProjectUpdate').val(kata)

      var optionToSelect = e.category;
      $('.editCategoryProject option').each(function() {
        if ($(this).val() === optionToSelect) {
          $(this).prop('selected', true);
          return false;
        }
      });


      $('.projectNameUpdate').val(e.name)
      $('.imgUpdateProject').attr('src', '/storage/gambar/'+e.thumbnail)

      $('#formProjectUpdate').attr('action', '/project/'+e.id)

      $('.editDescProject').val(e.description)

      $('#editStartProject').val(e.start_date)
      $('#editFinishProject').val(e.finish_date)
    },
  })
})

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

words[0] = "<span style='color: #7F56DA'>" + words[0] + "</span>";

words[1] = "<span style='color: #f3789b'>" + words[1] + "</span>";

textElement.html(words.join(" "));

// tooltip bootstrap
const tooltipTriggerList = document.querySelectorAll('[data-bs-toggle="tooltip"]')
const tooltipList = [...tooltipTriggerList].map(tooltipTriggerEl => new bootstrap.Tooltip(tooltipTriggerEl))