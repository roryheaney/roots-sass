<?php
/**
 * Roots includes
 *
 * The $roots_includes array determines the code library included in your theme.
 * Add or remove files to the array as needed. Supports child theme overrides.
 *
 * Please note that missing files will produce a fatal error.
 *
 * @link https://github.com/roots/roots/pull/1042
 */
$roots_includes = array(
  'lib/utils.php',           // Utility functions
  'lib/init.php',            // Initial theme setup and constants
  'lib/wrapper.php',         // Theme wrapper class
  'lib/sidebar.php',         // Sidebar class
  'lib/config.php',          // Configuration
  'lib/activation.php',      // Theme activation
  'lib/titles.php',          // Page titles
  'lib/nav.php',             // Custom nav modifications
  'lib/gallery.php',         // Custom [gallery] modifications
  'lib/comments.php',        // Custom comments modifications
  'lib/scripts.php',         // Scripts and stylesheets
  'lib/extras.php',          // Custom functions
);

foreach ($roots_includes as $file) {
  if (!$filepath = locate_template($file)) {
    trigger_error(sprintf(__('Error locating %s for inclusion', 'roots'), $file), E_USER_ERROR);
  }

  require_once $filepath;
}
unset($file, $filepath);

add_filter( 'show_admin_bar', '__return_false' );

include_once 'metaboxes/setup.php';
include_once 'metaboxes/simple-spec.php';

function setup_popular_post_type() {
$labels = array(
    'name' => _x('Popular', 'post type general name'),
    'singular_name' => _x('Popular', 'post type singular name'),
    'add_new' => _x('Add New Popular', 'book'),
    'add_new_item' => __('Add New Popular'),
    'edit_item' => __('Edit Popular'),
    'new_item' => __('New Popular'),
    'view_item' => __('View Popular'),
    'search_items' => __('Search Popular'),
    'not_found' =>  __('No Popular found'),
    'not_found_in_trash' => __('No Popular found in Trash'),
    'parent_item_colon' => ''
  );
$args = array(
  'labels' => $labels,
  //'taxonomies' => array('category'),
  'public' => true,
  'publicly_queryable' => true,
  'show_ui' => true,
  'query_var' => true,
    //'rewrite' => true,
  'rewrite' => array('slug' => 'popular', 'with_front' => 'true'),
  'capability_type' => 'post',
  'hierarchical' => true,
  'menu_position' => null,
  'supports' => array('title','editor','revisions','thumbnail'),
  'has_archive' => true,
  );
register_post_type('popular',$args);
register_taxonomy( 'pop', 'popular');
}
add_action('init', 'setup_popular_post_type');

function setup_team_post_type() {
$labels = array(
    'name' => _x('Team', 'post type general name'),
    'singular_name' => _x('Team Member', 'post type singular name'),
    'add_new' => _x('Add New Team Member', 'book'),
    'add_new_item' => __('Add New Team Member'),
    'edit_item' => __('Edit Team Member'),
    'new_item' => __('New Team Member'),
    'view_item' => __('View Team Member'),
    'search_items' => __('Search Team Members'),
    'not_found' =>  __('No Team Member found'),
    'not_found_in_trash' => __('No Team Members found in Trash'),
    'parent_item_colon' => ''
  );
$args = array(
    'labels' => $labels,
    'public' => true,
    'publicly_queryable' => true,
    'show_ui' => true,
    'query_var' => true,
    'rewrite' => true,
    'capability_type' => 'post',
    'hierarchical' => true,
    'menu_position' => null,
    'supports' => array('title','editor','revisions','thumbnail'),
  'has_archive' => true,
  );
register_post_type('team-members',$args);
register_taxonomy( 'team', 'team-members');
}

function setup_testimonials_post_type() {
$labels = array(
  'name' => _x('Testimonials', 'post type general name'),
  'singular_name' => _x('Testimonial', 'post type singular name'),
  'add_new' => _x('Add New Testimonial', 'book'),
  'add_new_item' => __('Add New Testimonial'),
  'edit_item' => __('Edit Testimonial'),
  'new_item' => __('New Testimonial'),
  'view_item' => __('View Testimonial'),
  'search_items' => __('Search Testimonials'),
  'not_found' =>  __('No Testimonials found'),
  'not_found_in_trash' => __('No Testimonials found in Trash'),
  'parent_item_colon' => ''
  );
$args = array(
  'labels' => $labels,
  //'taxonomies' => array('category'),
  'public' => true,
  'publicly_queryable' => true,
  'show_ui' => true,
  'query_var' => true,
    //'rewrite' => true,
  'rewrite' => array('slug' => 'testimonials', 'with_front' => 'true'),
  'capability_type' => 'post',
  'hierarchical' => true,
  'menu_position' => null,
  'supports' => array('title','editor','revisions','excerpt'),
  'has_archive' => true,
  );
register_post_type('testimonials',$args);
register_taxonomy( 'testimonial', 'testimonials');

}
add_action('init', 'setup_testimonials_post_type');

