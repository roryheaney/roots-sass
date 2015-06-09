<div class="wrap container" role="document">
	<div class="content row">
		<main class="col-sm-12" role="main">
			<?php
			$page = get_page( 33 );
			$title = apply_filters('the_title', $page->post_title); 
			$content = apply_filters('the_content', $page->post_content); 
			?>
			<div class="page-header">
				<h1><?php echo $title ?></h1>
			</div>
			<div class="breadcrumbs" xmlns:v="http://rdf.data-vocabulary.org/#">
				<!-- Breadcrumb NavXT 5.2.2 -->
				<span typeof="v:Breadcrumb"><a rel="v:url" property="v:title" title="Go to Project Skills Solutions." href="<?php echo esc_url(home_url('/')); ?>" class="home">Project Skills Solutions</a></span> &gt; <span typeof="v:Breadcrumb"><span property="v:title">Courses by Project Skills Solutions</span></span></div>
				<?php echo $content; ?>
				<?php get_template_part('loops/course-categories'); ?>
			</main><!-- /.main -->
		</div><!-- /.content -->
</div><!-- /.wrap -->