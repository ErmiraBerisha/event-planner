<?php get_header();?>

<?php //the_title();?>


<div class="front-page">
  

    <?php if (has_post_thumbnail()): ?>

        <img src="<?php the_post_thumbnail_url();?>" alt="" class="featured-image">

    <?php endif;?>

</div>

<div class="front-page-text">
    <h1>We make Dreams come true.</h1>
    <p>Event Planning consists of coordinating every detail of meetings and conventions, from the speakers and meeting location to arranging for printed materials and audio-visual equipment.
Event planning begins with determining the objective that the sponsoring organization wants to achieve. Planners choose speakers, entertainment, and content, and arrange the program to present the organization's information in the most effective way. Meeting planners are responsible for selecting meeting sites, prospective attendees and how to get them to the meeting. </p>
    <a href="#">CONTACT US</a>  
    

</div>


    <div class="pt-3">
        <div class="pt-3-text">
            <h1>
                Flawless Execution
            </h1>
            <p>
                We specialize in planning and designing weddings and events in private homes and raw spaces. We pride ourselves on flawless execution with high level touches. Weekend affairs, multiple days of tent installation, ferries and travel logistics are a typical day at the office.
                </p>
                 <a href="#">WHAT CLIENTS ARE SAYING</a>  
            </div>
        <img src="<?php echo get_theme_file_uri('images/decorated-seatings-wedding-guests.jpg')?>">
        

    </div>
    <div class="pt-4">
        <div class="pt-4-text">
            <h1>
                Elegant Planning
            </h1>
            <p>
                We specialize in planning and designing weddings and events in private homes and raw spaces. We pride ourselves on flawless execution with high level touches. Weekend affairs, multiple days of tent installation, ferries and travel logistics are a typical day at the office.
                </p>
                <a href="#">WHAT CLIENTS ARE SAYING</a>  
               
            </div>
            <img src="<?php echo get_theme_file_uri('images/flowers.jpg')?>">
 
        

    </div>




<?php get_footer();?>