function setup_courses_post_type() {
$labels = array(
    'name' => _x('Courses', 'post type general name'),
    'singular_name' => _x('Course', 'post type singular name'),
    'add_new' => _x('Add New Course', 'book'),
    'add_new_item' => __('Add New Course'),
    'edit_item' => __('Edit Course'),
    'new_item' => __('New Course'),
    'view_item' => __('View Course'),
    'search_items' => __('Search Courses'),
    'not_found' =>  __('No courses found'),
    'not_found_in_trash' => __('No courses found in Trash'),
    'parent_item_colon' => ''
  );
$args = array(
    'labels' => $labels,
    'public' => true,
    'publicly_queryable' => true,
    'show_ui' => true,
    'query_var' => true,
    //'rewrite' => true,
  'rewrite' => array('slug' => 'courses', 'with_front' => 'true'),
    'capability_type' => 'post',
    'hierarchical' => true,
    'menu_position' => null,
    'supports' => array('title','editor','revisions','thumbnail','custom-fields','excerpt'),
  'has_archive' => true
  );
register_post_type('courses',$args);
register_taxonomy( 'training', 'courses',array('label' => __( 'Course Category' ), 'rewrite' => array( 'slug' => 'training' ),'hierarchical' => true));

}
add_action('init', 'setup_courses_post_type');

function setup_faq_post_type() {
$labels = array(
    'name' => _x('FAQ', 'post type general name'),
    'singular_name' => _x('FAQ', 'post type singular name'),
    'add_new' => _x('Add New FAQ', 'book'),
    'add_new_item' => __('Add New FAQ'),
    'edit_item' => __('Edit FAQ'),
    'new_item' => __('New FAQ'),
    'view_item' => __('View FAQ'),
    'search_items' => __('Search FAQs'),
    'not_found' =>  __('No FAQ found'),
    'not_found_in_trash' => __('No FAQs found in Trash'),
    'parent_item_colon' => ''
  );
$args = array(
  'labels' => $labels,
  //'taxonomies' => array('category'),
  'public' => true,
  'publicly_queryable' => true,
  'show_ui' => true,
  'query_var' => true,
    //'rewrite' => true,
  'rewrite' => array('slug' => 'faqs', 'with_front' => 'true'),
  'capability_type' => 'post',
  'hierarchical' => true,
  'menu_position' => null,
  'supports' => array('title','editor','revisions','excerpt'),
  'has_archive' => true,
  );
  register_post_type('faqs',$args);
  register_taxonomy( 'faq', 'faqs');
}
add_action('init', 'setup_faq_post_type');

function faq_tax() {

    register_taxonomy(
            'faq_tax',
            array( 'courses', 'faqs' ),
            array(
                'label' => __( 'FAQ Tags' ),
                'hierarchical'      => true,
                'show_ui'           => true,
                'update_count_callback' => '_update_post_term_count',
                'show_admin_column' => true,
                'query_var'         => true,
            )
        );
}

add_action( 'init', 'faq_tax', 0 );

add_action('admin_menu', 'add_global_custom_options');  

function add_global_custom_options()  
{  
    add_options_page('Website Settings', 'Website Settings', 'manage_options', 'functions','global_custom_options');  
}  

