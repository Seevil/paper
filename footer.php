<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>
	<footer class="opaco mx-auto flex h-[5rem] max-w-3xl items-center px-8 text-[0.9em] opacity-60">
	<div class="mr-auto"> © <?php echo date('Y'); ?> <a class="link" href="<?php $this->options->siteurl(); ?>"><?php $this->options->title(); ?></a>
	</div>
	<a class="link mx-6" href="http://typecho.org/" rel="noopener" target="_blank">Powered by Typecho️</a>
	<a class="link" href="https://www.krsay.com/typecho/paper.html" rel="noopener" target="_blank">▷ Paper 6</a>
	</footer>
<?php if ($this->is('post')): ?>
<script src="https://cdn.staticfile.org/highlight.js/11.7.0/es/highlight.min.js"></script>
<script>hljs.highlightAll();</script>
<?php endif;?>
<?php $this->footer(); ?>
</body>
</html>

