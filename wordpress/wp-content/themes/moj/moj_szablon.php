<?php /* Template Name: moj_szablon */ ?>

<?php get_header(); ?>

<div class="container">
    <h1>Formularz tworzenia konta</h1>

    <div class="form-label">
        <label for="name">Imię:</label>
        <input type="text" class="form-control" placeholder="Wpisz imię" id="name" name="name">
    </div>

    <div class="form-label">
        <label for="surname">Nazwisko:</label>
        <input type="text" class="form-control" placeholder="Wpisz nazwisko" id="surname" name="surname">
    </div>

    <div class="form-label">
        <label for="nick">Nazwa użytkownika:</label>
        <input type="text" class="form-control" placeholder="Wpisz nazwę użytkownika:" id="nick" name="nick">
    </div>

    <div class="form-label">
        <label for="email">Adres e-mail:</label>
        <input type="text" name="email" class="form-control" placeholder="Wpisz adres" id="email">
    </div>

    <div class="form-label">
        <label for="password">Hasło:</label>
        <input type="password" class="form-control" placeholder="Wpisz haslo" id="pass" name="password">
    </div>

    <div class="form-check">
        <label class="form-check-label">
        <input class="form-chceck-input" type="checkbox"> Zapamietaj mnie
        </label>
    </div>

    <button type="submit" id="prz" class="btn btn-primary">Zatwierdź</button>
    </form>
</div>


<?php get_footer(); ?>