<div class="header-bg-gradient"></div>

<div class="nieuws-wrap" onclick="https://www.google.nl/">
  {foreach from=$result item=feed}
    <a href="#artikel{$feed.id}"><div class="nieuws-posts">
      <div class="post-image" style="background-image:url('{$feed.img}');"></div>
      <span class="datum"><i class="fa fa-clock-o" aria-hidden="true"></i> {$feed.datum}</span>
      <div class="content">
        <h1>{$feed.title}</h1>
        Lees het volledige artikel <span><i class="fa fa-arrow-right" aria-hidden="true"></i></span>
      </div>
    </div></a>

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

  <div class="paginas-wrap">
    {if $page gt 1}
      <span id="paginas-links">
        <a href="index.php?page=nieuws&pagina={$page-1}"><i class="fa fa-angle-left" aria-hidden="true"></i> Vorige</a>
      </span>
    {/if}
    <p id="pagenumber">Pagina {$page}</p>
    {if $page lt $number_of_pages}
      <span id="paginas-rechts">
        <a href="index.php?page=nieuws&pagina={$page+1}">Volgende <i class="fa fa-angle-right" aria-hidden="true"></i></a>
      </span>
    {/if}
  </div>
</div>
