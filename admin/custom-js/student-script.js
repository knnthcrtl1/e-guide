$(document).ready(function() {
    // const fetchclientTable = () => {
    //     $.ajax({    
    //         method: "POST",
    //         url: "./tables/partial_client_tables.php",
    //         data:{},
    //         success:function(data){
    //             $("#clientTable table tbody").html(data);
    //             $('#clientDataTable').DataTable();
    //         }
    //     });
    // }
  

    $(document).on("click","#submit-student-form", function(e) {
        e.preventDefault();

        var studentFormData = $("#add-student-form").serialize();

        // // if (!validateEmail(clientRequired3)){
        // //     alert('Please provide correct email address');

        // //     return false;
        // // }

        console.log(studentFormData);


        jQuery.ajax({
            method: "POST",
            url: "./functions/function-student.php",
            data: studentFormData + "&ajax=true",
            success:function(data){
                // if(data == 1){
                //     alert('email already exists, please use other email');
                //     return false;
                // }
                alert(data);
                // alert("Added Successfully!");
            }
        });

    });

});