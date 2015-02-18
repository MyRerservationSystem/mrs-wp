<div id="booking-form" style="display: none">
    <div class="sagenda_row">
        <div class="sagenda_col">
            <div class="sagenda_row">
                <div class="sagenda_col">
                    <div class="reservation-form-heading">
                        
                    </div>
                    <div class="sagenda_alert sagenda_alert-faliure" id="sagenda-fields">
                       <?php _e('Please fill out all the required fields', 'sagenda-wp'); ?> 
                    </div>
                </div>
            </div>




            <div class="sagenda_row">
                <div class="sagenda_col">
                    <div class="sagenda_form-group">
                        <label for="exampleInputEmail1"><?php _e('Courtesy', 'sagenda-wp'); ?> </label>
                        <label>
                            <input type="radio" name="optionsRadios" id="optionsRadios1" value="Mr" checked />
                            <?php _e('Mr', 'sagenda-wp'); ?>Mr
                        </label>

                        <label>
                            <input type="radio" name="optionsRadios" id="optionsRadios1" value="Mrs" />
                           <?php _e('Mrs', 'sagenda-wp'); ?> 
                        </label>
                    </div>
                </div>
            </div>


            <div class="sagenda_row">
                <div class="sagenda_col">
                    <div class="sagenda_form-group">
                        <label for="exampleInputPassword1"><?php _e('First Name', 'sagenda-wp'); ?></label>
                        <div>
                            <input type="text" class="sagenda_form-control" id="firstName" required placeholder="First Name" />
                            <input type="hidden" class="sagenda_form-control" id="EventIdentifier" placeholder="EventIdentifier" />
                        </div>
                    </div>
                </div>
            </div>

            <div class="sagenda_row">
                <div class="sagenda_col">
                    <div class="sagenda_form-group">
                        <label for="exampleInputPassword1"><?php _e('Last Name', 'sagenda-wp'); ?></label>
                        <div>
                            <input type="text" class="sagenda_form-control" id="lastName" required placeholder="Last Name" />
                        </div>
                    </div>
                </div>
            </div>


            <div class="sagenda_row">
                <div class="sagenda_col">
                    <div class="sagenda_form-group">
                        <label for="exampleInputPassword1"><?php _e('Phone Number', 'sagenda-wp'); ?></label>
                        <div>
                            <input type="text" class="sagenda_form-control" id="phonenumber" required placeholder="Phone Number" />
                        </div>
                    </div>
                </div>
            </div>
  
            <div class="sagenda_row">
                <div class="sagenda_col">
                    <div class="sagenda_form-group">
                        <label for="exampleInputPassword1"><?php _e('Email', 'sagenda-wp'); ?></label>
                        <div>
                            <input type="email" class="sagenda_form-control" id="email" required placeholder="Email" />
                        </div>
                    </div>
                </div>
            </div>

            <div class="sagenda_row">
                <div class="sagenda_col">
                    <div class="sagenda_form-group">
                        <label for="exampleInputPassword1"><?php _e('Description', 'sagenda-wp'); ?></label>
                    </div>
                    <textarea class="sagenda_form-control" id="description" name="description"  rows="5"></textarea>
                </div>
            </div>
        </div>
    </div>           
    <div style="clear: both">&nbsp;</div>

    <div class="sagenda_form-group">
        <div class="col-sm-offset-2 col-sm-10">
            <div>
                <button type="button" class="btn btn-default" id="backtocalender"><?php _e('Back to Calender', 'sagenda-wp'); ?></button>
                <button type="button" class="btn btn-primary btn-default" id="submit-reservation"><?php _e('Submit', 'sagenda-wp'); ?></button>
            </div>
        </div>
    </div>

</div>
</div>

</div>
