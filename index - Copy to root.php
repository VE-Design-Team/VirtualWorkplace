
     <?php
require('../wp-blog-header.php');
get_header(); 
?>
 <style>body { margin: 0; }</style>
  <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">

<body>
    <!-- When you're ready to deploy your app, update this line to point to your compiled client.bundle.js -->
    <script src="vr/client.bundle.js"></script>
    <script>
      // Initialize the React VR application
      ReactVR.init(
        // When you're ready to deploy your app, update this line to point to
        // your compiled index.bundle.js
        
        'vr/index.bundle.js',
        // Attach it to the body tag
        document.body 
     
      );
    </script>
</body>

<?php get_footer(); ?>
</html>

