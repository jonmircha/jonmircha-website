export const materialCard = () => {
  const d = document

  d.addEventListener('click', e => {
    if (e.target.matches('.MaterialCard-btnAction') || e.target.matches('.MaterialCard-btnAction > .fa')) {
      let card,
        icon

      if (e.target.matches('.MaterialCard-btnAction')) {
        card = e.target.parentElement
        icon = e.target.children[0]
      }

      if (e.target.matches('.MaterialCard-btnAction > .fa')) {
        card = e.target.parentElement.parentElement,
          icon = e.target
      }

      icon.classList.add('u-spin-animate')

      if (card.classList.contains('is-active')) {
        card.classList.remove('is-active')

        setTimeout(() => {
          icon.classList.remove('fa-arrow-left', 'u-spin-animate')
          icon.classList.add('fa-bars')
        }, 800)
      } else {
        card.classList.add('is-active')

        setTimeout(() => {
          icon.classList.remove('fa-bars', 'u-spin-animate')
          icon.classList.add('fa-arrow-left');
        }, 800)
      }
    }
  })
}