function global_custom_options()  
{  
?>  
    <div class="wrap">  
        <h2>Site Content</h2>  
        <form method="post" action="options.php">  
            <?php wp_nonce_field('update-options') ?>
            <p><strong>LinkedIn Text:</strong><br />  
                <input type="text" name="linkedintext" value="<?php echo get_option('linkedintext'); ?>" />  
            </p>
            <p><strong>Phone:</strong><br />  
                <input type="text" name="companyphone" value="<?php echo get_option('companyphone'); ?>" />  
            </p>
            <p><strong>Fax:</strong><br />  
                <input type="text" name="companyfax" value="<?php echo get_option('companyfax'); ?>" />  
            </p>
            <p><strong>Address:</strong><br />  
                <input type="text" name="companyaddress" value="<?php echo get_option('companyaddress'); ?>" />  
            </p>
            <p><strong>Hours to reply to customer query:</strong><br />  
                <input type="text" name="hours" value="<?php echo get_option('hours'); ?>" />  
            </p>
            <p><strong>'What happens next?' text:</strong><br />  
                <textarea name="whathappens" rows="5" cols="100"><?php echo get_option('whathappens'); ?></textarea> 
            </p>
            <p><strong>VAT:</strong><br />  
                <input type="text" name="vat" value="<?php echo get_option('vat'); ?>" />  
            </p>
            <p><strong>Card charge:</strong><br />  
                <input type="text" name="cardcharge" value="<?php echo get_option('cardcharge'); ?>" />  
            </p>
            <?php $selected = ' selected="selected"'; ?>
            <p><strong>Turn on/off 'You may be interested in':</strong><br />  
            <select name="interestedin">
              <option value="1"<?php if (get_option('interestedin') == '1') echo $selected; ?>>On</option>
              <option value="0"<?php if (get_option('interestedin') == '0') echo $selected; ?>>Off</option>
            </select>
            </p>
            <h2>Homepage<h2>
            <p><strong>Homepage (search headline):</strong><br />  
                <input type="text" name="searchheadline" value="<?php echo get_option('searchheadline'); ?>" />  
            </p>
            <p><strong>Homepage (search text):</strong><br />  
              <textarea name="searchtext"><?php echo get_option('searchtext'); ?></textarea>
            </p>
            <p><strong>Homepage (popular headline):</strong><br />  
                <input type="text" name="popularheadline" value="<?php echo get_option('popularheadline'); ?>" />  
            </p>
            <p><strong>Homepage (popular text):</strong><br />  
              <textarea name="populartext"><?php echo get_option('populartext'); ?></textarea>
            </p>
            <h2>Group/On-site CTA<h2>
            <p><strong>CTA headline:</strong><br />  
                <input type="text" name="ctaheadline" value="<?php echo get_option('ctaheadline'); ?>" />  
            </p>
            <p><strong>CTA from price:</strong><br />  
                <input type="text" name="ctatext" value="<?php echo get_option('ctatext'); ?>" />  
            </p>
            <p><strong>CTA text:</strong><br />  
              <textarea name="ctaprice"><?php echo get_option('ctaprice'); ?></textarea>
            </p>
            <p><strong>CTA link text:</strong><br />  
                <input type="text" name="ctalinktext" value="<?php echo get_option('ctalinktext'); ?>" />  
            </p>
            <p><strong>CTA link:</strong><br />  
                <input type="text" name="ctalink" value="<?php echo get_option('ctalink'); ?>" />  
            </p>

            <h2>FAQ Landing<h2>
             <p>
                <label for="" style="font-weight:bold;">FAQ Title:</label><br />  
                <input type="text" id="faq-title" name="faq-title" value="<?php echo get_option('faq-title'); ?>"/>
             </p>


             <p>
                <label for="" style="font-weight:bold;">FAQ Information Heading:</label><br />  
                <input type="text" id="faq-info-heading" name="faq-info-heading" value="<?php echo get_option('faq-info-heading'); ?>"/>
             </p>

             <p>
                <label for="" style="font-weight:bold;">FAQ Information No Results Heading:</label><br />  
                <input type="text" id="faq-info-no-heading" name="faq-info-no-heading" value="<?php echo get_option('faq-info-no-heading'); ?>"/>
             </p>

             <p>
                <label for="" style="font-weight:bold;">FAQ Information No Results Paragraph (No Formatting):</label><br />  
                <textarea id="faq-info-no-paragraph" name="faq-info-no-paragraph" rows="5" cols="100"><?php echo get_option('faq-info-no-paragraph'); ?></textarea>
             </p>

             <p>
                <label for="" style="font-weight:bold;">FAQ Ask Our Team Paragraph (No Formatting):</label><br />  
                <textarea id="faq-para-1" name="faq-para-1" rows="5" cols="100"><?php echo get_option('faq-para-1'); ?></textarea>
             </p>

             <p>
                <label for="" style="font-weight:bold;">FAQ Submit Question Paragraph (No Formatting):</label><br />  
                <textarea id="faq-para-2" name="faq-para-2" rows="5" cols="100"><?php echo get_option('faq-para-2'); ?></textarea>
             </p>

             <p>
                <label for="" style="font-weight:bold;">FAQ Information Details (No Formatting):</label><br />  
                <textarea id="faq-info-details" name="faq-info-details" rows="5" cols="100"><?php echo get_option('faq-info-details'); ?></textarea>
             </p>

             <p>
                <label for="" style="font-weight:bold;">FAQ Button 1:</label><br />  
                <input type="text" id="faq-button-1" name="faq-button-1" value="<?php echo get_option('faq-button-1'); ?>"/>
             </p>

             <p>
                <label for="" style="font-weight:bold;">FAQ Button 1 Hyperlink:</label><br />  
                <input type="text" id="faq-button-1-hyperlink" name="faq-button-1-hyperlink" value="<?php echo get_option('faq-button-1-hyperlink'); ?>"/>
             </p>

             <p>
                <label for="" style="font-weight:bold;">FAQ Button 2:</label><br />  
                <input type="text" id="faq-button-2" name="faq-button-2" value="<?php echo get_option('faq-button-2'); ?>"/>
             </p>

             <p>
                <label for="" style="font-weight:bold;">FAQ Button 2 Hyperlink:</label><br />  
                <input type="text" id="faq-button-2-hyperlink" name="faq-button-2-hyperlink" value="<?php echo get_option('faq-button-2-hyperlink'); ?>"/>
             </p>

             <p>
                <label for="" style="font-weight:bold;">FAQ Button 3:</label><br />  
                <input type="text" id="faq-button-3" name="faq-button-3" value="<?php echo get_option('faq-button-3'); ?>"/>
             </p>

             <p>
                <label for="" style="font-weight:bold;">FAQ Button 3 Hyperlink:</label><br />  
                <input type="text" id="faq-button-3-hyperlink" name="faq-button-3-hyperlink" value="<?php echo get_option('faq-button-3-hyperlink'); ?>"/>
             </p>

             <p>
                <label for="" style="font-weight:bold;">Landing Title:</label><br />  
                <input type="text" id="landing-title" name="landing-title" value="<?php echo get_option('landing-title'); ?>"/>
             </p>

             <p>
                <label for="" style="font-weight:bold;">Landing Paragraph (No Formatting):</label><br />  
                <textarea id="landing-paragraph" name="landing-paragraph" rows="5" cols="100"><?php echo get_option('landing-paragraph'); ?></textarea>
             </p>

             <p>
                <label for="" style="font-weight:bold;">Landing anchor link text:</label><br />  
                <input style="width:100%;" type="text" id="landing-anchor" name="landing-anchor" value="<?php echo get_option('landing-anchor'); ?>"/>
             </p>

             <p>
                <label for="" style="font-weight:bold;">Landing E-Course Box Text (No Formatting):</label><br />  
                <textarea id="landing-ecourse" name="landing-ecourse" rows="5" cols="100"><?php echo get_option('landing-ecourse'); ?></textarea>
             </p>


            <p><input type="submit" name="Submit" value="Store Options" /></p>  
            <input type="hidden" name="action" value="update" />  
            <input type="hidden" name="page_options" value="landing-ecourse,landing-anchor,landing-paragraph,landing-title,faq-para-1,faq-para-2,faq-info-no-paragraph,faq-info-no-heading,linkedintext,companyphone,companyfax,companyaddress,hours,whathappens,vat,cardcharge,interestedin,searchheadline,searchtext,popularheadline,populartext,ctaheadline,ctaprice,ctatext,ctalinktext,ctalink,faq-title,faq-button-1-hyperlink,faq-button-2-hyperlink,faq-button-3-hyperlink,faq-button-1,faq-button-2,faq-button-3,faq-info-details,faq-info-heading" />
            
        </form>  
    </div>  
<?php  
}  

