const smsTime = document.querySelector('#smsTime');

let min = 1;
let sec = 60;

setInterval(function(){
    sec -= 1;
    if(min < 0){
      smsTime.innerText = `Код прийдет в течении 0:00`;
    } else {
      if(sec < 10){
        smsTime.innerText = `Код прийдет в течении ${min}:0${sec}`;
      } else {
        smsTime.innerText = `Код прийдет в течении ${min}:${sec}`;
      }
      if(sec < 1){
        min -= 1;
        sec = 60;
      }
    }
}, 1000);