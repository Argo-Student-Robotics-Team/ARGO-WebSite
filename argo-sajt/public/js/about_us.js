document.addEventListener("DOMContentLoaded", function() {
    function animateValue(id, start, end, duration) {
        const element = document.getElementById(id);
        const range = end - start;
        const minTimer = 50;
        const stepTime = Math.abs(Math.floor(duration / range));
        
        let startTime = new Date().getTime();
        let endTime = startTime + duration;
        let timer;

        function run() {
            let now = new Date().getTime();
            let remaining = Math.max((endTime - now) / duration, 0);
            let value = Math.round(end - (remaining * range));
            element.innerHTML = value + "<br><span>" + element.querySelector("span").innerHTML + "</span>";
            if (value == end) {
                clearInterval(timer);
            }
        }

        timer = setInterval(run, stepTime);
        run();
    }

    animateValue("members", 0, 24, 2000);
    animateValue("faculties", 0, 4, 2000);
    animateValue("projects", 0, 2, 2000);
});
