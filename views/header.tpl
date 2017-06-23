<header>
  <div class="header_wrap">
    <div id="logo"><a href="./home"><img src="./images/ajax-fans-logo-bg.png" alt="logo" /></a></div>
      <nav>
        <h1>Menu</h1>
          <a href="./home"><i class="fa fa-home" aria-hidden="true"></i> HOME</a>
          <a href="./nieuws"><i class="fa fa-newspaper-o" aria-hidden="true"></i></i> NIEUWS</a>
          <a href="./competities"><i class="fa fa-futbol-o" aria-hidden="true"></i> COMPETITIES</a>
          <a href="./contact"><i class="fa fa-info-circle" aria-hidden="true"></i> CONTACT</a>
          {if isset($username)}
            <a href="./account" class="uploaden"><i class="fa fa-user-o" aria-hidden="true"></i> ACCOUNT {$username}</a>
          {else}
            <a href="./inloggen" class="uploaden"><i class="fa fa-user-o" aria-hidden="true"></i> INLOGGEN</a>
          {/if}


      </nav>
      <div id="header_menu"><i class="fa fa-bars" aria-hidden="true"></i></div>
  </div>
</header>
<body>
