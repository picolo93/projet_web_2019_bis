<?php 
    //ce fichier represente le formulaire de connection pour les utilisateurs
?>
<script>
    mise_en_gras_du_texte(".m");
</script>
<div class="container-fluid">
    <p class="text-center"><a href="index.php?page=connextion" class="m">Se connecter</a> | <a href="index.php?page=inscription">creer un compte</a></p>
    <div class="container-fluid form-connect bg-white">
        <form action="index.php?page=authentification_connection" method="POST"  class="needs-validation" novalidate>
            <div class="form-group">
                <label for="email">Email address:</label>
                <input type="email" class="form-control" id="email" name="email" required="required">
                <div class="valid-feedback">Valid.</div>
                <div class="invalid-feedback">Please fill out this field.</div>
            </div>
            <div class="form-group">
                <label for="pwd">Password:</label>
                <input type="password" class="form-control" id="pwd" name="pwd" required="required">
                <div class="valid-feedback">Valid.</div>
                <div class="invalid-feedback">Please fill out this field.</div>
            </div>
            <div class="checkbox">
                <label><input type="checkbox" name="rester_connecter" value="rester_connecter">Rester connecter</label>
            </div>
            <button type="submit" class="btn btn-default" name="se_connecter">Se connecter</button>
        </form>
        <div class="notification">          
        </div>
        <p>Vous avez oublié votre mot de passe ? <a href="#">Réinitialisez le</a></p>
    </div>
</div>
<script>
    test_validation();
</script>
<?php/*
if (file_exists('./admin/lib/php/authentification_connection.php')) {
    include ('./admin/lib/php/authentification_connection.php');
}
*/



