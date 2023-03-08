/** Implementation of the presentation of the audio player */
// import lottieWeb from 'https://cdn.skypack.dev/lottie-web';

const playIconContainer = document.getElementById('play-icon');
const audioPlayerContainer = document.getElementById('audio-player-container');
const seekSlider = document.getElementById('seek-slider');
const volumeSlider = document.getElementById('volume-slider');
const muteIconContainer = document.getElementById('mute-icon');
let playState = 'play';
let muteState = 'unmute';

// const playAnimation = lottieWeb.loadAnimation({
//   container: playIconContainer,
//   path: 'https://maxst.icons8.com/vue-static/landings/animated-icons/icons/pause/pause.json',
//   renderer: 'svg',
//   loop: false,
//   autoplay: false,
//   name: "Play Animation",
// });

// const muteAnimation = lottieWeb.loadAnimation({
//     container: muteIconContainer,
//     path: 'https://maxst.icons8.com/vue-static/landings/animated-icons/icons/mute/mute.json',
//     renderer: 'svg',
//     loop: false,
//     autoplay: false,
//     name: "Mute Animation",
// });

// playAnimation.goToAndStop(14, true);

playIconContainer.addEventListener('click', () => {
    if(playState === 'play') {
        audio.play();
        // playAnimation.playSegments([14, 27], true);
        requestAnimationFrame(whilePlaying);
        playState = 'pause';
        playIconContainer.innerHTML = "<i class='fa-solid fa-pause'></i>";
        console.log("play");
    } else {
        audio.pause();
        // playAnimation.playSegments([0, 14], true);
        cancelAnimationFrame(raf);
        playState = 'play';
        playIconContainer.innerHTML = "<i class='fa-regular fa-circle-play'>";
        console.log("pause");
    }
});

muteIconContainer.addEventListener('click', () => {
    if(muteState === 'unmute') {
        // muteAnimation.playSegments([0, 15], true);
        audio.muted = true;
        muteState = 'mute';
        muteIconContainer.innerHTML = '<i class="fas fa-volume-mute"></i>';
    } else {
        // muteAnimation.playSegments([15, 25], true);
        audio.muted = false;
        muteState = 'unmute';
        muteIconContainer.innerHTML = '<i class="fa-solid fa-volume-high"></i>';
    }
});

const showRangeProgress = (rangeInput) => {
    if(rangeInput === seekSlider) audioPlayerContainer.style.setProperty('--seek-before-width', rangeInput.value / rangeInput.max * 100 + '%');
    else audioPlayerContainer.style.setProperty('--volume-before-width', rangeInput.value / rangeInput.max * 100 + '%');
}

seekSlider.addEventListener('input', (e) => {
    showRangeProgress(e.target);
});
volumeSlider.addEventListener('input', (e) => {
    showRangeProgress(e.target);
});





/** Implementation of the functionality of the audio player */

const audio = document.querySelector('audio');
const durationContainer = document.getElementById('duration');
const currentTimeContainer = document.getElementById('current-time');
const outputContainer = document.getElementById('volume-output');
let raf = null;

const calculateTime = (secs) => {
    const minutes = Math.floor(secs / 60);
    const seconds = Math.floor(secs % 60);
    const returnedSeconds = seconds < 10 ? `0${seconds}` : `${seconds}`;
    return `${minutes}:${returnedSeconds}`;
}

const displayDuration = () => {
    durationContainer.textContent = calculateTime(audio.duration);
}

const setSliderMax = () => {
    seekSlider.max = Math.floor(audio.duration);
}
const displayBufferedAmount = () => {
    const bufferedAmount = Math.floor(audio.buffered.end(audio.buffered.length - 1));
    audioPlayerContainer.style.setProperty('--buffered-width', `${(bufferedAmount / seekSlider.max) * 100}%`);
    console.log('bufferAmount');
    console.log(bufferedAmount);
    // console.log("audio.buffer.length".audio.buffered.length);
}

