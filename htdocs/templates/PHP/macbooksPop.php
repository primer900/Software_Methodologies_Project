          <fieldset>
            <legend><span class="number">2</span> Macbook info</legend>
            
          <label for="type">Select the Macbook type: </label>
          <select id="type" name="Macbook_type">
            <option value="Default">Select product</option>
            <optgroup label="Macbook Air">
              <?php
              foreach( $mac_book_air as $mac_air ){
              ?>
              <option value="Macbook_air"><?php echo $mac_air ?></option>
              <?php
              }
              ?>
            </optgroup>
            <optgroup label="Macbook Pro">
              <option value="Macbook_Pro_13">Macbook Pro 13" [base buyback - $<?php echo $macbookpro13in?>]</option>
              <option value="Macbook_Pro_15">Macbook Pro 15"</option>
            </optgroup>
          </select>
            </fieldset>