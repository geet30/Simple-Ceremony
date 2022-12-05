function findWeekDay(search)
{
    let days = [
        "SUN","MON","TUE","WED","THU","FRI","SAT"
    ];
    let result = days.indexOf(search);
    return Math.abs(result);
}
function parsePrice(p)
{
    return parseFloat(p);
}
function initCalander(targetId,bookingData) {
    if(!targetId) return false;
    var bookingData = bookingData;
    console.log('====================================');
    console.log(bookingData);
    console.log('====================================');
    var availibitySlots = [];
    var sortBookingData = [];
    
    bookingData.forEach(element => {
        // console.log('====================================');
        // console.log(new Date(element.booking_date+'T'+element.booking_end_time));
        // console.log('====================================');
        let availableObj = {
            id: element.id,
            title: 'available',
            start: element.dates.start_date,
            end: element.dates.end_date,
            daysOfWeek:[findWeekDay(element.dayText)],
            allDay:true,
            classNames:['calendar-availability-ns']
            // displayEventTime:false
            // startTime:element.start_time,
            // endTime: element.end_time,
        };
        sortBookingData.push({
            id: element.id,
            title: element.location.name + ' $ '+(parsePrice(element.admin_fee) + parsePrice(element.your_fee) + parsePrice(element.location_fee)),
            start: element.dates.start_date,
            end: element.dates.end_date,
            daysOfWeek:[findWeekDay(element.dayText)],
            // allDay:true,
            classNames:['calendar-slots-booked-ns'],
            // displayEventTime:false
            startTime:element.start_time,
            endTime: element.end_time,
        });
        sortBookingData.push(availableObj);
        // start: element.booking_date+' '+element.booking_end_time
    });
    sortBookingData.forEach(av => {

    })
    console.log('====================================');
    console.log('sortBookingData -', sortBookingData);
    console.log('====================================');
    
    var calendarEl = document.getElementById(targetId);
    var calendar = new FullCalendar.Calendar(calendarEl, {
        initialView: 'dayGridMonth',
        timeZone: 'UTC',
        events:sortBookingData,
        // contentHeight:"auto",
        headerToolbar: { left: 'dayGridMonth,timeGridWeek,timeGridDay',center:'title',right:'gap,prev,gap,next'},
        views:{
            dayGridMonth:{
                buttonText: 'Month',
                // titleFormat: { year: 'numeric', start: '2-digit', day: '2-digit' }
            },
            timeGridWeek:{
                buttonText: 'Week'
            },
            timeGridDay:{
                buttonText: 'Day'
            },
            monthGrid:{
                buttonText: 'asdgahjs',
            }
        },
        eventTimeFormat:{
            hour: '2-digit',
            minute: '2-digit',
            meridiem: false
        },
        displayEventEnd:true,
    });
    calendar.render();

    // $('.fc-dayGridMonth-view ')
    
}