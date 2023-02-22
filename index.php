<?php
/**
 * Paper 一个简单、干净、灵活的主题 
 * Hugo主题同名主题paper移植。
 * 
 * @package Paper Theme
 * @author Xingr
 * @version 1.0.0
 * @link https://www.krsay.com/
 */
if (!defined('__TYPECHO_ROOT_DIR__')) exit;
$this->need('header.php');?>
	<main class="prose prose-neutral relative mx-auto min-h-[calc(100%-10rem)] max-w-3xl px-8 pt-20 pb-32 dark:prose-invert">
		<div class="-mt-4 mb-20 flex items-start">
		<div class="mr-5 shrink-0 rounded-full border-[0.5px] border-black/10 bg-white/50 p-3 shadow-xl dark:bg-white/80">
		<img class="my-0 h-14 w-14 rounded-full !bg-black/5 hover:animate-spin dark:!bg-black/80" src="<?php if($this->options->logoUrl): ?><?php $this->options->logoUrl();?><?php else : ?><?php $this->options->themeUrl('static/avatar.jpeg'); ?><?php endif; ?>">
		</div>
		<div>
		<h1 class="mt-1.5 mb-3 text-3xl font-bold"><?php $this->author() ?></h1>
		<div class="break-words"><?php $this->options->description() ?></div>
		</div>
		</div>
		<?php while($this->next()): ?>
		<section class="relative my-10 first-of-type:mt-0 last-of-type:mb-0">
		<h2 class="!my-0 pb-1 !leading-none"><?php $this->title(38,'...') ?></h2>
		<time class="text-sm opacity-60"><?php $this->date('M d, Y'); ?></time>
		<a class="absolute inset-0" href="<?php $this->permalink() ?>"></a>
		</section>
		<?php endwhile; ?>
		<nav class="mt-24 flex">
		<?php $this->pageLink('← Prev Page'); ?>
		<?php $this->pageLink('Next Page →','next'); ?>
		</nav>
	</main>
<?php $this->need('footer.php'); ?>
