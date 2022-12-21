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
    
    
    var setbookingData = [];
    
    $.each(bookingData,function(booking_date,response){
        ceremonies_booked_count = 0;
        var price =price_info = availability =0;
        availability = response.slotsInfo.availability_slots_count +'/' + response.slotsInfo.total_slots;
        ceremonies_booked_count = response.slotsInfo.ceremonies_count;
        console.log('eachtime',ceremonies_booked_count);
        item = {}
        item['htmlcustom'] = `<ul><li class="fc-event-availability">${availability} availability</li>`;
        $.each(response.available_slots,function(field_name,element){
            var price =  ' $ '+(parsePrice(element.admin_fee) + parsePrice(element.your_fee) + parsePrice(element.location_fee));
            
            item ["start"] = booking_date+'T'+element.start_time;
            item ["end"] = booking_date+'T'+element.end_time;
            item ["classNames"] =['calendar-availability-class'];
            item ["price"] =price;
            item ["availability"] =availability+' availability';
            item['htmlcustom'] += `<li class="fc-event-availability-slots">${element.start_time} - ${element.end_time}</li>
            <li class="fc-event-availability_location">${element.location.name}</li>
            <li class="fc-event-availability_slot_price">${price}</li>
           `;
        });
        item['htmlcustom'] += `<li class="fc-event-ceremonies_count mt-4 mb-2">${ceremonies_booked_count} ceremonies</li>`;
        $.each(response.data,function(field_name,element2){
            var time_format= moment(element2.booking_date+' '+element2.booking_start_time).format('HH:mm');
            console.log('time_format',time_format);
            item ["ceremonies"] =ceremonies_booked_count+ ' cermonies';
            item ["couple"] =element2.first_couple_name+' & '+element2.second_couple_name;
            item ["start_time"] =element2.booking_start_time;
            item ["location"] =element2.location_name;
           
            if(ceremonies_booked_count == 0){
                item['htmlcustom'] += `<li class="fc-event-no_cermeony">You don't have ceremony</li>`;
            }else{
                item['htmlcustom'] += `
                <li class="fc-event-booking_couple">${element2.first_couple_name+' & '+element2.second_couple_name}</li>
                <li class="fc-event-booking_start">${time_format}</li>
                <li class="fc-event-booking_location mb-2">${element2.location_name}</li>
                `;
            }

            
        });
        item['htmlcustom'] += '</ul>';
        setbookingData.push(item);
        
           
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
            element.html('');
            // $('.calendar-availability-class').html('');

            element.append(info.event.extendedProps.htmlcustom);
            
            
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