<?php
namespace OCA\EditorTexto\Controller;

use OCP\IRequest;
use OCP\AppFramework\Http\TemplateResponse;
use OCP\AppFramework\Http\DataResponse;
use OCP\AppFramework\Controller;

class PageController extends Controller {
	private $userId;

	public function __construct($AppName, IRequest $request, $UserId){
		parent::__construct($AppName, $request);
		$this->userId = $UserId;
	}

	/**
	 * @NoAdminRequired
	 * @NoCSRFRequired
	 */
	public function index() {
		return new TemplateResponse('editortexto', 'index'); 
	}
	
	/**
	 * Muestra la vista de la aplicación del editor de texto.
	 * @NoAdminRequired
	 * @NoCSRFRequired
	 */
	public function editor() {
		return new TemplateResponse('editortexto', 'editor');  
	}

}
