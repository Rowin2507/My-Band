<div class="sub-header" style="background-image:url('/images/competities-header.jpg');"></div>

<div class="sub-wrapper">
  <h1 style="margin-top:25px;"><i class="fa fa-futbol-o" aria-hidden="true"></i> EREDIVISIE</h1>
  <div class="gray-wrapper">
    <div class="tabellen">
      <div class="tabel">
        <h2>STAND</h2>
        <div class="tabel-content">
          <table>
            <tr>
              <th></th>
              <th>TEAM</th>
              <th>G</th>
              <th>P</th>
              <th>D</th>
            </tr>
            {foreach from=$eredivisie_stand item=club}
            <tr>
              <td id="id">{$club.id}</td>
              <td id="club">{$club.team}</td>
              <td id="punten">{$club.gespeeld}</td>
              <td id="gespeeld">{$club.punten}</td>
              <td id="doelpunten">{$club.doelpunten}</td>
            </tr>
            {/foreach}
          </table>
        </div>
        <span style="margin-top:25px; display:block;">Seizoen 2016 - 2017</span>
      </div>

      <div class="tabel">
        <h2>TOPSCORERS</h2>
        <div class="tabel-content">
          <table>
            <tr>
              <th></th>
              <th>SPELER</th>
              <th></th>
              <th>CLUB</th>
              <th>D</th>
            </tr>
            {foreach from=$eredivisie_top_scorers item=speler}
            <tr>
              <td id="id">{$speler.id}</td>
              <td id="club">{$speler.speler}</td>
              <td></td>
              <td id="punten">{$speler.club}</td>
              <td id="doelpunten">{$speler.doelpunten}</td>
            </tr>
            {/foreach}
          </table>
        </div>
        <span style="margin-top:25px; display:block;">Seizoen 2016 - 2017</span>
      </div>
    </div>
  </div>

    <h1 style="margin-top:25px;"><i class="fa fa-futbol-o" aria-hidden="true"></i> JUPILER LEAGUE</h1>
    <div class="gray-wrapper" style="margin-bottom:150px;">
      <div class="tabellen">
        <div class="tabel">
          <h2>STAND</h2>
          <div class="tabel-content">
            <table>
              <tr>
                <th></th>
                <th>TEAM</th>
                <th>G</th>
                <th>P</th>
                <th>D</th>
              </tr>
              {foreach from=$jupiler_league_stand item=club}
              <tr>
                <td id="id">{$club.id}</td>
                <td id="club">{$club.team}</td>
                <td id="punten">{$club.gespeeld}</td>
                <td id="gespeeld">{$club.punten}</td>
                <td id="doelpunten">{$club.doelpunten}</td>
              </tr>
              {/foreach}
            </table>
          </div>
          <span style="margin-top:25px; display:block;">Seizoen 2016 - 2017</span>
        </div>

        <div class="tabel">
          <h2>TOPSCORERS</h2>
          <div class="tabel-content">
            <table>
              <tr>
                <th></th>
                <th>SPELER</th>
                <th></th>
                <th>CLUB</th>
                <th>D</th>
              </tr>
              {foreach from=$jupiler_league_top_scorers item=speler}
              <tr>
                <td id="id">{$speler.id}</td>
                <td id="club">{$speler.speler}</td>
                <td></td>
                <td id="punten">{$speler.club}</td>
                <td id="doelpunten">{$speler.doelpunten}</td>
              </tr>
              {/foreach}
            </table>
          </div>
          <span style="margin-top:25px; display:block;">Seizoen 2016 - 2017</span>
        </div>
      </div>
  </div>







</div>
