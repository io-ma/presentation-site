$(".menu-toggle").on('click', function() {
    $(this).toggleClass("on");
    $('.menu-section').toggleClass("on");
    $("nav ul").toggleClass('hidden');
});

var docWidth = document.documentElement.offsetWidth;

[].forEach.call(
  document.querySelectorAll('*'),
  function(el) {
    if (el.offsetWidth > docWidth) {
      console.log(el);
    }
  }
);
