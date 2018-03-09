
<?php get_header(); ?>

<!--    main?-->
    <div id="pageContents" class="homepage">
        <div class="hidden-xs">
            <div id="homepage-carousel" class="carousel slide" data-interval="10000" data-ride="carousel">
                <ol class="carousel-indicators">
                    <li data-target="#homepage-carousel" data-slide-to="0" class="active"></li>
                    <li data-target="#homepage-carousel" data-slide-to="1" class></li>
                </ol>
                <div class="carousel-inner">
                    <div class="item active">
                        <a href="/da/products/">
                            <img src="/wp-content/themes/KGrejChainboxDemo/images/demoshop_01.jpg" alt="Hummerbisque med croutoner">
                            <div class="carousel-caption">
                                <h4>Hummerbisque med croutoner</h4>
                            </div>
                        </a>
                    </div>
                    <div class="item">
                        <a>
                            <img src="/wp-content/themes/KGrejChainboxDemo/images/demoshop_02.jpg" alt="Grillet fisk">
                            <div class="carousel-caption">
                                <h4>Grillet fisk</h4>
                            </div>
                        </a>
                    </div>
                </div>
                <a class="carousel-control left" href="#homepage-carousel" data-slide="prev">
                    <i class="fa fa-chevron-left">
                    </i>
                </a>
                <a class="carousel-control right" href="#homepage-carousel" data-slide="next">
                    <i class="fa fa-chevron-right">
                    </i>
                </a>
            </div>
        </div>
        <div class="umb-grid">
            <div class="grid-section">
                <div class="bg-muted">
                    <div class="container-fluid">
                        <div class="row clearfix">
                            <?php 
                            if ( have_posts() ) {
                                while ( have_posts() ) {
                                    the_post(); 
                                    //
                                    // Post Content here
                                    //
                                } // end while
                            } // end if
                            ?>
                                    

                           <!-- <div class="col-sm-3 column">
                                <div class="widgetContainer">
                                   
                                    <?php dynamic_sidebar( 'payment_field' ); ?>
                                </div>
                            </div>
                            <div class="col-sm-3 column">
                                <div>
                                    <h5>
                                        <i class="fas fa-paper-plane"></i>
                                        <strong>&nbsp;Dag-til-dag levering</strong>
                                    </h5>
                                    <p>
                                        Bestil inden kl. 14 og hav dine varer allerede i morgen!
                                    </p>
                                </div>
                            </div>
                            <div class="col-sm-3 column">
                                <div>
                                    <h5>
                                        <strong>
                                            <i class="fab fa-facebook-square"></i>
                                            Følg os på facebook
                                        </strong>
                                    </h5>
                                    <p>
                                        Vi uddeler jævnligt rabatkoder og spændende information omkring nye produkter. Bliv fan i dag!
                                    </p>
                                </div>
                            </div>
                            <div class="col-sm-3 column">
                                <div>
                                    <h5>
                                        <strong>
                                            <i class="fas fa-envelope"></i>
                                            &nbsp;Nyhedsbrev
                                        </strong>
                                        <ins>
                                            <br>
                                        </ins>
                                    </h5>
                                    <p>
                                        Modtag vores Månedlige nyhedsbrev med gode tilbud og spændende konkurrencer.
                                    </p>
                                    <form class="newsletter-form has-placeholders" method="post" autocomplete="off">
                                        <input type="hidden" name="ispostback" value="true">
                                        <p class="text-warning">
                                            <i class="fa fa-fw fa-exclamation-triangle"></i>
                                            Demo mode
                                        </p>
                                        <div class="form-group">
                                            <label class="sr-only" for="newsletter-email">E-mail</label>
                                            <input type="text" name="newsletter-email" id="newsletter-email" class="form-control input-sm" placeholder="E-mail">
                                        </div>
                                        <div class="form-group">
                                            <label class="sr-only" for="newsletter-namel">Name</label>
                                            <input type="text" name="newsletter-name" id="newsletter-name" class="form-control input-sm" placeholder="Name">
                                        </div>
                                        <div class="form-group">
                                            <button type="submit" name="subscribe" class="btn btn-sm btn-primary pull-right" >
                                                <i class="fa fa-envelope">
                                                </i>
                                                <span>
                                                    Subscribe
                                                </span>
                                            </button>
                                        </div>
                                    </form>
                                </div>
                            </div>
-->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


<?php get_footer(); ?>
