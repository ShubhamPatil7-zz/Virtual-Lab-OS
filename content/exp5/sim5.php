<?php
    include 'nav5.php';
?>
    <br/><br/><br/>
    <div class="container" style= "width:90%;">
       <div class="container" style="width:85%;">
          <div class="row">
             <form class="col s12">
                <div class="row">
                   <div class="input-field col s6">
                      <i class="material-icons prefix">content_copy</i>
                      <input type="number" id="page" length="40" class="validate">
                      <label for="page" class="sim5">Enter the pages </label>
                   </div>
                   <div class="input-field col s6">
                      <i class="material-icons prefix">format_list_numbered</i>
                      <input type="number" id="frame" class="validate">
                      <label for="frame" class="sim5">Frame size</label>
                   </div>
                </div>
                <center><a class="waves-effect waves-light btn" onclick='lru();'>
                   <i class="material-icons right">send</i>Submit</a>
                   <button class='btn waves-effect waves-light' type='submit' onclick='window.print();'>Print
                   <i class='material-icons right'>launch</i></button>
                </center>
             </form>
          </div>
         <div id="temp" style="display:none" class="card-panel indigo lighten-5"></div>
        </div>
    </div>
</body>
</html>