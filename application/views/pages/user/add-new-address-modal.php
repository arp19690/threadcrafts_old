
<div id="addressModal" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="addressModalLabel" aria-hidden="true">
    <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
        <h3 id="addressModalLabel"><span class="light">Add </span> New Address</h3>
    </div>
    <div class="modal-body">
        <form method="post" action="<?php echo base_url('user/addNewAddress'); ?>">
            <input type="hidden" name="url" value="<?php echo current_url(); ?>"/>
            <div class="control-group">
                <label class="control-label hidden shown-ie8" for="address_line1">Address line 1</label>
                <div class="controls">
                    <input type="text" class="input-block-level" id="address_line1" placeholder="Address line 1" name="address_line1" required="required"/>
                </div>
            </div>
            <div class="control-group">
                <label class="control-label hidden shown-ie8" for="address_line2">Address line 2</label>
                <div class="controls">
                    <input type="text" class="input-block-level" id="address_line2" placeholder="Address line 2" name="address_line2" required="required"/>
                </div>
            </div>
            <div class="control-group">
                <label class="control-label hidden shown-ie8" for="address_location">Location</label>
                <div class="controls">
                    <input type="text" class="input-block-level gMapLocation" id="address_location" placeholder="Location" name="address_location" required="required"/>
                </div>
            </div>
            <div class="control-group">
                <label class="control-label hidden shown-ie8" for="address_postcode">Postcode</label>
                <div class="controls">
                    <input type="text" class="input-block-level" id="address_postcode" placeholder="Postcode" name="address_postcode" required="required"/>
                </div>
            </div>
            <button type="submit" class="btn btn-primary input-block-level bold higher">SUBMIT</button>
        </form>
    </div>
</div>

<!--  = Google Maps API =  -->
<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?libraries=places&amp;sensor=false"></script>