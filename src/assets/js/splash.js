const SPLASH_SESSION_KEY = 'SPLASH_SESSION_KEY'

const done = sessionStorage.getItem(SPLASH_SESSION_KEY);

if (done == 'done') {
	runNoSplash()
} else {
	runSplash()
}

function runSplash() {
	_initSplash()
	_runSplashTimeline()

	sessionStorage.setItem(SPLASH_SESSION_KEY,'done');
}

function runNoSplash() {
	gsap.set('.js-splash', {
		backgroundColor: 'transparent',
		duration: 0.6,
	})

	gsap.set('.js-c', {
		stroke: '#000',
		duration: 0.6,
	})

	gsap.set('.js-g', {
		fill: '#000',
		duration: 0.6,
	})

	gsap.set('.js-lineBox', {
		opacity: 0,
		duration: 0.6,
	})
	
	gsap.set('.js-splashBox', {
		width: '3.90625vw',
		top: 'calc(1.32815vw + 27px)',
		position: 'fixed',
		height: 'auto',
	})
}

function _initSplash() {
	gsap.set('.js-outlineTop', {
		left: '-100vw'
	})

	gsap.set('.js-outlineBottom', {
		right: '-100vw'
	})

	gsap.set('.js-outlineLeft', {
		top: '100vh'
	})

	gsap.set('.js-outlineRight', {
		top: '-100vh'
	})

	gsap.set('.js-outlineCenterLeft', {
		top: '-100vh'
	})

	gsap.set('.js-outlineCenterRight', {
		top: '100vh'
	})

	gsap.set('.js-outlineCenterTop', {
		left: '-100vw'
	})

	gsap.set('.js-outlineCenterBottom', {
		right: '-100vw'
	})

	gsap.set('.js-circleRight, .js-circleLeft, .js-innerCircleRight, .js-innerCircleLeft, .js-splashSvg, .js-gline', {
		opacity: 0
	})
}

function _runSplashTimeline() {
	const tl = gsap.timeline();

	const lineDuration = 0.6

	tl
		.addLabel('line')
		.to('.js-outlineTop', {
			left: 0,
			duration: lineDuration,
		}, 'line')
		.to('.js-outlineBottom', {
			right: 0,
			duration: lineDuration,
		}, 'line')
		.to('.js-outlineLeft', {
			top: 0,
			duration: lineDuration,
		}, 'line')
		.to('.js-outlineRight', {
			top: 0,
			duration: lineDuration,
		}, 'line')
		.to('.js-outlineCenterLeft', {
			top: 0,
			duration: lineDuration,
		}, 'line')
		.to('.js-outlineCenterRight', {
			top: 0,
			duration: lineDuration,
		}, 'line')
		.to('.js-outlineCenterTop', {
			left: 0,
			duration: lineDuration,
		}, 'line')
		.to('.js-outlineCenterBottom', {
			right: 0,
			duration: lineDuration,
		}, 'line')
		.to('.js-circleRight, .js-circleLeft', {
			opacity: 1,
			duration: 0.4,
			delay: 0.2,
		}, 'line')

		.addLabel('circle')
		.to('.js-outlineCenterTop', {
			left: '41.6666667%',
			width: '25.3333333%',
			duration: 0.4,
		}, 'circle')
		.to('.js-outlineCenterBottom', {
			right: '32.3333333%',
			width: '25.3333333%',
			duration: 0.4,
		}, 'circle')
		.to('.js-innerCircleRight', {
			opacity: 1,
			duration: 0.4,
		}, 'circle')
		.to('.js-innerCircleLeft', {
			opacity: 1,
			duration: 0.4,
		}, 'circle')

		.addLabel('changeLogo')
		.to('.js-outlineBottom', {
			right: '100vw',
			duration: 0.6,
		}, 'changeLogo')
		.to('.js-outlineTop', {
			left: '100vw',
			duration: 0.6,
		}, 'changeLogo')
		.to('.js-outlineLeft', {
			top: '100vh',
			duration: 0.6,
		}, 'changeLogo')
		.to('.js-outlineRight', {
			top: '-100vh',
			duration: 0.6,
		}, 'changeLogo')
		.to('.js-outlineCenterTop', {
			width: '9.6666667%',
			left: '57.8333333%',
			duration: 0.6,
		}, 'changeLogo')
		.to('.js-gline', {
			opacity: 1,
			duration: 0.6,
		}, 'changeLogo')

		.addLabel('hideHtml')
		.to('.js-line', {
			opacity: 0,
			duration: 0.6,
		}, 'hideHtml')
		.to('.js-splashSvg', {
			opacity: 1,
			duration: 0.6,
		}, 'hideHtml')

		.addLabel('white')
		.to('.js-g', {
			fill: '#fff',
			duration: 0.6,
		}, 'white')
		.to('.js-splashBox', {
			height: 'auto',
			duration: 0.6,
		}, 'white')

		.addLabel('miniLog')
		.to('.js-splashBox', {
			width: '3.90625vw',
			top: 'calc(1.32815vw + 27px)',
			position: 'fixed',
			duration: 0.6,
		}, 'miniLog')
		.to('.js-splash', {
			backgroundColor: 'transparent',
			duration: 0.6,
		}, 'miniLog')
		.to('.js-c', {
			stroke: '#000',
			duration: 0.6,
		}, 'miniLog')
		.to('.js-g', {
			fill: '#000',
			duration: 0.6,
		}, 'miniLog')
}