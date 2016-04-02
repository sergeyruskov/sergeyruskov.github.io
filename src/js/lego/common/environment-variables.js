if (document.location.hostname === `localhost`) {
	window.pathsToFolders = {
		img: `../../img`
	}
} else {
	window.pathsToFolders = {
		img: `../img`
	}
}