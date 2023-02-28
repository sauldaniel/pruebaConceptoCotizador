
    <?php include "./header.php";?>
    <div class="mainLogin" class="general">

<div id="imgLogin" class="general">
    <img src="img/tiLogo.png" alt="">
</div><!--LOGO-->

<div id="formsLogin" class="general">
    <form method="post" action="main/validarLogin.php">
    <input name="correo" type="text" class="form-control"  placeholder="Correo electrónico">
    <input name="contraseña" type="password" class="form-control"  placeholder="Contraseña">
    <button type="submit" class="btn btn-primary">OK</button>
    </form>
</div><!--FORM-->

</div><!--MAIN LOGIN-->

<?php include "./scripts.php";?>