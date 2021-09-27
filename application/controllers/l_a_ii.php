<?php

class l_a_ii extends CI_Controller {
	function __construct(){

		parent::__construct();
		$this->load->helper('url');
		
		$this->load->model(array('model_admin'));
		$this->load->library('pdf');
	}

	public function index()
	{
		$a['amandemen_ii']	= $this->model_admin->tampil_amandemen_ii()->result();
		$a['page']	= "l_a_ii";
		
		$this->load->view('admin/index', $a);
	}

	public function printpdf_a_ii(){


	      
           $pdfFilePath = base_url()."pdf/ssss.pdf";
           
         
         
        if(file_exists($pdfFilePath)==FALSE){
	$data['amandemen_ii']	= $this->model_admin->tampil_amandemen_ii()->result();
	$html = $this->load->view('admin/printpdf_a_ii',$data,true);
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
		$this->load->view('admin/l_a_ii/eks',$data);
	}
}