export const footerScroll = () => {
  const d = document,
    w = window

  w.addEventListener('scroll', () => {
    if (!d.body.classList.contains('Home')) {
      const header = d.querySelector(".Site-header"),
        footer = d.querySelector(".Site-footer")

      let headerHeight = w.getComputedStyle(header).getPropertyValue('height').split('px')[0],
        footerHeight = w.getComputedStyle(footer).getPropertyValue('height')

      //console.log(headerHeight, footerHeight)

      return (d.body.scrollTop > headerHeight || d.documentElement.scrollTop > headerHeight)
        ? footer.style.bottom = '0'
        : footer.style.bottom = `-${footerHeight}`
    }
  })
}
