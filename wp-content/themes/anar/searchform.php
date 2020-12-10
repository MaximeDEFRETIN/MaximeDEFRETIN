<form action="<?php echo home_url('/'); ?>" method="get">
    <label for="search">Rechercher :</label>
    <input type="text" name="s" id="search" value="<?php the_search_query(); ?>" />
    <input type="image" alt="Recherche" src="<?php bloginfo('template_url'); ?>/assets/img/recherche.png" />
</form>