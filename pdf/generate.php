<?php
// error_reporting(0);

// session_start();
// if (($_SESSION["new_session_02"] || $_SESSION["new_session_03"]) == false) {
//     header("location: ../log.php");
// }
// $servername = "localhost";
// $username = "root";
// $password = "";
// $database = "pro";

// $nm = $_SESSION['nm'];
// $year = $_POST['year'];
// $month = $_POST['month'];

// $conn = mysqli_connect($servername, $username, $password, $database,);

// $data = mysqli_query($conn, "SELECT * FROM salary WHERE name = '$nm' AND ( SELECT * from salary WHERE year='$year' AND month='$month');");
// $data = mysqli_query($conn, "SELECT * FROM salary WHERE name = '$nm' AND year = '$year' AND month = '$month';");


// if ($total = mysqli_num_rows($data) > 0) {
//     $j = 0;

//     while ($result = mysqli_fetch_array($data)) {
//         $net_salary =  $result['net_salary'];
//         $mode = $result['mode'];
//         $allowance = $result['allowance'];
//         $allo_amount = $result['allo_amount'];
//         $deduction = $result['deduction'];
//         $ded_amount = $result['ded_amount'];
//         $basic = $result['basic'];
//         $total_allo = $result['total_allo'];
//         $total_ded = $result['total_ded'];
//         $dt = $result['dt'];
//         $j++;
//     }
// }
//  else {
//     echo"No Result Found";
// }

// $data = mysqli_query($conn, "SELECT * FROM salary WHERE name = '$nm' AND ( SELECT * from salary WHERE year='$year' AND month='$month');");
// $data2 = mysqli_query($conn, "SELECT * FROM staff WHERE name = '$nm';");


// if ($total2 = mysqli_num_rows($data2) > 0) {
//     $k = 0;

//     while ($result2 = mysqli_fetch_array($data2)) {
//         $man =  $result2['man'];
//         $deptm = $result2['deptm'];
//         $empid = $result2['empid'];
//         $img = $result2['img'];

//         $k++;
//     }
// }
//  else {
//     echo"No Result Found";
// }


$name =  $_POST['name'];
$branch =  $_POST['branch'];
$student_id =  $_POST['student_id'];
$semester =  $_POST['semester'];
$roll_no =  $_POST['roll_no'];
$subject =  $_POST['subject'];
$subject_code =  $_POST['subject_code'];
$session =  $_POST['session'];

// $subject += 1;
// $max = strval($may);
// $max = (string) $may;
// $imag = "../sub/" . $max . ".png";

require("fpdf.php");
$pdf = new FPDF();
$pdf2 = new FPDF();
if (isset($_POST['create'])) {

    // $net_salary = $_POST['net_salary'];
    // $mode = $_POST['mode'];

    // $fpdf->AddPage();
    // $fpdf->Image('background-image.png', 0, 0, $fpdf->w, $fpdf->h);
    $pdf->AddPage();
    $pdf->SetFont("Times", "", 15.5);

    // $pdf->Image('../Front GX.png', 0, 0, $pdf->w, $pdf->h);
    // $emr="../".$img;
    $pdf->Cell(180, 10, '', 0, 1, 'L');
    $pdf->Cell(180, 10, '', 0, 1, 'L');
    $pdf->Cell(180, 10, '', 0, 1, 'L');
    $pdf->Cell(180, 10, '', 0, 1, 'L');
    $pdf->Cell(180, 10, '', 0, 1, 'L');
    $pdf->Cell(180, 10, '', 0, 1, 'L');
    $pdf->Cell(180, 10, '', 0, 1, 'L');
    $pdf->Cell(180, 10, '', 0, 1, 'L');
    $pdf->Cell(180, 10, '', 0, 1, 'L');
    $pdf->Cell(180, 10, '', 0, 1, 'L');
    $pdf->Cell(180, 10, '', 0, 1, 'L');
    $pdf->Cell(180, 10, '', 0, 1, 'L');
    $pdf->Cell(180, 10, '', 0, 1, 'L');
    $pdf->Cell(180, 10, '', 0, 1, 'L');
    $pdf->Cell(180, 10, '', 0, 1, 'L');
    $pdf->Cell(180, 10, '', 0, 1, 'L');
    $pdf->Cell(180, 10, '', 0, 1, 'L');
    $pdf->Cell(180, 10, '', 0, 1, 'L');
    $pdf->Cell(180, 2, '', 0, 1, 'L');
    // $pdf->Cell(180, 10, '', 0, 1, 'L');
    // $pdf->Cell(180, 10, '', 0, 1, 'L');

    $pdf->Image("../$semester/$subject.png", 0, 0, 210, 297);


    $pdf->Cell(40, 4, "       NAME  :", 0, 0, 'L');
    // $pdf->Cell(70, 10, "       ", 0, 0, 'L');
    $pdf->Cell(10, 4, $name, 0, 1, 'L');
    $pdf->Cell(100, 5, '', 0, 1, 'L');


    $pdf->Cell(40, 4, "       Branch  :", 0, 0, 'L');
    // $pdf->Cell(70, 10, "       ", 0, 0, 'L');
    $pdf->Cell(10, 4, $branch, 0, 1, 'L');
    $pdf->Cell(100, 5, '', 0, 1, 'L');


    $pdf->Cell(50, 4, "       Student ID  :", 0, 0, 'L');
    // $pdf->Cell(70, 10, "       ", 0, 0, 'L');
    $pdf->Cell(10, 4, $student_id, 0, 1, 'L');
    $pdf->Cell(100, 5, '', 0, 1, 'L');


    $pdf->Cell(40, 4, "       Semester  :", 0, 0, 'L');
    // $pdf->Cell(70, 10, "       ", 0, 0, 'L');
    $pdf->Cell(10, 4, $semester, 0, 1, 'L');
    $pdf->Cell(100, 5, '', 0, 1, 'L');


    $pdf->Cell(40, 4, "       Roll No.  :", 0, 0, 'L');
    // $pdf->Cell(70, 10, "       ", 0, 0, 'L');
    $pdf->Cell(10, 4, $roll_no, 0, 1, 'L');
    $pdf->Cell(100, 5, '', 0, 1, 'L');


    // $pdf->Cell(40, 4, "       Subject  :", 0, 0, 'L');
    // // $pdf->Cell(70, 10, "       ", 0, 0, 'L');
    // $pdf->Cell(10, 4, $subject, 0, 1, 'L');
    // $pdf->Cell(100, 5, '', 0, 1, 'L');


    $pdf->Cell(50, 4, "       Subject Code  :", 0, 0, 'L');
    // $pdf->Cell(70, 10, "       ", 0, 0, 'L');
    $pdf->Cell(10, 4, $subject_code, 0, 1, 'L');
    $pdf->Cell(100, 5, '', 0, 1, 'L');


    $pdf->Cell(40, 4, "       Session  :", 0, 0, 'L');
    // $pdf->Cell(70, 10, "       ", 0, 0, 'L');
    $pdf->Cell(10, 4, $session, 0, 1, 'L');
    $pdf->Cell(100, 5, '', 0, 1, 'L');




    $pdf->Output();
}
// generate.php (UTF-8)
