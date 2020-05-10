var configureSitemapRequest;
var targetDomain;
var ongoingStatus;
var downloadBtn;

function ConfigureSitemap(){
	document.getElementById('ongoingStatusHolder').style.display = "block";
	loadingGif = document.getElementById('loadingGif');
	loadingGif.style.display = "block";
	downloadBtn = document.getElementById("downloadBtn");
	downloadBtn.style.display = "none";
	ongoingStatus = document.getElementById('ongoingStatus');

	var urlProtocol = document.getElementById('urlProtocol').value;
	var targetUrl = document.getElementById('targetUrl').value.trim();
	var lastmod = document.getElementById('lastmod').checked;
	var changefreq = document.getElementById('changefreq').checked;
	var priority = document.getElementById('priority').checked;
	var outputDestination = "./../v/temp/" + targetUrl + ".xml";
	targetDomain = targetUrl;

	if (urlProtocol == "ssl"){
		targetUrl = "https://" + targetUrl;
	} else if (urlProtocol == "nonssl"){
		targetUrl = "http://" + targetUrl;
	}

	console.log(targetUrl, lastmod, changefreq, priority, outputDestination);

	var url = "./c/sitemap.php"
			+ "?targetUrl=" + targetUrl 
			+ "&lastmod=" + lastmod
			+ "&changefreq=" + changefreq
			+ "&priority=" + priority
			+ "&outputDestination=" + outputDestination;
  
	if(window.XMLHttpRequest){  
		configureSitemapRequest = new XMLHttpRequest();  
	} else if(window.ActiveXObject){  
		configureSitemapRequest = new ActiveXObject("Microsoft.XMLHTTP");  
	}  
	
	try{  
		configureSitemapRequest.onreadystatechange = configureSitemapResponse;  
		configureSitemapRequest.open("GET",url,true);  
		configureSitemapRequest.send();  
	}catch(e){
		alert("Unable to connect to server");
	}

	//display ongoing status
	setTimeout(function(){
		ongoingStatus.innerHTML = "URL has been submited to cloud engine.";
	}, 500);
	setTimeout(function(){
		ongoingStatus.innerHTML += "<br>URL is being processed.";
	}, 700);
}  
  
function configureSitemapResponse(){  
	if(configureSitemapRequest.readyState == 4){
		res = configureSitemapRequest.responseText;
		console.log(res);

		ongoingStatus.innerHTML += '<br>Sitemap generated, Click <i class="fas fa-download text-info"></i> to download.';
		var downloadLink = "./v/temp/" + targetDomain + ".xml";
		downloadBtn.href = downloadLink;
		document.getElementById('loadingGif').style.display = "none";
		downloadBtn.style.display = "block";
	}  
}