<?php get_header(); ?>

<main>
    <!--Header-->
    <div id="header">        
        <img src="http://localhost/wordpress/wp-content/themes/latgales-zoodarzs/public/img/gecko.png" alt="">
        <div class="title">
            <h1>Latgales zoodārzs</h1>
            <div class="title-shadow">
                <h1>Latgales zoodārzs</h1>
            </div>
            <h2>Vienības iela 27, Daugavpils</h2> 
            <div class="button">
                <a href="#jaunumi">Lasīt jaunumus</a>
            </div>   
        </div>        
    </div>  

    <!--Jaunumi-->
    <div id ="jaunumi">
        <h2>Jaunumi un pasākumi</h2>
    </div>      
    
    <!--Post-->   
    <div id="posts">    
            
        <?php $idx = 1; while (have_posts()) : the_post(); ?>
        <?php if( $idx % 2 == 1) { ?> 
            <div class="post">
                <div class="left">
                    <img src="<?php echo get_the_post_thumbnail_url(get_the_ID());?>" alt="">
                    <div class="back"></div>
                </div>
                <div class="right">
                    <h2> <?php the_title(); ?> </h2>
                    <h3> <?php the_time('j. F, Y')?> </h3>
                    <?php the_excerpt(); ?>
                    <div class="button"> 
                        <a href="<?php the_permalink(); ?>">Lasīt talāk</a> 
                    </div> 
                </div>
            </div>
            <?php } else { ?> 
                <div class="post">
                <div class="right othermargin">
                    <h2> <?php the_title(); ?> </h2>
                    <h3> <?php the_time('j. F, Y')?> </h3>
                    <?php the_excerpt(); ?>
                    <div class="button"> 
                        <a href="<?php the_permalink(); ?>">Lasīt talāk</a> 
                    </div> 
                </div>
                <div class="left">
                    <img src="<?php echo get_the_post_thumbnail_url(get_the_ID());?>" alt="">
                    <div class="back"></div>
                </div>                
            </div>
            <?php } ?>
        <?php $idx++; endwhile;?>      
    </div>
</main>

<?php get_footer(); ?>