$(document).on('click', '#btnDelete' , function (e){
    e.preventDefault();
    var data_id = $(this).val();
    console.log(data_id);

    if(confirm("Are you sure you want to delete this item? like for real???"))
    {
        $.ajax({
            type: "POST",
            url: "action.php",
            data: {
                'delete_data': true,
                'data_id': data_id

            },
            success: function (response){
            var res = jQuery.parseJSON(response);
            if (res.status == 500 )
            {
                alert(res.message);
            } 
            else {
                alert(res.message);
                $('#information-table').load(location.href + "#information-table")

            }
            }
        });
    }
});