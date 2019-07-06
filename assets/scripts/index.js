/* ********** Header Animation ********** */
((d, w) => {
  const header = d.querySelector('.Header'),
    headerHeight = w.getComputedStyle(header).getPropertyValue('height').split('px')[0],
    firstContent = d.querySelector('.u-firstContent'),
    firstContentHeight = w.getComputedStyle(firstContent).getPropertyValue('height').split('px')[0]

  let scrollTopLimit = firstContentHeight - headerHeight

  function animateHeader() {
    let scrollTop = w.pageYOffset || d.documentElement.scrollTop

    if (location.href.includes('bryan')) {
      return header.classList.add('is-active')
    }

    return (scrollTop > scrollTopLimit)
      ? header.classList.add('is-active')
      : header.classList.remove('is-active')
  }

  d.addEventListener('DOMContentLoaded', animateHeader)
  w.addEventListener('scroll', animateHeader)
})(document, window);

/* ********** Submit SubscribeForm ********** */
((d, w) => {
  if (d.querySelector('.SubscribeForm')) {
    const number1 = d.querySelector('.number-1'),
      number2 = d.querySelector('.number-2'),
      resultInput = d.querySelector('.result'),
      resultHidden = d.querySelector('.result-hidden'),
      spinner = d.querySelector('.spinner'),
      message = d.querySelector('.SubscribeForm-message')

    let number1Value = Math.floor(Math.random() * 10),
      number2Value = Math.floor(Math.random() * 10),
      resultValue = number1Value + number2Value

    number1.textContent = number1Value
    number2.textContent = number2Value
    resultHidden.value = resultValue

    d.addEventListener('submit', e => {
      if (e.target.matches('.SubscribeForm')) {
        e.preventDefault()

        if (resultInput.value === resultHidden.value) {
          spinner.classList.remove('u-hide')

          fetch('./ajax.php', {
            body: new FormData(e.target),
            method: 'post'
          })
            .then(res => {
              return (res.ok)
                ? res.json()
                : Promise.reject({ status: res.status, statusText: res.statusText })
            })
            .then(res => {
              spinner.classList.add('u-hide')
              message.innerHTML = `<p><b>${res.msg}</b></p>`
              message.classList.remove('u-hide')
            })
            .catch(err => {
              spinner.classList.add('u-hide')
              message.innerHTML = `
                <p>
                  Parece que hay un problema.
                  <br>
                  <b>Error ${err.status}:</b>
                  ${err.statusText}.
                </p>
              `
              message.classList.remove('u-hide')
            })
        } else {
          alert('¿Eres Robot 🤖 o te equivocaste 🤔?, intenta nuevamente.')
          resultInput.focus()
        }
      }
    })
  }
})(document, window);

/* ********** FilterList ********** */
((d) => {
  const filterList = (selector, container) => {
    function filterContent(value) {
      let searchElements = d.querySelectorAll(selector),
        searchContainers = d.querySelectorAll(container)

      searchElements.forEach(el => {
        el.textContent.toUpperCase().includes(value)
          ? el.classList.remove('u-filter')
          : el.classList.add('u-filter')
      })

      searchContainers.forEach(el => {
        el.textContent.toUpperCase().includes(value)
          ? el.classList.remove('u-filter')
          : el.classList.add('u-filter')
      })

      window.scrollTo(0, 0)
    }

    d.addEventListener('keyup', e => {
      if (e.target.matches('#FilterInput')) {
        e.target.addEventListener('keyup', e => {
          if (e.key === 'Escape') e.target.value = ''

          filterContent(e.target.value.toUpperCase())
        })
      }
    })

    if (d.getElementById('FilterInput')) {
      d.getElementById('FilterInput').addEventListener('search', e => filterContent(e.target.value.toUpperCase()))
    }

  }

  filterList('.Blog-post', '.Blog-list')
})(document);
