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

  <table>
  <tbody>
    <tr>
      <td>styles 1</td>
      <td>styles 2</td>
      <td>styles 3</td>
    </tr>
    <tr>
      <td>
        <label for="fonts">font</label>
        <select   name="fonts" id="fonts">
          <option value="'Aref Ruqaa', serif">Aref Ruqaa</option>
          <option value="'Oswald', sans-serif">Oswald</option>
          <option selected  value="'Montserrat', sans-serif">Montserrat</option>
          <option value="'Nova Script', cursive">Nova Script</option>
        </select>
        <br>

        <label for="font-size">font size</label>
        <select   name="font-size" id='font-size'>
          <option value="10px">10px</option>
          <option selected  value="15px">15px</option>
          <option value="20px">20px</option>
          <option value="25px">25px</option>
        </select>
        <br>

        <label for="background-color">background color</label>
        <select   name="background-color" id="background-color">
          <option value="#F0F8FF">AliceBlue</option>
          <option selected  value="#00FFFF">Aqua </option>
          <option value="#8A2BE2">BlueViolet </option>
          <option selected value="#A52A2A">Brown</option>
          <option value="#7FFF00">Chartreuse </option>
          <option  value="#FF7F50">Coral </option>
          <option value="#BDB76B">DarkKhaki </option>
          <option value="#2F4F4F">DarkSlateGray </option>


        </select>
        <br>

        <label for="color-fonts">color fonts</label>
        <select   name="color-fonts" id="color-fonts">
          <option value="#F0F8FF">AliceBlue</option>
          <option  value="#00FFFF">Aqua </option>
          <option value="#8A2BE2">BlueViolet </option>
          <option value="#A52A2A">Brown</option>
          <option value="#7FFF00">Chartreuse </option>
          <option value="#FF7F50">Coral </option>
          <option selected value="#BDB76B">DarkKhaki </option>
          <option value="#2F4F4F">DarkSlateGray </option>
        </select>
        <br>

        <label for="color-hover">color hover</label>
        <select   name="color-hover" id="color-hover">
          <option value="#F0F8FF">AliceBlue</option>
          <option value="#00FFFF">Aqua </option>
          <option value="#8A2BE2">BlueViolet </option>
          <option value="#A52A2A">Brown</option>
          <option value="#7FFF00">Chartreuse </option>
          <option value="#FF7F50">Coral </option>
          <option value="#BDB76B">DarkKhaki </option>
          <option selected value="#2F4F4F">DarkSlateGray </option>
        </select>
        <br>

        <label for="color-border">color border</label>
        <select   name="color-border" id="color-border">
          <option value="#F0F8FF">AliceBlue</option>
          <option  value="#00FFFF">Aqua </option>
          <option value="#8A2BE2">BlueViolet </option>
          <option value="#A52A2A">Brown</option>
          <option value="#7FFF00">Chartreuse </option>
          <option selected  value="#FF7F50">Coral </option>
          <option value="#BDB76B">DarkKhaki </option>
          <option value="#2F4F4F">DarkSlateGray </option>
        </select>
        <br>

        <label for="fonts-color-hover">background color hover</label>
        <select   name="fonts-color-hover" id="fonts-color-hover">
          <option value="#F0F8FF">AliceBlue</option>
          <option value="#00FFFF">Aqua </option>
          <option selected  value="#8A2BE2">BlueViolet </option>
          <option value="#A52A2A">Brown</option>
          <option value="#7FFF00">Chartreuse </option>
          <option value="#FF7F50">Coral </option>
          <option  value="#BDB76B">DarkKhaki </option>
          <option value="#2F4F4F">DarkSlateGray </option>
        </select>
        <br>


        <label for="background-elements">background elements</label>
        <select   name="background-elements" id="background-elements">
          <option value="#F0F8FF">AliceBlue</option>
          <option value="#00FFFF">Aqua </option>
          <option selected value="#8A2BE2">BlueViolet </option>
          <option value="#A52A2A">Brown</option>
          <option value="#7FFF00">Chartreuse </option>
          <option value="#FF7F50">Coral </option>
          <option value="#BDB76B">DarkKhaki </option>
          <option value="#2F4F4F">DarkSlateGray </option>
        </select>
        <br>

        <label for="padding-top">padding top</label>
        <select   name="padding-top" id="padding-top">
          <option value="5px">5px</option>
          <option selected  value="10px">10px</option>
          <option value="15px">15px</option>
        </select>
        <br>

        <label for="padding-bottom">padding bottom</label>
        <select   name="padding-bottom" id="padding-bottom">
          <option value="5px">5px</option>
          <option value="10px">10px</option>
          <option value="15px">15px</option>
        </select>
        <br>
      </td>
      <!-- template 2 -->
      <td>

        <label for="fonts2">font</label>
        <select   name="fonts2" id="fonts2">
          <option value="'Aref Ruqaa', serif">Aref Ruqaa</option>
          <option value="'Oswald', sans-serif">Oswald</option>
          <option value="'Montserrat', sans-serif">Montserrat</option>
          <option value="'Nova Script', cursive">Nova Script</option>
        </select>
        <br>

        <label for="font-size2">font size</label>
        <select   name="font-size2" id='font-size2'>
          <option value="10px">10px</option>
          <option selected   value="15px">15px</option>
          <option value="20px">20px</option>
          <option value="25px">25px</option>
        </select>
        <br>

        <label for="background-color2">background color</label>
        <select   name="background-color2" id="background-color2">
          <option value="#F0F8FF">AliceBlue</option>
          <option value="#00FFFF">Aqua </option>
          <option value="#8A2BE2">BlueViolet </option>
          <option value="#A52A2A">Brown</option>
          <option value="#7FFF00">Chartreuse </option>
          <option selected value="#FF7F50">Coral </option>
          <option value="#BDB76B">DarkKhaki </option>
          <option value="#2F4F4F">DarkSlateGray </option>


        </select>
        <br>

        <label for="color-fonts2">color fonts</label>
        <select   name="color-fonts2" id="color-fonts2">
          <option value="#F0F8FF">AliceBlue</option>
          <option value="#00FFFF">Aqua </option>
          <option value="#8A2BE2">BlueViolet </option>
          <option value="#A52A2A">Brown</option>
          <option value="#7FFF00">Chartreuse </option>
          <option value="#FF7F50">Coral </option>
          <option selected value="#BDB76B">DarkKhaki </option>
          <option value="#2F4F4F">DarkSlateGray </option>
        </select>
        <br>

        <label for="color-hover2">color hover</label>
        <select   name="color-hover2" id="color-hover2">
          <option value="#F0F8FF">AliceBlue</option>
          <option selected value="#00FFFF">Aqua </option>
          <option value="#8A2BE2">BlueViolet </option>
          <option value="#A52A2A">Brown</option>
          <option value="#7FFF00">Chartreuse </option>
          <option value="#FF7F50">Coral </option>
          <option value="#BDB76B">DarkKhaki </option>
          <option  value="#2F4F4F">DarkSlateGray </option>
        </select>
        <br>

        <label for="color-border2">color border</label>
        <select   name="color-border2" id="color-border2">
          <option value="#F0F8FF">AliceBlue</option>
          <option value="#00FFFF">Aqua </option>
          <option value="#8A2BE2">BlueViolet </option>
          <option value="#A52A2A">Brown</option>
          <option value="#7FFF00">Chartreuse </option>
          <option value="#FF7F50">Coral </option>
          <option selected value="#BDB76B">DarkKhaki </option>
          <option value="#2F4F4F">DarkSlateGray </option>
        </select>
        <br>

        <label for="fonts-color-hover2">background color hover</label>
        <select   name="fonts-color-hover2" id="fonts-color-hover2">
          <option value="#F0F8FF">AliceBlue</option>
          <option value="#00FFFF">Aqua </option>
          <option value="#8A2BE2">BlueViolet </option>
          <option value="#A52A2A">Brown</option>
          <option selected value="#7FFF00">Chartreuse </option>
          <option value="#FF7F50">Coral </option>
          <option value="#BDB76B">DarkKhaki </option>
          <option value="#2F4F4F">DarkSlateGray </option>
        </select>
        <br>


        <label for="background-elements2">background elements</label>
        <select   name="background-elements2" id="background-elements2">
          <option value="#F0F8FF">AliceBlue</option>
          <option value="#00FFFF">Aqua </option>
          <option value="#8A2BE2">BlueViolet </option>
          <option value="#A52A2A">Brown</option>
          <option value="#7FFF00">Chartreuse </option>
          <option value="#FF7F50">Coral </option>
          <option selected value="#BDB76B">DarkKhaki </option>
          <option value="#2F4F4F">DarkSlateGray </option>
        </select>
        <br>

        <label for="padding-top2">padding top</label>
        <select   name="padding-top2" id="padding-top2">
          <option value="5px">5px</option>
          <option selected value="10px">10px</option>
          <option value="15px">15px</option>
        </select>
        <br>

        <label for="padding-bottom2">padding bottom</label>
        <select   name="padding-bottom2" id="padding-bottom2">
          <option value="5px">5px</option>
          <option selected value="10px">10px</option>
          <option value="15px">15px</option>
        </select>
        <br>

      </td>
      <!-- template 3 -->
      <td>

        <label for="fonts3">font</label>
        <select   name="fonts3" id="fonts3">
          <option value="'Aref Ruqaa', serif">Aref Ruqaa</option>
          <option value="'Oswald', sans-serif">Oswald</option>
          <option selected value="'Montserrat', sans-serif">Montserrat</option>
          <option value="'Nova Script', cursive">Nova Script</option>
        </select>
        <br>

        <label for="font-size3">font size</label>
        <select   name="font-size3" id='font-size3'>
          <option value="10px">10px</option>
          <option value="15px">15px</option>
          <option selected value="20px">20px</option>
          <option value="25px">25px</option>
        </select>
        <br>

        <label for="background-color3">background color</label>
        <select   name="background-color3" id="background-color3">
          <option value="#F0F8FF">AliceBlue</option>
          <option value="#00FFFF">Aqua </option>
          <option value="#8A2BE2">BlueViolet </option>
          <option value="#A52A2A">Brown</option>
          <option value="#7FFF00">Chartreuse </option>
          <option selected value="#FF7F50">Coral </option>
          <option value="#BDB76B">DarkKhaki </option>
          <option value="#2F4F4F">DarkSlateGray </option>


        </select>
        <br>

        <label for="color-fonts3">color fonts</label>
        <select   name="color-fonts3" id="color-fonts3">
          <option value="#F0F8FF">AliceBlue</option>
          <option selected value="#00FFFF">Aqua </option>
          <option value="#8A2BE2">BlueViolet </option>
          <option value="#A52A2A">Brown</option>
          <option value="#7FFF00">Chartreuse </option>
          <option value="#FF7F50">Coral </option>
          <option value="#BDB76B">DarkKhaki </option>
          <option selected value="#2F4F4F">DarkSlateGray </option>
        </select>
        <br>

        <label for="color-hover3">color hover</label>
        <select   name="color-hover3" id="color-hover3">
          <option value="#F0F8FF">AliceBlue</option>
          <option selected value="#00FFFF">Aqua </option>
          <option value="#8A2BE2">BlueViolet </option>
          <option value="#A52A2A">Brown</option>
          <option value="#7FFF00">Chartreuse </option>
          <option value="#FF7F50">Coral </option>
          <option value="#BDB76B">DarkKhaki </option>
          <option selected value="#2F4F4F">DarkSlateGray </option>
        </select>
        <br>

        <label for="color-border3">color border</label>
        <select   name="color-border3" id="color-border3">
          <option value="#F0F8FF">AliceBlue</option>
          <option selected value="#00FFFF">Aqua </option>
          <option value="#8A2BE2">BlueViolet </option>
          <option value="#A52A2A">Brown</option>
          <option value="#7FFF00">Chartreuse </option>
          <option selected value="#FF7F50">Coral </option>
          <option value="#BDB76B">DarkKhaki </option>
          <option value="#2F4F4F">DarkSlateGray </option>
        </select>
        <br>

        <label for="fonts-color-hover3">background color hover</label>
        <select   name="fonts-color-hover3" id="fonts-color-hover3">
          <option value="#F0F8FF">AliceBlue</option>
          <option value="#00FFFF">Aqua </option>
          <option value="#8A2BE2">BlueViolet </option>
          <option selected value="#A52A2A">Brown</option>
          <option value="#7FFF00">Chartreuse </option>
          <option value="#FF7F50">Coral </option>
          <option selected value="#BDB76B">DarkKhaki </option>
          <option value="#2F4F4F">DarkSlateGray </option>
        </select>
        <br>


        <label for="background-elements3">background elements</label>
        <select   name="background-elements3" id="background-elements3">
          <option value="#F0F8FF">AliceBlue</option>
          <option value="#00FFFF">Aqua </option>
          <option selected value="#8A2BE2">BlueViolet </option>
          <option value="#A52A2A">Brown</option>
          <option value="#7FFF00">Chartreuse </option>
          <option selected value="#FF7F50">Coral </option>
          <option value="#BDB76B">DarkKhaki </option>
          <option value="#2F4F4F">DarkSlateGray </option>
        </select>
        <br>

        <label for="padding-top3">padding top</label>
        <select   name="padding-top3" id="padding-top3">
          <option value="5px">5px</option>
          <option value="10px">10px</option>
          <option value="15px">15px</option>
        </select>
        <br>

        <label for="padding-bottom3">padding bottom</label>
        <select   name="padding-bottom3" id="padding-bottom3">
          <option value="5px">5px</option>
          <option selected value="10px">10px</option>
          <option value="15px">15px</option>
        </select>
        <br>

      </td>
    </tr>
  </tbody>
  </table>

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

            var fonts = $('#fonts').val();
            var background_color =$('#background-color').val();
            var color_fonts =$('#color-fonts').val();
            var font_size =$('#font-size').val();
            var background_fonts =$('#background-fonts').val();
            var color_hover =$('#color-hover').val();
            var color_border =$('#color-border').val();
            var background_color_hover =$('#background-color-hover').val();
            var padding_bottom =$('#padding-bottom').val();
            var padding_top =$('#padding-top').val();
            var fonts_color_hover =$('#fonts-color-hover').val();

            var fonts2 = $('#fonts2').val();
            var background_color2 =$('#background-color2').val();
            var color_fonts2 =$('#color-fonts2').val();
            var font_size2 =$('#font-size2').val();
            var background_fonts2 =$('#background-fonts2').val();
            var color_hover2 =$('#color-hover2').val();
            var color_border2 =$('#color-border').val();
            var background_color_hover2 =$('#background-color-hover2').val();
            var padding_bottom2 =$('#padding-bottom2').val();
            var padding_top2 =$('#padding-top2').val();
            var fonts_color_hover2 =$('#fonts-color-hover2').val();

            var fonts3 = $('#fonts3').val();
            var background_color3 =$('#background-color3').val();
            var color_fonts3 =$('#color-fonts3').val();
            var font_size3 =$('#font-size3').val();
            var background_fonts3 =$('#background-fonts3').val();
            var color_hover3 =$('#color-hover3').val();
            var color_border3 =$('#color-border').val();
            var background_color_hover3 =$('#background-color-hover3').val();
            var padding_bottom3 =$('#padding-bottom3').val();
            var padding_top3 =$('#padding-top3').val();
            var fonts_color_hover3 =$('#fonts-color-hover3').val();

            $.ajax({type:"POST", url: url, data: {
              procedura:procedura,
              style:style, format:format,
              fonts:fonts, background_color:background_color, color_fonts:color_fonts, font_size:font_size, background_fonts:background_fonts,color_hover:color_hover, color_border:color_border, background_color_hover:background_color_hover, padding_bottom:padding_bottom, padding_top:padding_top, fonts_color_hover:fonts_color_hover,
              fonts2:fonts2, background_color2:background_color2, color_fonts2:color_fonts2, font_size2:font_size2, background_fonts2:background_fonts2,color_hover2:color_hover2, color_border2:color_border2, background_color_hover2:background_color_hover2, padding_bottom2:padding_bottom2, padding_top2:padding_top2, fonts_color_hover2:fonts_color_hover2,
              fonts3:fonts3, background_color3:background_color3, color_fonts3:color_fonts3, font_size3:font_size3, background_fonts3:background_fonts3,color_hover3:color_hover3, color_border3:color_border3, background_color_hover3:background_color_hover3, padding_bottom3:padding_bottom3, padding_top3:padding_top3, fonts_color_hover3:fonts_color_hover3
            }, dataType:"json",
                success: function(data){window.location = "elements/xml/files/"+data; },
                error: function(){ alert('limit pobierania danych pszekrocono! ');  }
            });
          }
        });

    </script>
</body>
</html>
