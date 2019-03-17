/* To avoid CSS expressions while still supporting IE 7 and IE 6, use this script */
/* The script tag referencing this file must be placed before the ending body tag. */

/* Use conditional comments in order to target IE 7 and older:
	<!--[if lt IE 8]><!-->
	<script src="ie7/ie7.js"></script>
	<!--<![endif]-->
*/

(function() {
	function addIcon(el, entity) {
		var html = el.innerHTML;
		el.innerHTML = '<span style="font-family: \'itsallwong\'">' + entity + '</span>' + html;
	}
	var icons = {
		'icon-uparrshort': '&#xe664;',
		'icon-downarr-short': '&#xe667;',
		'icon-larrshort': '&#xe669;',
		'icon-rarrshort': '&#xe66b;',
		'icon-upleftarrshort': '&#xe66d;',
		'icon-uprightarrshort': '&#xe66f;',
		'icon-downrightarrshort': '&#xe671;',
		'icon-downleftarrshort': '&#xe673;',
		'icon-uparrlong': '&#xe665;',
		'icon-downarrlong': '&#xe666;',
		'icon-larrlong': '&#xe668;',
		'icon-rarrlong': '&#xe66a;',
		'icon-upleftarrlong': '&#xe66c;',
		'icon-uprightarrlong': '&#xe66e;',
		'icon-downrightarrlong': '&#xe670;',
		'icon-downleftarrlong': '&#xe672;',
		'icon-mobile': '&#xe600;',
		'icon-laptop': '&#xe601;',
		'icon-desktop': '&#xe602;',
		'icon-tablet': '&#xe603;',
		'icon-phone': '&#xe604;',
		'icon-document': '&#xe605;',
		'icon-documents': '&#xe606;',
		'icon-search': '&#xe607;',
		'icon-clipboard': '&#xe608;',
		'icon-newspaper': '&#xe609;',
		'icon-notebook': '&#xe60a;',
		'icon-book-open': '&#xe60b;',
		'icon-browser': '&#xe60c;',
		'icon-calendar': '&#xe60d;',
		'icon-presentation': '&#xe60e;',
		'icon-picture': '&#xe60f;',
		'icon-pictures': '&#xe610;',
		'icon-video': '&#xe611;',
		'icon-camera': '&#xe612;',
		'icon-printer': '&#xe613;',
		'icon-toolbox': '&#xe614;',
		'icon-briefcase': '&#xe615;',
		'icon-wallet': '&#xe616;',
		'icon-gift': '&#xe617;',
		'icon-bargraph': '&#xe618;',
		'icon-grid': '&#xe619;',
		'icon-expand': '&#xe61a;',
		'icon-focus': '&#xe61b;',
		'icon-edit': '&#xe61c;',
		'icon-adjustments': '&#xe61d;',
		'icon-ribbon': '&#xe61e;',
		'icon-hourglass': '&#xe61f;',
		'icon-lock': '&#xe620;',
		'icon-megaphone': '&#xe621;',
		'icon-shield': '&#xe622;',
		'icon-trophy': '&#xe623;',
		'icon-flag': '&#xe624;',
		'icon-map': '&#xe625;',
		'icon-puzzle': '&#xe626;',
		'icon-basket': '&#xe627;',
		'icon-envelope': '&#xe628;',
		'icon-streetsign': '&#xe629;',
		'icon-telescope': '&#xe62a;',
		'icon-gears': '&#xe62b;',
		'icon-key': '&#xe62c;',
		'icon-paperclip': '&#xe62d;',
		'icon-attachment': '&#xe62e;',
		'icon-pricetags': '&#xe62f;',
		'icon-lightbulb': '&#xe630;',
		'icon-layers': '&#xe631;',
		'icon-pencil': '&#xe632;',
		'icon-tools': '&#xe633;',
		'icon-tools-2': '&#xe634;',
		'icon-scissors': '&#xe635;',
		'icon-paintbrush': '&#xe636;',
		'icon-magnifying-glass': '&#xe637;',
		'icon-circle-compass': '&#xe638;',
		'icon-linegraph': '&#xe639;',
		'icon-mic': '&#xe63a;',
		'icon-strategy': '&#xe63b;',
		'icon-beaker': '&#xe63c;',
		'icon-caution': '&#xe63d;',
		'icon-recycle': '&#xe63e;',
		'icon-anchor': '&#xe63f;',
		'icon-profile-male': '&#xe640;',
		'icon-profile-female': '&#xe641;',
		'icon-bike': '&#xe642;',
		'icon-wine': '&#xe643;',
		'icon-hotairballoon': '&#xe644;',
		'icon-globe': '&#xe645;',
		'icon-genius': '&#xe646;',
		'icon-map-pin': '&#xe647;',
		'icon-dial': '&#xe648;',
		'icon-chat': '&#xe649;',
		'icon-heart': '&#xe64a;',
		'icon-cloud': '&#xe64b;',
		'icon-upload': '&#xe64c;',
		'icon-download': '&#xe64d;',
		'icon-target': '&#xe64e;',
		'icon-hazardous': '&#xe64f;',
		'icon-piechart': '&#xe650;',
		'icon-speedometer': '&#xe651;',
		'icon-global': '&#xe652;',
		'icon-compass': '&#xe653;',
		'icon-lifesaver': '&#xe654;',
		'icon-clock': '&#xe655;',
		'icon-aperture': '&#xe656;',
		'icon-quote': '&#xe657;',
		'icon-scope': '&#xe658;',
		'icon-alarmclock': '&#xe659;',
		'icon-refresh': '&#xe65a;',
		'icon-happy': '&#xe65b;',
		'icon-sad': '&#xe65c;',
		'icon-facebook': '&#xe65d;',
		'icon-twitter': '&#xe65e;',
		'icon-googleplus': '&#xe65f;',
		'icon-rss': '&#xe660;',
		'icon-tumblr': '&#xe661;',
		'icon-linkedin': '&#xe662;',
		'icon-dribbble': '&#xe663;',
		'0': 0
		},
		els = document.getElementsByTagName('*'),
		i, c, el;
	for (i = 0; ; i += 1) {
		el = els[i];
		if(!el) {
			break;
		}
		c = el.className;
		c = c.match(/icon-[^\s'"]+/);
		if (c && icons[c[0]]) {
			addIcon(el, icons[c[0]]);
		}
	}
}());
