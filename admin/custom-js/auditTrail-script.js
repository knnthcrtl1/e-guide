$(document).ready(function () {

    const fetchNotificationTable = () => {
        $.ajax({
            method: "POST",
            url: "./tables/audit_tables.php",
            data: {},
            success: function (data) {
                $("#notificationTable table tbody").html(data);
                $('#studentNotificationTable').DataTable();
            }
        });
    }

    fetchNotificationTable();

});