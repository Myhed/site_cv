var download = $('.download'),
    meter = $('.meter');

$('.button-download').on('click', function(e) {
  download.toggleClass('is-active');
  
  setTimeout(function() {
    meter.toggleClass('is-done');
  }, 4000);
  
  
});

$('#reset').on('click', function() {
  download.removeClass('is-active');
  meter.removeClass('is-done');
});