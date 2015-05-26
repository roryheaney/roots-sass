  <?php
  // Set up the objects needed
  $my_wp_query = new WP_Query();
  $all_wp_pages = $my_wp_query->query(array('post_type' => 'page', 'posts_per_page' => -1, 'order' => 'ASC', 'orderby' => 'title'));
  
  // Get the page as an Object
  $page = get_page_by_title('UK Wide Courses');
  
  // Filter through all pages and find Portfolio's children
  $page_children = get_page_children( $page->ID, $all_wp_pages );
  
  ?>

  <div class="row">
    <div class="col-sm-12">
      <ul class="homepage-locations hidden-xs list-unstyled">
      <?php foreach($page_children as $location): ?>
        <li class="col-set-5"><a href="https://projss.co.uk/<?=$location->post_name; ?>" title="Find courses in <?=$location->post_title; ?>"><?=$location->post_title; ?></a></li>
      <?php endforeach; ?>
      </ul>
    </div>
  </div>

  <div class="row visible-xs">
    <div class="col-sm-12">
      <select name="" id="">
            <?php foreach($page_children as $location): ?>
          <option value="https://projss.co.uk/<?=$location->post_name; ?>" ><?=$location->post_title; ?></option>
        <?php endforeach; ?>
      </select>
    </div>
  </div>

