<!-- index.php -->
<?php get_header(); ?>

  <!-- Homepage -->
  <section id="home">
    <h1>Welcome to Somedough!</h1>
    <p>Explore our blog posts and discover various ways to make money.</p>
  </section>

  <!-- Blog page -->
  <section id="blogs">
    <h2>Latest Blogs</h2>
    <?php
    $args = array(
      'post_type' => 'post',
      'posts_per_page' => 5,
    );
    $blog_posts = new WP_Query($args);
    if ($blog_posts->have_posts()) :
      while ($blog_posts->have_posts()) :
        $blog_posts->the_post();
    ?>
        <article>
          <h3><?php the_title(); ?></h3>
          <?php the_content(); ?>
        </article>
    <?php
      endwhile;
    else :
      echo "<p>No blogs found.</p>";
    endif;
    wp_reset_postdata();
    ?>
  </section>

  <!-- Sign Up page -->
  <section id="signup">
    <h2>Sign Up for Our Newsletter</h2>
    <form id="signup-form">
      <input type="text" name="first-name" placeholder="First Name" required>
      <input type="text" name="last-name" placeholder="Last Name" required>
      <input type="email" name="email" placeholder="Email Address" required>
      <input type="date" name="dob" placeholder="Date of Birth" required>
      <textarea name="interests" placeholder="Interests"></textarea>
      <textarea name="money-making-method" placeholder="Preferred Money-Making Method"></textarea>
      <input type="checkbox" name="consent" required> I consent to receive emails and promotional material.
      <button type="submit">Sign Up</button>
    </form>
  </section>

<?php get_footer(); ?>
