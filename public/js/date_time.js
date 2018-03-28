function startTime() {
    var today = new Date();
    var h = today.getHours();
    var m = today.getMinutes();
    var s = today.getSeconds();
    var ampm = h >= 12 ? 'pm' : 'am'; h = h % 12;
    var months = ['Jan','Feb','Mar','Apr','May','Jun','Jul','Aug','Sep','Oct','Nov','Dec'];
    var days = ['Sun','Mon','Tue','Wed','Thu','Fri','Sat'];
    h = h ? h : 12; // the hour '0' should be '12'
    m = checkTime(m);
    s = checkTime(s);
    document.getElementById('txt').innerHTML =
        + h + ":" + m + ":" + s + ampm;
    document.getElementById('date').innerHTML = days[today.getDay()]+' '+months[today.getMonth()]+' '+today.getDate()+' '+today.getFullYear();
    var t = setTimeout(startTime, 500);
}
function checkTime(i) {
    if (i < 10) {i = "0" + i};  // add zero in front of numbers < 10
    return i;
}