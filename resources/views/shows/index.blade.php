<!DOCTYPE html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" href='./css/bootstrap.min.css'>
<title>API - Shows</title>
</head>
<body>
<div class="container">
	<h1>Shows Api</h1>
	<p>JSON API to search tv shows titles and scores from a third
party service (<a target="_blank" href="http://www.tvmaze.com/api">http://www.tvmaze.com/api</a>). </p>
<small>
The only accepted request data for this API 
should be a query string. Other requests should return invalid response. 

Take into account that this third party service has some typo tolerance:
i.e. GET /?q=deadwood would return “Deadpool”, “Redwood Kings”, “Deadwood”... </small>
</p>
<p>
You should filter these values to be non-case sensitive and non-typo tolerant (only “Deadwood” would be valid).
</p>
<p>
 
<b>Requirements </b>
<ul>
<li> Laravel/Lumen</li>
<li> Git </li>
 </ul>
Desirable
 
 
 Optimize the number of HTTP requests to the third party service
 Good structure, practices, readability and maintainability
 Tests 

Bitbucket / Gitlab or as a compressed archive. Please remember to provide configuration
instructions, build details and any comments on your approach. 
And remember to commit frequently, we want to see how your code progresses!  
	</p>
    <div class="panel panel-default">
    Metodo 1: <br>
    <a href="./shows/1">test</a>
    </div>
</div>
</body>
</html>
