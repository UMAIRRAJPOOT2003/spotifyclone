// document.addEventListener("DOMContentLoaded", function() {
//     // Your JavaScript code here
//     let playBtn = document.getElementById("blindingplay");
//     let pauseBtn = document.getElementById("blindingpause");
//     console.log(playBtn)
//     const audio = new Audio("/audio/abcd.mp3");

//     playBtn.addEventListener("click", (e) => {
//         audio.play();
//     });

//     pauseBtn.addEventListener("click", (e) => {
//         audio.pause();
//     });
// });


document.addEventListener("DOMContentLoaded", function() {
    let audio = new Audio();  // Create a global audio variable

    // Get all elements with the class "audio-control"
    let audioControls = document.querySelectorAll(".audio-control");

    audioControls.forEach(function(control) {
        // Add click event listener to each button
        control.addEventListener("click", function() {
            // Get the audio file path from the data-audio attribute
            let audioFile = control.getAttribute("data-audio");
            
            // Set the audio source to the specified file
            audio.src = audioFile;

            // Play or pause the audio based on the button action
            if (control.classList.contains("play")) {
                audio.play();
            } else if (control.classList.contains("pause")) {
                audio.pause();
            }
        });
    });
});


