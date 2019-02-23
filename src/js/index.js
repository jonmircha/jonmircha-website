;
import lozad from 'lozad'
import { subscriberForm } from './components/subscriber_form'
import { filterList } from './components/filter_list'
import { materialCard } from './components/material_card'
import { footerScroll } from './components/footer_scroll'
import { offline } from './helpers/offline'

const d = document,
  w = window,
  n = navigator,
  observer = lozad('.lozad', {
    threshold: 0.1,
    load: function (el) {
      el.src = el.getAttribute('data-src')
      el.onload = function () {
        if (el.parentElement.classList.contains('lozad-parent')) {
          el.parentElement.style.opacity = 1
        } else {
          el.parentElement.parentElement.style.opacity = 1
        }
      }
    }
  })

observer.observe()

subscriberForm()
materialCard()
filterList('.MaterialCard', '.Site-listItem')
filterList('.Site-post', '.Site-blog')
offline()

if (location.pathname.includes('hola')) {
  d.querySelector('.Site-footer').style.bottom = 0
} else {
  if (location.pathname.includes('cursos') || location.pathname.includes('proyectos') || location.pathname.includes('blog')) {
    footerScroll()
  }
}

// registro del sw
if ('serviceWorker' in n) {
  n.serviceWorker.register('/sw.js')
    .then(reg => console.log('Registro de sw exitoso', reg))
    .catch(err => console.warn('Error al tratar de registrar el sw', err))
}

window.dataLayer = window.dataLayer || []
function gtag() { dataLayer.push(arguments) }
gtag('js', new Date())
gtag('config', 'UA-114853516-1')
