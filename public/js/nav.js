var checkbox = document.querySelector('input[name=theme]');

checkbox.addEventListener('change', function(){
  if(this.checked){
      trans()
      document.documentElement.setAttribute('data-theme', 'dark-mode')
      document.getElementById('myLogo').src='https://raw.githubusercontent.com/raayanfaisal/phopix/217066067e1d1d487c8645f9454408433adc822c/public/Images/phopix-dark.svg'
  } else {
    trans()
    document.documentElement.setAttribute('data-theme', 'light')
    document.getElementById('myLogo').src='https://raw.githubusercontent.com/raayanfaisal/phopix/5b4885ad5387b3bda802435887c6320a9afbf758/public/Images/Phopix-light.svg'
  }
})

let trans = () => {
  document.documentElement.classList.add('transition');
  window.setTimeout(() => {
      document.documentElement.classList.remove('transition')
  }, 1000)
}

function openNav() {
  document.getElementById("myNav").style.width = "100%";
}

function closeNav() {
  document.getElementById("myNav").style.width = "0%";
}

AOS.init();

$(function() {
  var selectedClass = "";
  $(".filter").click(function(){
  selectedClass = $(this).attr("data-rel");
  $("#gallery").fadeTo(100, 0.1);
  $("#gallery div").not("."+selectedClass).fadeOut().removeClass('animation');
  setTimeout(function() {
  $("."+selectedClass).fadeIn().addClass('animation');
  $("#gallery").fadeTo(300, 1);
  }, 300);
  });
  });
