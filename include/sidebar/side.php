<script type="text/javascript" src="js/sha512.js"></script>
<script type="text/javascript" src="js/forms.js"></script>

<div class="sidebar-module">
    <h4>Area Riservata</h4>
    <form class="form-signin log-in-form" action="process_login.php" method="post" name="login_form">
        <label for="email" class="sr-only">Email address</label>
        <input type="email" id="email" class="form-control" placeholder="Email address" name="email" required>
        <br />
        <label for="password" class="sr-only">Password</label>
        <input type="password" id="password" class="form-control" placeholder="Password" name="p" id="password" required>
        <br />
        <button class="btn btn-sm btn-info btn-block" onclick="formhash(this.form, this.form.password);">Accedi</button>
  	</form>
</div>

<div class="col-md-12 divider"></div>

<div class="sidebar-module sidebar-module-inset">
    <h3>Richiedi la tessetra 2015!!</h3>
    <p>Scopri come ottenere la tessera ed entrare a far parte dell'associazione <b>Pesaro Sport Calcio</b> - <a href="#">Clicca qui</a></p>
</div>

<div class="col-md-12 divider"></div>

<div class="sidebar-module">
    <h4>Archivio eventi</h4>
    <ol class="list-unstyled">
      <li><a href="#">March 2015</a></li>
      <li><a href="#">February 2015</a></li>
      <li><a href="#">January 2015</a></li>
      <li><a href="#">December 2014</a></li>
      <li><a href="#">November 2014</a></li>
    </ol>
</div>

<div class="col-md-12 divider"></div>

<div class="sidebar-module">
    <h4>Servizi per i soci</h4>
    <ol class="list-unstyled">
        <li><a href="modulistica.php">Modulistica</li>
        <li><a href="#">Info tessetramenti</li>
    </ol>
</div>

<div class="col-md-12 divider"></div>

<div class="sidebar-module">
    <h4>Social</h4>
    <ol class="list-unstyled">
        <li><a href="https://www.facebook.com/profile.php?id=100004373267949" target="_blank">Facebook</li>
        <li><a href="#">Twitter</a></li>
        <li><a href="#">Instagram</a></i>
    </ol>
</div>

