<?php

 if(empty($_GET['page'])){
     
?>

  </div>
  <script src="../assets/contextmenu.js"></script>
   <script>
        createContextmenu(document.body, [
            {'text': 'Context Menu',
              'extraText': ' .',
            },
            
            'divider',
           
            {
                'text': 'Crt Mode',
                'extraText': 'Shake it',
                'onclick': e=>crt()
            },
            {
                'text': 'Full Screen',
                'extraText': 'FS',
                'onclick': e=>openFullscreen()
            },
            {
                'text': 'Min Screen',
                'extraText': 'CS',
                'onclick': e=>closeFullscreen()
            },
            'divider',
            {
                'text': 'Screen',
                'extraText': '>>',
                'sub':[
                   
                    {
                'text': 'Crt Mode',
                'extraText': 'Shake it',
                'onclick': e=>crt()
            },
            {
                'text': 'Full Screen',
                'extraText': 'ctrl+shift+d',
                'onclick': e=>openFullscreen()
            },
            {
                'text': 'Min Screen',
                'extraText': '',
                'onclick': e=>closeFullscreen()
            },
                     //text of empty items default to "text"
                ]
            },
        
        ])
    </script>


<script>

var elem = document.documentElement;
function openFullscreen() {
  if (elem.requestFullscreen) {
    elem.requestFullscreen();
  } else if (elem.webkitRequestFullscreen) { /* Safari */
    elem.webkitRequestFullscreen();
  } else if (elem.msRequestFullscreen) { /* IE11 */
    elem.msRequestFullscreen();
  }
}

function closeFullscreen() {
  if (document.exitFullscreen) {
    document.exitFullscreen();
  } else if (document.webkitExitFullscreen) { /* Safari */
    document.webkitExitFullscreen();
  } else if (document.msExitFullscreen) { /* IE11 */
    document.msExitFullscreen();
  }
}
</script>

<script>
function crt() {
   var element = document.getElementById("crt_main");
   element.classList.toggle("crt");
}
</script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>






<script type="text/javascript" src="redirect-ajax.js"></script>

</body>
</html>     
<?php
}
?>