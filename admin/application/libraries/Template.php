<?php
class Template {
	public $template_data = [];
	
	public function set($nama, $value)
	{
		$this->template_data[$nama] = $value;
	}
	
	public function load($template = '', $view = '', $view_data = [], $return = FALSE)
	{
		$this->CI =& get_instance();
		$this->set('contents', $this->CI->load->view($view, $view_data, TRUE));
		return $this->CI->load->view($template, $this->template_data, $return);
	}
	
}