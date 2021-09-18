<?php
$query = new WP_Query( array( 'post_type' => 'page' , 'posts_per_page' => -1 ) );
if ( $query->have_posts() ) :
    while ( $query->have_posts() ) : $query->the_post();
        echo "Page ID : " . get_the_ID() . '<br/>';
        echo "Page Title : " . get_the_title() . '<br/>' ;
        echo "Page URL : " . get_permalink() . '<br/>';
        echo "Page Template : " . ( empty(get_page_template_slug() ) ? 'page.php' : get_page_template_slug() ) . '<br/>';
        echo "<br/><br/>";
    endwhile; // end of the loop. 
endif;
