<!DOCTYPE html>
<html>
<head>
	<style>
	* {
		box-sizing: border-box;
		font-family: "Roboto", sans-serif;
	}
	html,
	body {
		height: 100%;
	}
	body {
		background-color: #f1f5f8;
	}
	#txt {
		text-align: center;
	}
	.btn_container {
		padding: 10px;
		text-align: center;
	}
	#btn {
		border-radius: 4px;
		cursor: pointer;
		padding: 4px 8px;
		background-color: white;
		font-size: 1.2em;
		letter-spacing: 1px;
	}
	</style>
</head>
<body>
	<div id="scr">
	<h2 id="txt">Do not loose focus!</h2>
	<div class="btn_container">
	<button id="btn">Original Color</button>
	</div>
	<button onclick="openFullscreen()">click</button>
</div>
</body>
<script>
	const ogcolor = "#f1f5f8";
	const newcolor = "#39a9cb";
	const txt = document.getElementById("txt");
	const btn = document.getElementById("btn");

	 window.addEventListener('beforeunload', function (e) {
            e.preventDefault();
            e.returnValue = '';
        });

	window.onfocus = function () {
	txt.innerText = "This tab is in focus!";
	document.body.style.backgroundColor = ogcolor;
	};
	window.onblur = function () {
		window.alert("leaving");
	document.body.style.backgroundColor = newcolor;
	txt.innerText = "Lost focus, background color has changed !";
	};
	btn.addEventListener("click", function () {
	txt.innerText = "Switch tab to change the background color.";
	document.body.style.backgroundColor = ogcolor;
	});


// 	var elem = document.getElementById("scr");

// /* When the openFullscreen() function is executed, open the video in fullscreen.
// Note that we must include prefixes for different browsers, as they don't support the requestFullscreen method yet */
// function openFullscreen() {
//   if (elem.requestFullscreen) {
//     elem.requestFullscreen();
//   } else if (elem.webkitRequestFullscreen) { /* Safari */
//     elem.webkitRequestFullscreen();
//   } else if (elem.msRequestFullscreen) { /* IE11 */
//     elem.msRequestFullscreen();
//   }
// }

var elem = document.documentElement;

/* View in fullscreen */
function openFullscreen() {
  if (elem.requestFullscreen) {
    elem.requestFullscreen();
  } else if (elem.webkitRequestFullscreen) { /* Safari */
    elem.webkitRequestFullscreen();
  } else if (elem.msRequestFullscreen) { /* IE11 */
    elem.msRequestFullscreen();
  }
}

/* Close fullscreen */
function closeFullscreen() {
  if (document.exitFullscreen) {
    document.exitFullscreen();
  } else if (document.webkitExitFullscreen) { /* Safari */
    document.webkitExitFullscreen();
  } else if (document.msExitFullscreen) { /* IE11 */
    document.msExitFullscreen();
  }
}
</script>
</html>
