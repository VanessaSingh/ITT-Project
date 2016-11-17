var audioPlayer = document.getElementById("audioplayer");    
var songQueue=[];
var currentlyPlaying;
var repeatFlag = 0;
function playThisSong(url, id, length)
{    
    for(var i = 0;i < 55; i++)
    {
        if(document.getElementById("songArray"+i))
        {
            var song = document.getElementById("songArray"+i).innerHTML;
            //alert(song);
            songQueue[i] = song;
            //alert(songQueue[i]);
        }
        else
            break;
    }
    var thisURL = url;
    var audio = document.getElementById("audioplayer");
    audio.removeAttribute("src");
    audio.setAttribute("src", thisURL);
    audio.play(); 
    currentlyPlaying = id;
}
function playNext()
{
    audioPlayer.pause();
    audioPlayer.removeAttribute("src");
    audioPlayer.setAttribute("src",songQueue[++currentlyPlaying]);
    audioPlayer.play();
}

function playPrevious()
{
    audioPlayer.pause();
    audioPlayer.removeAttribute("src");
    audioPlayer.setAttribute("src",songQueue[--currentlyPlaying]);
    audioPlayer.play();
}

function toggleRepeat()
{
    if(repeatFlag ==0)
    {
        repeatFlag = 1;
        return;
    }
    else
    {
        repeatFlag = 0;
        return;
    }
}

function CreateSeekBar()
{
    var seekbar = document.getElementById("audioSeekBar"); 
    seekbar.min = 0; 
    seekbar.max = audioPlayer.duration; 
    seekbar.value = 0; 
    var timelapsed = document.getElementById("timelapsed"); 
    timelapsed.innerHTML = "0/" + Math.round(audioPlayer.timelapsed) + "seconds";
}
function UpdatePlayPause()
{
    if(audioPlayer.paused)
    {
        audioPlayer.play();
        return true;
    }
    else
    {
        audioPlayer.pause();
    }
}
var isPlaying = false;
function togglePlay() 
{
  if (isPlaying) 
  {
    audioPlayer.pause()
  } 
  else 
  {
    audioPlayer.play();
  }
};
audioPlayer.onpause = function() {
  isPlaying = false;
};
audioPlayer.onplaying = function() {
  isPlaying = true;
};

function shuffle_songQueue()
{
    audioPlayer.pause();
    songQueue = shuffle(songQueue);
    audioPlayer.removeAttribute("src");
    audioPlayer.setAttribute("src",songQueue[0]);
    audioPlayer.play();
}

function EndOfAudio()
{
    if(repeatFlag == 1)
    {
        audioPlayer.play();
    }
    else
    {
        //document.getElementById("audioSeekBar").value = 0; 
        //document.getElementById("timelapsed").innerHTML = "0/" + Math.round(audioPlayer.duration); 
        playNext();
    }
}
function audioSeekBar()
{
    var seekValue = document.getElementById("audioSeekBar");
    audioPlayer.currentTime = seekValue.value;
}
function SeekBar() 
{
    var seekbar = document.getElementById("audioSeekBar"); 
    seekbar.value = audioPlayer.currentTime; 
    var timelapsed = document.getElementById("timelapsed"); 
    timelapsed.innerHTML = Math.round(audioPlayer.currentTime) + "/" + Math.round(audioPlayer.duration) + "(seconds)"; 
}
function change_Volume() 
{ 
    var volume = document.getElementById("volumeSeekBar"); 
    audioPlayer.volume = volume.value; 
} 

function shuffle(array) 
{
  var currentIndex = array.length, temporaryValue, randomIndex;
  while (0 !== currentIndex) 
  {
    randomIndex = Math.floor(Math.random() * currentIndex);
    currentIndex -= 1;
    temporaryValue = array[currentIndex];
    array[currentIndex] = array[randomIndex];
    array[randomIndex] = temporaryValue;
  }
  return array;
}