<?php get_header(); ?>

<main id="front-page__container">
    <div id="front-page__featured"></div>

    <!-- ==================== BRANDS ====================== -->
    <div id="front-page__brands">
        <div class="container">
            <div class="row">
                <div class="brand-image__block col-md-3">
                    <img class="brand__image" src="<?php echo(get_template_directory_uri()); ?>/images/brand_gigabyte.png" alt="Brand Gigabyte">
                </div><!--Brand-image__block-->

                <div class="brand-image__block col-md-3">
                    <img class="brand__image" src="<?php echo(get_template_directory_uri()); ?>/images/brand_nvidia.png" alt="Brand Nvidia">
                </div><!--Brand-image__block-->

                <div class="brand-image__block col-md-3">
                    <img class="brand__image" src="<?php echo(get_template_directory_uri()); ?>/images/brand_intel.png" alt="Brand Intel">
                </div><!--Brand-image__block-->

                <div class="brand-image__block col-md-3">
                    <img class="brand__image" src="<?php echo(get_template_directory_uri()); ?>/images/brand_hyperx.png" alt="Brand Hyperx">
                </div><!--Brand-image__block-->

            </div><!--Row-->
        </div><!--CONTAINER-->
    </div><!--front-page__brands-->

    <section class="container" id="categories">
        <h1 class="mobile-only">Welcome To PcWare</h1>
        <h2 class="section-heading">Categories:</h2>
        <div class="row categorie-row">

            <div class="col-md-3 categorie-block">
                <a href="/wp/product-category/hard-drives/">
                <img class="categorie-image" src="<?php echo(get_template_directory_uri()); ?>/images/hard-drive.png" alt="Hard Drive">
                <p class="categorie-name">Hard Drives</p>
                </a>
            </div><!--Col-md-3-->
            <div class="col-md-3 categorie-block">
                <a href="/wp/product-category/processors/">
                    <img class="categorie-image" src="<?php echo(get_template_directory_uri()); ?>/images/processor.png" alt="Processor">
                    <p class="categorie-name">Proccessors</p>
                </a>
            </div><!--Col-md-3-->
            <div class="col-md-3 categorie-block">
                <a href="/wp/product-category/graphics-cards/">
                    <img class="categorie-image" src="<?php echo(get_template_directory_uri()); ?>/images/graphic-card.png" alt="Graphics Card">
                    <p class="categorie-name">Graphics Cards</p>
                </a>
            </div><!--Col-md-3-->
            <div class="col-md-3 categorie-block">
                <a href="/wp/product-category/ram/"">
                    <img class="categorie-image" src="<?php echo(get_template_directory_uri()); ?>/images/ram.png" alt="RAM">
                    <p class="categorie-name">RAM</p>
                </a>
            </div><!--Col-md-3-->

        </div><!--Row-->

        <div class="row categorie-row">
            <div class="col-md-3 categorie-block">
                <a href="/wp/product-category/monitors/">
                    <img class="categorie-image" src="<?php echo(get_template_directory_uri()); ?>/images/monitor.png" alt="Monitor">
                    <p class="categorie-name">Monitors</p>
                </a>
            </div> <!--categorie-block-->

            <div class="col-md-3 categorie-block">
                <a href="/wp/product-category/headsets/">
                    <img class="categorie-image" src="<?php echo(get_template_directory_uri()); ?>/images/headphones.png" alt="Headphones">
                    <p class="categorie-name">Headsets</p>
                </a>
            </div> <!--categorie-block-->

            <div class="col-md-3 categorie-block">
                <a href="/wp/product-category/keyboards/">      
                    <img class="categorie-image" src="<?php echo(get_template_directory_uri()); ?>/images/keyboard.png" alt="Keyboards">
                    <p class="categorie-name">Keyboards</p>
                </a>
            </div><!--Categorie Block-->

            <div class="col-md-3 categorie-block">
                <a href="/wp/product-category/mouse/">
                    <img class="categorie-image" src="<?php echo(get_template_directory_uri()); ?>/images/mouse.png" alt="Mouse">
                    <p class="categorie-name">Mouses</p>
                </a>
            </div> <!--categorie-block-->
        
        </div><!--Row-->

        <div class="row categorie-row">
            <div class="col-md-3 categorie-block">
                <a href="/wp/product-category/ssd/">
                    <img class="categorie-image" src="<?php echo(get_template_directory_uri()); ?>/images/ssd.png" alt="SSD">
                    <p class="categorie-name">SSD</p>
                </a>
            </div> <!--categorie-block-->

            <div class="col-md-3 categorie-block">
                <a href="/wp/product-category/power-supply/">    
                    <img class="categorie-image" src="<?php echo(get_template_directory_uri()); ?>/images/power.png" alt="Power Suply">
                    <p class="categorie-name">Power Suplies</p>
                </a>
            </div> <!--categorie-block-->
            

        
        </div><!--Row-->

    </section><!--Section Categorie-->


</main>

<?php get_footer(); ?>