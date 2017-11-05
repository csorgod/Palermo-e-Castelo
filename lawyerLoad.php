<?php 

  require_once('../language/lang-control.php');
  require_once('admin/classes/DAO.php');
  require_once("admin/config.php");

  $id = $_GET['id'];

  $dao = new DAO();

  $result = $dao->select("SELECT * FROM TB_ADVOGADOS WHERE ID_LAWYER = :ID", Array(":ID"=>$id));

  $resultPublication = $dao->select("SELECT * FROM TB_PUBLICACOES_E_EVENTOS WHERE ID_LAWYER = :ID", Array(":ID"=>$id));
  
 ?>

<?php foreach ($result as $row) { 
  $row['IMG_PATH'] = substr($row['IMG_PATH'], 6); ?>
<div class="row">
  <div class="row">
    <h3 class="lawyer-name"><?php echo $row['TXT_NAME'] ?></h3>
    <p class="lawyer-short-description"><?php echo $row['TXT_DESCRIPTION'] ?></p>
  </div>
  <div class="row">

    <div class="col-md-4" style="padding-left: 0px;">
      <?php echo '<img src="'.$row['IMG_PATH'].'" alt="Foto do advogado" class="img-responsive img-lawyer">'; ?>
    </div>

    <div class="col-md-6" style="padding-left: 50px;">
      <div class="row">
        <div class="description-header">
          <p class="description-header-text"><?php echo $lang['advogados_actuation_title'] ?></p>
        </div>
        <p class="description-text">
          <?php echo $row['TXT_ATUATION'] ?>
        </p>
      </div>
      <div class="row">
        <div class="description-header">
          <p class="description-header-text"><?php echo $lang['advogados_experience_title'] ?></p>
        </div>
        <p class="description-text">
          <?php echo $row['TXT_EXPERIENCE'] ?>
        </p>
      </div>
      <div class="row">
        <div class="description-header">
          <p class="description-header-text"><?php echo $lang['advogados_graduation_title'] ?></p>
        </div>
        <p class="description-text">
          <?php echo $row['TXT_GRADUATION'] ?>
        </p>
      </div>
      <div class="row">
        <div class="description-header">
          <p class="description-header-text"><?php echo $lang['advogados_language_title'] ?></p>
        </div>
        <p class="description-text">
          <?php echo $row['TXT_LANGUAGE'] ?>
        </p>
      </div>
    </div>
<?php  } ?>
  </div>
  <div class="col-md-10">

      <div class="row">
        <div class="description-header">
          <p class="description-header-text"><?php echo $lang['advogados_publication_title'] ?></p>
        </div>
<?php foreach ($resultPublication as $row) { 
  $createDate = new DateTime($row['DT_CREATED']); 
    if(!isset($row)){ echo 'vazio'; ?>

<?php } ?>
        <div class="row once-publication"> 
          <p class="publication-year"><?php echo $createDate->format('Y') ?></p>
          <p class="publication-day-month"><?php echo $createDate->format('d/m') ?></p>
          <p class="description-text-publication"><?php echo $row['TXT_DESCRIPTION'] ?></p>
          <a href="publicacoeseventos.php" class="publication-link">VER MAIS ></a>
        </div>
<?php } ?>
      </div>

      <div class="row">
        <div class="description-header">
          <p class="description-header-text"><?php echo $lang['advogados_contact_title'] ?></p>
        </div>
        <p class="description-text">
          <span class="custom-font" style="display: inline-block;">0</span>  <?php echo $row['TXT_EMAIL'] ?> <br>
          <span class="custom-font" style="display: inline-block;">6</span>  <?php echo $row['TXT_TEL'] ?> <br>
          <span class="custom-font" style="display: inline-block;">6</span>  <?php echo $row['TXT_CEL'] ?>
        </p>
      </div>


</div>
