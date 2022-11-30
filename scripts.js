$(document).ready(function () {
  // scroll para as seções

  let navBtn = $(".nav-item");

  let bannerSection = $("#mainSlider");
  let sobreSection = $("#sobre-area");
  let manualSection = $("#manual-area");
  let letterSection = $("#letter-area");
  let contactSection = $("#contact-area");

  let scrollTo = "";

  $(navBtn).click(function () {
    let btnId = $(this).attr("id");

    if (btnId == "sobre-menu") {
      scrollTo = sobreSection;
    } else if (btnId == "manual-menu") {
      scrollTo = manualSection;
    } else if (btnId == "letter-menu") {
      scrollTo = letterSection;
    } else if (btnId == "contact-menu") {
      scrollTo = contactSection;
    } else {
      scrollTo = bannerSection;
    }

    $([document.documentElement, document.body]).animate(
      {
        scrollTop: $(scrollTo).offset().top - 70,
      },
      0
    );
  });
});
