<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="dist/css/mainStyles.css">
</head>
<body>

<!-- Edit Form -->
<div id="myModal" class="modal">

    <!-- Modal content -->
    <div class="modal-content">
        <div class="modal-header">
            <span class="close">&times;</span>
            <span class="close" href="#">&times;</span>
            <h2 style="color:#1A237E;font-family: sans-serif;margin-left: 450px; font-size: 30px;margin-top: -10px;">UPDATE EMPLOYEE</h2>
            <a class="close" href="#">&times;</a>
        </div>
        <div class="modal-body">

            <!-- Form Started -->
            <form id="employeeEditForm" class="form">

                <label for="fname">First Name</label>
                <input type="text" id="editempID" name="employeeIDedit" placeholder="Employee ID" readonly>

                <label for="fname">First Name</label>
                <input type="text" id="editfname" name="nameedit" placeholder="Your name..">

                <label for="email">E-mail</label>
                <input type="text" id="editeemail" name="emailedit" placeholder="E-mail">


                <label for="contact">Contact</label>
                <input type="number" id="editetele" name="teleedit" placeholder="Mobile">


                <label for="joinedDate">Joined Date</label>
                <input type="date" id="editjdate" name="joinedDateedit" placeholder="Join date">

                <br>
                <label for="`workingRoutes">Current Working Routes</label>
                <input type="text" id="editroutes" name="workingRoutesedit" placeholder="Working Route">

                <label for="`workingRoutes">Comment</label>
                <input type="text" id="editecomment" name="commentedit" placeholder="Type Comment">

                <input id="update-btn" type="button" value="Update">

            </form>
        </div>

    </div>

</div>

</body>

</html>
