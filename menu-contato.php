<div class="row form-row" style="">
  <div class="col-md-6"> 
    <div class="row">
      <iframe id="iframe" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3656.973540473014!2d-46.6927121167414!3d-23.569393765146422!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94ce570a8bac0133%3A0x4f5e0ed552111354!2sAv.+Brg.+Faria+Lima%2C+1306+-+Jardim+Paulistano%2C+S%C3%A3o+Paulo+-+SP%2C+01451-001!5e0!3m2!1spt-BR!2sbr!4v1496509215747" frameborder="0" class="i-frame" allowfullscreen>
        </iframe> 
        <div class="row div-info" style="margin-top: -60px;">
          <div class="col-md-6 contact-info">
              <div class="contato-desc"><p class="font-adjust"> <span class="custom-font-gray">0</span>  contato@palermoecastelo.com.br</p><br /></div>
              <div class="contato-desc"><p class="font-adjust"> <span class="custom-font-gray">6</span>  +55 (11) 5085-9999</p><br /></div>
              <div class="contato-desc"><p class="font-adjust" style="letter-spacing: -1px"> <span class="custom-font-gray">4</span>  Bgd. Faria Lima 1800 - 8º Andar - CEP 01451-914 - São Paulo/SP</p><br /></div>
              <div class="contato-desc" style="margin-top: 36px">
                <span><?php echo $lang['menucontato_left_spanfollow'] ?></span>
                <a href="" class="custom-font-gray">1 </a>
                <a href="" class="custom-font-gray">2 </a>
                <a href="" class="custom-font-gray">3 </a>
                <a href="" class="custom-font-gray">5 </a>  
              </div>
           </div>
            <div class="col-md-1 divisor">
              <hr class="vertical" />
            </div>
          <div class="col-md-4 div-newsletter">
            <h3 class="title-newsletter">Newsletter</h3>
            <form method="post" action="form-newsletter.php">
                <p class="descritivo-newsletter"><?php echo $lang['menucontato_left_descritivo_newsletter'] ?></p>
                <input type="text" placeholder="NOME:" class="form-control form-margin-newsletter" name="nome" id="nome" maxlength="30">
                <div class="email-newsletter-background">
                  <input type="text" placeholder="E-MAIL:" class="email-custom" name="email" id="email" maxlength="30">
                  <button type="submit" class="button-newsletter" style="float: right;"><?php echo $lang['menucontato_left_button_newsletter'] ?></button>
                </div>
            </form>
          </div>
        </div> 
    </div>
  </div>
  <div class="col-md-6">
    <form method="post" action="form-contact.php" enctype="multipart/form-data">
      <div class="form-group row form-margin">
          <div class="col-md-6">
            <input type="text" placeholder="<?php echo $lang['menucontato_right_form_placeholder_name'] ?>" class="form-control form-margin" name="nome" id="nome" maxlength="50">
          </div>
          <div class="col-md-5">
            <input type="text" placeholder="<?php echo $lang['menucontato_right_form_placeholder_tel'] ?>" class="form-control form-margin" name="tel" id="tel" maxlength="30">
          </div>
          <div class="col-md-11">
            <input type="email" placeholder="<?php echo $lang['menucontato_right_form_placeholder_email'] ?>" class="form-control form-margin" name="email" id="email" maxlength="80">
          </div>
          <div class="col-md-11">
            <input type="text" placeholder="<?php echo $lang['menucontato_right_form_placeholder_subject'] ?>" class="form-control form-margin" name="subject" id="subject" maxlength="30">
          </div>
          <div class="col-md-11 file-upload-background no-padding-right">
            <p class="text-fileupload"><?php echo $lang['menucontato_right_form_placeholder_file_title'] ?></p>
            <div class="fileUpload button-search-file">
              <label class="label-upload" for="fupload"><?php echo $lang['menucontato_right_form_placeholder_file_button'] ?></label>
              <input type="file" id="fupload" name="file" class="upload" onchange="getFileName()" />
            </div>
          </div>
              
          <div class="col-md-11">
            <textarea class="form-control form-margin" placeholder="<?php echo $lang['menucontato_right_form_placeholder_message'] ?>" rows="7" maxlength="500" name="message" id="message"></textarea>
          </div>
          <div class="col-md-12">
            <button type="submit" class="btn-custom" id="submit-button"><?php echo $lang['menucontato_right_form_placeholder_submit_button'] ?></button>  
          </div>
      </div>
    </form> 
  </div>
</div>