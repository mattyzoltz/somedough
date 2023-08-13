<!-- header.php -->
<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?php wp_title(); ?></title>
  <?php wp_head(); ?>
  <style>
    /* Common styles */
    body {
      margin: 0;
      padding: 0;
      font-family: Arial, sans-serif;
      background-color: #f2f2f2;
    }

    /* Navigation bar */
    nav {
      background-color: #333;
    }

    nav ul {
      list-style-type: none;
      margin: 0;
      padding: 0;
      display: flex;
      justify-content: space-around;
    }

    nav ul li {
      margin: 10px;
    }

    nav ul li a {
      color: #fff;
      text-decoration: none;
    }

    /* Homepage */
    #home {
      text-align: center;
      padding: 50px;
      color: #333;
    }

    #home h1 {
      font-size: 36px;
      margin-bottom: 20px;
    }

    #home p {
      font-size: 18px;
    }

    /* Blog page */
    #blogs {
      padding: 20px;
      color: #333;
    }

    article {
      margin-bottom: 20px;
      background-color: #fff;
      padding: 20px;
      border-radius: 5px;
    }

    /* Sign Up page */
    #signup {
      text-align: center;
      padding: 50px;
      color: #333;
    }

    #signup h2 {
      font-size: 24px;
      margin-bottom: 20px;
    }

    /* Consultancy page */
    #consultancy {
      text-align: center;
      padding: 50px;
      color: #333;
    }

    #consultancy h2 {
      font-size: 24px;
      margin-bottom: 20px;
    }

    /* Staff page */
    #staff {
      text-align: center;
      padding: 50px;
      color: #333;
    }

    #staff h2 {
      font-size: 24px;
      margin-bottom: 20px;
    }

    /* Login and Registration form styles */
    #login-form,
    #registration-form {
      display: inline-block;
      border: 1px solid #ccc;
      padding: 20px;
      margin: 20px;
      background-color: #fff;
      border-radius: 5px;
    }

    input[type="text"],
    input[type="password"],
    input[type="email"],
    input[type="date"],
    textarea {
      width: 100%;
      padding: 10px;
      margin-bottom: 10px;
      box-sizing: border-box;
    }

    input[type="checkbox"] {
      margin-top: 10px;
    }

    button[type="submit"] {
      padding: 10px 20px;
      background-color: #333;
      color: #fff;
      border: none;
      cursor: pointer;
    }

    /* Videos and Blogs page */
    #videos,
    #blogs-upload {
      padding: 20px;
      color: #333;
    }

    .video,
    .blog {
      margin-bottom: 20px;
      background-color: #fff;
      padding: 20px;
      border-radius: 5px;
    }

    /* Subscribers page */
    #subscribers {
      padding: 20px;
      color: #333;
    }

    /* Media queries */
    @media only screen and (max-width: 600px) {
      /* Mobile styles */
      nav ul {
        flex-direction: column;
      }

      nav ul li {
        margin: 10px 0;
      }

      #home,
      #blogs,
      #signup,
      #consultancy,
      #staff,
      #videos,
      #blogs-upload,
      #subscribers {
        padding: 20px;
      }
    }
  </style>
</head>

<body <?php body_class(); ?>>
  <!-- Navigation bar -->
  <nav>
    <ul>
      <li><a href="<?php echo esc_url(home_url('/')); ?>">Somedough</a></li>
      <li><a href="<?php echo esc_url(home_url('/blogs')); ?>">Blogs</a></li>
      <li><a href="<?php echo esc_url(home_url('/signup')); ?>">Sign Up</a></li>
      <li><a href="<?php echo esc_url(home_url('/consultancy')); ?>">Consultancy</a></li>
      <li><a href="<?php echo esc_url(home_url('/staff')); ?>">Staff</a></li>
      <li><a href="<?php echo esc_url(home_url('/videos')); ?>">Videos</a></li>
      <li><a href="<?php echo esc_url(home_url('/staff/subscribers')); ?>">Subscribers</a></li>
    </ul>
  </nav>
