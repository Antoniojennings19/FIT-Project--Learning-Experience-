<script>

    //Ajax Function (Update Information)
    function ajaxCard(studFirst, studLast, studGrade, studEmail, studPhone, studPass)
    {
        //Ajax Function
        $.ajax({
            type: "POST",
            url: "./Controller/ajax-add-student.php",
            data: "first="+ studFirst + "&last=" + studLast + "&grade="+ studGrade + "&email=" + studEmail + "&phone=" + studPhone + "&pwd=" + studPass,
            success: function(data){
                $("#response-msg").html(data);
            },
            error: function(data){
                alert('An error occured while trying to add this person, please try again!');
            },
        });
    }


</script>