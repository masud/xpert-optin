 <?php
    // variables for the field and option names
    $opt_name = array('on_page_load' =>'xpert_on_page_load',
        'optin_interval' => 'xpert_optin_interval'
        
    );
    $hidden_field_name = 'upps_submit_hidden';

    // Read in existing option value from database
    $opt_val = array(
        'on_page_load' => get_option( $opt_name['on_page_load'] ),
        'optin_interval' => get_option( $opt_name['optin_interval'] )
        
    );

    // See if the user has posted us some information
    // If they did, this hidden field will be set to 'Y'
    if(isset($_POST[ $hidden_field_name ]) && $_POST[ $hidden_field_name ] == 'Y' ) {
        // Read their posted value
        $opt_val = array(
            'on_page_load' => $_POST[ $opt_name['on_page_load'] ],
            'optin_interval' => $_POST[ $opt_name['optin_interval'] ]
           
        );

        // Save the posted value in the database
        update_option( $opt_name['on_page_load'], $opt_val['on_page_load'] );
        update_option( $opt_name['optin_interval'], $opt_val['optin_interval'] );
       

        // Put an options updated message on the screen
        ?>
        <div id="message" class="updated fade">
            <p><strong>
                    <?php _e('Options saved.', 'upps_trans_domain' ); ?>
                </strong></p>
        </div>
    <?php
    }

    //Options Form
    ?>

	<div class="wp-social-box">
	<h3>Xpert Optin Option</h3>

                <form name="upps_img_options" method="post" action="<?php echo str_replace( '%7E', '~', $_SERVER['REQUEST_URI']); ?>">
                    <input type="hidden" name="<?php echo $hidden_field_name; ?>" value="Y">

               
                       

                        <div class="width-70">      
                          <label for="block_one_position">Select</label>
                                <select name="<?php echo $opt_name['on_page_load']; ?>">
                                    <option value="yes" <?php echo ($opt_val['on_page_load'] == "yes") ? 'selected="selected"' : ''; ?> >Yes</option>
                                    <option value="no" <?php echo ($opt_val['on_page_load'] == "no") ? 'selected="selected"' : ''; ?> >No</option>
                                </select>
                            </div>
                      
                        <div class="width-70">      
                          <label for="block_one_position">Select</label>
                                <select name="<?php echo $opt_name['optin_interval']; ?>">
                                    <option value="5sec" <?php echo ($opt_val['optin_interval'] == "5sec") ? 'selected="selected"' : ''; ?> >After 5 Second</option>
                                    <option value="10sec" <?php echo ($opt_val['optin_interval'] == "10sec") ? 'selected="selected"' : ''; ?> >After 10 Second</option>
                                    <option value="15sec" <?php echo ($opt_val['optin_interval'] == "15sec") ? 'selected="selected"' : ''; ?> >After 15 Second</option>
                                    
                                </select>
                           
                        </div>
                       
                       
                 
                  <div class="modal-footer">
         <p class="submit"><input type="submit" name="submit" id="submit" class="button button-primary" value="Save Changes"  /></p>
                   
        </div>
                </form>
          
          
        
    </div>
<?php

