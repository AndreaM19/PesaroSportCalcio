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