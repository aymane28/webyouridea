var multipleCardCarousel = document.querySelector(
  "#carouselExampleControls"
);
if (window.matchMedia("(min-width: 768px)").matches) {
  var carousel = new bootstrap.Carousel(multipleCardCarousel, {
    interval: false,
  });
  var carouselWidth = $(".carousel-inner")[0].scrollWidth;
  var cardWidth = $(".carousel-item").width();
  var scrollPosition = 0;
  $("#carouselExampleControls .carousel-control-next").on("click", function () {
    if (scrollPosition < carouselWidth - cardWidth * 4) {
      scrollPosition += cardWidth;
      $("#carouselExampleControls .carousel-inner").animate(
        { scrollLeft: scrollPosition },
        600
      );
    }
  });
  $("#carouselExampleControls .carousel-control-prev").on("click", function () {
    if (scrollPosition > 0) {
      scrollPosition -= cardWidth;
      $("#carouselExampleControls .carousel-inner").animate(
        { scrollLeft: scrollPosition },
        600
      );
    }
  });
} else {
  $(multipleCardCarousel).addClass("slide");
}

function updateModalContent() {
  var buttons = document.querySelectorAll('.main-button');
  const formulaValue = document.getElementById('contact_formula');
  buttons.forEach(function (button) {
    button.addEventListener('click', function (event) {
      var offre = this.getAttribute('data-offre');
      var modal = document.querySelector('#modalContact');

      // Mettre à jour le contenu de la modal avec la valeur récupérée
      modal.querySelector('.offer-choice').textContent = offre;
      formulaValue.value= val;

    });
  });
}
