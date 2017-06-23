<div class="sub-header" style="background-image:url('/images/account-header.jpg');"></div>

<div class="con-wrapper" style="padding-bottom: 150px; text-align: center;">
  <h3>ACCOUNT | {$username}</h3>
  <a href="model/process_uitloggen.php"><button class="tenue-thuis"><i class="fa fa-sign-out" aria-hidden="true"></i> UITLOGGEN</button></a>
  <a href="model/process_delete.php"><button class="tenue-uit" style="background-color: black;"><i class="fa fa-trash-o" aria-hidden="true"></i> ACCOUNT VERWIJDEREN</button></a>

  <h3>NIEUWSBERICHT POSTEN</h3>
  <p><img src="../images/uploadImage.png" id="preview" alt="PreviewImage" />
    <form enctype="multipart/form-data" method="post" action="model/process_uploaden.php" id="upload-form">
      <input type="hidden" name="MAX_FILE_SIZE" value="10000000" />
      <label class="upload"><input type="file" name="image" onchange="readURL(this);" />
      <span class="upload-button-select" style="color: white;"><i class="fa fa-picture-o" aria-hidden="true"></i> AFBEELDING SELECTEREN</span>
      </label><p>
      <p><span class="item" style="margin-top: 32px;"><i class="fa fa-futbol-o" aria-hidden="true"></i></span><input type="text" name="title" style="margin-top: 30px;" placeholder="Titel" required/></p>
      <p><span class="item" style="margin-top: 7px;"><i class="fa fa-comment-o" aria-hidden="true"></i></span><textarea name="content" placeholder="Beschrijving" required></textarea></p>
      <p><input type="submit" name="submit" class="uploaden" value="&#xf093; BERICHT POSTEN" />
    </form>
</div>
