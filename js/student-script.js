$(document).ready(function () {

    $(".phoneLimit").keypress(function (e) {
        var length = this.value.length;
        if (length >= 11) {
            e.preventDefault();
            return false;
        }
    });



    function validateEmail(email) {
        const re = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
        return re.test(String(email).toLowerCase());
    }

    function _validateMobileNumber(num) {
        let re = /^(09|\+639|9)\d{9}$/;
        return re.test(String(num).toLowerCase());
    };

    function validateName(text) {
        let re = /^[a-zA-Z]+$/;
        return re.test(String(text).toLowerCase());
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

    $(document).on("submit", "#edit-student-form", function (e) {
        e.preventDefault();

        var studentFormData = $("#edit-student-form").serialize();

        var studentRequired1 = $('#studentRequired1').val();
        var studentRequired2 = $('#studentRequired2').val();
        var studentRequiredPhone = $('#studentRequiredPhone').val();

        if (!validateName(studentRequired1)) {
            alert('Please input text only for firstname');
            return false;
        }

        if (!validateName(studentRequired2)) {
            alert('Please input text only for lastname');
            return false;
        }

        if (!_validateMobileNumber(studentRequiredPhone)) {
            alert('Please provide correct mobile number');
            return false;
        }

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

    $(document).on("submit", "#edit-student-family-form", function (e) {
        e.preventDefault();

        var editStudentFamilyForm = $("#edit-student-family-form").serialize();

        var relationShipNameRequired = $('#relationShipNameRequired').val();
        var fatherNameRequired = $('#fatherNameRequired').val();
        var motherNameRequired = $('#motherNameRequired').val();
        var guardianNameRequired = $('#guardianNameRequired').val();

        // var guardianPhone = $("#guardianPhone").val();
        // var guardianLandline = ("#guardianLandline").val();
        // var motherContactNumber = ("#motherContactNumber").val();
        // var motherWorkContact = ("#motherWorkContact").val();

        if (!validateName(relationShipNameRequired)) {
            alert('Please input text only for guardian relationship with');
            return false;
        }

        if (!validateName(fatherNameRequired)) {
            alert('Please input text only for father name');
            return false;
        }

        if (!validateName(motherNameRequired)) {
            alert('Please input text only for mother name');
            return false;
        }

        if (!validateName(guardianNameRequired)) {
            alert('Please input text only for guardian name');
            return false;
        }


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
