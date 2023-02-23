

function toggle(){
    var element = document.getElementById("menu");
    element.classList.toggle('hide');
}




    // document.addEventListener("mouseup", ()=>{
    //     var element = document.getElementById("menu");
    //     element.classList.add('hide');
    // });


// -----------------timer---------------


// let [seconds, minutes, hours] = [0,0,0];
// // let t = document.getElementById("time");
// let timer = null;

// function stopwatch(){
//     seconds++;
//     if(seconds == 60){
//         seconds=0;
//         minutes++;
//         if(minutes == 60){
//             minutes = 0;
//             hours++;
//         }
//     }

//     let h = hours <10 ? "0" + hours : hours;
//     let m = minutes <10 ? "0" + minutes : minutes;
//     let s = seconds <10 ? "0" + seconds : seconds;

//     document.getElementById("time").innerHTML = `${h}:${m}:${s}`;

//     console.log(time);
// }

// function startTimer(){
//     if(timer!==null){
//         clearInterval(timer);
//     }
//     timer = setInterval(stopwatch,1000);
// }

// function stopTimer(){
//     console.log("recorded time: "+ document.getElementById("time").innerHTML);
//     clearInterval(timer);
// }

// function resetTimer(){
//     stopTimer();
//     [seconds, minutes, hours] = [0,0,0];
//     time.innerHTML = "00:00:00";

//     if(start.style.display == 'none'){
//         start.style.display = 'block';
//         stop.style.display = 'none';
//         stopTimer();

//     } else {
//         stop.style.display = 'block';
//         start.style.display = 'none';
//     }
// }

// function startStop(){
//     var start = document.querySelector(".check-in");
//     var stop = document.querySelector(".check-out");

//     if(start.style.display == 'none'){
//         start.style.display = 'block';
//         stop.style.display = 'none';
//         stopTimer();

//     } else {
//         startTimer();
//         stop.style.display = 'block';
//         start.style.display = 'none';
//     }

// }
// function resetTimer(){
//     var start = document.querySelector(".check-in");
//     var stop = document.querySelector(".check-out");
//     stopTimer();
//     [seconds, minutes, hours] = [0,0,0];
//     time.innerHTML = "00:00:00";

//     if(start.style.display == 'none'){
//         start.style.display = 'block';
//         stop.style.display = 'none';
//         stopTimer();
//     }
// }

