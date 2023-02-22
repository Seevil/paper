<?php
if (!defined('__TYPECHO_ROOT_DIR__')) exit;
function themeConfig($form) {
	$logoUrl = new Typecho_Widget_Helper_Form_Element_Text('logoUrl', NULL, NULL, _t('博客头像地址'), _t('博客头像,留空则使用默认'));
    $form->addInput($logoUrl->addRule('xssCheck', _t('请不要在图片链接中使用特殊字符')));
	$github = new Typecho_Widget_Helper_Form_Element_Text('github', NULL, NULL, _t('Github主页地址'), _t('一般为https://github.com/Seevil ,留空则不设置Github地址'));
    $form->addInput($github->addRule('xssCheck', _t('请不要在图片链接中使用特殊字符')));
	$twitter = new Typecho_Widget_Helper_Form_Element_Text('twitter', NULL, NULL, _t('twitter主页地址'), _t('一般为https://twitter.com/skyurl ,留空则不设置twitter地址'));
    $form->addInput($twitter->addRule('xssCheck', _t('请不要在图片链接中使用特殊字符')));
	$instagram = new Typecho_Widget_Helper_Form_Element_Text('instagram', NULL, NULL, _t('instagram主页地址'), _t('一般为https://www.instagram.com/xxx ,留空则不设置instagram地址'));
    $form->addInput($instagram->addRule('xssCheck', _t('请不要在图片链接中使用特殊字符')));
}


/**
* 显示下一篇
*
* @access public
* @param string $default 如果没有下一篇,显示的默认文字
* @return void
*/
function theNext($widget, $default = NULL)
{
$db = Typecho_Db::get();
$sql = $db->select()->from('table.contents')
->where('table.contents.created > ?', $widget->created)
->where('table.contents.status = ?', 'publish')
->where('table.contents.type = ?', $widget->type)
->where('table.contents.password IS NULL')
->order('table.contents.created', Typecho_Db::SORT_ASC)
->limit(1);
$content = $db->fetchRow($sql);
 
if ($content) {
$content = $widget->filter($content);
 $link = '<a href="' . $content['permalink'] . '" title="' . $content['title'] . '" class="ml-auto flex w-1/2 items-center justify-end rounded-r-md p-6 pl-3 no-underline hover:bg-black/[2%]"><span>'.$content['title'].'<span class="ml-1.5">→</span></span></a>';
echo $link;
} else {
echo $default;
}
}
 
/**
* 显示上一篇
*
* @access public
* @param string $default 如果没有下一篇,显示的默认文字
* @return void
*/
function thePrev($widget, $default = NULL)
{
$db = Typecho_Db::get();
$sql = $db->select()->from('table.contents')
->where('table.contents.created < ?', $widget->created)
->where('table.contents.status = ?', 'publish')
->where('table.contents.type = ?', $widget->type)
->where('table.contents.password IS NULL')
->order('table.contents.created', Typecho_Db::SORT_DESC)
->limit(1);
$content = $db->fetchRow($sql);
if ($content) {
$content = $widget->filter($content);
 $link = '<a href="' . $content['permalink'] . '" title="' . $content['title'] . '" class="flex w-1/2 items-center rounded-l-md p-6 pr-3 no-underline hover:bg-black/[2%]"><span class="mr-1.5">←</span><span>'.$content['title'].'</span></a>';
echo $link;
} else {
echo $default;
}
}
