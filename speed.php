<!DOCTYPE html>
<html>

	<head>
		<link rel="shortcut icon" href="favicon.ico">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no, user-scalable=no" />
		<meta charset="UTF-8" />
		<script type="text/javascript" src="/speed/speedtest.js"></script>
		<script type="text/javascript" src="/speed/speedtest_ui.js"></script>
		<link rel="stylesheet" href="/speed/speedtest.css">
		<title>WORLD SUCCESS STYLE Speed Test</title>
	</head>

	<body onload="initServers()">
		<h1>WORLD SUCCESS STYLE Speed Test</h1>
		<div id="loading" class="visible">
			<p id="message"><span class="loadCircle"></span>Selecting a server...</p>
		</div>
		<div id="testWrapper" class="hidden">
			<div id="startStopBtn" onclick="startStop()"></div><br />
			<a class="privacy" href="#" onclick="I('privacyPolicy').style.display=''">Privacy</a>
			<div id="serverArea"> Server: <select id="server" onchange="s.setSelectedServer(SPEEDTEST_SERVERS[this.value])"></select>
			</div>
			<div id="test">
				<div class="testGroup">
					<div class="testArea2">
						<div class="testName">Ping</div>
						<div id="pingText" class="meterText" style="color:#AA6060"></div>
						<div class="unit">ms</div>
					</div>
					<div class="testArea2">
						<div class="testName">Jitter</div>
						<div id="jitText" class="meterText" style="color:#AA6060"></div>
						<div class="unit">ms</div>
					</div>
				</div>
				<div class="testGroup">
					<div class="testArea">
						<div class="testName">Download</div>
						<canvas id="dlMeter" class="meter"></canvas>
						<div id="dlText" class="meterText"></div>
						<div class="unit">Mbit/s</div>
					</div>
					<div class="testArea">
						<div class="testName">Upload</div>
						<canvas id="ulMeter" class="meter"></canvas>
						<div id="ulText" class="meterText"></div>
						<div class="unit">Mbit/s</div>
					</div>
				</div>
				<div id="ipArea">
					<span id="ip"></span>
				</div>
				<div id="shareArea" style="display:none">
					<h3>Share results</h3>
					<p>Test ID: <span id="testId"></span></p>
					<input type="text" value="" id="resultsURL" readonly="readonly" onclick="this.select();this.focus();this.select();document.execCommand('copy');alert('Link copied')" />
					<img src="" id="resultsImg" />
				</div>
			</div>
		</div>
		<div id="privacyPolicy" style="display:none">
			<h2>Privacy Policy</h2>
			<p>This HTML5 speed test server is configured with telemetry enabled.</p>
			<h4>What data we collect</h4>
			<p> At the end of the test, the following data is collected and stored:
			<ul>
				<li>Test ID</li>
				<li>Time of testing</li>
				<li>Test results (download and upload speed, ping and jitter)</li>
				<li>IP address</li>
				<li>ISP information</li>
				<li>Approximate location (inferred from IP address, not GPS)</li>
				<li>User agent and browser locale</li>
				<li>Test log (contains no personal information)</li>
			</ul>
			</p>
			<h4>How we use the data</h4>
			<p> Data collected through this service is used to:
			<ul>
				<li>Allow sharing of test results (sharable image for forums, etc.)</li>
				<li>To improve the service offered to you (for instance, to detect problems on our side)</li>
			</ul> No personal information is disclosed to third parties. </p>
			<h4>Your consent</h4>
			<p> By starting the test, you consent to the terms of this privacy policy. </p>
			<h4>Data removal</h4>
			<p> If you want to have your information deleted, you need to provide either the ID of the test or your IP address. This is the only way to identify your data, without this information we won't be able to comply with your request.<br /><br /> Contact this email address for all deletion requests: <a href="mailto:worldsuccesstyle@mhrtech.my">worldsuccesstyle@mhrtech.my</a>. </p>
			<br /><br />
			<div class="closePrivacyPolicy">
				<a class="privacy" href="#" onclick="I('privacyPolicy').style.display='none'">Close</a>
			</div>
			<br />
		</div>
	</body>

</html>