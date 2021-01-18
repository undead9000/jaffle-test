<div class="main-banner" style="background: url('<?php the_field('MPB__background'); ?>') no-repeat; background-size: cover;">    
    <div class="main-banner__container">
        <div class="main-banner__welcome"><?php the_field('MPB__welcome-text'); ?></div>
        <h1 class="main-banner__title"><?php the_field('MPB__title'); ?></h1>
        <div class="main-banner__subtitle"><?php the_field('MPB__subtitle'); ?></div>
        <a class="main-banner__cta" href="<?php the_field('MPB__button-url'); ?>">
            <span><?php the_field('MPB__button-name'); ?> &rarr;</span>
        </a>
    </div>
</div>    