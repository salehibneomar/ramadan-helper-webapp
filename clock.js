    
    function dateAndTime(){
    var digitalClock = new Date();
    var hr = digitalClock.getHours(), 
        min = digitalClock.getMinutes(), 
        sec = digitalClock.getSeconds(),
        day = digitalClock.getDay(),
        date = digitalClock.getDate(),
        month = digitalClock.getMonth(),
        year = digitalClock.getFullYear(),
        format = "";
    
    if(hr<12){
        format = "AM";
    }
    else{
        format = "PM";
    }    

    if(hr == 0){
        hr = 12;
    }
    else if(hr>12){
        hr -= 12;
    }

    hr = (hr<10)? "0"+hr: hr;
    min = (min<10)? "0"+min: min;
    sec = (sec<10)? "0"+sec: sec;

    var dayArr = ["Sun", "Mon", "Tue", "Wed", "Thu", "Fri", "Sat"];

    for(var i=0; i<=6; i++){
        if(day == i){
            day = dayArr[i];
            break;
        }
    }

    var monthArr = ["Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec"];
    for(var i=0; i<=11; i++){
        if(month == i){
            month = monthArr[i];
            break;
        }
    }

    document.getElementById('Time').innerHTML = hr+":"+min+":"+sec+" "+format;
    document.getElementById('Date').innerHTML = day+", "+date+"-"+month+"-"+year;

    }

    setInterval(dateAndTime, 10);