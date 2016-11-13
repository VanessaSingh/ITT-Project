var audioPlayer = document.getElementById("audioplayer");    
var songQueue=[];
function playThisSong(url)
{    
    for(var i = 0;i < 15; i++)
    {
        var song = document.getElementById("songArray"+i).innerHTML;
        //alert(song);
        songQueue[i] = song;
        //alert(songQueue[i]);
    }
    var thisURL = url;
    var audio = document.getElementById("audioplayer");
    audio.removeAttribute("src");
    audio.setAttribute("src", thisURL);
    audio.play(); 
}
function playNext(i)
{
    document.getElementById("songArray").removeAttribute("src");
    document.getElementById("songArray").setAttribute("src",songQueue[i+1]);
}

function playPrevious(i)
{
    document.getElementById("songArray").removeAttribute("src");
    document.getElementById("songArray").setAttribute("src",songQueue[i-1]);
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
function EndOfAudio()
{
    document.getElementById("audioSeekBar").value = 0; 
    document.getElementById("timelapsed").innerHTML = "0/" + Math.round(audio.duration); 
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