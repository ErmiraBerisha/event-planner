
<div class="blog-main-img">
    <img src="<?php echo get_theme_file_uri('images/blogmain.jpg')?>">
    <div class="img-text">
        <h1>THE LATEST</h1>
        <p>READ ABOUT OUR LATEST EVENTS AND ADVICE ABOUT EVENT PLANNING</p>
    </div>
    
</div>
<div class="card">
<?php
    if (have_posts()):
    while (have_posts()) : the_post();?>

        
            <div class="card-body">
            

            <?php if (has_post_thumbnail()): ?>

                <img src="<?php the_post_thumbnail_url();?>" alt="" class="featured-image" class="featured-image">

            <?php endif;?>

            <h2><?php the_title();?></h2>

            <p><?php the_excerpt();?></p>

            <a href="<?php the_permalink();?>">Read more &#8594;</a>


            
        </div>


    <?php endwhile; else: endif;?>
</div>



