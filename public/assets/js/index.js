setInterval(function () {
    let currentTime = new Date();
    session = "AM";
  
    // get hour
    hour = currentTime.getHours();
  
    if (hour > 12) {
      session = "PM";
    }
  
    if (hour > 12) {
      hour -= 12;
  
      if (hour <= 9) {
        hour = "0" + hour;
      }
    }
  
    // get minutes
    minutes = currentTime.getMinutes();
    if (minutes <= 9) {
      minutes = "0" + minutes;
    }
  
    // get seconds
    seconds = currentTime.getSeconds();
    if (seconds <= 9) {
      seconds = "0" + seconds;
    }
  
    document.getElementById("hour").innerHTML = hour;
    document.getElementById("minute").innerHTML = minutes;
    document.getElementById("seconds").innerHTML = seconds;
    document.getElementById("session").innerHTML = session;
  
  
    // fot bangla digit
    //   function englishToBanglaDigits (text){
    //   const englishDigits = ['0', '1', '2', '3', '4', '5', '6', '7', '8', '9', 'PM', 'AM'];
    //   const banglaDigits = ['০', '১', '২', '৩', '৪', '৫', '৬', '৭', '৮', '৯', 'পিএম', 'এএম'];
  
    //   for(let i = 0; i < englishDigits.length; i++ ){
    //     const regx = new RegExp(englishDigits[i], 'g');
    //     text = text.replace(regx, banglaDigits[i]);
    //   }
    //   return text;
    // }
  
    // const englishText = document.getElementById("bangla-digits-show").innerHTML;
    // const banglaText = englishToBanglaDigits(englishText);
  
    // document.getElementById("bangla-digits-show").innerHTML = banglaText;
  
  }, 1000);


  $(function() {
    $("#table_id").dataTable();
});