<?php get_header();?>
<form>
<div class="container">
<div class="row">
<div class="col-md-6"> 
<h1 style="text-align:center">Formularz</h1>
<h2> E-mail: </h2>
<input type="text" id="email" name="email">

<h2> Hasło: </h2> 
<input type="text" id="haslo" name="haslo"> 
<h6 style="font-size:xx-small">Nigdy nie udostepniaj hasła innym osobom</h6>
<br>
<input type="checkbox" class="form-check-input">
<label>Zapamiętaj mnie</label>
<br>
<button type="zat" class="btn btn-primary" id="prz">Zatwierdź</button>
</div>
</div>
</div>
</form>
<?php get_footer();?>