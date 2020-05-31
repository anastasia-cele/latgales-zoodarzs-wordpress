<?php get_header(); ?>

<main>

<div id="title">
    <div class="title">
        <h1>jaunumi</h1>
        <div class="title-shadow">
            <h1>jaunumi</h1>
        </div>
    </div>
</div>
    
    <!--Post-->   
    <div id="posts">    
            
        <?php while (have_posts()) : the_post(); ?>
            <div class="singlepost">
                <div class="top">
                    <h2> <?php the_title(); ?> </h2>
                    <h3> <?php the_time('j. F, Y')?> </h3>  
                    <div class="image">            
                        <img src="<?php echo get_the_post_thumbnail_url(get_the_ID());?>" alt="">
                        <div class="back"></div>
                    </div>  
                </div>
                <div class="bot">
                    <?php the_content(); ?> 
                </div>
            
        <?php endwhile;?>      
    </div>
</main>

<?php get_footer(); ?>