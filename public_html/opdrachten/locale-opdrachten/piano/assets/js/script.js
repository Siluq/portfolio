//een constant is een boksje waar je iets in stopt
const keys = document.querySelectorAll(".key"),
  note = document.querySelector(".nowplaying"),
  hints = document.querySelectorAll(".hints");

//een functie die doet wat en dan gaat hij weer terug in mijn woorden
function playNote(e) {
//hier zoekt hij naar de datakeys
  const audio = document.querySelector(`audio[data-key="${e.keyCode}"]`),
    key = document.querySelector(`.key[data-key="${e.keyCode}"]`);

//als er geen key is stopt hij
  if (!key) return;

//hij haalt hier de data-note op
  const keyNote = key.getAttribute("data-note");

//voegt class playing toe
  key.classList.add("playing");
  note.innerHTML = keyNote;
//zet de audio op 0
  audio.currentTime = 0;
//speeld de audio af
  audio.play();
}

//hier stopt het geluidje en verwijderd hij weer de class playing
function removeTransition(e) {
  if (e.propertyName !== "transform") return;
  this.classList.remove("playing");
}

//hier geeft hij een tijd tussen het begin en het eind
function hintsOn(e, index) {
  e.setAttribute("style", "transition-delay:" + index * 50 + "ms");
}

//dit is voor het stukje hier boven en dat zorgt er voor dat er een mooie overloop is
hints.forEach(hintsOn);

//dit is voor als je een key hebt ingedrukt dat de blauwe kleur er omheen weer weg gaat
keys.forEach(key => key.addEventListener("transitionend", removeTransition));

//dit is voor dat hij het geluid afspeeld als je een toets in drukt
window.addEventListener("keydown", playNote);

// Dit is dat je ook op de keys kan klikken
window.addEventListener("click", function (e){
	var a = {keyCode: e.target.dataset.key}
	playNote(a)
})