const whilePlaying = () => {
    seekSlider.value = Math.floor(audio.currentTime);
    currentTimeContainer.textContent = calculateTime(seekSlider.value);
    audioPlayerContainer.style.setProperty('--seek-before-width', `${seekSlider.value / seekSlider.max * 100}%`);
    raf = requestAnimationFrame(whilePlaying);
}

if (audio.readyState > 0) {
    displayDuration();
    setSliderMax();
    displayBufferedAmount();
} else {
    audio.addEventListener('loadedmetadata', () => {
        displayDuration();
        setSliderMax();
        displayBufferedAmount();
    });
}

audio.addEventListener('progress', displayBufferedAmount);

seekSlider.addEventListener('input', () => {
    currentTimeContainer.textContent = calculateTime(seekSlider.value);
    if(!audio.paused) {
        cancelAnimationFrame(raf);
    }
    console.log("input")
});

seekSlider.addEventListener('change', () => {
    audio.currentTime = 10;
    console.log(seekSlider.value)
    console.log(audio.currentTime)

    if(!audio.paused) {
        requestAnimationFrame(whilePlaying);
    }
    console.log("change")
    console.log(seekSlider.value)
    console.log(audio.currentTime)

});

volumeSlider.addEventListener('input', (e) => {
    const value = e.target.value;

    outputContainer.textContent = value;
    audio.volume = value / 100;
});
// Add source mp3 for audio tag
const playBtns = document.querySelectorAll('.playBtn');
const sourceLink = document.querySelectorAll('.songPath');
const songIMG = document.querySelectorAll('.songImg');
const songName = document.querySelectorAll('.songName');
const nextBtn = document.getElementById('next-icon')
const preBtn = document.getElementById('pre-icon')
const songIndex = 0;
const songArr = [];
for (var i=0; i<playBtns.length; i++){
    playBtns[i].addEventListener("click",function(){
        const saveIndex = document.getElementById("saveIndex");
        const imgContainer = document.getElementById("left-container-img");
        const nameContainer = document.getElementById("left-container-name");
        const sourceLink = this.querySelector('.songPath');
        const songIMG = this.querySelector('.songImg');
        const songName = this.querySelector('.songName');
        const songIndex = this.querySelector('.songIndex');
        audio.src = sourceLink.innerHTML;
        imgContainer.src = songIMG.innerHTML;
        nameContainer.innerHTML = songName.innerHTML;
        saveIndex.innerHTML = songIndex.innerHTML;
        audio.play();
        requestAnimationFrame(whilePlaying);
        playState = 'pause';
        playIconContainer.innerHTML = "<i class='fa-solid fa-pause'></i>";
    });
    songArr.push([sourceLink[i].innerHTML,songIMG[i].innerHTML,songName[i].innerHTML]);
}

nextBtn.addEventListener("click",function(){
    const saveIndex = document.getElementById("saveIndex");
    let songIndex = parseInt(saveIndex.innerHTML) + 1;
    if (songIndex == songArr.length) {
        songIndex = 0;
    }
    const imgContainer = document.getElementById("left-container-img");
    const nameContainer = document.getElementById("left-container-name");
    console.log(songIndex);
    audio.src = songArr[songIndex][0];
    imgContainer.src = songArr[songIndex][1];
    nameContainer.innerHTML = songArr[songIndex][2];
    saveIndex.innerHTML = songIndex;
    if(playState === 'pause') {
        audio.play();
    }
})
preBtn.addEventListener("click",function(){
    const saveIndex = document.getElementById("saveIndex");
    let songIndex = parseInt(saveIndex.innerHTML) - 1;
    if (songIndex < 0) {
        songIndex = songArr.length - 1;
    }
    const imgContainer = document.getElementById("left-container-img");
    const nameContainer = document.getElementById("left-container-name");
    console.log(songIndex);
    audio.src = songArr[songIndex][0];
    imgContainer.src = songArr[songIndex][1];
    nameContainer.innerHTML = songArr[songIndex][2];
    saveIndex.innerHTML = songIndex;
    if(playState === 'pause') {
        audio.play();
    }
})