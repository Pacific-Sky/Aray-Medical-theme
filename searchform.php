<form class="searchform" action="/" method="get">
    <label for="search"><?php PS_SVG('search'); ?></label>
    <input type="text" placeholder="search" name="s" id="search" value="<?php the_search_query(); ?>" />
    <input type="submit" alt="Search" src="<?php bloginfo( 'template_url' ); ?>/images/search.png" />
</form>
