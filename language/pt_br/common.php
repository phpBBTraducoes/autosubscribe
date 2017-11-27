<?php

/**
*
* @copyright (c) 2017 Luca Robbiano (lr94)
* @license GNU General Public License, version 2 (GPL-2.0)
* Brazilian Portuguese translation by eunaumtenhoid (c) 2017 [ver 1.1.0] (https://github.com/phpBBTraducoes)
*/

/**
* DO NOT CHANGE
*/
if (!defined('IN_PHPBB'))
{
	exit;
}

if (empty($lang) || !is_array($lang))
{
	$lang = array();
}

$lang = array_merge($lang, array(
	'AUTO_SUBSCRIPTION'					=> 'Assinatura automática para os autores do tópico',	
	'AUTO_SUBSCRIPTION_EXPLAIN'			=> 'Se selecionado os usuários assinarão automaticamente seus novos tópicos neste fórum',
	
	'AUTO_SUBSCRIPTION_USER'			=> 'Assinar automaticamente meus novos tópicos',
));
