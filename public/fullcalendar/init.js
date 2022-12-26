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
    // let bookingData = bookingData;
    console.log('=============BOOKING DATA=======================');
    console.log(bookingData);
    console.log('====================================');
   
    
    var setbookingData = [];
    if(bookingData.length !== 0){
       
        $.each(bookingData,function(booking_date,response){
            itemArr = [];
            singleitem =[];
            ceremonies_booked_count = 0;
            var price =price_info = availability =0;
            availability = response.slotsInfo.ceremonies_count +'/' + response.slotsInfo.total_slots;
            ceremonies_booked_count = response.slotsInfo.ceremonies_count;
            
            
            singleitem['htmlcustom'] = `<div class="availability-slot"><div class="fc-event-availability">${availability} availability</div>`;
          
           

            $.each(response.available_slots,function(field_name,element){
                item ={};
                var price =  ' $ '+(parsePrice(element.admin_fee) + parsePrice(element.your_fee) + parsePrice(element.location_fee));
                
                item ["start"] = booking_date+'T'+element.start_time;
                item ["end"] = booking_date+'T'+element.end_time;
                item ["classNames"] =['calendar-availability-class'];
                item['htmlcustom'] += `<div class="availability-details"><div class="fc-event-availability-slots">${element.start_time} - ${element.end_time}</div>
                <div class="fc-event-availability_location">${element.location.name}</div>
                <div class="fc-event-availability_slot_price">${price}</div></div>`;
                itemArr.push(item);
                
            });

            $.each(response.data,function(field_name,element2){
                item ={};
                var time_format= moment(element2.booking_date+' '+element2.booking_start_time).format('HH:mm');
                item['title'] = 'dasd';
                item["start"] = element2.booking_date+'T'+element2.booking_start_time;
                item["end"] = element2.booking_date+'T'+element2.booking_end_time;
            
                if(ceremonies_booked_count == 0){
                    singleitem['htmlcustom'] += `<div class="fc-event-no_cermeony">You don't have ceremony</div>`;
                }else{
                    singleitem['htmlcustom'] += `
                    <div class="booking-details"><div class="fc-event-booking_couple">${element2.first_couple_name+' & '+element2.second_couple_name}</div>
                    <div class="fc-event-booking_start">${time_format}</div>
                    <div class="fc-event-booking_location">${element2.location_name}</div></div>`;
                }
                // console.log(item,'item');
                itemArr.push(item);
               
                
            });
           
            
            singleitem['htmlcustom'] += `</div><div class="booking-slot"><div class="fc-event-ceremonies_count">${ceremonies_booked_count} ceremonies</div>`;
            
            singleitem['htmlcustom'] += '</div></div>';
            itemArr.push(singleitem);
            // $.each( itemArr.push(item);)
            $.each(itemArr,function(field_name,element){
           
                setbookingData.push(element);
            
            });
            // setbookingData.push(itemArr);
            
            
        })
    }
console.log('setbookingData',setbookingData);
    
    var calendarEl = document.getElementById(targetId);
    var calendar = new FullCalendar.Calendar(calendarEl, {
        initialView: 'dayGridMonth',
        timeZone: 'UTC',
        events:setbookingData,
    //    events:[
    //         {
    //         id: 'a',
    //         title: 'my event',
    //         start: '2022-12-30T01:00',
    //         end: '2022-12-30T01:30',
    //       },
    //       {
    //         id: 'b',
    //         title: 'my event2',
    //         start: '2022-12-30T00:00',
    //         end: '2022-12-30T00:30',
    //       }
    //     ],
      
        eventDidMount: function(info) {
            // console.log(info);
            // if(info.view.type == 'dayGridMonth' || info.view.type == 'timeGridWeek' || info.view.type == 'timeGridDay' ){
            var element = $(info.el);
            element.parent().parent().parent().parent().removeClass('ceremonies_empty');
            element.parent().parent().parent().parent().removeClass('ceremonies_exist');
            if(info.event.extendedProps.ceremonies_count == 0){
                element.parent().parent().parent().parent().addClass('ceremonies_empty');
                
            }else{
                element.parent().parent().parent().parent().addClass('ceremonies_exist');               
            }           
            
         
            if(info.view.type == 'dayGridMonth'){ // month
                // element.html('');
                element.append(info.event.extendedProps.htmlcustom); 
                if($('.fc-scrollgrid-liquid').length){
                    $('.fc-scrollgrid-liquid').addClass('monthlyClass');
                } 
            }
            if(info.view.type == 'timeGridWeek'){ //week
                element.find('.availability-slot').addClass('d-none');
                if($('.fc-scrollgrid-liquid').length){
                    $('.fc-scrollgrid-liquid').addClass('weeklyClass');
                }
                element.find('.fc-event-ceremonies_count').addClass('d-none');
            } 
            if(info.view.type == 'timeGridDay'){//day
                if($('.fc-scrollgrid-liquid').length){
                    $('.fc-scrollgrid-liquid').addClass('dayClass');
                }  
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