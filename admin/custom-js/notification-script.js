
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
            }
        });
    });

    $(document).on("click", "#delete-notification", function (e) {

        e.preventDefault();
        let deleteId = $(this).attr('notification-id');

        if (confirm("Are you sure you want to delete this data?")) {
            $.ajax({
                method: "POST",
                url: "./delete/delete-notification.php",
                data: `id=${deleteId}`,
                success: function (data) {
                    alert('Deleted Successfully');
                    fetchNotificationTable();
                }
            });
        }

    });

    const fetchNotificationTable = () => {
        $.ajax({
            method: "POST",
            url: "./tables/notification_tables.php",
            data: {},
            success: function (data) {
                $("#notificationTable table tbody").html(data);
                $('#studentNotificationTable').DataTable();
            }
        });
    }

    fetchNotificationTable();


});