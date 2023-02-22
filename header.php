<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>
<!doctype html>
<html class="text-sm lg:text-base" style="--bg:#faf6f1" lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="x-ua-compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width,initial-scale=1,shrink-to-fit=no">
	 <?php $this->header('generator=&template=&pingback=&xmlrpc=&commentReply='); ?>
		<title><?php $this->archiveTitle(array(
            'category'  =>  _t('分类 %s 下的文章'),
            'search'    =>  _t('包含关键字 %s 的文章'),
            'tag'       =>  _t('标签 %s 下的文章'),
            'author'    =>  _t('%s 发布的文章')
        ), '', ' - '); ?><?php $this->options->title(); ?></title>
	<meta name="theme-color" content="#faf6f1">
	<meta name="author" content="<?php $this->author() ?>">
	<link rel="preload stylesheet" as="style" href="<?php $this->options->themeUrl('assets/main.min.css'); ?>">
	<link rel="preload" as="image" href="<?php $this->options->themeUrl('static/theme.png'); ?>">
	<link rel="preload" as="image" href="<?php if($this->options->logoUrl): ?><?php $this->options->logoUrl();?><?php else : ?><?php $this->options->themeUrl('static/avatar.jpeg'); ?><?php endif; ?>">
	<link rel="preload" as="image" href="<?php $this->options->themeUrl('static/twitter.svg'); ?>">
	<link rel="preload" as="image" href="<?php $this->options->themeUrl('static/github.svg'); ?>">
	<link rel="preload" as="image" href="<?php $this->options->themeUrl('static/instagram.svg'); ?>">
	<link rel="icon" href="<?php $this->options->themeUrl('static/favicon.ico'); ?>">
	<link rel="apple-touch-icon" href="<?php $this->options->themeUrl('static/apple-touch-icon.png'); ?>">
	<meta name="generator" content="<?php $this->options->title(); ?>">
	<?php if ($this->is('index')): ?>
	<meta property="og:url" content="<?php $this->options->siteUrl();?>"/>
	<meta property="og:title" content="<?php $this->options->title();?>"/>
	<meta property="og:author" content="<?php $this->author();?>"/>
	<meta property="og:description" content="<?php $this->options->description();?>"/>
	<meta itemprop="name" content="<?php $this->options->title();?>"/>
	<meta itemprop="description" content="<?php $this->options->description();?>" />
	<?php endif;?>
	<?php if ($this->is('post') || $this->is('page')): ?>
	<meta property="og:url" content="<?php $this->permalink();?>"/>
	<meta property="og:title" content="<?php $this->title();?> - <?php $this->options->title();?>"/>
	<meta property="og:author" content="<?php $this->author();?>"/>
	<meta property="og:description" content="<?php $this->description();?>"/>
	<meta itemprop="name" content="<?php $this->title();?> - <?php $this->options->title();?>"/>
	<meta itemprop="description" content="<?php $this->description();?>" />
	<meta name="twitter:card" content="summary">
	<meta name="twitter:title" content="<?php $this->title();?> - <?php $this->options->title();?>">
	<meta name="twitter:description" content="<?php $this->description();?>">
	<?php endif;?>
</head>
	<body class="text-black duration-200 ease-out dark:text-white">
	<header class="mx-auto flex h-[5rem] max-w-3xl px-8 lg:justify-center">
	<div class="relative z-50 mr-auto flex items-center">
	<a class="-translate-x-[1px] -translate-y-0.5 text-3xl font-bold" href="<?php $this->options->siteUrl();?>"><?php $this->options->title(); ?></a>
	<a class="btn-dark ml-6 h-6 w-6 shrink-0 cursor-pointer [background:url(../static/theme.png)_left_center/_auto_theme('spacing.6')_no-repeat] [transition:_background-position_0.4s_steps(5)] dark:[background-position:right]"></a>
	</div>
	<a class="btn-menu relative z-50 -mr-8 flex h-[5rem] w-[5rem] shrink-0 cursor-pointer flex-col items-center justify-center gap-2.5 lg:hidden"></a>
	<script>const htmlClass=document.documentElement.classList;setTimeout(()=>{htmlClass.remove('not-ready')},10);const btnMenu=document.querySelector('.btn-menu');btnMenu.addEventListener('click',()=>{htmlClass.toggle('open')});const metaTheme=document.querySelector('meta[name="theme-color"]'),lightBg=`"#faf6f1"`.replace(/"/g,''),setDark=a=>{metaTheme.setAttribute('content',a?'#000':lightBg),htmlClass[a?'add':'remove']('dark'),localStorage.setItem('dark',a)},darkScheme=window.matchMedia('(prefers-color-scheme: dark)');if(htmlClass.contains('dark'))setDark(!0);else{const a=localStorage.getItem('dark');setDark(a?a==='true':darkScheme.matches)}darkScheme.addEventListener('change',a=>{setDark(a.matches)});const btnDark=document.querySelector('.btn-dark');btnDark.addEventListener('click',()=>{setDark(localStorage.getItem('dark')!=='true')})</script>
	<div class="nav-wrapper fixed inset-x-0 top-full z-40 flex h-full select-none flex-col justify-center pb-16 duration-200 dark:bg-black lg:static lg:h-auto lg:flex-row lg:!bg-transparent lg:pb-0 lg:transition-none">
	<nav class="lg:ml-12 lg:flex lg:flex-row lg:items-center lg:space-x-6">
	<?php $this->widget('Widget_Contents_Page_List')->parse('<a href="{permalink}"  class="block text-center text-2xl leading-[5rem] lg:text-base lg:font-normal">{title}</a>'); ?>
	</nav>
	<nav class="mt-12 flex justify-center space-x-10 dark:invert lg:mt-0 lg:ml-12 lg:items-center lg:space-x-6">
	<a class="h-8 w-8 [background:var(--url)_center_center/cover_no-repeat] lg:h-6 lg:w-6" style="--url:url(../static/twitter.svg)" href="<?php $this->options->twitter();?>" target="_blank" rel="me"></a>
	<a class="h-8 w-8 [background:var(--url)_center_center/cover_no-repeat] lg:h-6 lg:w-6" style="--url:url(../static/github.svg)" href="<?php $this->options->github();?>" target="_blank" rel="me"></a>
	<a class="h-8 w-8 [background:var(--url)_center_center/cover_no-repeat] lg:h-6 lg:w-6" style="--url:url(../static/instagram.svg)" href="<?php $this->options->instagram();?>" target="_blank" rel="me"></a>
	</nav>
	</div>
	</header>