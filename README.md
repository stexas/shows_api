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
<li> Php 7.0 o superior</li>
<li> Laravel/Lumen 5.5.*</li>
<li> Guzzle 6.3</li>
<li> Git </li>
 </ul>
<p align="justify">
Desirable Optimize the number of HTTP requests to the third party service
  Good structure, practices, readbility and maintainability
  Tests   
  Bitbucket / Gitlab or as a compressed archive. Please remember to provide configuration
  instructions, build details and any comments on your approach. 
  And remember to commit frequently, we want to see how your code progresses!
  </p>
</p><p><a target="_blank" href="https://www.youtube.com/watch?v=OZLzW9kKvx4">Video see in action</a></p>
<p><b>Methods</b></p>
<div class="panel panel-default">
    <h4>Search Tv Shows by Title</h4>
      <p>Usage example: <br>
        <a href="./shows/girl">http://www.apiurl.com/shows/girl</a> the word "girl" can be replaced by other word or expresion, this will give one result, multiple results or none, giving the title and score of this show</p>
      <p><b>Cases:</b>
      <br>
      We find an exact match with the searched text, then it will only be give back this unique match, filter these values to be non-case sensitive and non-typo tolerant (only “Deadwood” would be valid). i.e.<a target="_blank" href="./shows/Deadwood">http://www.apiurl.com/shows/Deadwood</a> result: <font color="green">{"title":"deadwood","score":28.742947}</font></p>
      <p>We did not find exact matches, but we found similar results. We will then return these results, i.e.<a target="_blank" href="./shows/girl">http://www.apiurl.com/shows/girl</a>, results: <font color="orange">[{"title":"girl\/girl scene","score":14.496037},{"title":"the wrong girl","score":14.045593},{"title":"new girl","score":13.951898},{"title":"lost girl","score":13.8056965},{"title":"our girl","score":13.739901},{"title":"gossip girl","score":13.103994},{"title":"aho-girl","score":12.882292},{"title":"ocean girl","score":12.580141},{"title":"hell girl","score":12.443226},{"title":"gunslinger girl","score":11.398543}]</font></p>
      <p>We do not find any result, then we give back an error 406 (no content) , i.e.<a target="_blank" href="./shows/comercio">http://www.apiurl.com/shows/comercio</a> result: <font color="red">[
"error",
"No Content"
]</font></p>
      <p>&nbsp;</p>
    </div>
</div>
</body>
</html>
