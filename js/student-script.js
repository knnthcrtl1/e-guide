$(document).ready(function () {

    $(document).on("click", "#submit-student-register-form", function (e) {
        e.preventDefault();

        var studentFormData = $("#add-student-register-form").serialize();
        var studentRequired3 = $("#studentRequired3").val();
        var studentRequired7 = $('#studentRequired7').val();

        if (!validateEmail(studentRequired3)) {
            alert('Please provide correct email address');
            return false;
        }

        if (!validateEmail(studentRequired7)) {
            alert('Please provide student type');
            return false;
        }

        jQuery.ajax({
            method: "POST",
            url: "./functions/student-function.php",
            data: studentFormData + "&ajax=true",
            success: function (data) {
                if (data == 1) {
                    alert('user already exists, please use other email');
                    return false;
                }
                alert("Register Successfully");
                document.location.href = 'login.php';
            }
        });

    });

    function validateEmail(email) {
        const re = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
        return re.test(String(email).toLowerCase());
    }

    // study habit 1

    const studyRadioOthers = (inputNameRadio, targetRadioButton, mainRadioButton) => {
        let exampleRadName = inputNameRadio;
        let exampleRadio1 = $(exampleRadName);
        let radioFirstArr = [...exampleRadio1];
        let othersRadioButton = targetRadioButton;

        radioFirstArr.map((rad, i) => {
            $(rad).on('change', () => {
                let radioFirstValue = $(`${exampleRadName}:checked`).val();
                if (radioFirstValue !== 6) {
                    let otherRadio = $(`${othersRadioButton}`);
                    otherRadio.parent().removeClass('is-focused');
                    otherRadio.removeClass('is-filled');
                    $(`${othersRadioButton} > input`).prop('disabled', true);
                    $(`${othersRadioButton} > input`).val('');
                }
            });
        })

        let studentHabitOthers = $(mainRadioButton);

        let arrOthers = [...studentHabitOthers];

        arrOthers.map((val, i) => {
            $(val).on('change', () => {

                let targetTextInput = $(val).attr('targetId');
                $(`#${targetTextInput} > input`).attr('disabled', false);

            });
        });

    }

    studyRadioOthers('input[name="studyClass"]', '#othersRadioButton', '.othersRadioButton');
    studyRadioOthers('input[name="studentAboutLesson"]', '#othersRadioButton2', '.othersRadioButton2');
    studyRadioOthers('input[name="studentDevice"]', '#othersRadioButton3', '.othersRadioButton3');
    studyRadioOthers('input[name="studentIllness"]', '#othersRadioButton4', '.othersRadioButton4');
    studyRadioOthers('input[name="healthCondition"]', '#othersRadioButton5', '.othersRadioButton5');

    // const fetchStudentTable = () => {
    //     $.ajax({
    //         method: "POST",
    //         url: "./tables/student_tables.php",
    //         data: {},
    //         success: function (data) {
    //             $("#studentTable table tbody").html(data);
    //             $('#studentDataTable').DataTable();
    //         }
    //     });
    // }

    // fetchStudentTable();

    // $(document).on("click", "#delete-student", function (e) {

    //     e.preventDefault();
    //     let deleteId = $(this).attr('student-id');

    //     if (confirm("Are you sure you want to delete this data?")) {
    //         $.ajax({
    //             method: "POST",
    //             url: "./delete/delete-student.php",
    //             data: `id=${deleteId}`,
    //             success: function (data) {
    //                 // if(data == 1){
    //                 //     alert('student has existing project, delete the data first on the connected project');
    //                 //     return false;
    //                 // }
    //                 // alert(data);
    //                 alert('Deleted Successfully');
    //                 fetchStudentTable();
    //             }
    //         });
    //     }

    // });

    $(document).on("click", "#submit-student-form", function (e) {
        e.preventDefault();

        var studentFormData = $("#add-student-form").serialize();

        // // if (!validateEmail(studentRequired3)){
        // //     alert('Please provide correct email address');

        // //     return false;
        // // }

        jQuery.ajax({
            method: "POST",
            url: "./functions/student-function.php",
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

    $(document).on("click", "#edit-student-form", function (e) {
        e.preventDefault();

        var studentFormData = $("#edit-student-form").serialize();

        jQuery.ajax({
            method: "POST",
            url: "./functions/student-function.php",
            data: studentFormData + "&ajax=true",
            success: function (data) {
                // if(data == 1){
                //     alert('email already exists, please use other email');
                //     return false;
                // }
                alert("Edited Successfully!");
                location.reload();
            }
        });

    });

    $(document).on("click", "#submit-edit-student-family-form", function (e) {
        e.preventDefault();

        var editStudentFamilyForm = $("#edit-student-family-form").serialize();

        // console.log(editStudentFamilyForm);

        jQuery.ajax({
            method: "POST",
            url: "./functions/student-function.php",
            data: editStudentFamilyForm + "&ajax=true",
            success: function (data) {
                alert("Edited Successfully!");
            }
        });

    });

    $(document).on("click", "#submit-edit-student-habits-form", function (e) {
        e.preventDefault();

        var editStudentFamilyForm = $("#edit-student-habits-form").serialize();

        jQuery.ajax({
            method: "POST",
            url: "./functions/student-function.php",
            data: editStudentFamilyForm + "&ajax=true",
            success: function (data) {
                alert("Edited Successfully!");
                location.reload();
            }
        });

    });

});
