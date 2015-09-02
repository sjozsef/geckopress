<div class="post-head-meta">
    <p>
        <?php 
            
            $str = __('Posted on %s by %s');
            $date = get_the_date(); 
            $author = get_the_author();
            echo sprintf($str, $date, $author);
            
        ?>
    </p>
</div>