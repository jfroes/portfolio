function darkMode() {
  const botao = document.querySelector(".botao");

  function handleClick() {
    document.body.classList.toggle("adaptative");
    if (document.body.classList.contains("adaptative")) {
      botao.src = "./wp-content/uploads/2024/03/sun-svgrepo-com.png";
      botao.setAttribute(
        "src",
        "./wp-content/uploads/2024/03/sun-svgrepo-com.png"
      );
    } else {
      botao.src = "./wp-content/uploads/2024/03/moon-svgrepo-com.png";
    }
  }

  botao.addEventListener("click", handleClick);
}

function initSwiper() {
  const swiper = new Swiper(".swiper", {
    // Optional parameters
    freeMode: true,
    direction: "horizontal",
    slidesPerView: 1,
    loop: true,
    grabCursor: true,
    spaceBetween: 0,
    centeredSlides: true,
    centeredSlidesBounds: true,
    // If we need pagination
    pagination: {
      el: ".swiper-pagination",
      clickable: true,
      dynamicBullets: true,
    },
    breakpoints: {
      320: {
        slidesPerView: 1,
        spaceBetween: 20,
      },

      480: {
        slidesPerView: 1,
        spaceBetween: 30,
      },
      640: {
        slidesPerView: 2,
        spaceBetween: 20,
      },
      768: {
        slidesPerView: 3,
        spaceBetween: 40,
      },
      1024: {
        slidesPerView: 3,
        spaceBetween: 50,
      },
    },
  });
}

initSwiper();
darkMode();
