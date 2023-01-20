<?php
namespace Matleyx\CI4FPDF\Libraries;
use Matleyx\CI4FPDF\Libraries\fpdf;
 
class Doc_type_a extends fpdf {
        
    public function __construct() 
        {
            parent::__construct();
        }
        
    public function Header()
        {
            $this->SetLeftMargin(15);
            $this->SetRightMargin(15);
            $this->Ln(15);
            //$this->Image('img/test.png',65,10,0,0);
            $this->SetFont('Arial','B',16);
            $this->Ln(5);
        }

    public function Footer()
        {
            $this->SetY(-15);
            $this->SetFont('Arial','I',8);
            $this->Cell(0,10,'Pagina '.$this->PageNo().'/{nb}',0,0,'C');
        }
}
