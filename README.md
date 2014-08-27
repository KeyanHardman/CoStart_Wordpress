<h1>Important Notes</h1>
<h4> Installation</h4>
<p>Put this into the <code>wordpress/wp-content/themes</code> directory</p>
<h4>Using the theme<h4>
<p>To apply the individual page templates create a page in wordpress and use the 'Templates' dropdown to choose the desired page</p>
<p>If applying one of the themes isn't needed apply the <code>Full Width Page</code> theme and enter your content in the page editor.</p>
<h4>Linking to Styles or Images in the HTML</h4>
<p>Here's an example of how to properly link to images or scripts</p>
```html
<img src="<?php echo get_template_directory_uri() ?>/images/logo.png">
<link rel="stylesheet" href="<?php echo get_template_directory_uri() ?>/scss/font-awesome.css">
```
