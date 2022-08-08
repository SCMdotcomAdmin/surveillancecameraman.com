let noOfCharac = 150;
let contents = document.querySelectorAll(".content");
contents.forEach((content) => {
	//If text length is less that noOfCharac... then hide the read more button
	if(content.textContent.length < noOfCharac) {
		content.nextElementSibling.style.display = "none";
	} else {
		let displayText = content.textContent.slice(0, noOfCharac);
		let moreText = content.textContent.slice(noOfCharac);
		content.innerHTML = `${displayText}<span class="dots">...</span><span class="hide more">${moreText}</span>`;
	}
});

function readMore(btn) {
	let post = btn.parentElement;
	post.querySelector(".dots").classList.toggle("hide");
	post.querySelector(".more").classList.toggle("hide");
	btn.textContent == "Read More" ? (btn.textContent = "Read Less") : (btn.textContent = "Read More");
}

function myFunction() {
	var dots = document.getElementById("dots");
	var moreText = document.getElementById("more");
	var btnText = document.getElementById("myBtn");
	if(dots.style.display === "none") {
		dots.style.display = "inline";
		btnText.innerHTML = "Read more";
		moreText.style.display = "none";
	} else {
		dots.style.display = "none";
		btnText.innerHTML = "Read less";
		moreText.style.display = "inline";
	}
}

// Timestamp
var myvideo = document.getElementById("myvideo"),
jumper1 = document.getElementById("jump1"); // Homeless Criminology Historian
jumper2 = document.getElementById("jump2"); // SJW Class
jumper3 = document.getElementById("jump3"); // Yellow T-shirt teacher
jumper4 = document.getElementById("jump4"); // Call campus security
jumper5 = document.getElementById("jump5"); // Disrupted on the phone
jumper6 = document.getElementById("jump6"); // Nut Snatcher
jumper7 = document.getElementById("jump7"); // Mormon missionaries
jumper8 = document.getElementById("jump8"); // CEO

jumper1.addEventListener("click", function(event) {
	event.preventDefault();
	myvideo.play();
	myvideo.pause();
	myvideo.currentTime = 1488;
	myvideo.play();
	window.scrollTo(0, 0);
}, false);
jumper2.addEventListener("click", function(event) {
	event.preventDefault();
	myvideo.play();
	myvideo.pause();
	myvideo.currentTime = 749;
	myvideo.play();
	window.scrollTo(0, 0);
}, false);
jumper3.addEventListener("click", function(event) {
	event.preventDefault();
	myvideo.play();
	myvideo.pause();
	myvideo.currentTime = 105;
	myvideo.play();
	window.scrollTo(0, 0);
}, false);
jumper4.addEventListener("click", function(event) {
	event.preventDefault();
	myvideo.play();
	myvideo.pause();
	myvideo.currentTime = 132;
	myvideo.play();
	window.scrollTo(0, 0);
}, false);
jumper5.addEventListener("click", function(event) {
	event.preventDefault();
	myvideo.play();
	myvideo.pause();
	myvideo.currentTime = 184;
	myvideo.play();
	window.scrollTo(0, 0);
}, false);
jumper6.addEventListener("click", function(event) {
	event.preventDefault();
	myvideo.play();
	myvideo.pause();
	myvideo.currentTime = 2511;
	myvideo.play();
	window.scrollTo(0, 0);
}, false);
jumper7.addEventListener("click", function(event) {
	event.preventDefault();
	myvideo.play();
	myvideo.pause();
	myvideo.currentTime = 1411;
	myvideo.play();
	window.scrollTo(0, 0);
}, false);
jumper8.addEventListener("click", function(event) {
	event.preventDefault();
	myvideo.play();
	myvideo.pause();
	myvideo.currentTime = 302;
	myvideo.play();
	window.scrollTo(0, 0);
}, false);