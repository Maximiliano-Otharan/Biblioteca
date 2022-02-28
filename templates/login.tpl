{include file="templates/header.tpl"}
<form class="row g-3" method="POST" action="verificar">
<h2>Log in</h2>
 <div class="col-auto">
  <label for="User" >User</label>
    <input type="text"  name="Nombreusuario" id="Nombreusuario"; required>
  </div>
  <div class="col-auto">
  <label for="Email" >Email</label>
    <input type="text"  name="Email" id="Email"; required>
  </div>
  <div class="col-auto">
  <label for="Password">Password</label>
    <input type="password" name="Password" id="Password" placeholder="Password" required>
  </div>
  <div class="col-auto">
    <button type="submit" class="btn btn-primary mb-3">Confirm identity</button>
  </div>
  <p>Dont have an account yet, click <a href="register">here</a></p>
  <p>visit the page as a guest click <a href="guest">here</a></p>
  <h4>{$error}</h4>
</form>