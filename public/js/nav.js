var checkbox = document.querySelector('input[name=theme]');

checkbox.addEventListener('change', function(){
  if(this.checked){
      trans()
      document.documentElement.setAttribute('data-theme', 'dark-mode')
      document.getElementById('myLogo').src='https://raw.githubusercontent.com/raayanfaisal/phopix/7aae030cc39443e91e9f7f62dd3153795697c969/public/Images/phopix-dark.svg'
  } else {
    trans()
    document.documentElement.setAttribute('data-theme', 'light')
    document.getElementById('myLogo').src='https://raw.githubusercontent.com/raayanfaisal/phopix/7aae030cc39443e91e9f7f62dd3153795697c969/public/Images/Phopix-light.svg'
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
