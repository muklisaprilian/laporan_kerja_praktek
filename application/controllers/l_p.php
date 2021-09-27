<?php

class l_p extends CI_Controller {
	function __construct(){

		parent::__construct();
		$this->load->helper('url');
		
		$this->load->model(array('model_admin'));
		$this->load->library('pdf');
	}

	public function index()
	{
		$a['pho']	= $this->model_admin->tampil_pho()->result();
		$a['page']	= "l_p";
		
		$this->load->view('admin/index', $a);
	}

	public function printpdf_p(){


	      
           $pdfFilePath = base_url()."pdf/ssss.pdf";
           
         
         
        if(file_exists($pdfFilePath)==FALSE){
	$data['pho']	= $this->model_admin->tampil_pho()->result();
	$html = $this->load->view('admin/printpdf_p',$data,true);
     }

            $this->load->library('pdf');
            $pdf=$this->pdf->load();
            $pdf->SetFooter(''.'|{PAGENO}|'.''); //Add a footer for good measure
            $pdf->WriteHTML($html); //write the HTML into PDF
            $pdf->Output();

     
	    
           
	}
	public function eks()
	{
		$data['all']=$this->M_laporan->all();
		$this->load->view('admin/l_p/eks',$data);
	}
}