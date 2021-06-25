var table = $('#table').DataTable({
    "pagingType": "full_numbers",
    "processing": true,
    "serverSide": true,
    "order": [0, 'desc'],
    "ajax": {
        "url": base_url + "/users/list",
        "dataType": "json",
        "type": "POST",
        data: function (data) {
            data._token = token;
        }
    }
});

function deleteData(user_id) {
    if (confirm('Are you sure to delete this record ?')) {
        $.ajax({
            "url": base_url + "/users/" + user_id,
            "type": "delete",
            "data": {
                "_token": token,
            },
            success: function () {
                table.ajax.reload();
            }
        })
    }
}