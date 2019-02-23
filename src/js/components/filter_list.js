export const filterList = (selector, container) => {
  const d = document

  d.addEventListener('keyup', e => {
    if (e.target.matches('#FilterInput')) {
      e.target.addEventListener('keyup', e => {
        if (e.key === 'Escape') e.target.value = ''

        let searchElements = d.querySelectorAll(selector),
          searchContainers = d.querySelectorAll(container)

        searchElements.forEach(el => {
          el.textContent.toUpperCase().includes(e.target.value.toUpperCase())
            ? el.classList.remove('u-filter')
            : el.classList.add('u-filter')
        })

        searchContainers.forEach(el => {
          el.textContent.toUpperCase().includes(e.target.value.toUpperCase())
            ? el.classList.remove('u-filter')
            : el.classList.add('u-filter')
        })
      })
    }
  })
}
