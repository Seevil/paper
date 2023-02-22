<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>
<?php $this->need('header.php'); ?>
<main class="prose prose-neutral relative mx-auto min-h-[calc(100%-10rem)] max-w-3xl px-8 pt-20 pb-32 dark:prose-invert">
<article>
<header class="mb-20">
<h1 class="!my-0 pb-2.5"><?php $this->title();?></h1>
<div class="text-sm opacity-60">
<time><?php $this->date('M d, Y'); ?></time>
<span class="mx-1">·</span>
<span><?php $this->author();?></span>
</div>
</header>
<section>
<?php $this->content(); ?> 
</section>

<nav class="mt-24 flex rounded-lg bg-black/[3%] text-lg dark:bg-white/[8%]">

</nav>
</article>
</main>
<?php $this->need('footer.php'); ?>