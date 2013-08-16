function SetFeaturedImage(thumbnail) {
	console.log(document.getElementById("featured-image").firstChild.src);
	document.getElementById("featured-image").firstChild.src = thumbnail.firstChild.src;
}