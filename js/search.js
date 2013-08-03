var bSearchVisible = false;

function ToggleSearch() {
	var s = document.getElementById("searchformWrapper");

	if (bSearchVisible) {
		s.style.height = "0";
		bSearchVisible = false;
	}
	else {
		s.style.height = "23px";
		bSearchVisible = true;
	}
}