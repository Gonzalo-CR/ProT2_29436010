<section class="container fondo container-principal">
    <div class="container mt-5">
      <h1>Login</h1>
      <form>
        <div class="mb-3">
          <label for="inputEmailLogin" class="form-label">Email</label>
          <input type="email" class="form-control" id="inputEmailLogin" placeholder="Ingresa tu email" required autocomplete="email">
        </div>
        <div class="mb-3">
          <label for="inputPasswordLogin" class="form-label">Contraseña</label>
          <div class="input-group">
            <input type="password" class="form-control" id="inputPasswordLogin" placeholder="Ingresa tu contraseña" required autocomplete="current-password">
            <button class="btn btn-outline-secondary" type="button" id="togglePasswordLogin">Mostrar</button>
          </div>
        </div>
        <button type="submit" class="btn btn-primary">Login</button>
      </form>
    </div>
  </section>

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script>
    $(document).ready(function(){
      $('#togglePasswordLogin').on('click', function(){
        const passwordField = $('#inputPasswordLogin');
        const type = passwordField.attr('type') === 'password' ? 'text' : 'password';
        passwordField.attr('type', type);
        $(this).text($(this).text() === 'Mostrar' ? 'Ocultar' : 'Mostrar');
      });
    });
  </script>