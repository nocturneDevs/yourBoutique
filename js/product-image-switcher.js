function SetFeaturedImage(thumbnail) {

	var fsrc = document.getElementById("featured-image").firstChild.src;
	var tsrc = thumbnail.firstChild.src;
	var flen = fsrc.length;
	var tlen = tsrc.length;

	while(fsrc[flen-1] != "-") {
		flen--;
	}
	flen--;
	if (flen < 1) {
		return;
	}

	while(tsrc[tlen-1] != "-") {
		tlen--;
	}
	tlen--;

	tsrc = tsrc.substring(0,tlen);
	tsrc = tsrc.concat(fsrc.substring(flen));
	console.log(tsrc);



	document.getElementById("featured-image").firstChild.src = tsrc;
}