<?php /** * The template for displaying the footer * * Contains the closing of the #content div and all content after.
    * * @package WordPress * @subpackage Your_Theme * @since Your_Theme 1.0 */ ?>

</div><!-- #content -->



<footer>




    <a href="<?php echo home_url('/policy'); ?>">
        <p class="footer-p">Privacy Policy</p>
    </a>





    <p class="footer-p">&copy; 2024-<?php echo date('Y'); ?> ジャーナリングサロン サティ. All rights reserved.</p>

</footer>

<?php wp_footer(); ?>
</body>

</html>