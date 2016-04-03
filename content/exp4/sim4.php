<?php
    include 'nav4.php';
?>
    <div class="container" width="85%">
        <br/><br/><br/>
        <div class="row">
        <div class="col s4">
        <b>Enter the number of processes</b>
            <input type="number" id="n" min="1" max="10"/></div>
        <div class="col s4"><b>Enter the Quantum Time</b>
            <input type="number" min='1' max='10' id="Q"/></div>
        <br><div class="col s4"><button class='btn waves-effect waves-light'  type='submit' onclick='createtable1();'>Create Table<i class='material-icons right'>send</i></button></div></div>
        <div id="demo"></div>
        <div id="avg"  class="card-panel blue-text" style="font-size:1.5em;text-align:center;font-weight: bold"></div>
    </div>
</body>
</html>