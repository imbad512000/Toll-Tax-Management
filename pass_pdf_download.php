<?php 
    require "fpdf182/fpdf.php";
    $con = mysqli_connect("localhost","root","","start");
    class myPDF extends FPDF{    
        function header(){
                // $new_year=mktime(0,0,0,date('m'),date('d'),date('Y')-1);
                $this->Image('images/logo.png',25,10);
                $this->SetFont('courier','B',40);
                $this->Cell(250,20,'Pass Details',0,0,'C');
                $this->Ln();
                $this->Ln();
                $this->Ln();
                // $this->Ln();
            }
            
            function footer(){
                $this->SetY(-15);
                $this->SetFont('Helvetica','',8);
                $this->Cell(0,10,'Page '.$this->PageNo().'/{nb}',0,0,'C');
            }

            function headerTable(){
                $this->SetFont('Helvetica','B',12);
                $this->Cell(40,10,'Pass holder name',1,0,'C');
                $this->Cell(28,10,'Pass date',1,0,'C');
                $this->Cell(28,10,'Pass time',1,0,'C');
                $this->Cell(28,10,'Pass type',1,0,'C');
                $this->Cell(40,10,'Pass vehicle class',1,0,'C');
                $this->Cell(38,10,'Pass vehicle no.',1,0,'C');
                $this->Cell(35,10,'Pass duration',1,0,'C');
                $this->Cell(35,10,'Pass amount',1,0,'C');
                $this->Ln();
            }

            function viewTable($con){
                $this->SetFont('Helvetica','I',12);

                $q="SELECT * FROM `tbl_toll_pass_details`";

                $res=mysqli_query($con,$q);

                while ( $row=mysqli_fetch_assoc($res)){
                    $this->Cell(40,10,$row["toll_pass_holder_name"],1,0,'C');
                    $this->Cell(28,10,$row["toll_pass_date"],1,0,'C');
                    $this->Cell(28,10,$row["toll_pass_time"],1,0,'C');
                    $this->Cell(28,10,$row["toll_pass_type"],1,0,'C');
                    $this->Cell(40,10,$row["toll_pass_vehicle_class"],1,0,'C');
                    $this->Cell(38,10,$row["toll_pass_vehicle_no"],1,0,'C');
                    $this->Cell(35,10,$row["toll_pass_duration"],1,0,'C');
                    $this->Cell(35,10,$row["toll_pass_amount"],1,0,'C');

                    $this->Ln();
                }
            }
    }

    $pdf = new myPDF();
    $pdf->AliasNbPages();
    $pdf->AddPage('L','A4',0);
    $pdf->headerTable();
    $pdf->viewTable($con);
    $pdf->Output();
?>