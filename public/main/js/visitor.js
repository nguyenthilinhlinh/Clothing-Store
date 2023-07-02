	var counterContainer = document.querySelector(".counter_visit");
	var resetButton = document.querySelector("#reset_visit");
	var visitCount = localStorage.getItem("page_view");

	// Check if page_view entry is present

	if (visitCount) {
	    visitCount = Number(visitCount) + 1;
	    localStorage.setItem("page_view", visitCount);
	} else {
	    visitCount = 1;
	    localStorage.setItem("page_view", 1);
	}
	counterContainer.innerHTML = visitCount;



	function myMapIcon1() {
	    var iconmap = document.getElementById("localmap_branch1");
	    if (iconmap.style.display === "block") {
	        iconmap.style.display = "none";
	    } else {
	        iconmap.style.display = "block";
	    }
	}

	function myMapIcon2() {
	    var iconmap = document.getElementById("localmap_branch2");
	    if (iconmap.style.display === "none") {
	        iconmap.style.display = "block";
	    } else {
	        iconmap.style.display = "none";
	    }
	}

	function myMapIcon3() {
	    var iconmap = document.getElementById("localmap_branch3");
	    if (iconmap.style.display === "none") {
	        iconmap.style.display = "block";
	    } else {
	        iconmap.style.display = "none";
	    }
	}

	function myMapIcon4() {
	    var iconmap = document.getElementById("localmap_branch4");
	    if (iconmap.style.display === "none") {
	        iconmap.style.display = "block";
	    } else {
	        iconmap.style.display = "none";
	    }
	}

	function myMapIcon5() {
	    var iconmap = document.getElementById("localmap_branch5");
	    if (iconmap.style.display === "none") {
	        iconmap.style.display = "block";
	    } else {
	        iconmap.style.display = "none";
	    }
	}