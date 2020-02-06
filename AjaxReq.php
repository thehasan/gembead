<!DOCTYPE html>
<html>
<head>
	<title>Aax</title>
	<script
  src="https://code.jquery.com/jquery-3.4.1.min.js"
  integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="
  crossorigin="anonymous"></script>
</head>
<body>

<div class="content-container"></div>

<a class="link" id="link" href="redirect.php"><h1>Click Here</h1></a>
<a class="link" id="link" href="red1.php"><h1>Click Here1</h1></a>
<a class="link" id="link" href="red2.php"><h1>Click Here2</h1></a>
<a class="link" id="link" href="red3.php"><h1>Click Here3</h1></a>
<a class="link" id="link" href="red4.php"><h1>Click Here3</h1></a>

<script type="text/javascript">
 // $(".link").attr("onclick", "myfun(this.href)");


function  myfun(url)
  {
   //   window.history.replace('stateObject', 'New Title', url)
      alert(url);

  }
  
$('.link').click(function (event) { 
  event.preventDefault(); 


   var url = $(this).attr('href');

   $.get(url, function(data) {
     // alert(data);
      window.history.replace('stateObject', 'New Title', url)

      // code to display/render your new page content
      // supposing data holds valclass HTML
      $("body").html(data);

      //document.getElementByclass('content-container').innerHTML = data
    });
 });
</script>
</body>
</html>


