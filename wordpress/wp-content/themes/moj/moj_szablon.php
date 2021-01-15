<?php /* Template Name: moj_szablon */ ?>

<?php get_header(); ?>

    <div class="container">
        <form>
            <div class="row">
                <div class="col-md-6">
                    <h1 style="text-align:center">Formularz</h1>
                    <h2> E-mail: </h2>
                    <input type="text" id="email" name="email">
                </div>
                <div class="col-md-6">
                    <div class="col-md-6">
                        <h2> Hasło: </h2>
                        <input type="password" id="haslo" name="haslo">
                        <h6 style="font-size:xx-small">Nigdy nie udostepniaj hasła innym osobom</h6>
                    </div>
                </div>

                <div class="col-md-12 text-center">
                    <button type="button" class="btn btn-primary" id="prz">Zatwierdź</button>
                </div>
            </div>
        </form>
    </div>


<?php get_footer(); ?>