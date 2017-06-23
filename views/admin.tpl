<div class="sub-header" style="background-image:url('/images/admin-header.jpg');"></div>

<div class="con-wrapper" style="padding-bottom: 150px; text-align: center;">
  <h3>AJAX-FANS | </h3>
  <a href="model/process_uitloggen.php"><button class="tenue-thuis"><i class="fa fa-sign-out" aria-hidden="true"></i> UITLOGGEN</button></a>
  <a href="model/process_delete.php"><button class="tenue-uit" style="background-color: black;"><i class="fa fa-trash-o" aria-hidden="true"></i> ACCOUNT VERWIJDEREN</button></a>

  <h3>GEBRUIKERS BEHEREN</h3>
  <div class="tabel-content">
    <table>
      <tr>
        <th>ID</th>
        <th>GEBRUIKERSNAAM</th>
        <th>MAILADRES</th>
        <th>STATUS</th>
        <th></th>
      </tr>

      <tr>
        <form method="post" action="process_edit_1.php" />
          <td><input type="hidden" name="id" value="{$acc_id}" /></td>
          <td><input type="hidden" name="username" value="{$acc_username}" /></td>
          <td><input type="hidden" name="mailadres" value="{$acc_mailadres}" /></td>
          <td><input type="hidden" name="status" value="{$acc_status}" /></td>
          <td><input type="submit" name="submit" value="VERWIJDEREN" /></td>
        </form>
      </tr>
    </table>
  </div>


  <table>
    <tr>
    <td>{$acc_id}</td>
    <td>{$acc_username}</td>

    </tr>
  </table>

</div>
