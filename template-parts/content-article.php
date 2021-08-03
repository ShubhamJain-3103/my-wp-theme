<div>
    <p>
        <?php 
            the_date();
        ?>
    </p>

    <?php
       the_tags('<p>','</p><p>','</p>');
       comments_number();
    ?>
</div>

<?php
    the_content();
?>
<?php
    comments_template();
?>