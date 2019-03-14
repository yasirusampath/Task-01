<!DOCTYPE html>
<html>
<head>
    <title>Dashbord</title>
    <link rel="stylesheet" type="text/css" href="dist/css/mainStyles.css">
</head>
<body>

<h1 id="topic">MANAGE EMPLOYEE</h1>

<a class="button" href="#popup1">Add Employee</a>
<a class="button" href="#popup2">Upload XL Sheet</a>

<!-- POP-up add employee details -->
<div class="box">
</div>


<div id="popup1" class="overlay">
    <div class="popup">
        <h2 style="color: #1A237E;font-family: sans-serif;margin-left: 350px; font-size: 30px;">ENTER YOUR DETAILS</h2>
        <a class="close" href="#">&times;</a>

        <!-- Form Started -->
        <form id="employeeAddForm" class="form">
            <label for="fname">First Name</label>
            <input type="text" id="empID" name="employeeID" placeholder="Employee ID">

            <label for="fname">First Name</label>
            <input type="text" id="fname" name="name" placeholder="Your name..">

            <label for="email">E-mail</label>
            <input type="text" id="eemail" name="email" placeholder="E-mail">

            <label for="contact">Contact</label>
            <input type="number" id="etele" name="tele" placeholder="Mobile">

            <br>
            <label for="joinedDate">Joined Date</label>
            <input type="date" id="jdate" name="joinedDate" placeholder="Join date">

            <label for="`workingRoutes">Current Working Routes</label>
            <input type="text" id="routes" name="workingRoutes" placeholder="Working Route">
            <br>
            <label for="workingRoutes">Comment</label>
            <input type="text" id="ecomment" name="comment" placeholder="Type Comment">

            <input id="submit-btn" type="button" value="Submit">
        </form>
    </div>
</div>

<!--End POP-up add employee details -->

<!-- POP-up uplode file -->
<div class="box">
</div>
<div id="popup2" class="overlay">
    <div class="popup">

        <div class="container box">
            <h2 style="color: #1A237E;font-family: sans-serif;margin-left: 50px; font-size: 30px;">UPLOAD YOU'R EXCEL FILE</h2>
            <form method="post" enctype="multipart/form-data">

                <div style="margin-right: -130px">
                <br>
                <label>Select Excel File</label>
                <input type="file" name="excel"/>
                <br/>
                </div>
                <input style="width: 100px;background-color: #00BFA5;color: white;padding: 5px 5px;margin: 8px 0;border: none;border-radius: 50px;cursor: hand;float: right; margin-top: 20px; margin-left: 50px;" type="submit" value="Upload">
                <input style="width: 100px;background-color: #1565C0;color: white;padding: 5px 5px;margin: 8px 0;border: none;border-radius: 50px;cursor: hand;float: right; margin-top: 20px; margin-left: 10px;" type="submit" type="submit" name="import" class="btn btn-info" value="Import"/>
                
            </form>
            <br />
            <br />



    </div>
</div>
</div>
<!--End POP-up uplode file -->

<h1 class="subtopic">VIEW ALL EMPLOYEE</h1>

<!-- Table -->

<table class="tbl">
    <thead>
    <tr>
        <th>EMP-ID</th>
        <th>Name</th>
        <th>E-Mail</th>
        <th>Contact</th>
        <th>Join Date</th>
        <th>Current Route</th>
        <th>Comment</th>
        <th>Action</th>
    </tr>
    </thead>
    <tbody id="employeeTable">

    </tbody>
</table>

<!-- Table -->
<?php
require_once "editForm.php";
?>

<script src="dist/js/jquery-3.3.1.min.js"></script>
<script src="dist/controller/indexController.js"></script>
</body>
</html>