<?php if (!defined('BASEPATH')) exit('No direct script access allowed');


/**
 * 
 * @author : Amit Yadav
 * @version : 1.5
 * @since : 15 November 2019-20
 */
class Category extends CI_Controller
{
    /**
     * This is default constructor of the class
     */
    public function __construct()
    {
        parent::__construct();

        $this->load->helper(array('form','my_helper'));
        $this->load->library('email');
		$this->load->model('frontend/category_model');
    }

    public function index()
    {
        $url = $this->uri->segment(2);
		$url2 = $this->uri->segment(3);
		
		
		if( $url != NULL && $url2 == NULL)
		{ 
		
		$data['contact'] =  $this->category_model->getContact();
		$data['allsubcat'] = $this->category_model->getScatByUrl($url);
        $data['allPro'] = $this->category_model->getProByUrl($url);
        $data['layout'] = 'category';
		$data['title'] = 'Products|Food';
        $this->load->view('layout', $data);
		}else
		{
			
		$data['contact'] =  $this->category_model->getContact();	
		$data['allPro'] = $this->category_model->getProBySub($url,$url2);
	    $data['layout'] = 'subcategory';
		$data['title'] = 'Products|Food';
        $this->load->view('layout', $data);
		}
    }
}
