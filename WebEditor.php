<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Web Editor| </title>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/ace/1.3.3/ace.js"></script>
	<!-- load emmet code and snippets compiled for browser -->
	<script src="https://cloud9ide.github.io/emmet-core/emmet.js"></script>


	<style>
 html,body{ margin: 0; padding: 0; height: 100%; width: 100%; overflow: hidden; }
 #editor{ height: 100%; width: 50%; display: inline-block; resize: horizontal; }
 ::-webkit-scrollbar { display: none; }
 #iframe{ height: 100%; width: 50%; display: inline-block; resize: horizontal; }
 #container{ height: 100%; width: auto; white-space: nowrap; overflow: hidden; }
 .ace_scrollbar { display: none !important; }
	</style>


</head>
<body onload="ready()">
	
	<div id="container">
		
		<div id="editor">
			<textarea >
			</textarea> 
			</div>
			
		<iframe src="" frameborder="0" id="iframe">

		</iframe>
	
	</div>

	<script>
	
	function ready()
	{
		setupEditor();
	}
	function update() {
			var idoc = document.getElementById('iframe').contentWindow.document;

			idoc.open();
			idoc.write(editor.getValue());
			idoc.close();
		}

		function setupEditor() {
			window.editor = ace.edit("editor");
			editor.setTheme("ace/theme/monokai");
			editor.getSession().setMode("ace/mode/html");
			ace.require("ace/ext/language_tools");
			editor.setValue(`<?php echo file_get_contents("$_GET[filename]"); ?>`, 4);


			editor.getSession().on('change', function () {
				update();
			});

			editor.focus();
			editor.resize()

			editor.setOptions({
				fontSize: "10pt",
				showLineNumbers: true,
				vScrollBarAlwaysVisible: true,
				showGutter: true,
				enableSnippets: true,
				enableLiveAutocompletion: true,
				enableBasicAutocompletion: true
			});

			editor.setShowPrintMargin(true);
			editor.setBehavioursEnabled(true);
		}
		setupEditor();
		update();
	
	</script>
</body>
</html>