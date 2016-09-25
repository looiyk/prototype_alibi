<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" type="text/css" href="../css/css_post_it_note.css">
	<title>
		learning about creating a full div of post it notes
	</title>
<!-- 
	<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
 -->
<script src="https://use.typekit.net/dwp3wdh.js"></script>
	<script>try{Typekit.load({ async: true });}catch(e){}</script>
	<script type="text/javascript" src="../jQuery/jquery-1.4.4.min.js"></script>
	<script type="text/javascript">
	var notes, count = 0;

	function saveNotes() {
    var notesArray = [];

    // for each of the notes add a bespoke note object to the array
    notes.find("li > div").each(function (i, e) {
        // save the class attribute of the div, as well as the text for the title and content text areas
        var colourClass = $(e).attr("class");
        var title = $(e).find("textarea.note-title");
        var content = $(e).find("textarea.note-content");

        notesArray.push({ Index: i, Title: title.val(), Content: content.val(), Class: colourClass });
    });

    // json encode it
    var jsonStr = JSON.stringify(notesArray);

    // and save the json string into local storage
    localStorage.setItem("notes", jsonStr);
}

	function addNewNote(className, title, content){

		if(!className) {
			className = "color" + Math.ceil(Math.random() * 3);
		}
		notes.append("<li><div class='" + className + "'>" + "<textarea class='note-title' placeholder='Untitled' maxlength='10'></textarea>" + "<textarea class='note-content' placeholder='Your content here'></textarea>" + "<img id='hide' src='../src/close.png'/>" + "</div></li>");
	

	var newNote = notes.find("li:last");
	newNote.find('img').click(function(){
		newNote.remove();
		saveNotes();
	});

	addNoteEvent(newNote);

	if(title){
		newNote.find("textarea.note-title").val(title);
	}

	if(content){
		newNote.find("textarea.note-content").val(content);
	}
	saveNotes();
}

	function addNoteEvent(noteElement) {
    var div = noteElement.children("div");
    var closeImg = div.find("img");

    div.focus(function () {
        closeImg.removeClass("hide");
    });

    div.children().focus(function () {
        closeImg.removeClass("hide");
    });

    div.hover(function () {
        closeImg.removeClass("hide");
    }, function () {
        closeImg.addClass("hide");
        saveNotes();
    });

    div.children().hover(function () {
        closeImg.removeClass("hide");
    }, function () {
        closeImg.addClass("hide");
    });
}

function loadNotes() {
    var storedNotes = localStorage.getItem("notes");
    if (storedNotes) {
        // passes the stored json back into an array of note objects
        var notesArray = JSON.parse(storedNotes);
        count = notesArray.length;

        var i;
        for (i = 0; i < count; i++) {
            var storedNote = notesArray[i];
            addNewNote(storedNote.Class, storedNote.Title, storedNote.Content);
        }
    }
}


$(document).ready(function(){
		notes = $(".notes");

		loadNotes();

		$(".New").click(function(){
			addNewNote();
			// console.log("yiz");
		});
		

	});

</script>

</head>

<body>	
</body>
</html>