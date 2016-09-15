<!DOCTYPE html>
<html>
<style type="text/css">
	*{	
		padding: 0;
	}

	h1{
		color: maroon;
		font-weight: bold;
	}

	.hide {
		display: none;
	}


	body {
		font-size: 100%;
		margin: 15px;
		background: #666;
		color: #fff;
	}

	.controls img{
		width: 28px;
		height: 30px
		background: rgba(0,0,0,0);
	}

	.controls img:hover, img:focus {
		-webkit-transform: scale(1.2);
		-moz-transform: scale(1.2);
		-o-transform: scale(1.2);
		position:relative;
	}

	.postItNotes ul, li {
		list-style:none;
	}

	.postItNotes ul{
		overflow: hidden;
		padding:15px;
	}

	.postItNotes ul li {
		margin: 15px;
		float: left;
		position: relative;
	}

	.postItNotes ul li div {
		text-decoration: none;
		color: #000;
		background: #ffc;
		display: block;
		height: 150px;
		width: 150px;
		padding: 10px;
		-moz-box-shadow: 5px 5px 7px rgba(33, 33, 33, 1);
		-webkit-box-shadow: 5px 5px 7px rgba(33, 33, 33, 1);
		box-shadow: 5px 5px 7px rgba(33, 33, 33, 1);
		-moz-transition: -moz-transform .15s linear;
		-webkit-transition: -webkit-transform .15s linear;
		-o-transition: -o-transform .15s linear;
		border-style: solid;
	}

	.postItNotes ul li div img{
		padding: 1px 3px;
		margin: 10px;
		width: 28px;
		height: 30px;
		position: absolute;
		top: 0px;
		right: 0px;
	}

	.postItNotes ul li textarea{
		font-family: "blambot-pro", sans-serif;
		background: rgba(0,0,0,0);
		resize: none;
		padding: 3px;
		border-style: none;
	}

	.note-title {
		font-size: 130%;
		font-weight: bold;
		height: 30px;
		width: 70%;
	}

	.note-content {
		font-size: 120%;
		height: 100px;
		width: 95%;
	}

	.postItNotes ul li:nth-child(even) div{
		-moz-transform: rotate(4deg);
		-webkit-transform: rotate(4deg);
		-o-transform: rotate(4deg);
		position: relative;
		top:5px;
	}

	.postItNotes ul li:nth-child(3n) div{
		-moz-transform: rotate(-4deg);
		-webkit-transform: rotate(-4deg);
		-o-transform: rotate(-4deg);
		position: relative;
		top:-5px;
	}

	.postItNotes ul li:nth-child(5n) div{
		-moz-transform: rotate(7deg);
		-webkit-transform: rotate(7deg);
		-o-transform: rotate(7deg);
		position: relative;
		top: -10px;
	}

	.postItNotes ul li div:hover, div:focus {
		-moz-box-shadow: 10px 10px 7px rgba(0,0,0,1);
		-webkit-box-shadow: 10px 10px 7px rgba(0,0,0,1);
		box-shadow:  10px 10px 7px rgba(0,0,0,1);
		-moz-transform: scale(1.2);
		-webkit-transform: scale(1.2);
		-o-transform: scale(1.2);
		position: relative;
		z-index: 5;
	}

	.postItNotes ul li div.color1 {
		background-color: #ffc;
	}
	.postItNotes ul li div.color2 {
		background-color: #cfc;
	}
	.postItNotes ul li div.color3 {
		background-color: #ccf;
	}

</style>
<head>

	<title>
		learning about creating a full div of post it notes
	</title>
<!-- 
	<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
 -->
<script src="https://use.typekit.net/dwp3wdh.js"></script>
	<script>try{Typekit.load({ async: true });}catch(e){}</script>
	<script type="text/javascript" src="./jquery/jquery-1.4.4.min.js"></script>
	<script type="text/javascript">
	var notes, count = 0;

	function addNewNote(className, title, content){

		if(!className) {
			className = "color" + Math.ceil(Math.random() * 3);
		}
		notes.append("<li><div class='" + className + "'>" + "<textarea class='note-title' placeholder='Untitled' maxlength='10'></textarea>" + "<textarea class='note-content' placeholder='Your content here'></textarea>" + "<img id='hide' src='./close.png'/>" + "</div></li>");
	

	var newNote = notes.find("li:last");
	newNote.find('img').click(function(){
		newNote.remove();
	});

	addNoteEvent(newNote);

	if(title){
		newNote.find("textarea.note-title").val(title);
	}

	if(content){
		newNote.find("textarea.note-content").val(content);
	}

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

$(document).ready(function(){
		notes = $(".notes");

		$(".New").click(function(){
			addNewNote();
			console.log("yiz");
		});
		

	});

</script>

</head>

<body>
	
	<div class="titleBody">
		<h1>Post it Notes</h1>
		<p>
			We first want to learn how to create a div with words inside, and draw a border around it.<br>
			Goal is to create a responsive post it note to be placed in a webpage <br>
			- a button to create a note<br>
			- a post it note<br>
			- able to parse it for databases<br>
			- webpage resposive<br>
			- user interaction<br>
			- creating buttons for editing purposes<br>
		</p>
	<div>

	<div class="controls">
		<img class="New" src="./note.png"/>
		<img class="Save" src="./save.png"/>
	</div>

	<div class="postItNotes">
		<ul class="notes"/>
		</ul>
		</div>
</body>
</html>