/**
* Creates sharethis shortcode
*/
if (function_exists('st_makeEntries')) :
add_shortcode('sharethis', 'st_makeEntries');
endif;

function custom_excerpt_length( $length ) {
  return 50;
}
add_filter( 'excerpt_length', 'custom_excerpt_length', 999 );

function new_excerpt_more( $more ) {
  return '... <a class="read-more" href="'. get_permalink( get_the_ID() ) . '">Read More &raquo;</a>';
}
add_filter( 'excerpt_more', 'new_excerpt_more' );

// Either directly (in your init hook):
$wp->add_query_var( 'term' );
$wp->add_query_var( 'address' );

// Or via a filter:
add_filter( 'query_vars', 'wpse12965_query_vars' );
function wpse12965_query_vars( $query_vars )
{
    $query_vars[] = 'address';
    $query_vars[] = 'term';
    return $query_vars;
}
add_action( 'init', 'wpse12065_init' ); 
function wpse12065_init()
{
    add_rewrite_rule(
        'training-courses(/([^/]+))?(/([^/]+))?/?',
        'index.php?page_id=965&address=$matches[2]&term=$matches[4]',
        'top'
    );
}

function search_array($needle, $haystack) {
  if(is_array($haystack) && in_array($needle, $haystack)) {
    return true;
  }
  if(is_array($haystack)){
    foreach($haystack as $element) {
      if(is_array($element) && search_array($needle, $element))
        return true;
    }
  }
  return false;
}

