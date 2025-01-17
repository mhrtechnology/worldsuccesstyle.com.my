let currentURL = location.href
let docTitle = document.querySelector('title').textContent
let docDesc = document.querySelector('h1').textContent + '\n' + document.querySelector('p').textContent
let currentPage = location.pathname.slice(1)
if (document.querySelector('.nav') && currentPage) {
	document.querySelector(`a[href=${currentPage}]`).classList.add('active')
	let dropPage = document.querySelector(`a[href=${currentPage}]`).parentElement.parentElement.parentElement.children[0]
	if (dropPage) {
		dropPage.classList.add('btn-outline-primary', 'active')
	}
}
const referrers = `<meta charset="utf-8">\
<meta http-equiv="Content-Type" content="text/html">\
<meta http-equiv="content-language" content="ms-MY">\
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=yes">\
<meta name="robots" content="all">\
<meta name="language" content="Malay">\
<meta name="author" content="HafiziRuslan">\
<meta name="title" content="${docTitle}">\
<meta name="description" content="${docDesc}">\
<meta property="og:site_name" content="WorldSucessStyleSB">\
<meta property="og:title" content="${docTitle}">\
<meta property="og:description" content="${docDesc}">\
<meta property="og:url" content="${currentURL}">\
<meta property="og:image" content="/assets/favicon/favicon-194x194.png">\
<meta property="og:type" content="website">\
<meta property="og:locale" content="ms-MY">\
<meta name="twitter:title" content="${docTitle}">\
<meta name="twitter:description" content="${docDesc}">\
<meta name="twitter:url" content="${currentURL}">\
<meta name="twitter:image" content="/assets/favicon/favicon-194x194.png">\
<meta name="twitter:creator" content="@HafiziRuslan">`
const colorScheme = '<meta name="color-scheme" content="auto">'
const favIcons = '<link rel="apple-touch-icon" sizes="180x180" href="/assets/favicon/apple-touch-icon.png">\
<link rel="icon" type="image/png" sizes="32x32" href="/assets/favicon/favicon-32x32.png">\
<link rel="icon" type="image/png" sizes="194x194" href="/assets/favicon/favicon-194x194.png">\
<link rel="icon" type="image/png" sizes="192x192" href="/assets/favicon/android-chrome-192x192.png">\
<link rel="icon" type="image/png" sizes="16x16" href="/assets/favicon/favicon-16x16.png">\
<link rel="manifest" href="/assets/favicon/site.webmanifest">\
<link rel="mask-icon" href="/assets/favicon/safari-pinned-tab.svg" color="#5bbad5">\
<link rel="shortcut icon" href="/assets/favicon/favicon.ico">\
<meta name="msapplication-TileColor" content="#ffffff">\
<meta name="msapplication-TileImage" content="/assets/favicon/mstile-144x144.png">\
<meta name="msapplication-config" content="/assets/favicon/browserconfig.xml">\
<meta name="theme-color" content="#ffffff">'
document.querySelector('head').insertAdjacentHTML('beforeend', referrers + colorScheme + favIcons)

const bodyStartLinks = '<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-TS2FWL45" height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>'
document.querySelector('body').insertAdjacentHTML('afterbegin', bodyStartLinks)

// const bodyEndLinks = '<button id="scrollToTop" class="btn position-fixed bottom-0 start-0"><i class="bi-arrow-up-square fs-1"></i></button>\
// <script src="https://cdn.jsdelivr.net/npm/bootstrap@latest/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>\
// <script src="https://cdn.jsdelivr.net/npm/jquery@latest/dist/jquery.min.js" crossorigin="anonymous"></script>\
// <script src="/assets/js/sources.js"></script>\
// <script src="/assets/js/stt.js"></script>\
// <!-- <script src="/assets/js/theme.js"></script> -->'
// document.querySelector('body').insertAdjacentHTML('beforeend', bodyEndLinks)