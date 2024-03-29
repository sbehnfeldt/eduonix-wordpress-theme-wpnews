# WordPress Theme "WPNews"
From tutorial series "Learn to Create WordPress Themes by Building 10 Projects" by Eduonix
Ref: https://www.udemy.com/course/learn-to-create-wordpress-themes-by-building-10-projects/

Includes:
* Ink framework v 3.1.10 https://github.com/sapo/Ink/releases/download/3.1.10/ink-3.1.10.zip

## Lesson 68) Ink HTML Template 
Made an HTML template based upon the "Carousel" Ink framework example from https://ink.sapo.pt/cookbook/.
NOTE: This template uses dummy images from lorempixel.com, which is no longer operable, resulting in many "borken image" icons.

## Lesson 69) WPNews Theme Setup & Menu
Created theme with index.php and style.css.  Added screenshot.png.  Added support in functions.php for primary menu.
Extracted head.php, header.php and footer.php partial templates.

## Lesson 70) Main Post Loop
Add support for post thumbnails along with a custom image size.  Convert the static "Recent Posts" to dynamic, using a post loop

## Lesson 71) Custom Query Loops
Added custom query loops for the various sections.  Added more custom image sizes for the various sections.
Also had to do some styling on the images (not part of the lesson) to get them to be the right size.

## Lesson 72) Single Post Page
Single page template, with sidebar and comments.

Noticed the warning "Function the_block_template_skip_link is deprecated".  Grepping for this function in the code uncovered a note in default-filters.php
that it can be un-hooked by calling wp_enqueue_block_template_skip_link(), which I then added to functions.php.

## Lesson 73) Archive, Search & Pages
Added Archive, Search Results and Page templates. 
