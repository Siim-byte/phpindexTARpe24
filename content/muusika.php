<h1>Muusika küsitlus</h1>
<form action="">
    <fieldset>
        <legend>Milliseid muusikuid/ansambleid sa tead?</legend>
        <input type="checkbox" name="ansambel" id="abba" value="ABBA" onchange="valiAnsambel()">
        <label for="abba">ABBA</label>
        <br>
        <input type="checkbox" name="ansambel" id="the" value="The Beatles" onchange="valiAnsambel()">
        <label for="the">The Beatles</label>
        <br>
        <input type="checkbox" name="ansambel" id="system" value="System of Down" onchange="valiAnsambel()">
        <label for="system">System of Down</label>
        <br>
        <input type="checkbox" name="ansambel" id="lemon" value="Lemon" onchange="valiAnsambel()">
        <label for="lemon">Lemon</label>
        <br>
        <div id="vastus"></div>
        <br><br>
    </fieldset>

    <fieldset>
        <legend>Mida arvad muusika kuulamisest koolis?</legend>
        <textarea name="arvamus" id="arvamus" cols="25" rows="5" onkeydown="minuArvamus()"></textarea>
        <br><br>
        <div id="vastus2"></div>
    </fieldset>
    <fieldset>
        <legend>Mitu tundi päevas sa kuulad muusikat?</legend>
        <input type="range" id="tundi" name="tundi" min="0" max="24" value="0" onchange="tundiMuusika()">
        <br>
        <div id="vastus3"></div>
    </fieldset>
    <fieldset>
        <legend>Kas sa kuulad raadiot?</legend>
        <input type="radio" name="raadio" id="ja" value="Jah" onclick="radioValik()">
        <label for="ja">Ja</label>
        <input type="radio" name="raadio" id="ei" value="Ei" onclick="radioValik()">
        <label for="ei">Ei</label>
        <br><br>
        <div id="vastus4"></div>
    </fieldset>
    <fieldset>
        <legend>Milliseid raadiojaamu oskad nimetada?</legend>
        <input list="jaamad" name="nimetada" id="nimetada" oninput="nimetatudJaamad()">
        <datalist id="jaamad">
            <option value="Sky Plus">
            <option value="Elmar">
            <option value="Star FM">
            <option value="Power Hit Radio">
            <option value="Raadio 2">
        </datalist>
        <br><br>
        <div id="vastus5"></div>
    </fieldset>
    <fieldset>
        <legend>Millist muusikat sa kõige rohkem kuulad?</legend>
        <select name="muusika" id="muusika" onchange="muusikaStiilSelect()">
            <option value="">Vali...</option>
            <option value="Metal">Metal</option>
            <option value="Pop">Pop</option>
            <option value="Hiphop">Hiphop</option>
            <option value="Drum ja bass">Drum ja bass</option>
            <option value="Retro">Retro</option>
            <option value="Funk">Funk</option>
        </select>
        <br><br>
        <div id="vastus6"></div>
    </fieldset>
    <button type="button" onclick="saada()">Saada</button>
    <button type="button" id="Loobu" onclick="puhasta()">Puhasta</button>
</form>


<div id="kokkuvote"></div>

<footer>
    &copy;Siim 2025
</footer>