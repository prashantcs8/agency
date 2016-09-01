<?php
/**
 * The template for displaying 404 pages (not found).
 *
 * @package stone_lotus
 */
get_header();
?>
<!--main content starts here-->

<style>    .errorMsg{            font-size: 42px;    padding: 50px 0px;    color: red;    font-weight: 900;    }</style>
<div class="single_pg_contents section-top">
    <div class="container">
        <div class="page_content">
                <div class="content">
                    <div class="row">
                        <div class="col-xs-12 text-center">
                           	<div class="errorMsg">404<span class="notfound"> Page Not Found</span></div>   
                			<div class="thepage ">The page you requested was not found.</div>
                        </div>
                    </div>
                </div>
        </div>
    </div>
</div>

<!--main content end here-->
<?php get_footer(); ?>
