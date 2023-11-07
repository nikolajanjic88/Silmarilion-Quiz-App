<?php include_once 'inc/gamehead.php'; ?>
    <div class="container-end">
      <div id="end" class="flex-center">
        <div class="img-silmarilion">
          <img src="images/silmarilion.jpg" alt="">
        </div>
        <h1 id="finalScore"></h1>
        <form method="POST">
          <input type="hidden" id="finalScoreInput" name="score">
          <button type="submit" class="btn" id="saveScoreBtn">
            Save
          </button>
        </form>
        <a class="btn" href="/game">Play Again</a>
        <a class="btn" href="/menu">Go Home</a>
      </div>
    </div>
    <script src="js/end.js"></script>
  </body>
</html>