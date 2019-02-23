<form class="SubscriberForm">
  <div class="SubscriberForm-input">
    <input type="text" name="name" placeholder="suscríbete: nombre" title="tu nombre" pattern="^[A-Za-zÑñÁáÉéÍíÓóÚúÜü\s]+$" required>
    <input type="email" name="email" placeholder="suscríbete: email" pattern="^[a-z0-9]+(\.[_a-z0-9]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,15})$" required>
    <button type="submit"><i class="fas fa-location-arrow"></i></button>
  </div>
  <p class="SubscriberForm-message u-hide"></p>
  <div class="spinner  u-hide">
    <div class="rect1"></div>
    <div class="rect2"></div>
    <div class="rect3"></div>
    <div class="rect4"></div>
    <div class="rect5"></div>
  </div>
</form>
