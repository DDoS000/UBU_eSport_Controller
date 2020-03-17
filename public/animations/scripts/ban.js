// var fileUrl = "http://127.0.0.1:8000/Controller/api";
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
	upSpeed = getElement(responseXml, "upSpeed");
	inSpeed = getElement(responseXml, "inSpeed");
    outSpeed = getElement(responseXml, "outSpeed");
}

function runUpdate() {
    if (timeOld == timeNew) return;

	if ($('#t1').get("innerHTML") != t1 || $('#t2').get("innerHTML") != t2) {
		updating = true;
		$('.full').animate({$top: '-150px'}, outSpeed).then(function() {
			$('#t1').set("innerHTML", t1);
			$('#t2').set("innerHTML", t2);
			$('.full').animate({$top: '0px'}, inSpeed).then(function() { updating = false; });
		});
	}

	if ($('#s1').get("innerHTML") != s1 || $('#s2').get("innerHTML") != s2) {
		updating = true;
		$('.full').animate({$top: '-150px'}, outSpeed).then(function() {
			$('#s1').set("innerHTML", s1);
			$('#s2').set("innerHTML", s2);
			$('.full').animate({$top: '0px'}, inSpeed).then(function() { updating = false; });
		});
    }

}
