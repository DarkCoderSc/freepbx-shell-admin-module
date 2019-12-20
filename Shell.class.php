<?php
namespace FreePBX\modules;
/*
 * Class stub for BMO Module class
 * In _Construct you may remove the database line if you don't use it
 * In getActionbar change extdisplay to align with whatever variable you use to decide if the page is in edit mode.
 *
 */

class Shell implements \BMO {
	public function __construct($freepbx = null) {
		if ($freepbx == null) {
			throw new Exception("Not given a FreePBX Object");
		}
		$this->FreePBX = $freepbx;
		$this->db = $freepbx->Database;
	}
	//Install method. use this or install.php using both may cause weird behavior
	public function install() {}
	//Uninstall method. use this or install.php using both may cause weird behavior
	public function uninstall() {}
	//Not yet implemented
	public function backup() {}
	//not yet implimented
	public function restore($backup) {}
	//process form
	public function doConfigPageInit($page) {}
	//This shows the submit buttons
	public function getActionBar($request) {
		$buttons = array();
		switch($_GET['display']) {
			case 'shell':
				$buttons = array(
					'delete' => array(
						'name' => 'delete',
						'id' => 'delete',
						'value' => _('Delete')
					),
					'reset' => array(
						'name' => 'reset',
						'id' => 'reset',
						'value' => _('Reset')
					),
					'submit' => array(
						'name' => 'submit',
						'id' => 'submit',
						'value' => _('Submit')
					)
				);
				if (empty($_GET['extdisplay'])) {
					unset($buttons['delete']);
				}
			break;
		}
		return $buttons;
	}
	public function showPage(){
		$vars = array('helloworld' => _("Hello World"));
		return load_view(__DIR__.'/views/main.php',$vars);
	}
	public function ajaxRequest($req, &$setting) {
		switch ($req) {
			case 'getJSON':
				return true;
			break;
			default:
				return false;
			break;
		}
	}
	public function ajaxHandler(){
		switch ($_REQUEST['command']) {
			case 'getJSON':
				switch ($_REQUEST['jdata']) {
					case 'grid':
						$ret = array();
						/*code here to generate array*/
						return $ret;
					break;

					default:
						return false;
					break;
				}
			break;

			default:
				return false;
			break;
		}
	}
	public function getRightNav($request) {
		$html = 'your custom html';
		return $html;
	}

}
