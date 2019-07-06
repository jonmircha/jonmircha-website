<form class="SubscribeForm">
  <h2>📭 Suscríbete</h2>
  <p>
    <b>Una vez al mes</b>, envío lo más destacado de mis actividades en la web.
    <br>
    Puedes darte de baja en cualquier momento, sin hacer preguntas.
  </p>
  <h3>¿Te animas?</h3>
  <input type="text" name="name" placeholder=" nombre" title="tu nombre" pattern="^[A-Za-zÑñÁáÉéÍíÓóÚúÜü\s]+$" required>
  <input type="email" name="email" placeholder="email" pattern="^[a-z0-9]+(\.[_a-z0-9]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,15})$" required>
  <p>🤖 Comprobemos que seas humano 😅</p>
  <div class="is-human u-flexRowSpaceEvenly">
    <span class="number-1"></span>
    <span>+</span>
    <span class="number-2"></span>
    <span>=</span>
    <input class="result" name="result" type="number" required>
    <input class="result-hidden" type="hidden" name="result-hidden">
  </div>
  <?php require_once './app/components/spinner.php'; ?>
  <aside class="SubscribeForm-message u-hide"></aside>
  <button type="submit">Suscribirme</button>
</form>
