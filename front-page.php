<?php 
    get_header();
?>
<!-- <div class="container">
    <div class="col-1">
        <img src="" alt="" />
        <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Distinctio laborum recusandae animi inventore
            culpa delectus sunt ad omnis rem corrupti eos eaque provident ducimus consectetur, officiis
            exercitationem nam necessitatibus tempore!</p>
    </div>
    <div class="col-2">
        <div class="posts">
            <img src="" alt="" />
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Facilis odit numquam quaerat facere quas,
                atque sed assumenda ipsum vitae consequatur harum necessitatibus accusamus eveniet quia magnam culpa
                modi pariatur possimus.</p>
        </div>
        <div class="posts">
            <img src="" alt="" />
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Facilis odit numquam quaerat facere quas,
                atque sed assumenda ipsum vitae consequatur harum necessitatibus accusamus eveniet quia magnam culpa
                modi pariatur possimus.</p>
        </div>
        <div class="posts">
            <img src="" alt="" />
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Facilis odit numquam quaerat facere quas,
                atque sed assumenda ipsum vitae consequatur harum necessitatibus accusamus eveniet quia magnam culpa
                modi pariatur possimus.</p>
        </div>
        <div class="posts">
            <img src="" alt="" />
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Facilis odit numquam quaerat facere quas,
                atque sed assumenda ipsum vitae consequatur harum necessitatibus accusamus eveniet quia magnam culpa
                modi pariatur possimus.</p>
        </div>
        <div class="posts">
            <img src="" alt="" />
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Facilis odit numquam quaerat facere quas,
                atque sed assumenda ipsum vitae consequatur harum necessitatibus accusamus eveniet quia magnam culpa
                modi pariatur possimus.</p>
        </div>
        <div class="posts">
            <img src="" alt="" />
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Facilis odit numquam quaerat facere quas,
                atque sed assumenda ipsum vitae consequatur harum necessitatibus accusamus eveniet quia magnam culpa
                modi pariatur possimus.</p>
        </div>
        <div class="posts">
            <img src="" alt="" />
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Facilis odit numquam quaerat facere quas,
                atque sed assumenda ipsum vitae consequatur harum necessitatibus accusamus eveniet quia magnam culpa
                modi pariatur possimus.</p>
        </div>
    </div>
</div> -->

<article>
    <h1><?php the_title();?></h1>
    <h3>
        <?php
        if(have_posts()){
            while(have_posts()){
                the_post();
                the_content();
            }
        }
        ?>
    </h3>
</article>

<?php
    get_footer();
?>