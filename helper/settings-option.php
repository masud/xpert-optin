 <?php
 // variables for the field and option names
    $opt_name = array('optin_position' =>'xpert_optin_position',        
        'on_page_load' =>'xpert_on_page_load'
        
    );
    $hidden_field_name = 'xpert_submit_hidden';

    // Read in existing option value from database
    $opt_val = array(
        'optin_position' => get_option( $opt_name['optin_position'] ),       
        'on_page_load' => get_option( $opt_name['on_page_load'] )
      
    );

    // See if the user has posted us some information
    // If they did, this hidden field will be set to 'Y'
    if(isset($_POST[ $hidden_field_name ]) && $_POST[ $hidden_field_name ] == 'Y' ) {
        // Read their posted value
        $opt_val = array(
            'optin_position' => $_POST[ $opt_name['optin_position'] ],           
            'on_page_load' => $_POST[ $opt_name['on_page_load'] ]
            
        );

        // Save the posted value in the database
        update_option( $opt_name['optin_position'], $opt_val['optin_position'] );      
        update_option( $opt_name['on_page_load'], $opt_val['on_page_load'] );
        
        // Put an options updated message on the screen
        ?>
        <div id="message" class="updated fade">
            <p><strong>
                    <?php _e('Options saved.', 'xpert_trans_domain' ); ?>
                </strong></p>
        </div>
    <?php
    }

    //Options Form
    ?>

	<div class="wp-social-box">
	<h3>Xpert Optin Option</h3>


	<form name="xpert_optin" method="post" action="<?php echo str_replace( '%7E', '~', $_SERVER['REQUEST_URI']); ?>">
          <input type="hidden" name="<?php echo $hidden_field_name; ?>" value="Y">

		<div class="width-70">
			<label for="<?php echo $opt_name['on_page_load']; ?>">On Page Load</label>
			<input name="<?php echo $opt_name['on_page_load']; ?>" type="checkbox" value="1"  <?php checked( '1', $opt_val['on_page_load'] ); ?> />
			<?php echo ''?>
		</div>

		<div class="width-70">		
			<label for="block_one_position">Select</label>
			<select name="<?php echo $opt_name['optin_position']; ?>" id="block_one_position">
				 <option value="top" <?php echo ($opt_val['optin_position'] == "top") ? 'selected="selected"' : ''; ?> >Top</option>
				 <option value="middle" <?php echo ($opt_val['optin_position'] == "middle") ? 'selected="selected"' : ''; ?> >Middle</option>
                 <option value="bottom" <?php echo ($opt_val['optin_position'] == "bottom") ? 'selected="selected"' : ''; ?> >Bottom</option>
			</select>
		</div>
		<div class="modal-footer">
		 <p class="submit"><input type="submit" name="submit" id="submit" class="button button-primary" value="Save Changes"  /></p>
			       
		</div>
	</form>
</div>
<?php



