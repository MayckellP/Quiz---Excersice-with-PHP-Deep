<div class="button fixed-bottom mb-3">
  <?php
  /*-------------------------------------------------------------------------------IF THE URL IS IN QUESTIONSPAGE */
    if($_SERVER['REQUEST_URI'] === "/questionsPage.php"){
      /*-------------------------------------------------------------------------------BUTTON (HOME) & BUTTON (NEXT) */
      echo 
      "<a href='index.php'><button type='button' class='btn me-3'> Home </button></a>
      
      <button type='submit' class='btn'> Next </button>";
    }
    /*-------------------------------------------------------------------------------IF THE URL IS IN INDEX */
    elseif($_SERVER['REQUEST_URI'] === "/index.php"){
      /*-------------------------------------------------------------------------------BUTTON (START) */
      echo 
      "<button type='submit' class='btn'> Start </button>";
    }
    /*-------------------------------------------------------------------------------IF THE URL IS IN RESULTPAGE */
    elseif($_SERVER['REQUEST_URI'] === "/resultPage.php"){
      /*-------------------------------------------------------------------------------BUTTON (PRINT TO .PDF) & BUTTON (RESTART) */
      echo 
      "<input type='butto' value='.pdf' class='btn me-3' onClick='window.print()'>

      <a href='index.php'><button type='submit' class='btn'> Restart </button></a>";
    }
  ?>
      
</div>