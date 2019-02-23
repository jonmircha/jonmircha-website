export const offline = () => {
  const d = document,
    w = window,
    n = navigator,
    div = d.createElement('div')

  const networkStatus = (status) => {
    d.body.insertAdjacentElement('afterbegin', div)

    if (status) {
      div.innerHTML = '<i class="fas fa-wifi"></i> Conexión Reestablecida <i class="fas fa-wifi"></i>'
      div.classList.add('u-fadeIn', 'u-online')
      div.classList.remove('u-fadeOut', 'u-offline')
    } else {
      div.innerHTML = '<i class="fas fa-wifi"></i> Conexión Perdida <i class="fas fa-wifi"></i>'
      div.classList.add('u-fadeIn', 'u-offline')
      div.classList.remove('u-fadeOut', 'u-online')
    }

    setTimeout(() => {
      div.classList.add('u-fadeOut')
      setTimeout(() => d.body.removeChild(div), 2000)
    }, 2000)
  }

  w.addEventListener('online', e => {
    //console.log('Sitio online')
    networkStatus(true)
  })

  w.addEventListener('offline', e => {
    //console.log('Sitio offline')
    networkStatus(false)
  })

  if (n.onLine) {
    //console.log('Sitio online al cargar')
  } else {
    //console.log('Sitio offline al cargar')
  }
}
