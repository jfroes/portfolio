function darkMode() {
  const botao = document.querySelector(".switch");
  function handleClick() {
    document.body.classList.toggle("adaptative");
  }

  botao.addEventListener("input", handleClick);
}

function ocultaScroll() {
  const botao = document.querySelector(".botao");

  function handleScroll() {
    if (window.scrollY >= 100) {
      botao.classList.add("hide");
    } else {
      botao.classList.remove("hide");
    }
    // if(botao.getBoundingClientRect.top)
  }

  window.addEventListener("scroll", handleScroll);
}

darkMode();
ocultaScroll();
