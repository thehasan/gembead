<html>
  <head>
    <title>Michelle Gienow | Portfolio</title>
    <meta name="description" content="A portfolio site for Michelle Gienow's photographic and web development work">
    <link id="favicon" rel="icon" href="assets/sparklericonLite.png" type="image/x-icon">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="/style.css">
    <link href="https://fonts.googleapis.com/css?family=Raleway:400,700,800|Roboto" rel="stylesheet">
    <style type="text/css">
    	html,
body, h1, h2, h3, p, div, li, ul {
  margin: 0;
  padding: 0;
  font-family: Roboto;
  /*color: #2e3738;*/
}


.sparks {
  display: flex;
  flex-direction: column;
  height: 100vh;
  overflow-x: hidden;
  overflow-y: hidden;
  background: url("https://cdn.hyperdev.com/26ca6cc4-973c-4dcf-a43a-321c1d9f6606%2Fsparkler.jpg")center center no-repeat;
  -webkit-background-size: cover;
  -moz-background-size: cover;
  -o-background-size: cover;
}

#title{
  font-family: 'Raleway', sanserif;
  font-weight: 400;
  font-size: 4em;
  color: #fff;
  opacity: 0.85;
  text-align: center;
}


@media (min-width: 85em){
  #title {
    font-size: 7.5em;
    font-weight: 700;
    opacity: 0.8;
  }
}
]
.sparks h1{
  margin-top: 0.7em !important;
}
@media (min-width: 29em){
  #nopipe::after {
    content: "|";
    padding-left: 5px;
  }
}
@media (max-width: 47em) {
  #ido {
    flex-direction: column;
    width: 100% !important;
    align-items: center;
  }
  #projects {
    flex-direction: column;
    margin: 0 auto;
  }
  #potato, #arctangent, #heavey {
    width: 90% !important;
    margin: 0 auto;
  }
  #arctangent, #heavey {
    padding-bottom: 1em;
  }
}
@media (max-width: 28em){
  #projects {
    flex-direction: column;
    margin: 0 auto;
  }
  #potato, #arctangent, #heavey {
  width: 90vw;
  margin: 0 auto;
  }
  .centerPage {
    display: flex;
    align-items: center;
  }
}


#ido{
  display: flex;
  width: 50%;
  justify-content: space-around;
  margin: 0 auto;
}

.sparks h2 {
  margin-left: 1em;
  color: #FC963D;
  opacity: 0.7;
  font-weight: 200;
  font-style: italic;
  font-family: 'Roboto', Arial, sans-serif;
}
@media (min-width: 85em){
  #ido{
    font-size: 2em;
    opacity: 1;
  }
}
a {
  text-decoration: none;
  color: #FFF;
  /*opacity: .7;*/
}

a:hover {
color: #FC963D;
}

@media (min-width: 85em){
  .barLink{
    font-size: 2.5em;
  }
  #ido {
    width: 60%;
  }
}

#bar {
  display: flex;
  flex-direction: column;
  margin-top: 5em;
  margin-bottom: 8em;
}
#bar li{
  margin: 0 0 1.5em 2em;
  list-style: none;
  font-size: 1.5em;
  font-family: 'Raleway';
}

@media (max-width: 28em){
  #bar {
    margin-top: 3em;
    padding-left: 1em;
  }
}
@media (max-width: 47em) {
  #bar {
    margin-top: 2em;
    padding-left: 1em;
  }
  #bar ul{
    margin-bottom: 2em;
  }
  #bar li {
    margin: 0;
  }
}



/*   ====== PORTFOLIO ======*/
#portfolio {
  display: flex;
  align-content: center;
  flex-direction: column;
}
#porfolioP {
    color: #FC963D;
      padding: 0.5em;
      text-align: center;
      font-size: 2.5em;
      line-height: 1.4;
}
#projects {
  display: flex;
  margin: 0 auto;
  width: 95%;
  padding-bottom: 2em;
  justify-content: space-between;
}
#potato, #arctangent, #heavey {
width: 25vw;
}
#project1, #project2, #project3 {
  display: flex;
  flex-direction: column;
  margin: 0 auto;
  width: 80%;
  font-family: "Raleway";
  color: #2e3738;
  font-size: 1.5em !important;
  text-align: center;
}

