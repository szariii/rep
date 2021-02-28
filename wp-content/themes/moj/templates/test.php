<?php /* Template Name: test */ ?>

<?php get_header(); ?>

<div class="conteiner">

<div id="tes">
<p> Hellow Word </p>
</div>

<div class="test">
<h1>Hellow Word </h1>
</div>

<div class="class1">
<p>aaaa</p>
</div>
<br>
<div class="class2">
<p>bbbb</p>
</div>


<div class="form-label">
        <label for="ID">ID:</label>
        <input type="text" class="form-control" id="id" name="id" value="<?= $user->ID;?>" readonly>
    </div>




    <div class="form-label">
        <label for="name">Imię:</label>
        <input require type="text" class="form-control" id="nam" name="name" value="<?= $user->name;?>">
    </div>

    <div class="form-label">
        <label for="surname">Nazwisko:</label>
        <input require type="text" class="form-control"  id="surnam" name="surname" value="<?= $user->surname;?>">
    </div>

    <div class="form-label">
        <label for="nick">Nazwa użytkownika:</label>
        <input type="text" class="form-control"  id="nic" name="nick" value="<?= $user->nick;?>">
    </div>





</div>




<?php get_footer(); ?>



