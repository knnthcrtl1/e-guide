
$(document).ready(function () {

    $(document).on("click", "#submit-student-form", function (e) {
        e.preventDefault();

        var studentFormData = $("#add-student-form").serialize();

        // // if (!validateEmail(studentRequired3)){
        // //     alert('Please provide correct email address');

        // //     return false;
        // // }

        jQuery.ajax({
            method: "POST",
            url: "./functions/function-student.php",
            data: studentFormData + "&ajax=true",
            success: function (data) {
                // if(data == 1){
                //     alert('email already exists, please use other email');
                //     return false;
                // }
                alert("Added Successfully!");
                // fetchStudentTable();
            }
        });
    });
});