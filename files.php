<?php 
/**
* 文章归档
*
* @package custom
*/
if (!defined('__TYPECHO_ROOT_DIR__')) exit;
$this->need('header.php');
?>
	<main class="prose prose-neutral relative mx-auto min-h-[calc(100%-10rem)] max-w-3xl px-8 pt-20 pb-32 dark:prose-invert">
		<article>
		<header class="mb-20">
		<h1 class="!my-0 pb-2.5">文章归档</h1>
		</header>
		<section>
		<?php
$this->widget('Widget_Contents_Post_Recent', 'pageSize=10000')->to($archives);   
    $year=0; $mon=0; $i=0; $j=0;  
    while($archives->next()):   
        $year_tmp = date('Y',$archives->created);   
        $mon_tmp = date('m',$archives->created);   
        $y=$year; $m=$mon;   
        if ($mon != $mon_tmp && $mon > 0) $output .= '</ul></li>';   
        if ($year != $year_tmp && $year > 0) $output .= '</ul>';   
        if ($year != $year_tmp) {   
            $year = $year_tmp;   
            @$output .= '<h2>'. $year .'</h2><ul>'; //输出年份   
        }    
        $output .= '<li><a href="'.$archives->permalink .'">'. $archives->title .'</a></li>'; //输出文章日期和标题   
    endwhile;   
    $output .= '</ul></li></ul>';
    echo $output;
?>

		</section>
		</article>
	</main>

	<?php $this->need('footer.php'); ?>
