var moment = require('moment');
import EmblaCarousel from 'embla-carousel'
import "../css/embla.css";

$(document).ready(function() {
    console.log('Test');
    const wrap = document.querySelector('.embla');
    if (wrap){
        const viewPort = wrap.querySelector(".embla__viewport");
        const prevBtn = wrap.querySelector(".embla__button--prev");
        const nextBtn = wrap.querySelector(".embla__button--next");
        const embla = EmblaCarousel(viewPort, {
            dragFree: true,
            containScroll: "trimSnaps"
        });
    }
    
    if(document.getElementById('appointment_booking_page')){
        var branch = $("#location");
        var type = $("#visit_type");
        var doctor = $("#doctor");
        var date = $("#date");
        
        var branch_value = null;
        var type_value = null;
        var doctor_value = null;
        var date_value = null;
        appointment_checker(branch_value,type_value,doctor_value);

        branch.change(function(){
            branch_value = branch.val();
            console.log(branch_value);
            $.get( "/api/available_appointments/"+branch_value, function( data ) {
                    empty_date_time_options();
                    appointment_checker(branch_value,type_value,doctor_value)
              });
        });

        type.change(function(){
            type_value = type.val();
            $.get( "/api/available_appointments/"+branch_value+'/'+type_value, function( data ) {
                empty_date_time_options();
                appointment_checker(branch_value,type_value,doctor_value)
            });
        });

        doctor.change(function(){
            doctor_value = doctor.val();
            $.get( "/api/available_appointments/"+branch_value+'/'+type_value+'/'+doctor_value, function( data ) {
                if(appointment_checker(branch_value,type_value,doctor_value)){
                    empty_date_time_options();
                    if (data.length == 0) {
                        date.html('<option value="" selected disabled >No Available Appointment Time</option>');
                        console
                    }
                    data.forEach(set_date_time_options);
                }
              });
        });
    }
    function appointment_checker(branch_value,type_value,doctor_value){
        var check = true;
        if(branch_value !== null){
            type.prop( "disabled", false );
        }else{
            check = false;
            type.prop( "disabled", true );
        }
        if(type_value !== null){
            doctor.prop( "disabled", false );
        }else{
            check = false;
            doctor.prop( "disabled", true );
        }
        if(doctor_value !== null){
            date.prop( "disabled", false );
        }else{
            check = false;
            date.prop( "disabled", true );
        }
        if(!check)
            return false;
        return true;
    }

    function empty_date_time_options(){
        date.html('<option value="" selected disabled >Select a time...</option>');
    }
    function set_date_time_options(item){
        var opt = document.createElement('option');
        var time = item.appointment_time;
        time = moment(time).format('LLL');
        opt.appendChild( document.createTextNode(time) );
        opt.value = item.id;
        date.append(opt);
    }
});
