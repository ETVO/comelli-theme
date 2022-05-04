<?php
/**
 * Partial for blog page rendering
 * 
 * @package WordPress
 * @subpackage CF-Theme
 */

$title = "Blog Comelli";

?>

<div class="blog-wrap">
    <div class="container  col-md-10 col-lg-9 mx-auto py-5">
        <div class="heading row pb-3">
            <div class="row col-12 mb-3 col-md-auto mb-md-0">
                <div class="col-auto my-auto">
                    <h2 class="title m-auto text-center text-lg-start m-0">
                        <?php echo $title; ?>
                    </h2>
                </div>
                <div class="col-auto my-auto">
                    <div class="categories">
                        <?php get_template_part("partials/blog/categories"); ?>
                    </div>
                </div>
            </div>
            <div class="search col-auto ms-auto">
                <?php get_search_form(); ?>
            </div>
        </div>
        <div class="feed">
            <?php get_template_part("partials/blog/feed"); ?>
        </div>
    </div>
</div>