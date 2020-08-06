<?php
require('fpdf181/fpdf.php');

require('dbconn.php'); 

class PDF extends FPDF
{
// Page header
function Header()
{
    require('dbconn.php'); 
    session_start();
 $maxwaitingno=$_SESSION['applicant_session'];
    //select applicant info
     $select="SELECT idnumbers.maxwaitingno,idnumbers.idno,idnumbers.DateAdded,applyid.ID,applyid.ID,applyid.maxwaitingno,applyid.waitingnumber,applyid.passport,birthcertificate.firstname,birthcertificate.middlename,birthcertificate.lastname,birthcertificate.dateofbirth,applyid.county,applyid.district,applyid.division,applyid.location,applyid.passport,applyid.statusofapproval,county.countyname,county.countycode,district.Districtname,district.Districtcode,division.divisionname,division.divisioncode,location.locationname,location.locationcode,hudumacenters.Sno,hudumacenters.Name from applyid,birthcertificate,county,district,division,location,hudumacenters,idnumbers  where  applyid.maxwaitingno='".$maxwaitingno."' && applyid.maxwaitingno=birthcertificate.maxwaitingno &&  applyid.county=county.countycode && applyid.district=district.Districtcode && applyid.division=division.divisioncode && applyid.location=locationcode && applyid.Collect=hudumacenters.Sno && applyid.maxwaitingno=idnumbers.maxwaitingno ";
     $result=mysqli_query($connection,$select);
     if ($result) {
        if (mysqli_num_rows($result)) {
            while ($row=mysqli_fetch_array($result)) {
                 $this->SetDrawColor(0,80,180);
    $this->SetFillColor(230,230,0);
    $this->SetTextColor(0,255,0);

     $this->SetFont('Arial','B',15);
   // $this->Cell(2);
    // Title
    $this->Cell(10,1,'JAMHURI YA KENYA',0,1,'L');
     $this->Cell(300,1,'REPUBLIC OF KENYA',0,1,'C');
    $this->SetTextColor(0,255,0);
     $this->SetFont('Times','B',9);
     $this->Cell(10,10,'SERIAL NUMBER:',0,1,'L');
      $this->SetTextColor(0,0,0);
     $this->SetFont('Times','',20);
     $this->Cell(80,-10,$maxwaitingno,0,0,'C');

    $this->SetTextColor(0,255,0);
     $this->SetFont('Times','B',9);
     $this->Cell(60,-10,'ID NUMBER:',0,0,'R');
      $this->SetTextColor(0,0,0);
     $this->SetFont('Times','',15);
     $this->Cell(25,-10,$row['idno'],0,1,'R');

     $this->SetTextColor(0,255,0);
     $this->SetFont('Times','B',15);
     $this->Cell(60,30,'FULL NAMES:',0,1,'L');
      $this->SetTextColor(0,0,0);
     $this->SetFont('Times','',20);
     $this->Cell(20,-20,$row['firstname'].' '.$row['middlename'].' '.$row['lastname'],0,1,'L');

$this->Image('../logo.png',90,35,-50,50);

     
     
    // Line break
    //$this->Ln(20);
    // Logo
    $this->Image('../logo.png',80,10,40);
     $this->Image('../uploads/'.$row['passport'],10,40,50,65);

    // Arial bold 15
    $this->SetFont('Arial','B',15);
    // Move to the right
    //$this->Cell(80);
    // Title
  //  $this->Cell(100,10,'REPUBLIC OF KENYA',0,1,'C');
    // Line break
    $this->Ln(20);
            }
        }
    }
   
}

// Page footer
function Footer()
{
    // Position at 1.5 cm from bottom
    $this->SetY(-15);
    // Arial italic 8
    $this->SetFont('Arial','I',8);
    // Page number
    $this->Cell(0,10,'Page '.$this->PageNo().'/{nb}',0,0,'C');
}
}

