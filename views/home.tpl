{foreach from=$home_feed_list item=feed}
  <div class="header-post">
    <div class="post-header-image" style="background-image:url('{$feed.img}');"></div>
    <div class="header-bg-gradient"></div>
    <div class="content">
      <label><a href="#artikel{$feed.id}"><h1>{$feed.title}</h1>
      Lees het volledige artikel <span><i class="fa fa-arrow-right" aria-hidden="true"></i></span></a></label>
    </div>
  </div>

    <div class="lightbox short-animate" id="artikel{$feed.id}">
      <div class="lightbox-content">
        <div class="lightbox-image" style="background-image:url('{$feed.img}');"></div>
        <div class="lightbox-content-text">
          <span style="display: inline-block; margin-top: 25px"><i class="fa fa-clock-o" aria-hidden="true"></i> {$feed.datum}</span>
          <p><h1>{$feed.title}</h1></p>
          <p>{$feed.content}</p>
        </div>
      </div>
    </div>
    <div id="lightbox-controls" class="short-animate">
      <a id="close-lightbox" class="long-animate" href="#!"></a>
    </div>
{/foreach}
{foreach from=$feed_list item=feed}
  <div class="posts">
    <div class="post-image" style="background-image:url('{$feed.img}');"></div>
    <div class="content">
      <label><a href="#artikel{$feed.id}"><h1>{$feed.title}</h1>
      Lees het volledige artikel <span><i class="fa fa-arrow-right" aria-hidden="true"></i></span></a></label>
    </div>
  </div>

  <div class="lightbox short-animate" id="artikel{$feed.id}">
    <div class="lightbox-content">
      <div class="lightbox-image" style="background-image:url('{$feed.img}');"></div>
      <div class="lightbox-content-text">
        <span style="display: inline-block; margin-top: 25px"><i class="fa fa-clock-o" aria-hidden="true"></i> {$feed.datum}</span>
        <p><h1>{$feed.title}</h1></p>
        <p>{$feed.content}</p>
      </div>
    </div>
  </div>
  <div id="lightbox-controls" class="short-animate">
    <a id="close-lightbox" class="long-animate" href="#!"></a>
  </div>
{/foreach}

<div class="nieuws-button">
  <a href="./nieuws"><button class="nieuws-button">MEER WEERGEVEN</button></a>
</div>


{if isset($session_username)}
  {$username}
  <a href="./o" class="uploaden"><i class="fa fa-user-o" aria-hidden="true"></i> INLOGGEN</a>
{else}
  <a href="./inloggen" class="uploaden"><i class="fa fa-user-o" aria-hidden="true"></i> INLOGGEN {$username}</a>
{/if}

<a href="model/process_uitloggen.php">loguit</a>


<div class="spacer">
  <div class="container">
    <h3>Wat is AJAX-FANS?</h3>
    <strong>http://ajax-fans.pe.hu</strong> is een website van Rowin Schmidt waar gebruikers kunnen praten/ delen over AFCA AJAX bedoeld voor AJAX supporters. De website is enigszins te vergelijken met feyenoord.nl of psv.nl maar toch anders omdat hier iedereen alles met elkaar kan delen in tegenstelling tot de concurrerende sites.
  </div>
</div>

<div class="parallax spelers" data-parallax-speed="0.75">
  <div class="parallax-content">
    <h1>HET EERSTE</h1>
  </div>
</div>

<div class="spacer tallSpacer">
  <div class="container">
    <h3>Selectie AJAX 2017-2018</h3>
    <strong>Spelers:</strong><br>
    Norbert Alblas,
    Andre Onana,
    Mitchell Dijks,
    Matthijs de Ligt,
    Jairo Riedewald,
    Davinson Sánchez,
    Kenny Tete,
    Joël Veltman,
    Nick Viergever,
    Heiko Westermann,
    Donny van de Beek,
    Frenkie de Jong,
    Davy Klaassen,
    Abdelhak Nouri,
    Lasse Schöne,
    Daley Sinkgraven,
    Hakim Ziyech,
    Mateo Cassierra,
    Vaclav Cerny,
    Kasper Dolberg,
    Klaas-Jan Huntelaar,
    David Neres,
    Amin Younes

    <p></p><strong>Trainer:</strong><br>
    Peter Bosch
  </div>
</div>

<div class="parallax stadion" data-parallax-speed="0.25">
  <div class="parallax-content">
    <h1>JOHAN CRUIJF ARENA</h1>
  </div>
</div>

<div class="spacer">
  <div class="container">
    <h3>Het AJAX stadion</h3>
    De Amsterdam ArenA is een multifunctioneel stadion aan de noordwest-kant van de ArenA Boulevard op nog geen 200 meter ten westen van Station Amsterdam Bijlmer ArenA. Het is met 54.033 zitplaatsen het grootste stadion van Nederland. Sinds 14 augustus 1996 is het de thuisbasis van de voetbalclub AFC Ajax. Ook de american footballers van Amsterdam Admirals speelden er hun thuiswedstrijden.
    Met een helling van 37 graden zijn de tribunes van de ArenA de op drie na steilste van Europa. In 2020 is de ArenA een van de speelstadions voor het EK.
  </div>
</div>

<div class="wrap">
  <div class="tenue-wrap">
    <div class="tenue-wrap-links">
      <h1>Het nieuwe AJAX tenue</h1>
      <p>Het uitshirt voor seizoen 2017-2018 is een ontwerp van traditionele, herkenbare kleuren.
        Inspiratie voor het donkerblauw en ‘Ajax’-rood komt uit het tenue waarin Ajax zijn laatste grote Europese successen vierde.
        Meest opvallende details zijn de rode strepen op de schouder en de grafische carbon-print op de voorkant van het shirt.</p>
        <p></p>
        <span>
          Klik hieronder om het nieuwe tenue te bestellen.<p></p>
          <a href="https://www.ajaxshop.nl/nl/wedstrijd/thuistenue" target="_blank"><button class="tenue-thuis">THUISTENUE</button></a>
          <a href="https://www.ajaxshop.nl/nl/wedstrijd/uittenue" target="_blank"><button class="tenue-uit">UITTENUE</button></a>
        </span>
    </div>
    <div class="tenue-wrap-rechts">
      <div class="box" id="a-box" data-scroll-speed="4"><img src="./images/tenue-thuis-2017.png"></div>
      <div class="box" id="r-box" data-scroll-speed="6" style="z-index:-1;"><img src="./images/tenue-uit-2017.png"></div>
    </div>
  </div>
</div>
