var allotmentData = null;

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
    });
}

function checkAlreadyAlloted(vehicleNumber) {
    $.ajax({
        url: "ajax_pages/check_slot_alloted.php",
        method: "post",
        data: {
            vnum: vehicleNumber
        },
        success: function (data) {

            responseData = JSON.parse(data);
            console.log(responseData);
            allotmentData = responseData.data;
            if (responseData.succes == true) {
                $("#allotSlot").hide();
                $("#vtype").val(responseData.data.vtype_id);
                $("#vtype").attr("disabled", true);
                $("#owner").val(responseData.data.owner);
                $("#owner").attr("disabled", true);
                $("#releaseSlot").show();
            } else {
                $("#releaseSlot").hide();
                $("#vtype").attr("disabled", false);
                $("#owner").val('');
                $("#owner").attr("disabled", false);
                $("#allotSlot").show();
            }
        },
        error: function (err) {
            alert("Something went wrong");
            console.log(err);
        }
    });
}

function releaseSlots() {
    if (allotmentData != null) {
        $.ajax({
            url: "ajax_pages/release_slot.php",
            method: "post",
            data: {
                vnum: allotmentData.vnum,
                id: allotmentData.id,
                slot_id: allotmentData.slot_id
            },
            success: function (data) {

                responseData = JSON.parse(data);
                console.log(responseData);
                if (responseData.succes == true) {
                    $(".modal-title").html("Slot Released");
                    $(".modal-body").html("<h3>Slot : " + allotmentData.slot_id + " released...</h3><h4>Total rent : "+responseData.data.total_rent+" Rs</h4>");
                    $("#myModal").modal();
                } else {
                    alert(responseData.error);
                    $(".modal-title").html("Slot Not released");
                    $(".modal-body").html("<h4>Slot : " + allotmentData.slot_id + " released...</h4><br/><p>"+data.error+"</p>");
                    $("#myModal").modal();
                }
            },
            error: function (err) {
                alert("Something went wrong");
                console.log(err);
            }
        });
    }
}
