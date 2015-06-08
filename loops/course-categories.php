<div class="training-courses row">

<?php

$args = array( 'hide_empty=0' );

$terms = get_terms( 'training', $args );
if ( ! empty( $terms ) && ! is_wp_error( $terms ) ) {
    $count = count( $terms );
    $i = 0;
    $term_list = '<ul class="my_term-archive list-unstyled">';
    foreach ( $terms as $term ) {
        $i++;
        $term_id = $term->term_id;
        $image =  get_field('image', $term );
    	$term_list .= '<li class="col-sm-6 col-md-4"><a class="category-thumb" href="' . get_term_link( $term ) . '" title="' . sprintf( __( 'View all post filed under %s', 'my_localization_domain' ), $term->name ) . '"><div class="inner"><div class="thumb"><div class="overlay"></div><span>' . $term->name . '</span><img src="' . $image . '" alt="' . $term->name . '"></div></div></a></li>';
    	if ( $count != $i ) {
            //$term_list .= ' &middot; ';
        }
        else {
            $term_list .= '</ul>';
        }
    }
    echo $term_list;
}

?>

</div>