function recentlyViewed(){
  if(isset($_SESSION['recently-viewed']) && count($_SESSION['recently-viewed']) > 0){
    $return = '<ul>';
    $recentArray = array_reverse($_SESSION['recently-viewed'], true);
    foreach(array_slice($recentArray, 0, 5) as $viewed){
      $return .= '<li><a href="'.$viewed['slug'].'">'.$viewed['name'].'</a></li>';
    }
    $return .= "<ul>";
    return $return;
  } else {
    return false;
  }
}

function addRecentViewed($post){
  if($post->post_type == 'courses' && !search_array($post->ID,$_SESSION['recently-viewed'])){
    if(!empty($post->ID) && !empty($post->post_title) && !empty($post->post_name))
    $_SESSION['recently-viewed'][] = array("id"=>$post->ID, "name"=>$post->post_title, "slug" => $post->post_name);
  }
}


add_action("wpcf7_before_send_mail", "add_to_custom_post_type_subscribers");
function add_to_custom_post_type_subscribers(&$wpcf7_data)
{
    // Everything you should need is in this variable
    //var_dump($wpcf7_data);
  
  if ($wpcf7_data->id==1582){
  
    $name = $wpcf7_data->posted_data['name'];
    $email = $wpcf7_data->posted_data['email'];
    $telephone = $wpcf7_data->posted_data['telephone'];
    
    $notes = "Contacted via in-house quotation page:<br/>";
    //$notes .= "Days training required: ".$wpcf7_data->posted_data['days']."<br/>";
    $notes .= "Number of attendees: ".$wpcf7_data->posted_data['attendees']."<br/>";
    $notes .= "Postcode: ".$wpcf7_data->posted_data['postcode']."<br/>";
    $notes .= "Courses interested in: ".$wpcf7_data->posted_data['courses'];
    
    $shortcode = strtoupper(str_replace(' ', '', substr($name, 0, 3)));
    if(!isset($mainTelephone) && empty($mainTelephone)){
      $mainTelephone = NULL;
    }
    
    $customer = PSSCustomers::newCustomer(NULL, NULL, NULL, $name, NULL, $email, $telephone, NULL, NULL, $shortcode);
    $customer->databaseInsert();
    $customerID = $customer->getID();
  
    $person = PSSPersons::newPerson(NULL, $name, NULL, $email, $telephone, NULL, NULL, $customerID);
    $person->databaseInsert();
    $personID = $person->getID();
        
    $enquiry = PSSSalesEnquiries::newSaleEnquiry(0, '', '', '', $customerID, 0, $notes, 1, $personID);
    $enquiry->databaseInsert();
    $enquiryId = $enquiry->getID();
    
  }
  
}

//Register Navigations
add_action( 'init', 'my_custom_menus' );

function my_custom_menus() {
    register_nav_menus(
        array(
            'second_menu' => __( 'Secondary Menu' ),
        )
    );
}

function the_slug($echo=true){
  $slug = basename(get_permalink());
  do_action('before_slug', $slug);
  $slug = apply_filters('slug_filter', $slug);
  if( $echo ) /*echo $slug*/;
  do_action('after_slug', $slug);
  return $slug;
}

// Custom functions
add_image_size( 'slide', 1600, 440, true );
add_image_size( 'search', 150, 150, true );
add_image_size( 'blog', 250, 335, true );
add_image_size( 'course', 315, 273, true );
add_image_size( 'course-small', 230, 200, true );
add_image_size( 'home', 436, 132, true );
add_image_size( 'home-small', 205, 132, true );