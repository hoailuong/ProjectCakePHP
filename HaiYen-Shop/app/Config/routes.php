<?php
/**
 * Routes configuration
 *
 * In this file, you set up routes to your controllers and their actions.
 * Routes are very important mechanism that allows you to freely connect
 * different URLs to chosen controllers and their actions (functions).
 *
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       app.Config
 * @since         CakePHP(tm) v 0.2.9
 * @license       http://www.opensource.org/licenses/mit-license.php MIT License
 */
/**
 * Here, we are connecting '/' (base path) to controller called 'Pages',
 * its action called 'display', and we pass a param to select the view file
 * to use (in this case, /app/View/Pages/home.ctp)...
 */
	//Router::connect('/', array('controller' => 'pages', 'action' => 'display', 'home'));
	Router::connect('/', array('controller' => 'products', 'action' => 'index', 'home'));
	Router::connect('/tim-kiem',array('controller'=>'products','action'=>'search'));
	Router::connect('/lien-he',array('controller'=>'contacts','action'=>'add'));
	Router::connect('/chia-se',array('controller'=>'news','action'=>'chiase'));
	Router::connect('/huong-dan-mua-hang',array('controller'=>'news','action'=>'huongdanmuahang'));
	Router::connect('/do-hoa',array('controller'=>'news','action'=>'do-hoa'));
	Router::connect('/gioi-thieu',array('controller'=>'news','action'=>'gioithieu'));
	Router::connect('/gio-hang',array('controller'=>'products','action'=>'view_cart'));
	Router::connect('/khuyen-mai',array('controller'=>'news','action'=>'khuyenmai'));
	Router::connect('/danh-sach',array('controller'=>'products','action'=>'all'));
	Router::connect('/dat-hang',array('controller'=>'orders','action'=>'checkout'));
	Router::connect('/dang-ky',array('controller'=>'users','action'=>'add'));
	Router::connect('/admin',array('controller'=>'users','action'=>'home'));
/**
 * ...and connect the rest of 'Pages' controller's URLs.
 */
	Router::connect('/pages/*', array('controller' => 'pages', 'action' => 'display'));

/**
 * Load all plugin routes. See the CakePlugin documentation on
 * how to customize the loading of plugin routes.
 */
	CakePlugin::routes();

/**
 * Load the CakePHP default routes. Only remove this if you do not want to use
 * the built-in default routes.
 */
	require CAKE . 'Config' . DS . 'routes.php';
