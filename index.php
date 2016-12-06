<!DOCTYPE HTML>
<html lang="ru">
<head>
    <meta charset="utf-8">
<title>Integracja Systemów </title>
	<link rel="stylesheet" href="css/style.css">
</head>
<body>
<header>
    <h1>Integracja Systemów (Zadanie 1-7)</h1>
</header>
<main>
  <a class="find"  href="#">poszukiwanie linkow na stronie intrnet sklepu</a><br>
  <a class="add_to_db" href="#">add product to db</a><br>
  <br>

  <p>format pobierania danych:</p>
  <form id="radio">
    <input type="radio" name="format" value="XML" id="radio0" checked> XML
    <input type="radio" name="format" value="JSON" id="radio1"> JSON
  </form>
  <br>

  <p>wybierz styles xml:</p>
  <form id="styles">
    <input type="radio" name="format" value="styles1" id="style0" checked> template 1
    <input type="radio" name="format" value="styles2" id="style1"> template 2
    <input type="radio" name="format" value="styles3" id="style2"> template 3
  </form>

  <p>Pobramie elementow za pomoca roznych fukcji baz danych</p>

    <a class="first" href="#">pobiermaie pirwszych elementow </a><br>
    <a class="first10" href="#">pobiermaie pirwszych 10 elementow </a><br>
    <a class="first100" href="#"> pobiermaie pirwszych 50 elementow </a><br>
    <a class="last" href="#">pobiermaie ostatnich  elementow </a><br>
    <a class="last10" href="#"> pobiermaie ostatnich 10  elementow </a><br>
    <a class="last100" href="#"> pobiermaie ostatnich  50 elementow </a><br>
    <a class="rand" href="#">pobiermaie losowego elemnta</a><br>
    <a class="all_elements" href="#"> pobiermaie wszystkich  elementow</a><br><br><br>

</main>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
    <script type="text/javascript">
        $(document).ready(function(){

            $('.find').click(function(){
              for (var i = 2; i < 100; i++) {getLinkSmartfon(i);
            }
          });
            function getLinkSmartfon(i){
              $.ajax({
              type:"POST",
              url:"/link.php",
              data: {
                  url: 'http://rozetka.com.ua/mobile-phones/c80003/filter/page='+i+'/',
                  elem: 'div.g-i-tile-catalog .g-i-tile-i-image>.responsive-img'
              },
              dataType:"json",
                  success: function(data){for (var k = 0; k < data.length; k++) {$('main').append('<a href="'+data[k]+'">LINK SMARTFON </a> ||| ');}
                  }
              });
            }

            $('.add_to_db').click(function(){
              var links = $('a');
              for (var i = 0; i < links.length; i++) {
                console.log(links[i].href);
                var url = links[i].href;
                var elem = 'section.detail-tabs-i dl.detail-chars-l dd.detail-chars-l-i-field';
                $.ajax({
                type:"POST",
                url:"/produkt.php",
                data: {
                    url: url,
                    elem: elem
                },
                dataType:"json",
                    success: function(data){ console.log(data); }
                });
              }
            });

          $('.first').click(function(){ getDataDB('/elements/xml/get_data.php','pierwszy_element()') });
          $('.first10').click(function(){ getDataDB('/elements/xml/get_data.php','pierwsze10()') });
          $('.first100').click(function(){ getDataDB('/elements/xml/get_data.php','pierwsze100()') });
          $('.last').click(function(){ getDataDB('/elements/xml/get_data.php','ostatni()') });
          $('.last10').click(function(){ getDataDB('/elements/xml/get_data.php','ostatni10()') });
          $('.last100').click(function(){ getDataDB('/elements/xml/get_data.php','ostatni100()') });
          $('.rand').click(function(){ getDataDB('/elements/xml/get_data.php','losowy()') });
          $('.all_elements').click(function(){ getDataDB('/elements/xml/get_data.php','wszystkie()') });


          function getDataDB(url, procedura){
            if(!confirm("Pobrac dane?")){
              return false;
            }
            var styles = $('#styles input');
            var style ='';
            for (var i = 0; i < styles.length; i++) {
              if($('#style'+i).prop("checked")){
                style = $('#style'+i).val();
              }
            }

            var radio = $('#radio input');
            var format ='';
            for (var i = 0; i < radio.length; i++) {
              if($('#radio'+i).prop("checked")){
                format = $('#radio'+i).val();
              }
            }


            $.ajax({type:"POST", url: url, data: {procedura:procedura,style:style,format:format }, dataType:"json",
                success: function(data){window.location = "elements/xml/files/"+data; },
                error: function(){ alert('limit pobierania danych pszekrocono! ');  }
            });
          }
        });

    </script>
</body>
</html>
