<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Logs extends MX_Controller {

	 /**
		* __construct function.
		*
		* @access public
		* @return void
		*/
	 public function __construct() {

		  parent::__construct();
		  $this->load->helper(array('form', 'url'));
		  $this->load->model('logs_model');
		  $this->set_module($this);
			$this->logged_in();
	 }

   /**
     *  index calls get_essentials and loads logs view
     *
     * @access public
     * @author Peter Kaufman
     * @example base_url() . 'index.php/logs'
     */
  public function index(){
     $this->update_title('Logs');
     $this->get_essentials();
     $this->load->view('logs');
  }

  /**
    *  get_data gets the data desired
    *
    * @access public
    * @author Peter Kaufman
    * @example base_url() . 'index.php/logs/get_data'
    */
 public function get_data(){
    $data = $this->logs_model->get_logs();
    exit(json_encode(['data'=> $data]));
 }
}