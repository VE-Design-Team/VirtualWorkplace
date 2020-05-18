<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package understrap
 */
$the_theme = wp_get_theme();
?>
<?php wp_footer(); ?>
<?php
//turn on glossary
$glossary = get_field('field_5c748dc886533', 'option');
if ($glossary === "glossary") {
    echo '<script src="'.get_stylesheet_directory_uri() . '/js/glossary-tooltip.js"></script>';
    echo '<script src="'.get_stylesheet_directory_uri() . '/js/jquery.glossarize.js"></script>';
} elseif ($glossary === "disabled") {
	// no loading of glossary
};
?>
<style>
.body{
  
  margin:0;
  font-size:16px;
}
.wrapper{
  background:red;
}

.container{
  margin: 0 auto;
  max-width:1000px;
  width:100%;
  padding: 0 15px;
  box-sizing:border-box;}

.footer{
  font-size:0.85rem;
  padding: 20px 0;
  line-height:1.6;
  background:#ddefbf;
  margin:0 auto;
}

.footer__text{
  color:#444444;
  font-family:helvetica;
  padding:3px 15px;
  display:block;

}

.footer__hr{
  height:1px;
  border:none;
  background:#aad75f;
  
}

.a__footer{
  color:#ee3154;
}

.a__footer:hover {
  color:#121741;
}

p.footer__copy{
  width:100%;
 margin:0 auto;
</style>
<?php
$glossary_url = get_field('field_5c75d39e68af3', 'option');

if( $glossary_url ): ?>

<script>


  $(function(){
    $('.glossary-show').glossarizer({
      sourceURL: '<?php echo $glossary_url ?>',
      callback: function(){
        new ToolTip();
      }
    });
  });
  </script>

<?php endif; ?>

  <div class="wrapper">
    <div class="container">
      
    </div>
  </div>
  <footer class="footer">
    <div class="footer__text container">
      <p>RMIT would like to acknowledge Wurundjeri people of the Kulin Nations as the Traditional Owners of the land on which the University stands. We respectfully recognise Elders past, present and future.</p>
      <p>&copy; Copyright 2020 <a class="a__footer" href="https://www.rmit.edu.au/">RMIT</a> - This website is for educational purose only.</p>
      <hr class="footer__hr">
    </div>
  </footer>

</body>

</html>
