// var fileUrl = "http://127.0.0.1:8000/Controller/api/{{$tid}}";
var upSpeed = 5000;
var inSpeed = 1000;
var outSpeed = 1000;

var t1, t2, s1, s2, mm, gg;

$(function() {
	checkUpdate();
    setInterval(function() { checkUpdate(); }, upSpeed);
});

function getResponse() {
	t1 = getElement(responseXml, "Team1");
	t2 = getElement(responseXml, "Team2");
	s1 = getElement(responseXml, "score1");
	s2 = getElement(responseXml, "score2");
	mm = getElement(responseXml, "match");
	gg = getElement(responseXml, "game");
	upSpeed = getElement(responseXml, "upSpeed");
	inSpeed = getElement(responseXml, "inSpeed");
    outSpeed = getElement(responseXml, "outSpeed");
}

function runUpdate() {
    if (timeOld == timeNew) return;

	if ($('#mm').get("innerHTML") != mm) {
		updating = true;
		$('.top').animate({$top: '-150px'}, outSpeed).then(function() {
            $('#mm').set("innerHTML", mm);
			$('.top').animate({$top: '0px'}, inSpeed).then(function() { updating = false; });
		});
	}

	if ($('#gg').get("innerHTML") != gg) {
		updating = true;
		$('.matches').animate({$top: '-150px'}, outSpeed).then(function() {
			$('#gg').set("innerHTML", gg);
			$('.matches').animate({$top: '83px'}, inSpeed).then(function() { updating = false; });
		});
    }

	if ($('#mm').get("innerHTML") != mm) {
		updating = true;
		$('.matches').animate({$top: '-150px'}, outSpeed).then(function() {
			$('#mm').set("innerHTML", mm);
			$('.matches').animate({$top: '83px'}, inSpeed).then(function() { updating = false; });
		});
	}

	if ($('#t1').get("innerHTML") != t1 || $('#t2').get("innerHTML") != t2) {
		updating = true;
		$('.BGname').animate({$top: '-150px'}, outSpeed).then(function() {
			$('#t1').set("innerHTML", t1);
			$('#t2').set("innerHTML", t2);
			$('.BGname').animate({$top: '79px'}, inSpeed).then(function() { updating = false; });
		});
	}

	if ($('#s1').get("innerHTML") != s1 || $('#s2').get("innerHTML") != s2) {
		updating = true;
		$('.BGname').animate({$top: '-150px'}, outSpeed).then(function() {
			$('#s1').set("innerHTML", s1);
			$('#s2').set("innerHTML", s2);
			$('.BGname').animate({$top: '79px'}, inSpeed).then(function() { updating = false; });
		});
    }

    $('.ads').animate({$left: '1264px'}, 3500)
    $('.ECMBGBLUES').animate({$left: '-176px'}, 3500)
    $('.ECMBGREDS').animate({$right: '-176px'}, 3500)

}
