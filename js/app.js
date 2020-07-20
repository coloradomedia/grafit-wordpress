$('.page-content > h2').html(function () {
  var text = $(this).text().trim().split(' ');
  var first = text.shift();
  return (
    (text.length > 0
      ? "<span class='first-word'>" + first + '</span> '
      : first) + text.join(' ')
  );
});

$('.page-standard-content > h2').html(function () {
  var text = $(this).text().trim().split(' ');
  var first = text.shift();
  return (
    (text.length > 0
      ? "<span class='first-word'>" + first + '</span> '
      : first) + text.join(' ')
  );
});

// $('html').addClass('js');

$(window).ready(function () {
  // setTimeout(   					off
  //function() 					off
  // {      					off
  $('#loading').fadeOut();
  // }, 500);  					off
});

// const html = document.querySelector('html');
// const preloader = document.querySelector('#loading');

// window.addEventListener('load',function(){
// 	preloader.style.visibility = 'hidden';

// });
