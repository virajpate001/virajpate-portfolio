$(document).ready(function(){
    $(".navicon").click(function(){
      $(".bx-menu").toggleClass("bx-x");
    });

    $(".navicon").click(function(){
      $(".mob-navbar").toggleClass("dv");
    });

    
    

});

// portfolio filter
function filterCategory(element,category) {
  const items = document.querySelectorAll('.portfolio-item');
  const catbutons = document.querySelectorAll('.category');

  catbutons.forEach(btn => btn.classList.remove('activecat'));
  element.classList.add('activecat');

  items.forEach(item => {
      if (category === 'all' || item.classList.contains(category)) {
          item.style.display = "block";
      } else {
          item.style.display = "none";
      }
  });
}

// portfolio add active class

