<?php get_header(); ?>

<figure class="wp-block-image"><img src="http://localhost/jackpet/wp-content/uploads/2023/05/sherlock.jpg" alt="" class="wp-image-16"/></figure>

<h2 class="wp-block-heading">Sherlock Dog Rescue</h2>    

<p> Sherlock Dog Rescue was founded in August 1997 by a handful of like-minded people who simply wanted to rescue and re-home abandoned dogs. Founder members agreed that they would not get into any politics, rules or regulations and therefore it was decided there would be no long list of committee members drawing up endless policies.
<br> <br> If you would like to know more please call us or Jack Pet Supplies to arrange an appointment to meet the dogs. or use the contact form on the site</p>

<h2>See below the dogs avaiable for adoption </h2>
<div class="card_section">

 <?php $items = new WP_Query(array('post_type' => 'sherlock_dogs'));

 while ($items->have_posts()) : $items->the_post(); ?>

 <div class="card">

 <?php  $image = get_field('dog_image');

 if (!empty($image)) : ?>
<h3 class="card_title">My name is <?php the_field('dog_name'); ?></h3>
 <img class="card_image"src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />


 <div class="text">
 <?php endif; ?>

 
 <h3 class="card_subtitle">I am<?php the_field('dog_age'); ?> years old</h3>
 <p class="card_text"><?php the_field('dog_bio'); ?></p>

 </div>

 </div>

<?php endwhile; ?>

</div>

<?php get_footer(); ?> 