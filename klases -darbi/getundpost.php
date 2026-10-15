


    
<form method="POST" action="">
    <label for="vards">Vārds</label>
    <input type="text" id="vards" name="vards">

    <label for="email">E-pasts</label>
    <input type="email" name="email" id="email">

    <button type="submit">Nosūtīt</button>

</form>

<!-- 
Pieprasījuma ķēde
1. Lietotājs aizpilda formu.
2. Pārlūkprogramma serializē laukus pēc name.
3. Tiek nosūtīts GET vai POST pieprasījums.
4. PHP izveido $_GET vai $_POST superglobālo masīvu.
5. Servera kods validē un apstrādā datus.
6. Serveris ģenerē atbildi.
-->
<hr>
<form method="GET">
    <input type="search" name="q" placeholder="Meklēt">
    <button>Meklēt</button>
    <?php
        $q = $_GET["q"] ?? "";
        echo "Meklēt: " . htmlspecialchars($q, ENT_QUOTES, "UTF-8");
    ?>
</form>

<hr>

