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
    console.log('=============BOOKING DATA=======================');
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
   
   
    $.each(bookingData,function(booking_date,response){
        var price_info = availability =ceremonies_count=0;
        // console.log(response.slotsInfo.availability_slots_count,'safdsf');
        $.each(response.data,function(field_name,element){
            if(element.price_info){
                price_info = JSON.parse(element.price_info);
            }        
            
            availability = response.slotsInfo.availability_slots_count +'/' + response.slotsInfo.total_slots;
        
            ceremonies_count = response.slotsInfo.ceremonies_count;
           
            console.log(element.ceremonies_count,'ceremonies_count');
            var price =  ' $ '+(parsePrice(price_info.admin_fee) + parsePrice(price_info.your_fee) + parsePrice(price_info.location_fee));
            
            item = {}
            item ["id"] = element.id;
            item ["title"] = element.location_name;
    
            item ["start"] = booking_date+'T'+element.booking_start_time;
            item ["end"] = booking_date+'T'+element.booking_end_time;
            item ["classNames"] =['calendar-availability-class'];
            item ["price"] =price;
            item ["availability"] =availability+' availability';
            item ["ceremonies"] =ceremonies_count+' ceremonies';
            item ["couple"] =element.first_couple_name+' & '+element.second_couple_name;
            item ["start_time"] =element.booking_start_time;
            item ["location"] =element.location_name; 
            setbookingData.push(item);
        });
        
           
    })

    
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
                
                element.find('.fc-daygrid-event-dot').before(`<div class="fc-event-availability mb-2">${info.event.extendedProps.availability}</div>`);
                element.find('.fc-event-time').after(`<div class="fc-event-price mb-2">${info.event.extendedProps.price}</div>`);
                // element.find('.fc-event-time').after(`<div class="fc-event-location mb-2">${info.event.extendedProps.location}</div>`);
                element.find('.fc-event-price').after(`<div class="fc-event-ceremonies mb-2">${info.event.extendedProps.ceremonies}</div>`);
                element.find('.fc-event-ceremonies').after(`<div class="fc-event-couple mb-2">${info.event.extendedProps.couple}</div>`);
                element.find('.fc-event-couple').after(`<div class="fc-event-starttime mb-2">${info.event.extendedProps.start_time}</div>`);
                
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