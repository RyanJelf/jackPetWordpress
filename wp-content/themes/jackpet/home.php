<?php get_header(); ?>

<div id="main">

<figure class="wp-block-image"><img src="http://localhost/jackpet/wp-content/uploads/2023/05/home.jpg" alt="" class="wp-image-18"/></figure>

<p>Heaven for all dogs and dog proprietors | Jack Pet Supplies is a place that is devoted to giving you and your four-legged companions the best items, care, and life that we can. Like you, we realize that your dog is an immense part of the family. They offer such a great amount to our lives – interminable fun, grins, and unrestricted love.</p>

<p>&nbsp;We stock many products for all pets and regularly work to raise funds for Sherlock Dog Rescue. Sherlock Dog Rescue is a local dog rescue who has helped rehome over 100 dogs. If you would like to know what dogs they have available for adoption. If you would like to make a donation please give us a call.</p>

<div class="section">
<h2 class="wp-block-heading">Sherlock Dog Rescue</h2>
<p> Sherlock Dog Rescue was founded in August 1997 by a handful of like-minded people who simply wanted to rescue and re-home abandoned dogs. Founder members agreed that they would not get into any politics, rules or regulations and therefore it was decided there would be no long list of committee members drawing up endless policies.
<br> <br> If you would like to know more please call us or Jack Pet Supplies to arrange an appointment to meet the dogs. </p>   
<div class="card_section">

 <?php $items = new WP_Query(array('post_type' => 'sherlock_dogs'));

 while ($items->have_posts()) : $items->the_post(); ?>

 <div class="card">

 <?php  $image = get_field('dog_image');

 if (!empty($image)) : ?>
 <h3 class="card_title">My name is <?php the_field('dog_name'); ?></h3>
 <img class="card_image" src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />


 <div class="text">
 <?php endif; ?>


 <h3 class="card_subtitle">I am <?php the_field('dog_age'); ?> years old</h3>
 <p class="card_text"><?php the_field('dog_bio'); ?></p>

 </div>

 </div>

<?php endwhile; ?>
</div>

</div>

<div class="section">
<h1>Pet Tips:</h1>

<div class="card_section">

<?php $items = new WP_Query(array('post_type' => 'pet_tips'));

while ($items->have_posts()) : $items->the_post(); ?>

<div class="card">
<h3 class="card_title"><?php the_field('tip_title'); ?></h3>
<?php  $image = get_field('tip_image');
 if (!empty($image)) : ?>

    <img class="card_image" src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
   
   
    <div class="text">
    <?php endif; ?>


<p class="card_text"><?php the_field('tip_description'); ?></p>
 </div>
</div>



<?php endwhile; ?>
 </div>
 </div>
</div>

<?php get_footer(); ?> 
