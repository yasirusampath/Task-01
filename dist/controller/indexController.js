

let modal = document.getElementById('myModal');

getAllEmployees();

let rowData = new Array();
let getRowData = new Array();

$('#submit-btn').click(function () {
    let employeeForm = $('#employeeAddForm').serialize();

    $.ajax({
        method: "post",
        url: "api/service/employeeServices.php",
        async: true,
        data: employeeForm + "&operation=add",
        dataType: "json",
    }).done(function (responce) {

        if (responce == 1) {
            alert("Employee Added Success..!");
            getAllEmployees();
        } else {
            alert("Employee Added Failed..!");

        }
    });
});

function getAllEmployees() {
    $("#employeeTable").empty();
    $.ajax({
        url: "api/service/employeeServices.php",
        method: "GET",
        async: true,
        data: "&operation=getAll",
        dataType: "json"
    }).done(function (resp) {


        for (var i in resp) {

            var employee = resp[i];
            // console.log(customer[0]);
            var empID = employee[0];
            var name = employee[1];
            var email = employee[2];
            var tele = employee[3];
            var joinDate = employee[4];
            var currentWorkingRout = employee[5];
            var comment = employee[6];
            var action = "<button onclick=\"editModal()\" type=\"button\" id=\"edit-btn" + i + "\">Edit</button>\n" +
                "<button  type=\"button\" id=\"delete-btn" + i + "\">Delete</button>";


            var row = "<tr><td>" + empID + "</td><td>" + name + "</td><td>" + email + "</td><td>" + tele + "</td><td>" + joinDate + "</td><td>" + currentWorkingRout + "</td><td>" + comment + "</td><td>" + action + "</td></tr>";
            $("#employeeTable").append(row);

            rowData.push(employee);

            $.each(rowData , function (index ,value) {
                $('#edit-btn'+index).click(function () {
                    getRowData = rowData[index];


                    $('#editempID').val(getRowData[0]);
                    $('#editfname').val(getRowData[1]);
                    $('#editeemail').val(getRowData[2]);
                    $('#editetele').val(getRowData[3]);
                    $('#editjdate').val(getRowData[4]);
                    $('#editroutes').val(getRowData[5]);
                    $('#editecomment').val(getRowData[6]);

                });
            });
            $.each(rowData , function (index ,value) {
                $('#delete-btn'+index).click(function () {
                    getRowData = rowData[index];
                    deleteEmployeeById(getRowData[0]);
                });
            });

        }
    });
}



$('.close').click(function () {
// close the modal
    modal.style.display = "none";
});

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
};


function editModal() {
    // Get the modal
    modal.style.display = "block";


}


$('#update-btn').click(function () {
    let employeeForm = $('#employeeEditForm').serialize();

    $.ajax({
        method: "post",
        url: "api/service/employeeServices.php",
        async: true,
        data: employeeForm + "&operation=update",
        dataType: "json",
    }).done(function (responce) {

        if (responce == 1) {
            alert("Employee Update Success..!");
            getAllEmployees();
        } else {
            alert("Employee Update Failed..!");

        }
    });
});
function deleteEmployeeById(id){


    $.ajax({
        method: "post",
        url: "api/service/employeeServices.php",
        async: true,
        data:{
            employeeID:id,
            operation:'delete'
        },
        dataType: "json",
    }).done(function (responce) {


        if (responce == 1) {
            alert("Employee delete Success..!");
            location.reload();
        } else {
            alert("Employee delete Failed..!");

        }

});
}



//
//
//
//
//
//
// $('#seo').keyup(function (e) {
//     if (e.which == 13) {
//         var formData = $('#customerForm').serialize();
//         $.ajax({
//             url: "api/services/CustomerService.php",
//             method: "GET",
//             async: true,
//             data: formData + "&operation=search",
//             dataType: "json"
//         }).done(function (resp) {
//                 var customer = resp;
//                 var id = customer.id;
//                 var name = customer.name;
//                 var address = customer.address;
//                 var salary = customer.salary;
//                 $('#seo').val(id);
//                 $('#name').val(name);
//                 $('#address').val(address);
//                 $('#salary').val(salary);
//
//             }
//         );
//     }
// });
//
// $('#delete').click(function (e) {
//     var formData = $('#customerForm').serialize();
//     $.ajax({
//         url: "api/services/CustomerService.php",
//         method: "GET",
//         async: true,
//         data: formData + "&operation=delete",
//         dataType: "json"
//     }).done(function (resp) {
//             alert(resp);
//         }
//     );
//
// })
// var formData = $('#customerForm').serialize();
// $.ajax({
//     url: "api/services/CustomerService.php",
//     method: "GET",
//     async: true,
//     data: formData + "&operation=update",
// }).done(function (resp) {
//     alert(resp);
// });