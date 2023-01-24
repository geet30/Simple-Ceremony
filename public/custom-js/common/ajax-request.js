var cl = console.log;

function getMarriageBookingsRequest(date) {
    $.ajax({
        type: "GET", //THIS NEEDS TO BE GET
        url: "/calendar-overview",
        data: { date: date },
        success: function (response) {
            $("#overview-booking-list").html(response);
           
        },
    });
}