.projectP {
  width: 80%;
  margin: 0 auto;
  padding-top: 1em;
}
@media (min-width: 85em){
  #portfolioP{
    font-size: 3.5em;
  }
}
/* ==== Contact/Make Sparks ====== */
#sparks2 {
  display: flex;
  flex-direction: column;
  height: 100vh;
  overflow-x: hidden;
  overflow-y: hidden;
  background: url("https://cdn.hyperdev.com/26ca6cc4-973c-4dcf-a43a-321c1d9f6606%2Fsparklers.jpg")center center no-repeat;
  -webkit-background-size: cover;
  -moz-background-size: cover;
  -o-background-size: cover;
}
#sparks2 h1{
  color: #fff;
  text-align: center;
  font-family: 'Raleway', sanserif;
  font-weight: 400;
  padding-top: 1em;
  font-size: 4em;
  opacity: 0.8;

}
/* ======= SOCIAL MEDIA ====== */

#social {
display: flex;
justify-content: center;
}
.socialImg {
  max-height: 3em;
  margin-top: 1.5em;
}
@media (min-width: 85em){
  .socialImg {
    max-height: 4.5em;
  }
}
/*   ====== FOOTER ======== */
footer a{
  color: #FC963D;
}
footer {
  background-color: #677A81;
  height: 1.6em;
  display: flex;
  justify-content: center;
  align-items: center;
}
footer p{
  padding: 0 !important;
  color: #fff;
  
  font-size: smaller;
  opacity: 0.8;
  display: flex;
  justify-content: flex-end;
}
footer p:nth-child(2) {
  justify-content: flex-start;
  margin-left: 5px;
}
#madeHeart {
  font-size: 1em;
}

@media (max-width: 28em){

  footer{
    flex-direction: column;
    padding: 0.5em 0;
  }
  footer p{
    justify-content: center !important;
    align-items: center !important;
    margin: 0;
  }
}
    </style>
  </head>
  <body>

    <div class="sparks">
      <h1 id="title">michelle gienow</h1>

      <div id="ido">
        <h2>web developer</h2>
        <h2>photographer</h2>
      </div>

      <div id="bar">
        <ul>
        <li><a class='barLink' href="#portfolio">portfolio</a></li>
        <li><a class='barLink' href="#">about</a></li>
        <li><a class='barLink' href="#social">contact</a></li>
        </ul>
      </div>
    </div>

<div id="portfolio">
<p id="porfolioP">Recent Projects</p>
  <div id="projects">
    <div id="project1">
      <a class="centerPage" href="#"><img id="arctangent" src="https://cdn.gomix.com/26ca6cc4-973c-4dcf-a43a-321c1d9f6606%2FarctangentProjectThumb.png"></a>
      <p class="projectP">Sales gallery for a custom gem cutting business.</p>
    </div>
    <div id="project2">
      <a class="centerPage" href="#"><img id="heavey" src="https://cdn.gomix.com/26ca6cc4-973c-4dcf-a43a-321c1d9f6606%2FheaveyProjectThumb.png"></a>
      <p class="projectP">Website and blog for outdoors author Bill Heavey</p>
      </div>
    <div id="project3">
    <a class="centerPage" href="#"><img id="potato" src="https://cdn.gomix.com/26ca6cc4-973c-4dcf-a43a-321c1d9f6606%2FpotatoProjectThumb.png"></a>
    <p class="projectP">Fun demo site for the Potato&trade; "brand".</p>
    </div>
  </div>
</div>

<div id="sparks2">
  <h1>Let's make sparks!</h1>
  <div id="social">
    <a href="https://github.com/mgienow/"> <img class="socialImg" src="https://cdn.gomix.com/26ca6cc4-973c-4dcf-a43a-321c1d9f6606%2FGithub3.png"></a>
    <a href="https://www.codewars.com/users/mgienow"> <img class="socialImg" src="https://cdn.gomix.com/26ca6cc4-973c-4dcf-a43a-321c1d9f6606%2Fcodewars3.png"></a>
    <a href="mailto:michellegienow@gmail.com"><img class="socialImg" src="https://cdn.gomix.com/26ca6cc4-973c-4dcf-a43a-321c1d9f6606%2Femail2.png"></a>
    <a href="https://www.linkedin.com/in/michelle-gienow-00007055"><img class="socialImg" src="https://cdn.gomix.com/26ca6cc4-973c-4dcf-a43a-321c1d9f6606%2FLinkedin3.png"></a>
    <a href="https://medium.com/@michellegienow"><img class="socialImg" src="https://cdn.gomix.com/26ca6cc4-973c-4dcf-a43a-321c1d9f6606%2Fmedium2.png"></a>
  </div>
</div>
<footer>
  <p id="nopipe">&copy;2017 Michelle Gienow      </p>
<p><a href="http://madewithloveinbaltimore.org">  Made with &hearts; in Baltimore</a></p>
</footer>

<script type="text/javascript" src='/client.js'></script>
</body>

</html>


