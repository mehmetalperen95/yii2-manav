

<?php echo "*ilk web sayfası denemem bir işlevselliği yoktur. modülde yazılmıs  meyveler ve firmalar tablolarına ulasım sağlanamamış sorun çözülememiştir. " ?>

<?php echo "mehmet alperen onarır 180202083 / internet programcılıgı dersi projesi" ?>
<html>
<head>
    <title>ilk web sayfam</title>
    <script type="text/javascript">
        var toplamKg=0;

        function ekle(deger1) {

               deger1=5;
                toplamKg = toplamKg + deger1;
                document.getElementById('sonuc').value = toplamKg;


        }

    </script>
</head>
<body>

<button style="background-color:sandybrown;color:white;width:100%;"> Online Manava Hoşgeldiniz  <button>




        <button style="background-color:sandybrown;color:white;width:100%;">   <button>
        <button style="background-color:red;color:white;width:15%;"> Amasya Elması  <button>
                        <form>
                            Kg:
                            <input type="number" name="Kg" min="0" max="15" step="1" value="5" />
                            <input type="button" value="Sepete Ekle" id="topla" onclick="ekle()" />
                        </form>

        <button style="background-color:sandybrown;color:white;width:100%;">   <button>
        <button style="background-color:#ffcc00;color:white;width:15%;"> Muz  <button>
                         <form>
                            Kg:
                            <input type="number" name="Kg" min="0" max="15" step="1" value="5" />
                            <input type="button" value="Sepete Ekle" id="topla" onclick="ekle()" />
                         </form>


        <button style="background-color:sandybrown;color:white;width:100%;">   <button>
            <button style="background-color:greenyellow;color:white;width:15%;"> Erik  <button>
            <form>
            Kg:
          <input type="number" name="Kg" min="0" max="15" step="1" value="5" />
                <input type="button" value="Sepete Ekle" id="topla" onclick="ekle()" />
                                                        </form>

        <button style="background-color:sandybrown;color:white;width:100%;">   <button>
          <button style="background-color:slateblue;color:white;width:15%;"> Üzüm  <button>
                                                                        <form>
                                                                            Kg:
          <input type="number" name="Kg" min="0" max="15" step="1" value="5" />
            <input type="button" value="Sepete Ekle" id="topla" onclick="ekle()" />
                                                                        </form>

          <button style="background-color:sandybrown;color:white;width:100%;">   <button>
                        <button style="background-color:orange;color:white;width:15%;"> Portakal  <button>
                                                        <form>
                                                                                            Kg:
                         <input type="number" name="Kg" min="0" max="15" step="1" value="5" />
               <input type="button" value="Sepete Ekle" id="topla" onclick="ekle()" />
                    </form>

         <button style="background-color:sandybrown;color:white;width:100%;">   <button>
          <button style="background-color:crimson;color:white;width:15%;"> Şeftali  <button>
                <form>
                        Kg:
                  <input type="number" id="ss" name="Kg" min="0" max="15" step="1" value="5" />
              <input type="button" value="Sepete Ekle" id="topla" onclick="ekle()" />
            </form>

                              <br />

                              ToplamKg</t></t><br /><input type="text" id="sonuc" />
</body>
</html>






