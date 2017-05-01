function formSubmit(formdata) {
    console.log(formdata['vnum'].value);
    console.log(formdata['vtype'].value);
    $.ajax({
        url: "ajax_pages/allot_slot.php",
        method: "post",
        data: {
            allot: "allot",
            vnum: formdata['vnum'].value,
            owner: formdata['owner'].value,
            vtype: formdata['vtype'].value,
            vtype_id: formdata['vtype_id'].value
        },
        success: function (data) {
            data = JSON.parse(data);
            console.log(data);
            if (data.succes == true) {
                $(".modal-title").html("Slot allotted");
                $(".modal-body").html('<table class="table"><tr><th>Slot id</th><td>' + data.slot_id + '</td></tr><tr><th>Parking name</th><td>' + data.plot_name + '</td></tr></tr><tr><th>Address</th><td>' + data.address + '</td></tr></table>');
                $("#myModal").modal();
            } else {
                 $(".modal-title").html("Slot Not allotted");
                 $(".modal-body").html(data.error);
                  $("#myModal").modal();
            }
        },
        error: function (err) {
            alert("Something went wrong");
            console.log(err);
        }
    })
}
