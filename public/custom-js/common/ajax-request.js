var cl = console.log;

function getMarriageBookingsRequest(date) {
    $.ajax({
        type: "GET", //THIS NEEDS TO BE GET
        url: "/calendar-overview",
        data: { date: date },
        dataType: "json",
        success: function (data) {
            $("span#overview-booking-count").text(data.length);
            if (data.length > 0) {
                let bookingListItems = "";
                data.forEach(function (item, index) {
                    let assignCelebrantElement = `<a href="" data-bs-toggle="offcanvas"
                                                    data-bs-target="#marriage-celebrant"
                                                    class="text-decoration-underline add-link assign_celebrant"
                                                    data-id="${item.booking.id}"> Assign celebrant
                                                </a>`;
                    //let assignCelebrantElement = "N/A";
                    let celebrantNameElement = `<img src="/images/calendar/user-gray.svg" alt="user">
                                                <p class="gray-gray-900 body-2 ms-2 mb-0">
                                                    ${
                                                        item.booking.celebrant
                                                            ? item.booking
                                                                  .celebrant
                                                                  .first_name
                                                            : ""
                                                    }
                                                </p>`;
                    let celebrantElement =
                        item.booking.celebrant != null
                            ? celebrantNameElement
                            : assignCelebrantElement;
                    bookingListItems += `<div class="marriage-calendar-overview">
                                            <div class="row">
                                                <div class="col-12 col-md-2 col-lg-1 mb-2">
                                                    <div class="numberCircle">${
                                                        index + 1
                                                    }</div>
                                                </div>
                                                <div class="col-12 col-md-10 col-lg-11">
                                                    <h4 class="h4 neutral-100">
                                                        ${
                                                            item.booking
                                                                .first_couple_name
                                                        }
                                                        &amp; ${
                                                            item.booking
                                                                .second_couple_name
                                                        }
                                                    </h4>
                                                    <div class="d-flex mt-3 flex-md-row flex-column">
                                                        <div class="d-flex align-items-center me-0 me-md-4 mb-3 mb-md-0">
                                                            ${celebrantElement}
                                                            <span class="d-inline-block ms-2" tabindex="0"
                                                                data-bs-toggle="popover" data-bs-trigger="hover focus"
                                                                data-bs-placement="right" data-bs-content="Approved">
                                                                <img src="/images/calendar/timeline-success.svg"
                                                                    alt="Information Icon" style="width:13px;">
                                                            </span>
                                                        </div>
                                                        <div class="d-flex align-items-center me-0 me-md-4 mb-3 mb-md-0">
                                                            <img src="/images/calendar/time.svg" alt="mobile">
                                                            <p class="gray-gray-900 body-2 ms-2 mb-0">
                                                                ${
                                                                    item.booking
                                                                        .booking_start_time
                                                                } to ${
                        item.booking.booking_end_time
                    }
                                                            </p>
                                                        </div>
                                                        <div class="d-flex align-items-center">
                                                            <img src="/images/calendar/location.svg" alt="mobile">
                                                            <p class="gray-gray-900 body-2 ms-2 mb-0">
                                                                ${
                                                                    item.booking
                                                                        .location
                                                                        .name
                                                                }</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>`;
                });
                $("#overview-booking-list").html(bookingListItems);
            } else {
                $("#overview-booking-list").html("");
            }
        },
        error: function (error) {
            cl(error);
        },
    });
}
