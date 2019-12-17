# Prep Network Wordpress Code Challenge

## Overview

This exercise will have the candidate build an infitine scroll post aggregator which is triggered by a "Load More" button using ajax and PHP. The purpose of the challenge is to test your skills in PHP, Javascript, and design.

Here are the guidelines for this exercise:

## Required Dependencies

| Name      | Download                                             |
| --------- | ---------------------------------------------------- |
| Wordpress | https://wordpress.org/download                       |
| Yarn      | https://yarnpkg.com/lang/en/docs/install/#mac-stable |
| Composer  | https://getcomposer.org/download                     |

## Setting Up Your Enviornment

-   Create a new instance of Wordpress
-   Install the Sage Wordpress Starter theme included in the repository into your newly created Wordpress site.
-   Import the included sage.sql database. If needed, update the siteurl and home url in the wp_options table.
-   Once installed, navigate to the sage theme directory and run 'composer install'.
-   After composer has finished, run 'yarn' to install all the necessary dependencies.
-   If needed, utilize the theme documentation installation instructions: https://roots.io/sage/docs/theme-installation/.

## Project Requirements

-   Your task is to create a well designed blog post page with a featured post and ajax loaded posts.
-   The page needs to have a large hero space which allows the admin to feature a post. The featured area should have the post's featured image as the background, title, date and a CTA to the post.
-   Below the hero space, there should be a list/grid of posts that are loaded using ajax.
-   On page load, 10 posts should automatically appear
-   Below the list of posts should be a "Load More" button that on click, loads the next 10 posts using ajax.
-   Each post should include the title, featured image, and a link to the post.
-   Style the aggregator to the best of your ability. Bootstrap classes are available.
-   Your CSS can be placed in the /resources/assets/styles/layouts/\_posts.scss file.

## Technical Considerations

-   Say we have 1000s of posts, how would you handle making sure the site doesn't get laggy when the user has loaded 1000+ posts onto the page?
-   If a user clicks into a post and then back out to the main post list page, by default the user will go back to the top of the page with the original 10 posts loaded; How can you make sure the user goes back to the place they were originally at during the time of the click?
-   Being that this is a blog, SEO is critical for success, make sure crawlers will be able reliably to access the content.

## Project Submission

-   Complete the challenge and return the updated theme files in a zip file to travis@prepnetwork.com.
-   Within the email, please provide any details related to the location of your PHP, JS and CSS code, what you struggled with, and anything else you want us to know.
