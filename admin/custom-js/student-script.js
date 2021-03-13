$(document).ready(function() {
    const fetchStudentTable = () => {
        $.ajax({    
            method: "POST",
            url: "./tables/student_tables.php",
            data:{},
            success:function(data){
                $("#studentTable table tbody").html(data);
                $('#studentDataTable').DataTable();
            }
        });
    }

    fetchStudentTable();
  
    $(document).on("click","#delete-student", function(e) {
        
        e.preventDefault();
        let deleteId = $(this).attr('student-id');

        if (confirm("Are you sure you want to delete this data?")) {
            $.ajax({    
                method: "POST",
                url: "./delete/delete-student.php",
                data: `id=${deleteId}`,
                success:function(data){
                    // if(data == 1){
                    //     alert('Client has existing project, delete the data first on the connected project');
                    //     return false;
                    // }
                    // alert(data);
                    alert('Deleted Successfully');
                    fetchStudentTable();
                }
            });
        }

    });

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
                alert("Added Successfully!");
                fetchStudentTable();
            }
        });

    });

});