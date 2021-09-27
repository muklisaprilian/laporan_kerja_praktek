<?php

class l_n_j extends CI_Controller {
	function __construct(){

		parent::__construct();
		$this->load->helper('url');
		
		$this->load->model(array('model_admin'));
		$this->load->library('pdf');
	}

	public function index()
	{
		$a['nomor_jaminan']	= $this->model_admin->tampil_nomor_jaminan()->result();
		$a['page']	= "l_n_j";
		
		$this->load->view('admin/index', $a);
	}

	public function printpdf_n_j(){


	      
           $pdfFilePath = base_url()."pdf/ssss.pdf";
           
         
         
        if(file_exists($pdfFilePath)==FALSE){
	$data['nomor_jaminan']	= $this->model_admin->tampil_nomor_jaminan()->result();
	$html = $this->load->view('admin/printpdf_n_j',$data,true);
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
		$this->load->view('admin/l_n_j/eks',$data);
	}
}