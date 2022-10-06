function addressFormatter(element) {
    let address = element.booking_start_time+ ' - '+element.booking_end_time
    let location = element.location?.name || '';
    // return address +'\n '+ location;
    return '\n '+location;
}
function initCalander(targetId,bookingData) {
    if(!targetId) return false;
    var bookingData = bookingData;
    // console.log('====================================');
    // console.log(bookingData);
    // console.log('====================================');
    var sortBookingData = [];
    
    bookingData.forEach(element => {
        // console.log('====================================');
        // console.log(new Date(element.booking_date+'T'+element.booking_end_time));
        // console.log('====================================');
        sortBookingData.push({
            id: element.id,
            title: addressFormatter(element),
            start: new Date(element.booking_date+'T'+element.booking_start_time),
            end: new Date(element.booking_date+'T'+element.booking_end_time)
        });
        // start: element.booking_date+' '+element.booking_end_time
    });
    // console.log('====================================');
    // console.log('sortBookingData -', sortBookingData);
    // console.log('====================================');
    
    var calendarEl = document.getElementById(targetId);
    var calendar = new FullCalendar.Calendar(calendarEl, {
        initialView: 'dayGridMonth',
        timeZone: 'UTC',
        events:sortBookingData,
        // contentHeight:"auto",
        headerToolbar: { left: 'dayGridMonth,timeGridWeek,timeGridDay',center:'title',right:'gap,prev,gap,next'},
        views:{
            dayGridMonth:{
                buttonText: 'Month'
            },
            timeGridWeek:{
                buttonText: 'Week'
            },
            timeGridDay:{
                buttonText: 'Day'
            },
            monthGrid:{
                buttonText: 'asdgahjs'
            }
        },
    });
    calendar.render();
    
}