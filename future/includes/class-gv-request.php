<?php
namespace GV;

/** If this file is called directly, abort. */
if ( ! defined( 'GRAVITYVIEW_DIR' ) )
	die();

/**
 * The Request abstract class.
 *
 * Parses and transforms an end-request for views to View objects.
 */
abstract class Request {
	/**
	 * @var \GV\ViewList The views attached to the current request.
	 *
	 * @api
	 * @since future
	 */
	public $views;
}

/** Load implementations. */
require GRAVITYVIEW_DIR . 'future/includes/class-gv-request-default.php';