function changeRecord() {
    var x = document.getElementById("recordListTitle").selectedIndex - 1;
    document.getElementById("recordList").selectedIndex = x;
    console.log(x);
    console.log(document.getElementById("recordList").selectedIndex);

	var y;
    for(y = 0; y < document.getElementById("songList").rows.length; y++) {
		var listName = document.getElementById("songList").rows[y].cells[0].innerHTML;
		var selectName = document.getElementById("recordListTitle").value;
    	if(listName == selectName) {
    		document.getElementById("record-title2").value = document.getElementById("songList").rows[y].cells[0].innerHTML;
    		document.getElementById("record-author2").value = document.getElementById("songList").rows[y].cells[1].innerHTML;
    		document.getElementById("record-album2").value = document.getElementById("songList").rows[y].cells[2].innerHTML;
    		document.getElementById("record-genre2").value = document.getElementById("songList").rows[y].cells[3].innerHTML;
    		document.getElementById("record-time2").value = document.getElementById("songList").rows[y].cells[4].innerHTML;
    		break;
    	}
    }
}