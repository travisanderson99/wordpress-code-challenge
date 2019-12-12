# Prep Network Wordpress Code Challenge

## Overview

This exercise will have the candidate build an auto-loading post aggregator using ajax and PHP. The purpose of the challenge is to test the candidate's skills in PHP, javascript, and design.

Here are the guidelines for this exercise:

-   1) Create a new instance of Wordpress and install the Sage Wordpress Starter theme included in the repository.
-   2) Import the included sage.sql database. If needed, update the siteurl and home url in the wp_options table.
-   3) Once installed, navigate to the sage theme directory and run 'composer install'.
-   4) If you need to install composer, follow the directions in the link here: https://getcomposer.org/doc/00-intro.md.
-   5) After composer has finished, run 'yarn' to install all the necessary dependencies.
-   6) If needed, utilize the theme documentation installation instructions: https://roots.io/sage/docs/theme-installation/.
-   7) In the /app/ajax.php file, add your PHP functionality within the ajax_load_more_posts function.
-   8) In the /resources/assets/scripts/routes/common.js file, add your ajax function that connects to the PHP function.
-   9) You will find an initial query of 10 posts in the /resources/views/index.blade.php file, append the new posts to the existing div.
-   10) On each iteration of the function, 10 new posts should be returned with an initial offset of 10 posts.
-   11) Each post should include the title, featured image, and a link to the post.
-   12) After the functionality is complete, style the aggregator to the best of your ability. Bootstrap classes are available.
-   13) Your CSS can be placed in the /resources/assets/styles/layouts/_posts.scss file.
-   14) Complete the challenge and return the updated theme files.

## Version

0.1.0

## Get Started

```
git clone https://github.com/travisanderson99/wordpress-code-challenge.git

```
