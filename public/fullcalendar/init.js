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
    
    // bookingData.forEach(element => {
    //     let availableObj = {
    //         id: element.id,
    //         // title: element.location.name + ' $ '+(parsePrice(element.admin_fee) + parsePrice(element.your_fee) + parsePrice(element.location_fee)),
    //         title: element.location_name,
            
    //         // start: element.dates.start_date,
    //         // end: element.dates.end_date,
    //         start :element.booking_date,
    //         end :element.booking_date,
    //         daysOfWeek:[findWeekDay(element.dayText)],
    //         classNames:['calendar-availability-ns'],
    //         startTime:element.booking_start_time,
    //         endTime: element.booking_end_time,
    //     };
    //     sortBookingData.push({
    //         id: element.id,
    //         // title: element.location.name + ' $ '+(parsePrice(element.admin_fee) + parsePrice(element.your_fee) + parsePrice(element.location_fee)),
    //         title: element.location_name,
    //         start :element.booking_date,
    //         end :element.booking_date,
    //         daysOfWeek:[findWeekDay(element.dayText)],
    //         // allDay:true,
    //         classNames:['calendar-slots-booked-ns'],
    //         // displayEventTime:false
    //         startTime:element.booking_start_time,
    //         endTime: element.booking_end_time,
    //     });
    //     sortBookingData.push(availableObj);
    // });
    // sortBookingData.forEach(av => {

    // })
    setbookingData = [];
   
    var cermonies_count = 0;
    $.each(bookingData,function(field_name,element){
        console.log(element,'element');
        var price_info = JSON.parse(element.price_info);
        var price =  ' $ '+(parsePrice(price_info.admin_fee) + parsePrice(price_info.your_fee) + parsePrice(price_info.location_fee));
        
        item = {}
        item ["id"] = element.id;
        item ["title"] = element.location_name;

        item ["start"] = element.booking_date+'T'+element.booking_start_time;
        item ["end"] = element.booking_date+'T'+element.booking_end_time;
        item ["classNames"] =['calendar-availability-class'];
        item ["price"] =price;
        item ["ceremonies"] =cermonies_count;
        // item ["extendedProps"]=  [
        //     "department" = 'BioChemistry'
        // ];
            
          
        // item ["startTime"] = element.booking_start_time;
        // item ["endTime"] = element.booking_end_time;
        // item ["daysOfWeek"] = [findWeekDay(element.dayText)];
        setbookingData.push(item);
        cermonies_count++;
           
    })

    console.log('====================================');
    console.log('sortBookingData -', sortBookingData);
    console.log('====================================');
    
    var calendarEl = document.getElementById(targetId);
    var calendar = new FullCalendar.Calendar(calendarEl, {
        initialView: 'dayGridMonth',
        timeZone: 'UTC',
        events:setbookingData,
       
        eventDidMount: function(info) {

            // console.log(info.view.type,'type');
            // if(info.view.type == 'dayGridMonth' || info.view.type == 'timeGridWeek' || info.view.type == 'timeGridDay' ){
                var element = $(info.el);
                console.log(info.event.extendedProps.price);
                element.find('.fc-event-title').after(`<div class="fc-event-price">${info.event.extendedProps.price}</div>`);
                element.find('.fc-event-price').after(`<div class="fc-event-ceremonies">${info.event.extendedProps.ceremonies}</div>`);
            //}
            
        },

        
       
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