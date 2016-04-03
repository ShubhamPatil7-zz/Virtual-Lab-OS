<?php
    include 'nav1.php';
?>
    <div class="container" width="85%">
        <br/><br/><br/>
        <div class="row">
        <div class="col s6">
        <b>Enter the number of processes</b>
            <input type="number" id="n" min="1" max="10"/></div>
            <br><div class="col s4"><button class='btn waves-effect waves-light'  type='submit' onclick='createtable();'>Create Table
                <i class='material-icons right'>send</i></button></div></div>
        <div id="demo"></div>
        <div id="avg" class="card-panel blue-text" style="font-size:1.5em;text-align:center;font-weight: bold"></div>
        <div id="avg1"></div>
        <div id="avg2"></div>
        <div id="avg3"></div>
    </div>
</body>
</html>