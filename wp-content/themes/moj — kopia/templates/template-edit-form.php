<?php /* Template Name: Edit Form */ ?>
<?php get_header() ?>

<?php
$user = getUser($_GET['id']);
?>



<div class="container">

    <h1>Zmiana danych</h1>
    
    <div class="form-label">
        <label for="ID">ID:</label>
        <input type="text" class="form-control" id="id" name="id" value="<?= $user->ID;?>" readonly>
    </div>




    <div class="form-label">
        <label for="name">Imię:</label>
        <input type="text" class="form-control" id="nam" name="name" value="<?= $user->name;?>">
    </div>

    <div class="form-label">
        <label for="surname">Nazwisko:</label>
        <input type="text" class="form-control"  id="surnam" name="surname" value="<?= $user->surname;?>">
    </div>

    <div class="form-label">
        <label for="nick">Nazwa użytkownika:</label>
        <input type="text" class="form-control"  id="nic" name="nick" value="<?= $user->nick;?>">
    </div>

    <div class="form-label">
        <label for="email">Adres e-mail:</label>
        <input type="text" name="email" class="form-control"  id="emai" value="<?= $user->email;?>">
    </div>


    <button type="submit" id="editbut" name="editbut" class="btn btn-primary">Zatwierdź</button>
    </form>
</div>

<?php get_footer()?>