// Instanciation of inherited class
$pdf = new PDF();
$pdf->AliasNbPages();
$pdf->AddPage();
$pdf->SetFont('Times','',12);
// for($i=1;$i<=40;$i++)
//     $pdf->Cell(0,10,'Printing line number '.$i,0,1);
//session_start();
 $birthcertificatenumber=$_SESSION['applicant_session'];
    //select applicant info
     $select="SELECT idnumbers.birthcertificatenumber,idnumbers.idno,idnumbers.DateAdded,applyid.ID,applyid.birthcertificatenumber,applyid.waitingnumber,birthcertificate.firstname,birthcertificate.middlename,birthcertificate.lastname,birthcertificate.dateofbirth,birthcertificate.sex,applyid.county,applyid.district,applyid.division,applyid.location,applyid.passport,applyid.statusofapproval,county.countyname,county.countycode,district.Districtname,district.Districtcode,division.divisionname,division.divisioncode,location.locationname,location.locationcode,hudumacenters.Sno,hudumacenters.Name,fingerprints.birthcertificatenumber,fingerprints.signature,fingerprints.l1finger from fingerprints,applyid,birthcertificate,county,district,division,location,hudumacenters,idnumbers  where  applyid.birthcertificatenumber='".$birthcertificatenumber."' && applyid.birthcertificatenumber=birthcertificate.birthcertificatenumber &&  applyid.county=county.countycode && applyid.district=district.Districtcode && applyid.division=division.divisioncode && applyid.location=locationcode && applyid.Collect=hudumacenters.Sno && applyid.birthcertificatenumber=idnumbers.birthcertificatenumber && fingerprints.birthcertificatenumber=applyid.birthcertificatenumber ";
     $result=mysqli_query($connection,$select);
     if ($result) {
        if (mysqli_num_rows($result)) {
            while ($row=mysqli_fetch_array($result)) {
 $pdf->Image('../hcuser/uploads/'.$row['signature'],65,96,30,8);
 $pdf->Image('../hcuser/uploads/'.$row['l1finger'],160,87,30,20);
                $pdf->SetTextColor(0,255,0);
                 $pdf->SetFont('Times','',13);
                 $pdf->Cell(138,-10,'DATE OF BIRTH',0,1,'C');
                 $pdf->SetTextColor(0,0,0);
                 $pdf->SetFont('Times','B',12);
                 $pdf->Cell(123,20,$row['dateofbirth'],0,1,'C');

                  $pdf->SetTextColor(0,255,0);
                 $pdf->SetFont('Times','',13);
                 $pdf->Cell(113,-9,'SEX',0,1,'C');
                 $pdf->SetTextColor(0,0,0);
                 $pdf->SetFont('Times','B',12);
                 $pdf->Cell(113,20,$row['sex'],0,1,'C');

                  $pdf->SetTextColor(0,255,0);
                 $pdf->SetFont('Times','',13);
                 $pdf->Cell(145,-9,'DISTRICT OF BIRTH',0,1,'C');
                 $pdf->SetTextColor(0,0,0);
                 $pdf->SetFont('Times','B',12);
                 $pdf->Cell(115,20,$row['Districtname'],0,1,'C');

                  $pdf->SetTextColor(0,255,0);
                 $pdf->SetFont('Times','',13);
                 $pdf->Cell(137,-9,'PLACE OF ISSUE',0,1,'C');
                 $pdf->SetTextColor(0,0,0);
                 $pdf->SetFont('Times','B',12);
                 $pdf->Cell(113,20,$row['Name'],0,1,'C');

                  $pdf->SetTextColor(0,255,0);
                 $pdf->SetFont('Times','',13);
                 $pdf->Cell(137,-9,'DATE OF ISSUE',0,1,'C');
                 $pdf->SetTextColor(0,0,0);
                 $pdf->SetFont('Times','B',12);
                 $pdf->Cell(139,20,$row['DateAdded'],0,1,'C');

                  $pdf->SetTextColor(0,255,0);
                 $pdf->SetFont('Times','',13);
                 $pdf->Cell(139,-9,'HOLDERS`S SIGN',0,1,'C');

               //   $pdf->SetFont('Arial','B',15);
               // $pdf->Cell(80,10,'Birth Certificate No: ',1,0,'C');
               //  $pdf->SetFont('');
               //  $pdf->Cell(100,10,$birthcertificatenumber,1,1,'C');
               //   $pdf->SetFont('Arial','B',15);
               //  $pdf->Cell(80,10,'Waiting No: ',1,0,'C');
               //   $pdf->SetFont('');
               //  $pdf->Cell(100,10,$row['waitingnumber'],1,1,'C');
                
               //   $pdf->SetFont('Arial','B',15);
               //  $pdf->Cell(80,10,'Full Names: ',1,0,'C');
               //   $pdf->SetFont('');
               //  $pdf->Cell(100,10,$row['firstname'].' '.$row['middlename'].' '.$row['lastname'] ,1,1,'C');
               //   $pdf->SetFont('Arial','B',15);
               //  $pdf->Cell(80,10,'Collection Center: ',1,0,'C');
               //   $pdf->SetFont('');
               //  $pdf->Cell(100,10,$row['Name'].' Huduma Center',1,1,'C');

               //   $pdf->SetFont('Arial','B',15);
               //  $pdf->Cell(80,10,'Date Of Birth: ',1,0,'C');
               //   $pdf->SetFont('');
               //  $pdf->Cell(100,10,$row['dateofbirth'] ,1,1,'C');
               //   $pdf->SetFont('Arial','B',15);
               //  $pdf->Cell(80,10,'District: ',1,0,'C');
               //   $pdf->SetFont('');
               //  $pdf->Cell(100,10,$row['Districtname'],1,1,'C');

               //   $pdf->SetFont('Arial','B',15);
               //  $pdf->Cell(80,10,'Division: ',1,0,'C');
               //   $pdf->SetFont('');
               //  $pdf->Cell(100,10,$row['divisionname'] ,1,1,'C');
               //   $pdf->SetFont('Arial','B',15);
               //  $pdf->Cell(80,10,'Location: ',1,0,'C');
               //   $pdf->SetFont('');
               //  $pdf->Cell(100,10,$row['locationname'],1,1,'C');

                // $pdf->Cell(100,10,'Sub Location: ',1,0,'C');
                // $pdf->Cell(50,10,$row['sublocation'],1,1,'C');

            }
        }
        else{
            $pdf->Cell(100,10,'You Are Not Currently Allowed To Print Waiting Number: ',1,0,'C');
        }

     }
     else{
        $pdf->Cell(100,10,'Failed To Load and Display Information: '.mysqli_error($connection),1,0,'C');
     }

 
$pdf->Output();

?>