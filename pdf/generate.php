<?php
require('fpdf.php');

$pdf = new FPDF();

if (isset($_POST['create'])) {
    $name = $_POST['name'];
    $branch = $_POST['branch'];
    $student_id = $_POST['student_id'];
    $semester = $_POST['semester'];
    $roll_no = $_POST['roll_no'];
    $subject = $_POST['subject'];
    $subject_code = $_POST['subject_code'];
    $session = $_POST['session'];

    $pdf->AddPage();
    $pdf->SetFont('Times', '', 15.5);

    // Add some spacing
    for ($i = 0; $i < 10; $i++) {
        $pdf->Cell(180, 10, '', 0, 1, 'L');
    }

    // Check if image file exists
    $imagePath = "../$semester/$subject.png";
    if (!file_exists($imagePath)) {
        die("Error: Image file not found at $imagePath");
    }

    // Add image
    $pdf->Image($imagePath, 0, 0, 210, 297);
 
    $pdf->Cell(180, 10, '', 0, 1, 'L');
    $pdf->Cell(180, 10, '', 0, 1, 'L');
    $pdf->Cell(180, 10, '', 0, 1, 'L');
    $pdf->Cell(180, 10, '', 0, 1, 'L');
    $pdf->Cell(180, 10, '', 0, 1, 'L');
    $pdf->Cell(180, 10, '', 0, 1, 'L');
    $pdf->Cell(180, 10, '', 0, 1, 'L');
    $pdf->Cell(180, 10, '', 0, 1, 'L');
    // $pdf->Cell(180, 10, '', 0, 1, 'L');
    // $pdf->Cell(180, 10, '', 0, 1, 'L');
    // $pdf->Cell(180, 10, '', 0, 1, 'L');
    // $pdf->Cell(180, 10, '', 0, 1, 'L');
    // $pdf->Cell(180, 10, '', 0, 1, 'L');
    // $pdf->Cell(180, 10, '', 0, 1, 'L');
    // $pdf->Cell(180, 2, '', 0, 1, 'L');

    // Add student details
    $pdf->Cell(40, 4, "       NAME  :", 0, 0, 'L');
    $pdf->Cell(10, 4, $name, 0, 1, 'L');
    $pdf->Cell(100, 5, '', 0, 1, 'L');

    $pdf->Cell(40, 4, "       Branch  :", 0, 0, 'L');
    $pdf->Cell(10, 4, $branch, 0, 1, 'L');
    $pdf->Cell(100, 5, '', 0, 1, 'L');

    $pdf->Cell(50, 4, "       Student ID  :", 0, 0, 'L');
    $pdf->Cell(10, 4, $student_id, 0, 1, 'L');
    $pdf->Cell(100, 5, '', 0, 1, 'L');

    $pdf->Cell(40, 4, "       Semester  :", 0, 0, 'L');
    $pdf->Cell(10, 4, $semester, 0, 1, 'L');
    $pdf->Cell(100, 5, '', 0, 1, 'L');

    $pdf->Cell(40, 4, "       Roll No.  :", 0, 0, 'L');
    $pdf->Cell(10, 4, $roll_no, 0, 1, 'L');
    $pdf->Cell(100, 5, '', 0, 1, 'L');

    $pdf->Cell(50, 4, "       Subject Code  :", 0, 0, 'L');
    $pdf->Cell(10, 4, $subject_code, 0, 1, 'L');
    $pdf->Cell(100, 5, '', 0, 1, 'L');

    $pdf->Cell(40, 4, "       Session  :", 0, 0, 'L');
    $pdf->Cell(10, 4, $session, 0, 1, 'L');
    $pdf->Cell(100, 5, '', 0, 1, 'L');

    // Output the PDF
    $pdf->Output();
}
?>