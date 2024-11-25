<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Front</title>
    <link rel="shortcut icon" href="PHT.png" type="image/x-icon">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
</head>

<body>
    <form action="pdf/generate.php" method="POST" style="margin: 10%;">
        <div class="form-group">
            <label for="formGroupExampleInput">Name</label>
            <input type="text" name="name" class="form-control" id="formGroupExampleInput" placeholder="Example input" required>
        </div>
        <br>
        <div class="form-group">
            <label for="formGroupExampleInput">Branch</label>
            <input type="text" name="branch" class="form-control" id="formGroupExampleInput" placeholder="Example input" required>
        </div>
        <br>
        <div class="form-group">
            <label for="formGroupExampleInput">Student ID</label>
            <input type="text" name="student_id" class="form-control" id="formGroupExampleInput" placeholder="Example input" required>
        </div>
        <br>
        <div class="form-group">
            <label for="formGroupExampleInput2">Semester</label>
            <select class="form-select" aria-label="Default select example" name="semester" id="sem" required>
                <option value="" hidden>Select</option>
                <option value="3RD">3RD</option>
                <option value="4TH">4TH</option>
                <option value="5TH">5TH</option>
                <option value="6TH">6TH</option>
                <option value="7TH">7TH</option>
                <option value="8TH">8TH</option>
            </select>
        </div>
        <br>
        <div class="form-group">
            <label for="formGroupExampleInput">Roll No.</label>
            <input type="text" name="roll_no" class="form-control" id="formGroupExampleInput" placeholder="Example input" required>
        </div>
        <br>







        <div class="form-group">
            <label for="formGroupExampleInput2">Subject</label>


            <select class="form-select" aria-label="Default select example" name="subject" id="alternate3" required>
                <option class="" value="" hidden>Select Subject</option>
                <option class="porn3" value="1">Effective Technical Communication </option>
                <option class="porn3" value="2">Mathematics-III</option>
                <option class="porn3" value="3">Biology for Engineers </option>
                <option class="porn3" value="4">Engineering Mechanics</option>
                <option class="porn3" value="5">Digital Logic & Microprocessor </option>
                <option class="porn3" value="6">Data Structure & Algorithm </option>
                <option class="porn3" value="7">Java Programming Lab </option>
                <option class="porn3" value="8">Data Structure Lab </option>
                <option class="porn3" value="9">Digital Electronics & Microprocessor Lab </option>
                <option class="porn3" value="10">Indian Constitution </option>

            <!-- </select> -->

            <!-- <select class="form-select" aria-label="Default select example" name="subject" id="alternate4"> -->
                <option class="porn4" value="1">Engineering Economics and Accountancy</option>
                <option class="porn4" value="2">Universal Human Values-II</option>
                <option class="porn4" value="3">Discrete Mathematics </option>
                <option class="porn4" value="4">Computer Organization & Architecture </option>
                <option class="porn4" value="5">Operating Systems </option>
                <option class="porn4" value="6">Object Oriented Programming </option>
                <option class="porn4" value="7">IT Workshop (Python/R) </option>
                <option class="porn4" value="8"> Operating System Lab </option>
                <option class="porn4" value="9">Object Oriented Programming Lab </option>
                <option class="porn4" value="10">Essence of Indian Knowledge Tradition </option>
            <!-- </select> -->

            <!-- <select class="form-select" aria-label="Default select example" name="subject" id="alternate5"> -->
                <option class="porn5" value="1">Professional Practice, Law and Ethics </option>
                <option class="porn5" value="2">Design and Analysis of Algorithm</option>
                <option class="porn5" value="3">Database Management Systems </option>
                <option class="porn5" value="4">Formal Language & Automata Theory</option>
                <option class="porn5" value="5">Artificial Intelligence </option>
                <option class="porn5" value="6">Computer Networks </option>
                <option class="porn5" value="7">Algorithm Lab </option>
                <option class="porn5" value="8">Database Management System Lab</option>
                <option class="porn5" value="9">Computer Hardware & Network Lab </option>
                <option class="porn5" value="10">Industry Internship - I </option>
            <!-- </select> -->

            <!-- <select class="form-select" aria-label="Default select example" name="subject" id="alternate6"> -->
                <option class="porn6" value="1">Digital Image Processing</option>
                <option class="porn6" value="2">Compiler Design </option>
                <option class="porn6" value="3">Cryptography and Network Security </option>
                <option class="porn6" value="4">Software Engineering </option>
                <option class="porn6" value="5">Advanced Java Lab </option>
                <option class="porn6" value="6">Web Technology Lab </option>
                <option class="porn6" value="7">Image Processing Lab </option>
                <option class="porn6" value="8">Advanced Computer Architecture</option>
                <option class="porn6" value="9">Data Mining</option>
                <option class="porn6" value="10">Web Technology</option>
            </select>
        </div>





<br>



        <div class="form-group">
            <label for="formGroupExampleInput">Subject Code</label>
            <input type="text" name="subject_code" class="form-control" id="formGroupExampleInput" placeholder="Example input" required>
        </div>
        <br>














        <div class="form-group">
            <label for="formGroupExampleInput">Session</label>
            <!-- <input type="text" name="session" class="form-control" id="formGroupExampleInput" placeholder="Example input" required> -->
            <select class="form-select" aria-label="Default select example" name="session" id="sem" required>
                <option value="" hidden>Select</option>
                <option value="2024-2025">2024-2025</option>
                <option value="2025-2026">2025-2026</option>
                <option value="2026-2027">2026-2027</option>
                <option value="2027-2028">2027-2028</option>
            </select>
        </div>
        <br>





        <script>
            $(document).ready(function() {
                $(".porn3").hide();
                $(".porn4").hide();
                $(".porn5").hide();
                $(".porn6").hide();
                $("#sem").change(function() {
                    var selectedValue = $(this).val();
                    if (selectedValue === "3RD") {
                        $(".porn3").show();
                        $(".porn4").hide();
                        $(".porn5").hide();
                        $(".porn6").hide();
                    } else if (selectedValue === "4TH") {
                        $(".porn3").hide();
                        $(".porn4").show();
                        $(".porn5").hide();
                        $(".porn6").hide();
                    } else if (selectedValue === "5TH") {
                        $(".porn3").hide();
                        $(".porn4").hide();
                        $(".porn5").show();
                        $(".porn6").hide();
                    } else if (selectedValue === "6TH") {
                        $(".porn3").hide();
                        $(".porn4").hide();
                        $(".porn5").hide();
                        $(".porn6").show();
                    } else {
                        $(".porn").hide();
                        $(".porn").hide();
                        $(".porn").hide();
                        $(".porn").hide();
                    }
                });
            });
        </script>


        <br>
        <button type="submit" name="create">Create</button>
    </form>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>

</html>