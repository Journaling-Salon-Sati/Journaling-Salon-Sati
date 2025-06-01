<?php
/**
 * @package Journaling Salon Sati
 */
?>

<footer>
    <div class="sns">
        <a class="sns-image" href="https://note.com/sati_mindfulness" target="_blank" rel="noopener noreferrer">
            <img src="<?php echo esc_url( get_template_directory_uri() . '/images/note.png' ); ?>" alt="note"
                width="24px" height="auto">
        </a>
        <a class="sns-image" href="https://x.com/Sati_mindful" target="_blank" rel="noopener noreferrer">
            <img src="<?php echo esc_url( get_template_directory_uri() . '/images/x.png' ); ?>" alt="x" width="12px"
                height="auto">
        </a>
    </div>
    <p><a href="<?php echo esc_url( home_url('/policy') ); ?>">
            プライバシーポリシー
        </a></p>
    <p><a href="<?php echo esc_url( home_url('/tokutei') ); ?>">特定商取引法に基づく表記
        </a></p>

    <p>Webサイト制作（デザイン・コーディング・WordPressテーマ開発）：永井 陽一朗</p>

    <p>&copy; 2025-<?php echo date('Y'); ?> Journaling Salon Sati. All rights reserved.</p>


</footer>
<?php wp_footer(); ?>
</body>

</html>