function changeRecord() {
    var x = document.getElementById("recordListTitle").selectedIndex;
    document.getElementById("recordList").selectedIndex = x;

	var y;
	console.log(document.getElementById("songList").rows[0].cells[0].innerHTML);
	console.log(document.getElementById("recordListTitle").text);
    for(y = 0; y < document.getElementById("songList").rows.length; y++) {
    	if(document.getElementById("songList").rows[y].cells[0].innerHTML === document.getElementById("recordListTitle").text) {
    		document.getElementById("record-title2").value = document.getElementById("songList").rows[y].cells[0].innerHTML;
    		document.getElementById("record-author2").value = document.getElementById("songList").rows[y].cells[1].innerHTML;
    		document.getElementById("record-album2").value = document.getElementById("songList").rows[y].cells[2].innerHTML;
    		document.getElementById("record-genre2").value = document.getElementById("songList").rows[y].cells[3].innerHTML;
    		document.getElementById("record-time2").value = document.getElementById("songList").rows[y].cells[4].innerHTML;
    		break;
    	}
    }
}