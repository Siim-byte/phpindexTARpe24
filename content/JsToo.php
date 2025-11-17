<h1>Joonistamine JS-ga</h1>
<canvas id="tahvel" width="300" height="250"></canvas>
<br>
<input type="button" value="Puhasta" onclick="puhasta()">
<br>
<input type="button" value="Sirge joon" onclick="sirgeJoon()">
<label for="raadius">R:</label>
<input type="number" id="raadius" min="0" max="100" value="5" onchange="ring()">
<input type="button" value="Kolmnurk" onclick="kolmnurk()">
<input type="button" value="Ring" onclick="ring()">
<br>
<label for="laius">Laius:</label>
<input type="number" id="laius" min="0" max="100" value="5" onchange="ristkylik()">
<label for="korgus">Korgus</label>
<input type="number" id="korgus" min="0" max="100" value="5" onchange="ristkylik()">
<input type="button" value="ristkulik" onclick="ristkylik()">
<br>
<input type="button" value="picsum pilt" onclick="pilt()">
<br>
<legend>Valgusfoor</legend>
<input type="button"  value="Mine" onclick="mine()">
<input type="button"  value="Oota" onclick="oota()">
<input type="button" value="Seisa" onclick="seisa()">

<!-- Lipude joonistamine -->
<h1>Lipud</h1>
<canvas id="lipp" width="330" height="210"></canvas>
<input type="button" value="Eesti lipp" onclick="eestilipp()">
<input type="button" value="Prantsusmaa lipp" onclick="prantsusmaa()">
<input type="button" value="Hispaania lipp" onclick="hispaania()">