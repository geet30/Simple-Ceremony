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
        availability = response.slotsInfo.ceremonies_count +'/' + response.slotsInfo.total_slots;
        ceremonies_booked_count = response.slotsInfo.ceremonies_count;
        console.log('eachtime',ceremonies_booked_count);
        item = {}
        item['htmlcustom'] = `<div class="availability-slot"><div class="fc-event-availability">${availability} availability</div>`;
        $.each(response.available_slots,function(field_name,element){
            var price =  ' $ '+(parsePrice(element.admin_fee) + parsePrice(element.your_fee) + parsePrice(element.location_fee));
            
            item ["start"] = booking_date+'T'+element.start_time;
            item ["end"] = booking_date+'T'+element.end_time;
            item ["classNames"] =['calendar-availability-class'];
            item ["price"] =price;
            item ["availability"] =availability+' availability';
            item['htmlcustom'] += `<div class="availability-details"><div class="fc-event-availability-slots">${element.start_time} - ${element.end_time}</div>
            <div class="fc-event-availability_location">${element.location.name}</div>
            <div class="fc-event-availability_slot_price">${price}</div></div>
           `;
        });
        item['htmlcustom'] += `</div><div class="booking-slot"><div class="fc-event-ceremonies_count mt-4 mb-2">${ceremonies_booked_count} ceremonies</div>`;
        $.each(response.data,function(field_name,element2){
            var time_format= moment(element2.booking_date+' '+element2.booking_start_time).format('HH:mm');
            item ["ceremonies"] =ceremonies_booked_count+ ' cermonies';
            item ["ceremonies_count"] =ceremonies_booked_count;
            item ["couple"] =element2.first_couple_name+' & '+element2.second_couple_name;
            item ["start_time"] =element2.booking_start_time;
            item ["location"] =element2.location_name;
           
            if(ceremonies_booked_count == 0){
                item['htmlcustom'] += `<div class="fc-event-no_cermeony">You don't have ceremony</div>`;
            }else{
                item['htmlcustom'] += `
                <div class="booking-details"><div class="fc-event-booking_couple">${element2.first_couple_name+' & '+element2.second_couple_name}</div>
                <div class="fc-event-booking_start">${time_format}</div>
                <div class="fc-event-booking_location mb-2">${element2.location_name}</div></div>
                `;
            }

            
        });
        item['htmlcustom'] += '</div></div>';
        setbookingData.push(item);
        
           
    })

    
    var calendarEl = document.getElementById(targetId);
    var calendar = new FullCalendar.Calendar(calendarEl, {
        initialView: 'dayGridMonth',
        timeZone: 'UTC',
        events:setbookingData,
       
       
        eventDidMount: function(info) {
            console.log(info.view.type,'type');
            // if(info.view.type == 'dayGridMonth' || info.view.type == 'timeGridWeek' || info.view.type == 'timeGridDay' ){
            var element = $(info.el);
            element.parent().parent().parent().parent().removeClass('ceremonies_empty');
            element.parent().parent().parent().parent().removeClass('ceremonies_exist');
            if(info.event.extendedProps.ceremonies_count == 0){
                element.parent().parent().parent().parent().addClass('ceremonies_empty');
                
            }else{
                element.parent().parent().parent().parent().addClass('ceremonies_exist');               
            }           
            
            element.html('');
            element.append(info.event.extendedProps.htmlcustom); 
            if(info.view.type == 'timeGridWeek'){ 
                element.find('.availability-slot').addClass('d-none');
            }        
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