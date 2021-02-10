<?php /* Template Name: List users */ ?>

<?php get_header(); ?>


<?php get_template_part('partials/users-table');?>


<?php

$user = getUser($_GET['id']);
?>



<?php get_footer(); ?>
