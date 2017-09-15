<!DOCTYPE html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" href='./css/bootstrap.min.css'>
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
<li> Php 7.0 o superior</li>
<li> Laravel/Lumen 5.5.*</li>
<li> Guzzle 6.3</li>
<li> Git </li>
 </ul>
<p align="justify">
Desirable Optimize the number of HTTP requests to the third party service
  Good structure, practices, readability and maintainability
  Tests   
  Bitbucket / Gitlab or as a compressed archive. Please remember to provide configuration
  instructions, build details and any comments on your approach. 
  And remember to commit frequently, we want to see how your code progresses!
  </p>
</p><p><a target="_blank" href="https://www.youtube.com/watch?v=bOYOUdFjeK4">Video see in action</a></p>
<p><b>Methods</b></p>
<div class="panel panel-default">
    <h4>Search Tv Shows by Title</h4>
      <p>Usage example: <br>
        <a href="./shows/girl">http://www.apiurl.com/shows/girl</a> the word "girl" can be replaced by other word or expresion</p>
      <p><b>Cases:</b>
      <br>We find an exact match with the searched text, then it will only be give back this unique match, filter these values to be non-case sensitive and non-typo tolerant (only “Deadwood” would be valid). i.e.<a target="_blank" href="./shows/Game of Thrones">http://www.apiurl.com/shows/Game of Thrones</a> </p>
      <p>We did not find exact matches, but we found similar results. We will then return these results, i.e.<a target="_blank" href="./shows/girl">http://www.apiurl.com/shows/girl</a></p>
      <p>We do not find any result, then we give back an error 406 (no content) , i.e.<a target="_blank" href="./shows/comercio">http://www.apiurl.com/shows/comercio</p>
      <p>&nbsp;</p>
    </div>
</div>
</body>
</html>
