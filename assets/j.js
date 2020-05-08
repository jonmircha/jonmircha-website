function colorTheme() {
  const d = document,
    icon = d.querySelector("#btn-theme img");

  let iconSun = "img/sun.svg",
    iconMoon = "img/moon.svg";

  if (location.href.includes("notas/")) {
    let beginPath = location.href.search("notas/"),
      pathImg = location.href.substring(beginPath, 0);

    iconSun = pathImg + "img/sun.svg";
    iconMoon = pathImg + "img/moon.svg";
  }

  function lightMode(iconURL) {
    localStorage.setItem("theme", "light");

    icon.setAttribute("src", iconURL);
    icon.setAttribute("alt", "Tema Oscuro");
    icon.setAttribute("title", "Tema Oscuro");

    d.documentElement.classList.remove("dark-mode");
    d.querySelector(".header").classList.remove("dark-mode");
    d.querySelector(".footer").classList.remove("dark-mode");
  }

  function darkMode(iconURL) {
    localStorage.setItem("theme", "dark");

    icon.setAttribute("src", iconURL);
    icon.setAttribute("alt", "Tema Claro");
    icon.setAttribute("title", "Tema Claro");

    d.documentElement.classList.add("dark-mode");
    d.querySelector(".header").classList.add("dark-mode");
    d.querySelector(".footer").classList.add("dark-mode");
  }

  d.addEventListener("DOMContentLoaded", e =>
    localStorage.getItem("theme") === "dark"
      ? darkMode(iconSun)
      : lightMode(iconMoon)
  );

  d.addEventListener("click", e => {
    if (e.target.matches("#btn-theme img")) {
      e.preventDefault();

      if (localStorage.getItem("theme") === "dark") {
        lightMode(iconMoon);
      } else {
        darkMode(iconSun);
      }
    }
  });
}

function sendNewsletter() {
  const d = document;

  if (d.querySelector(".newsletter")) {
    const number1 = d.querySelector(".number-1"),
      number2 = d.querySelector(".number-2"),
      resultInput = d.querySelector(".result"),
      resultHidden = d.querySelector(".result-hidden"),
      spinner = d.querySelector(".spinner"),
      message = d.querySelector(".newsletter .message");

    let number1Value = Math.floor(Math.random() * 10),
      number2Value = Math.floor(Math.random() * 10),
      resultValue = number1Value + number2Value;

    number1.textContent = number1Value;
    number2.textContent = number2Value;
    resultHidden.value = resultValue;

    d.addEventListener("submit", e => {
      if (e.target.matches(".newsletter")) {
        e.preventDefault();

        if (resultInput.value === resultHidden.value) {
          spinner.classList.remove("hide");

          fetch("./assets/a.php", {
            body: new FormData(e.target),
            method: "post"
          })
            .then(res => {
              //console.log(res);
              return res.ok
                ? res.json()
                : Promise.reject({
                    status: res.status,
                    statusText: res.statusText
                  });
            })
            .then(res => {
              //console.log(res);
              spinner.classList.add("hide");
              message.innerHTML = `<p><b>${res.msg}</b></p>`;
              message.classList.remove("hide");
            })
            .catch(err => {
              //console.log(err);
              spinner.classList.add("hide");
              message.innerHTML = `
                <p>
                  Parece que hay un problema.
                  <br>
                  <b>Error ${err.status}:</b>
                  ${err.statusText}.
                </p>
              `;
              message.classList.remove("hide");
            });
        } else {
          alert("¿Eres Robot 🤖 o te equivocaste 🤔?, intenta nuevamente.");
          resultInput.focus();
        }
      }
    });
  }
}

colorTheme();
//sendNewsletter();
