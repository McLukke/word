<html>
	<head>
		<!--Import materialize.css-->
    <link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>

    <!--Let browser know website is optimized for mobile-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no"/>

		<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
		<link rel="stylesheet" href="css/texteditor.css" type="text/css" MEDIA="screen">
		<title>Text Editor</title>
		<script type="text/javascript" src="js/texteditor.js"></script>
	</head>

	<body>
		<!--Import jQuery before materialize.js-->
    <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
    <script type="text/javascript" src="js/materialize.min.js"></script>

		<header class="card-panel">
			<div class="container-fluid">
				<div class="row">
					<div class="col s1 m1 l1">&nbsp;</div>
					<div class="col s1 m1 l1">
						<a id="boldSelection" class="waves-effect waves-light btn blue" type="button">B</a>
					</div>
					<div class="col s1 m1 l1">
						<a id="italicSelection" class="waves-effect waves-light btn blue" type="button">I</a>
					</div>
					<div class="col s1 m1 l1">
						<a id="underlineSelection" class="waves-effect waves-light btn blue" type="button">U</a>
					</div>
					<div class="col s1 m1 l1">&nbsp;</div>
					<div class="col s1 m1 l1">
						<a id="alignLeft" class="waves-effect waves-light btn blue" type="button"><i class="mdi-editor-format-align-left"></i></a>
					</div>
					<div class="col s1 m1 l1">
						<a id="alignCenter" class="waves-effect waves-light btn blue" type="button"><i class="mdi-editor-format-align-center"></i></a>
					</div>
					<div class="col s1 m1 l1">
						<a id="alignRight" class="waves-effect waves-light btn blue" type="button"><i class="mdi-editor-format-align-right"></i></a>
					</div>
					<div class="col s1 m1 l1">
						<a id="alignJustify" class="waves-effect waves-light btn blue" type="button"><i class="mdi-editor-format-align-justify"></i></a>
					</div>
					<div class="col s1 m1 l1">&nbsp;</div>
					<div class="col s1 m1 l1">
						<form action="uploader.php" method="POST" enctype="multipart/form-data">
							<input type="hidden" name="MAX_FILE_SIZE" value="1000000"/>
							<label for="insertImage" class="top-margin waves-effect waves-light btn blue right"><i class="mdi-image-add-to-photos"></i></label>
							<input id="insertImage" name="insertImage" type="file" accept="image/*" />
						</form>
					</div>
				</div>
			</div>
		</header>

		<main>

			<div class="container-fluid">
				<div class="row">
					<div class="col s1 m1 l1">&nbsp;</div>
					<div class="col s10 m10 l10">
						<div class="card-panel">
							<textarea id="inputTextArea" placeholder="Type here"></textarea>
						</div>
					</div>
				</div>
			</div>

			<div id="preview" class="darkCurtain hideIt">
				<div class="container-fluid">
					<div class="row">
						<div class="col s2 m2 l2"></div>
						<div id="showTextArea" class="col s8 m8 l8">
							<a id="closeButton" class="btn-floating btn-small waves-effect waves-light right red"><i class="mdi-content-clear"></i></a>
							<p id="showText"></p>
						</div>
					</div>
				</div>
			</div>

			<a id="previewButton" class="btn-floating btn-large waves-effect waves-light red right" type="button"><i class="mdi-action-pageview"></i></a>
		</main>
	</body>
</html>
