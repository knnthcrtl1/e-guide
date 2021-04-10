$(document).ready(function () {

    $(document).on("click", "#submit-student-register-form", function (e) {
        e.preventDefault();

        var studentFormData = $("#add-student-register-form").serialize();
        var studentRequired3 = $("#studentRequired3").val();

        if (!validateEmail(studentRequired3)){
            alert('Please provide correct email address');
            return false;
        }

        jQuery.ajax({
            method: "POST",
            url: "./functions/student-function.php",
            data: studentFormData + "&ajax=true",
            success: function (data) {
                if(data == 1){
                    alert('email already exists, please use other email');
                    return false;
                }
                alert(data);
                document.location.href = 'login.php';
                // alert("Register Successfully");
                // fetchStudentTable();
            }
        });

    });

    function validateEmail (email) {
        const re = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
        return re.test(String(email).toLowerCase());
    }

});
