export const subscriberForm = () => {
  const d = document

  d.addEventListener('submit', e => {
    if (e.target.localName === 'form') {
      let form = d.querySelector('.SubscriberForm'),
        message = d.querySelector('.SubscriberForm-message'),
        spinner = d.querySelector('.spinner')

      e.preventDefault()

      spinner.classList.add('u-show', 'u-fadeIn')
      fetch('./app/helpers/send_subscribe_confirmation.php', {
        body: new FormData(form),
        method: 'post'
      }).then(res => {
        //console.log(res)
        if (res.status === 200) {
          return res.json()
        } else {
          return {
            err: true,
            msg: `<b>Error ${res.status}</b>: ${res.statusText}`
          }
        }
      }).then(res => {
        //console.log(res)
        spinner.classList.add('u-hide', 'u-fadeOut')
        message.classList.add('u-show', 'u-fadeIn')
        message.innerHTML = res.msg

        if (!res.err) {
          form.reset()
          setTimeout(() => {
            form.classList.add('u-fadeOut')
            setTimeout(() => form.innerHTML = '', 1000);
          }, 7000)
        } else {
          form.reset()
          setTimeout(() => {
            message.className = 'SubscriberForm-message u-hide'
            spinner.className = 'spinner u-hide'
          }, 3000)
        }
      })
    }
  })
}
