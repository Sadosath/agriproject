Date.prototype.getWeek = function() {
        var firstdate = new Date(this.getFullYear(), 6, 3);
        return Math.ceil((((this - firstdate) / 86400000) + firstdate.getDay() + 1) / 7);
    }

    var weekNumber = (new Date()).getWeek();

    var dayNames = ['Sunday', 'Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday', 'Saturday'];
    var now = new Date();
    document.write(dayNames[now.getDay()] + " (" + weekNumber + ").");
    var dayname = dayNames[now.getDay()];
    document.cookie = "weekNumber = " + weekNumber ;
    document.cookie = "dayname = " + dayname ;