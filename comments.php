<!-- add extra login in this file -->
<p style="font-size:40px;">Hello</p>

<?php

if(!have_comments()){
    echo "Leave a comment.";
}
else{
    echo get_comments_number()."Comments";
}

?>

<!-- for more on comments and comments template watch at 1.40.0 -->