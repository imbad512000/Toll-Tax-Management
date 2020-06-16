<?php 
    require "fpdf182/fpdf.php";
    $con = mysqli_connect("localhost","root","","start");
    class myPDF extends FPDF{    
        function header(){
                // $new_year=mktime(0,0,0,date('m'),date('d'),date('Y')-1);
                $this->Image('images/logo.png',25,10);
                $this->SetFont('courier','B',40);
                $this->Cell(250,20,'Employee details',0,0,'C');
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
                $this->Cell(28,10,'First name',1,0,'C');
                $this->Cell(28,10,'last name',1,0,'C');
                $this->Cell(23,10,'Gender',1,0,'C');
                $this->Cell(55,10,'Email address',1,0,'C');
                $this->Cell(28,10,'Password',1,0,'C');
                $this->Cell(40,10,'Contact Number',1,0,'C');
                $this->Cell(35,10,'Date of Birth',1,0,'C');
                $this->Cell(45,10,'Aadhar-card Number',1,0,'C');
                $this->Ln();
            }

            function viewTable($con){
                $this->SetFont('Helvetica','I',12);

                $q="SELECT * FROM `tbl_employee_registration`";

                $res=mysqli_query($con,$q);

                while ($row=mysqli_fetch_assoc($res)){
                    $this->Cell(28,10,$row["emp_reg_first_name"],1,0,'C');
                    $this->Cell(28,10,$row["emp_reg_last_name"],1,0,'C');
                    $this->Cell(23,10,$row["emp_reg_gender"],1,0,'C');
                    $this->Cell(55,10,$row["emp_reg_email"],1,0,'C');
                    $this->Cell(28,10,$row["emp_reg_password"],1,0,'C');
                    $this->Cell(40,10,$row["emp_reg_contact_num"],1,0,'C');
                    $this->Cell(35,10,$row["emp_reg_DOB"],1,0,'C');
                    $this->Cell(45,10,$row["emp_aadharcard_number"],1,0,'C');

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