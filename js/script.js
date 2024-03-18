function darkMode() {
  const botao = document.querySelector(".botao");

  function handleClick() {
    document.body.classList.toggle("adaptative");
    if (document.body.classList.contains("adaptative")) {
      botao.src =
        "http://jose-froes-portfolio.local/wp-content/uploads/2024/03/sun-svgrepo-com.png";
      botao.setAttribute(
        "src",
        "http://jose-froes-portfolio.local/wp-content/uploads/2024/03/sun-svgrepo-com.png"
      );
    } else {
      botao.src =
        "http://jose-froes-portfolio.local/wp-content/uploads/2024/03/moon-svgrepo-com.png";
    }
  }

  botao.addEventListener("click", handleClick);
}

function initSwiper() {
  const swiper = new Swiper(".swiper", {
    // Optional parameters
    direction: "horizontal",
    slidesPerView: 3,
    loop: true,

    // If we need pagination
    pagination: {
      el: ".swiper-pagination",
      clickable: true,
      dynamicBullets: true,
    },

    // Navigation arrows
    navigation: {
      nextEl: ".swiper-button-next",
      prevEl: ".swiper-button-prev",
    },

    // And if we need scrollbar
    scrollbar: {
      el: ".swiper-scrollbar",
    },
  });
}

initSwiper();
darkMode();
