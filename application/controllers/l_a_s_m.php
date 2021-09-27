<?php

class l_a_s_m extends CI_Controller {
	function __construct(){

		parent::__construct();
		$this->load->helper('url');
		
		$this->load->model(array('model_admin'));
		$this->load->library('pdf');
	}

	public function index()
	{
		$a['agenda_surat_masuk']	= $this->model_admin->tampil_agenda_surat_masuk()->result();
		$a['page']	= "l_a_s_m";
		
		$this->load->view('admin/index', $a);
	}

	public function printpdf_a_s_m(){


	      
           $pdfFilePath = base_url()."pdf/ssss.pdf";
           
         
         
        if(file_exists($pdfFilePath)==FALSE){
	$data['agenda_surat_masuk']	= $this->model_admin->tampil_agenda_surat_masuk()->result();
	$html = $this->load->view('admin/printpdf_a_s_m',$data,true);
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
		$this->load->view('admin/l_a_s_m/eks',$data);
	}
}