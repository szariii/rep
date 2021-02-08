<?php /* Template Name: Contact Page */ ?>

<?php get_header(); ?>
<?php the_title();?>

<?php get_template_part('partials/users-table');?>

<?php
$user = getUser($_GET['id']);

?>

<div class="form-label">
    <label for="name">Imię:</label>
    <input type="text" class="form-control" placeholder="Wpisz imię" id="name" name="name" value="<?= $user->nick;?>">
</div>
<?php get_footer(); ?>
