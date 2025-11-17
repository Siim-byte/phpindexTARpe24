<?php
echo "<h2>GIT CMD käsurida</h2>";
echo "<ul>";
echo "<li>git init - uus repo</li>";
?>
<li>
    <pre>
git config --global user.name "Siim Beloi"

git config --global user.email "beloimiis@gmail.com"<br>

git config --global --list
    </pre>
</li>
<li>
//ssh võti loomine
    <pre>
ssh-keygen -o -t rsa -C "beloimiis@gmail.com"
<br>//võti salvestatakse opilane/.ssh kausta
<br>//id_rsa.pub tuleb kopeerida oma git hub -reposse
</pre>
</li>
 <li>
     <pre>
  git add .
 git commit -a -m "on loodud phpIndex"
 git remote remove origin
         </pre>
</li>
<li>
    <pre>
git remote add origin git@github.com:Siim-byte/phpindexTARpe24.git
git branch -M main
git push -u origin main
        </pre>
</li>