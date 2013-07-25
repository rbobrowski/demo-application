<?php
/**
 * @package    Fuel\Foundation
 * @version    2.0
 * @author     Fuel Development Team
 * @license    MIT License
 * @copyright  2010 - 2013 Fuel Development Team
 * @link       http://fuelphp.com
 */

namespace Controller;

class Welcome extends \Fuel\Controller\Base
{
	/**
	 * The basic welcome message
	 *
	 * @access  public
	 * @return  View
	 */
	public function actionIndex()
	{
		return $this->viewManager->forge('welcome/index');
	}

	/**
	 * A typical "Hello, Bob!" type example.  This uses a Presenter to
	 * show you how to use them.
	 *
	 * @access  public
	 * @return  Presenter
	 */
	public function actionHello()
	{
		return $this->viewManager->presenter('welcome/index');
	}

	/**
	 * The 404 action for the application.
	 *
	 * @access  public
	 * @return  Response
	 */
	public function actionError404()
	{
		return $this->viewManager->forge('welcome/error404');
//		return Response::forge(ViewModel::forge('welcome/404'), 404);
	}

}
