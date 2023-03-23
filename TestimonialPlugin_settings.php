<?php
// Als er op bewaar wordt geklikt, bewaar het in de WP option.
if(isset($_POST['first_submit'])){
    $footertext = trim($_POST['firsttextname']);
     update_option('first_text', $footertext);
    $footertext = trim($_POST['firstwriter']);
    update_option('first_writer', $footertext);
}

?>
<div class="wrap">
 <h2>Beheer tekst</h2>
 <?php if(isset($_POST['first_submit'])): ?>
 <div id="message" class="updated below-h2">
   <p>Opgeslagen!</p>
 </div>
 <?php endif; ?>
 <div class="metabox-holder">
   <div class="postbox">
     <h3>Wijzig teksten</h3>
     <form action="" method="post">
       <table class="form-table">
         <tr>
           <td scope="row">Footer tekst</td>
           <td><input type="text" name="firsttextname" maxlength="255" value="<?php echo get_option('first_text');?>"></td>
         </tr>
           <tr>
               <td scope="row">writer tekst</td>
               <td><input type="text" name="firstwriter" maxlength="255" value="<?php echo get_option('first_writer');?>"></td>
           </tr>
         <tr>
           <td scope="row">&nbsp;</td>
           <td><input type="submit" name="first_submit" value="Opslaan" class="button-primary"></td>
         </tr>
       </table>
     </form>
   </div>
 </div>
</div>
<?php
// Als er op bewaar wordt geklikt, bewaar het in de WP option.
if(isset($_POST['second_submit'])){
    $footertext = trim($_POST['secondtextname']);
    update_option('second_text', $footertext);
    $footertext = trim($_POST['secondwriter']);
    update_option('second_writer', $footertext);
}

?>
<div class="wrap">
    <h2>Beheer tekst</h2>
    <?php if(isset($_POST['second_submit'])): ?>
        <div id="message" class="updated below-h2">
            <p>Opgeslagen!</p>
        </div>
    <?php endif; ?>
    <div class="metabox-holder">
        <div class="postbox">
            <h3>Wijzig teksten</h3>
            <form action="" method="post">
                <table class="form-table">
                    <tr>
                        <td scope="row">Footer tekst</td>
                        <td><input type="text" name="secondtextname" maxlength="255" value="<?php echo get_option('second_text');?>"></td>
                    </tr>
                    <tr>
                        <td scope="row">writer tekst</td>
                        <td><input type="text" name="secondwriter" maxlength="255" value="<?php echo get_option('second_writer');?>"></td>
                    </tr>
                    <tr>
                        <td scope="row">&nbsp;</td>
                        <td><input type="submit" name="second_submit" value="Opslaan" class="button-primary"></td>
                    </tr>
                </table>
            </form>
        </div>
    </div>
</div>
<?php
// Als er op bewaar wordt geklikt, bewaar het in de WP option.
if(isset($_POST['third_submit'])){
    $footertext = trim($_POST['thirdtextname']);
    update_option('third_text', $footertext);
    $footertext = trim($_POST['thirdwriter']);
    update_option('third_writer', $footertext);
}

?>
<div class="wrap">
    <h2>Beheer tekst</h2>
    <?php if(isset($_POST['third_submit'])): ?>
        <div id="message" class="updated below-h2">
            <p>Opgeslagen!</p>
        </div>
    <?php endif; ?>
    <div class="metabox-holder">
        <div class="postbox">
            <h3>Wijzig teksten</h3>
            <form action="" method="post">
                <table class="form-table">
                    <tr>
                        <td scope="row">Footer tekst</td>
                        <td><input type="text" name="thirdtextname" maxlength="255" value="<?php echo get_option('third_text');?>"></td>
                    </tr>
                    <tr>
                        <td scope="row">writer tekst</td>
                        <td><input type="text" name="thirdwriter" maxlength="255" value="<?php echo get_option('third_writer');?>"></td>
                    </tr>
                    <tr>
                        <td scope="row">&nbsp;</td>
                        <td><input type="submit" name="third_submit" value="Opslaan" class="button-primary"></td>
                    </tr>
                </table>
            </form>
        </div>
    </div>
</div>