<?php include_once 'inc/head.php' ?>
<body class="login-register-body">
  <div class="wrapper">
    <div class="list">
      <div>
        <h1>Hello, <?= $username ?></h1>
      </div>
      <a href="/game" class="links">
        <section>
          Play Quiz
        </section>
      </a>
      <a href="/highscores" class="links">
        <section>
          Scoreboard
        </section>
      </a>
        
      <form class="logoutForm" action="/login" method="POST">
        <input type="hidden" name="_method" value="DELETE">
        <button>Logout</button>
      </form>
        
    </div> 
  </div>

<?php include_once 'inc/footer.php' ?>