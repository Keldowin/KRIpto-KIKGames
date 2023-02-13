$(function() {
    var div = document.getElementById('elements');
    var count = 0;
    setInterval(function() {
        if (count == 0) $(div).removeClass('element3');
        $(div).removeClass('element' + count);
        count++;
        $(div).addClass('element' + count);
        if (count == 3) count = 0;
    }, 2000);
});