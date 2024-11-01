function init_social_proof_sales (hash)
{
	if (!hash)
	{
		return;
	}

	insertJs_social_proof_sales(hash);
}

function insertJs_social_proof_sales (hash)
{
	var script = document.createElement("script");
	script.type = "text/javascript";
	script.src = `https://smartarget.online/loader.js?ver=${Math.random()}&u=${hash}&source=wordpress_social_proof_sales`;
	document.head.appendChild(script);
}

init_social_proof_sales(smartarget_social_proof_sales_params.hash);
