function SetFeaturedImage(thumbnail) {

	var featured = document.getElementById("featured-image");
	var fsrc = featured.firstChild.src;
	var tsrc = thumbnail.firstChild.src;
	var flen = fsrc.length;
	var tlen = tsrc.length;

	//Finding lengths of root filenames (excluding resolutions)
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

	// Assemble root filename from thumbnail and resolution from featured image
	tsrc = tsrc.substring(0,tlen);
	tsrc = tsrc.concat(fsrc.substring(flen));

	// Set featured image to assembled filename
	featured.href = tsrc.substring(0,tlen).concat(".jpg");
	featured.firstChild.src = tsrc;

	
	$('#featured-image').loupe({
  		width: 250, // width of magnifier
  		height: 200, // height of magnifier
  		loupe: 'loupe-js' // css class for magnifier
	});
}