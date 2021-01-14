<?php

include_once('tcpdf/tcpdf.php');

// create new PDF document
$pdf = new TCPDF(PDF_PAGE_ORIENTATION, PDF_UNIT, PDF_PAGE_FORMAT, true, 'UTF-8', false);

$pdf->SetCreator("Test Creator");
$pdf->SetAuthor('Test Author');
$pdf->SetTitle('Generate PDF and show form data');

// set default monospaced font
$pdf->SetDefaultMonospacedFont(PDF_FONT_MONOSPACED);

$pdf->SetMargins(PDF_MARGIN_LEFT, PDF_MARGIN_TOP, PDF_MARGIN_RIGHT);
$pdf->SetHeaderMargin(PDF_MARGIN_HEADER);
$pdf->SetFooterMargin(PDF_MARGIN_FOOTER);

// set auto page breaks
$pdf->SetAutoPageBreak(TRUE, PDF_MARGIN_BOTTOM);

// -------------------------------------------------------------

$pdf->AddPage();

// getting form data and show in pdf

if(isset($_POST['submit']))
{
    $admission = "Admission In: " . $_POST['admission'];
    $radioVal = "I got to know about AGS from: " . $_POST['gener'];
    $name = "Student Name: " . $_POST['stdname'];
    $gender = "Gender: " . $_POST['gender'];
    $class = "Class: " . $_POST['class'];
    $new_date = "Date: " . $_POST['date'];
    $address = "Address: " . $_POST['addr'];
    $city = "City: " . $_POST['city'];
    $country= "Country: " . $_POST['country'];
    $app = "Applicant's Name: " . $_POST['app'];
    $rel = "Relation: " . $_POST['rel'];
    $cnic = "CNIC Number: " . $_POST['cnic'];
    $phone = "Phone Number: " . $_POST['phone'];
    $wanum = "WhatsApp Number: " . $_POST['wanum'];
    $email = "Email: " . $_POST['email'];
    $signup = "signup: " . $_POST['signup'];

    $pdf->writeHTML($admission);
    $pdf->writeHTML($radioVal);
    $pdf->writeHTML($name);
    $pdf->writeHTML($gender);
    $pdf->writeHTML($class);
    $pdf->writeHTML($new_date);
    $pdf->writeHTML($address);
    $pdf->writeHTML($city);
    $pdf->writeHTML($country);
    $pdf->writeHTML($app);
    $pdf->writeHTML($rel);
    $pdf->writeHTML($cnic);
    $pdf->writeHTML($phone);
    $pdf->writeHTML($wanum);
    $pdf->writeHTML($email);
    $pdf->writeHTML($signup);
}

ob_end_clean();

$pdf->Output('test.pdf', 'I');