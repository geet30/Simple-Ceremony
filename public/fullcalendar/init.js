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
window.showDataModal = function(booking_date,type) { 
    $(".calendarData").html('');
    var url = baseurl + "celebrant-calendar-data/" + booking_date+'/'+type;
    $.ajax({
        type: "GET", 
        url: url,
        success: function (response) {
            $(".calendarData").html(response);
        }
    });
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
            itemArr =[];
            ceremonies_booked_count = 0;
            var price =price_info = availability =0;
            availability = response.slotsInfo.ceremonies_count +'/' + response.slotsInfo.total_slots;
            availability_weekly = response.slotsInfo.total_slots - response.slotsInfo.ceremonies_count+' Availability';
            availability_count = response.slotsInfo.total_slots - response.slotsInfo.ceremonies_count;
            ceremonies_booked_count = response.slotsInfo.ceremonies_count;
               

            $.each(response.available_slots,function(keyAvail,element){
                item ={};
                var price =  ' $ '+(parsePrice(element.admin_fee) + parsePrice(element.your_fee) + parsePrice(element.location_fee));
                
                item ["start"] = booking_date+'T'+element.start_time;
                item ["end"] = booking_date+'T'+element.end_time;
                item['weeklyHtml'] ='';
                if(availability_count >0){
                    item['weeklyHtml'] = `<a role="button" class="dropdown-item" data-bs-toggle="modal" onclick="showDataModal('${booking_date}','availability')"
                    data-bs-target="#show_calendar_data_modal">${availability_weekly} </a>`;
                }
                
                var firstHtml ='';
                
                if(keyAvail==0){
                    firstHtml = `<div class="availability-slot"><div class="fc-event-availability">${availability} availability</div>`;
                }
                (item['htmlcustom']==undefined) ? item['htmlcustom'] ='' :item['htmlcustom'];

                item['htmlcustom'] =`${firstHtml}<div class="availability-details"><div class="fc-event-availability-slots">${element.start_time} - ${element.end_time}</div>
                <div class="fc-event-availability_location">${element.location.name}</div>
                <div class="fc-event-availability_slot_price">${price}</div></div>`;
                itemArr.push(item);
                
            });
            var slotIndex = (itemArr.length) ? itemArr.length:0;
            
            $.each(response.data,function(keyData,element2){
                item ={};
                
                var time_start_format= moment(element2.booking_date+' '+element2.booking_start_time).format('HH:mm');
                var time_end_format= moment(element2.booking_date+' '+element2.booking_end_time).format('HH:mm');
                
                item["start"] = element2.booking_date+'T'+element2.booking_start_time;
                item["end"] = element2.booking_date+'T'+element2.booking_end_time;
               
                // item["booking_id"] = element2.id;
                // item["booking_id"] = element2.booking_date;
                // item['ceremonies_booked_count'] =ceremonies_booked_count;
              
                if(ceremonies_booked_count > 0){
                    item['weeklyHtml'] = `<a role="button" data-bs-toggle="modal" onclick="showDataModal('${element2.booking_date}','booking')"
                    data-bs-target="#show_calendar_data_modal">${ceremonies_booked_count} Booking</a>`;
                }

                

                (item['htmlcustom']==undefined) ? item['htmlcustom'] ='' :item['htmlcustom'];
                var midHtml ='';var lastHtml='';
                if(keyData==slotIndex){
                    midHtml = `</div><div class="booking-slot"><div class="fc-event-ceremonies_count">${ceremonies_booked_count} ceremonies</div>`;
                }
                var lastIndex = (response.data.length<=1) ? response.data.length-1 : 0;
               
               
                if(keyData==lastIndex){
                    lastHtml = `</div></div>`;
               }
                if(ceremonies_booked_count == 0){
                    (item['htmlcustom']==undefined) ? item['htmlcustom'] ='' :item['htmlcustom'];
                    item['htmlcustom'] += `${midHtml}<div class="fc-event-no_cermeony">You don't have ceremony</div>${lastHtml}`;
                }else{
                    item['htmlcustom'] += `${midHtml}<div class="booking-details"><div class="fc-event-booking_couple">${element2.first_couple_name+' & '+element2.second_couple_name}</div><div class="fc-event-booking_start">${time_start_format}</div><div class="fc-event-booking_location">${element2.location_name}</div></div>${lastHtml}`;
                }
                itemArr.push(item);
               
                
            });
           
            $.each(itemArr,function(keys,element){
              
              setbookingData.push(element);
            });
        })
    }
    console.log('setbookingData',setbookingData);
    
    var calendarEl = document.getElementById(targetId);
    var calendar = new FullCalendar.Calendar(calendarEl, {
        initialView: 'dayGridMonth',
        timeZone: 'UTC',
        events:setbookingData,
   
      
        eventDidMount: function(info) {
            console.log('info', info.event.extendedProps.weeklyHtml);
            var element = $(info.el);
            element.parent().parent().parent().parent().removeClass('ceremonies_empty');
            element.parent().parent().parent().parent().removeClass('ceremonies_exist');
            if(info.event.extendedProps.ceremonies_count == 0){
                element.parent().parent().parent().parent().addClass('ceremonies_empty');
                
            }else{
                element.parent().parent().parent().parent().addClass('ceremonies_exist');               
            }           
            
         
            if(info.view.type == 'dayGridMonth'){ // month
                element.html('');
                element.append(info.event.extendedProps.htmlcustom); 
                if($('.fc-scrollgrid-liquid').length){
                    $('.fc-scrollgrid-liquid').addClass('monthlyClass');
                } 
                element.find('.fc-event-booking_start_end_time').addClass('d-none');
                
            }
            if(info.view.type == 'timeGridWeek'){ //week
                element.html('');
                element.append(info.event.extendedProps.weeklyHtml); 
                // element.find('.availability-slot').addClass('d-none');
                if($('.fc-scrollgrid-liquid').length){
                    $('.fc-scrollgrid-liquid').addClass('weeklyClass');
                }
                // element.find('.fc-event-availability').addClass('d-none');
                // element.find('.fc-event-booking_start').addClass('d-none');
                // element.find('.fc-event-ceremonies_count').addClass('d-none');
                // element.find('.booking-details').addClass('d-none');
               
                // element.find('.booking-slot').addClass('d-none');
                
            } 
            if(info.view.type == 'timeGridDay'){//day
                element.html('');
                element.append(info.event.extendedProps.weeklyHtml); 
                // element.html('');
                // element.append(info.event.extendedProps.htmlcustom);
                // element.find('.availability-slot').addClass('d-none'); 
                // element.find('.fc-event-booking_start').addClass('d-none');
                // element.find('.fc-event-ceremonies_count').addClass('d-none');
                // if($('.fc-scrollgrid-liquid').length){
                //     $('.fc-scrollgrid-liquid').addClass('dayClass');
                // }  
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