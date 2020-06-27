<?php 
    require "fpdf182/fpdf.php";
    $con = mysqli_connect("localhost","root","","start");
    class myPDF extends FPDF{    
        function header(){
                // $new_year=mktime(0,0,0,date('m'),date('d'),date('Y')-1);
                $this->Image('images/logo.png',25,10);
                $this->SetFont('courier','B',40);
                $this->Cell(280,20,'Receipt Details',0,0,'C');
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
                $this->Cell(35,10,'Toll booth name',1,0,'C');
                $this->Cell(30,10,'Toll booth no.',1,0,'C');
                $this->Cell(35,10,'Employee name',1,0,'C');
                $this->Cell(29,10,'Receipt Date',1,0,'C');
                $this->Cell(29,10,'Receipt time',1,0,'C');
                $this->Cell(34,10,'Type of vehicle',1,0,'C');
                $this->Cell(30,10,'Journey type',1,0,'C');
                $this->Cell(32,10,'Vehicle no.',1,0,'C');
                $this->Cell(27,10,'Tax amount',1,0,'C');
                $this->Ln();
            }

            function viewTable($con){
                $this->SetFont('Helvetica','I',12);

                $q="SELECT * FROM `tbl_toll_receipt_details`";

                $res=mysqli_query($con,$q);

                while ($row=mysqli_fetch_assoc($res)){

                    $this->Cell(35,10,$row["toll_booth_name"],1,0,'C');
                    $this->Cell(30,10,$row["toll_booth_no"],1,0,'C');
                    $this->Cell(35,10,$row["toll_emp_name"],1,0,'C');
                    $this->Cell(29,10,$row["toll_receipt_date"],1,0,'C');
                    $this->Cell(29,10,$row["toll_receipt_time"],1,0,'C');
                    $this->Cell(34,10,$row["type_of_vehicle"],1,0,'C');
                    $this->Cell(30,10,$row["journey_type"],1,0,'C');
                    $this->Cell(32,10,$row["vehicle_no"],1,0,'C');
                    $this->Cell(27,10,$row["toll_amount"],1,0,'C');

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