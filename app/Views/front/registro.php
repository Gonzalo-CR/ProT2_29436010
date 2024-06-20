<section class="container fondo container-principal">
    <div class="container mt-5">
      <h1>Registrarse</h1>
      <form>
        <div class="mb-3">
          <label for="inputNombre" class="form-label">Nombre</label>
          <input type="text" class="form-control" id="inputNombre" placeholder="Ingresa tu nombre" required autocomplete="name">
        </div>
        <div class="mb-3">
          <label for="inputEmail" class="form-label">Email</label>
          <input type="email" class="form-control" id="inputEmail" placeholder="Ingresa tu email" required autocomplete="email">
        </div>
        <div class="mb-3">
          <label for="inputPassword" class="form-label">Contraseña</label>
          <div class="input-group">
            <input type="password" class="form-control" id="inputPassword" placeholder="Ingresa tu contraseña" required autocomplete="new-password">
            <button class="btn btn-outline-secondary" type="button" id="togglePassword">Mostrar</button>
          </div>
        </div>
        <button type="submit" class="btn btn-primary">Registrarse</button>
      </form>
    </div>
  </section>

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script>
    $(document).ready(function(){
      $('#togglePassword').on('click', function(){
        const passwordField = $('#inputPassword');
        const type = passwordField.attr('type') === 'password' ? 'text' : 'password';
        passwordField.attr('type', type);
        $(this).text($(this).text() === 'Mostrar' ? 'Ocultar' : 'Mostrar');
      });
    });
  </script>