<?php

/**
 * @author Kaj Bossard <kaj@edocsyl.ch>
 * @version 1.0
 * @category Config file
 * @copyright Copyright (c) 2014, gigaIT.net
 */

$config = array(

		'title' 		=>	'GibbSurvey',
		'description' 	=>	'Umfrage Tool',
		'author' 		=>	'Kaj Bossard',

		
		'copyright'		=>	'&copy; '.date("Y").' Kaj Bossard | <a href="https://github.com/Edocsyl/GibbSurvey" target="_blank">Github</a>',
		
		
		'basepath' 		=>	'/GibbSurvey',
		
		
		'sites'			=>	'/core/template/sites',
		'html'			=>	'/core/template/html',
		'css'			=>	'/GibbSurvey/core/template/css',
		'js'			=>	'/GibbSurvey/core/template/js',
		'img'			=>	'/GibbSurvey/core/template/img',
		
		
		
		'database'		=> array(
			'host' 		=> 'localhost',
			'username' 	=> 'root',
			'password'	=> '',
			'dbname' 	=> 'umfrage_kaj_bossard',
		),
		
		
);