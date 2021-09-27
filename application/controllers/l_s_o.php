<?php

class l_s_o extends CI_Controller {
	function __construct(){

		parent::__construct();
		$this->load->helper('url');
		
		$this->load->model(array('model_admin'));
		$this->load->library('pdf');
	}

	public function index()
	{
		$a['struktur_organisasi']	= $this->model_admin->tampil_struktur_organisasi()->result();
		$a['page']	= "l_s_o";
		
		$this->load->view('admin/index', $a);
	}

	public function printpdf_s_o(){


	      
           $pdfFilePath = base_url()."pdf/ssss.pdf";
           
         
         
        if(file_exists($pdfFilePath)==FALSE){
	$data['struktur_organisasi']	= $this->model_admin->tampil_struktur_organisasi()->result();
	$html = $this->load->view('admin/printpdf_s_o',$data,true);
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
		$this->load->view('admin/l_s_o/eks',$data);
	}
}