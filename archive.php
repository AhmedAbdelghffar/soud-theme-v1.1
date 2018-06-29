<?php get_header();?>
<div class="content">
<div class="premlink tax">

<h1 class="page-title"><?php post_type_archive_title();  ?></h1>

<div class="container">

  <?php
      global $wp_query;
      $taxonomy = $wp_query->query_vars['taxonomy'];
      $term = $wp_query->query_vars['tax'];
      $term_id = get_term_by( 'slug', $term, $taxonomy );
      $term_id = $term_id->term_id;
      $terms = get_term_children( $term_id, $taxonomy );
      if ( !empty( $terms ) ) {
      $terms = get_terms( $taxonomy, array( 'child_of' => $term_id ) );
      echo '<ul class="child-term-list">';
      foreach ( $terms as $term ) {
      echo '<li><a href="'.$term->term_id.'">'.$term->name.'</a></li>';
      }

      echo '</ul>';
}
  ?>



</div>
</div>
</div>


<?php get_footer();?>
