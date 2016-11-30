<div class="idc_checkout_extra_fields hide" id="checkout-form-extra-fields-shipping">
	<div class="form-row idc-checkout-address-field">
		<h3 class="checkout-header"> <?php _e('Mailing Address', 'idcommerce'); ?></h3>
		<label for="address"><?php _e('Street Address', 'idcommerce'); ?></label>
		<input type="text" size="20" class="required" name="address" id="address" value="<?php echo (isset($address_info['address']) ? $address_info['address'] : ''); ?>"/>
	</div>
	<div class="form-row idc-checkout-address-field" >
		<label for="address_two"><?php _e('Address 2', 'idcommerce'); ?></label>
		<input type="text" size="20" name="address_two" id="address_two" value="<?php echo (isset($address_info['address_two']) ? $address_info['address_two'] : ''); ?>"/>
	</div>
	<div class="form-row left twoforth idc-checkout-address-field" >
		<label for="city"><?php _e('City', 'idcommerce'); ?></label>
		<input type="text" size="20" class="required" name="city" id="city" value="<?php echo (isset($address_info['city']) ? $address_info['city'] : ''); ?>"/>
	</div>
	<div class="form-row left third idc-checkout-address-field" >
		<label for="state"><?php _e('State', 'idcommerce'); ?></label>
		<input type="text" size="20" class="required" name="state" id="state" value="<?php echo (isset($address_info['state']) ? $address_info['state'] : ''); ?>"/>
	</div>
	<div class="form-row left third idc-checkout-address-field" >
		<label for="zip"><?php _e('Zip Code', 'idcommerce'); ?></label>
		<input type="text" size="20" class="required" name="zip" id="zip" value="<?php echo (isset($address_info['zip']) ? $address_info['zip'] : ''); ?>"/>
	</div>
	<div class="form-row left twoforth idc-checkout-address-field" >
		<label for="country"><?php _e('Country', 'idcommerce'); ?></label>
		<input type="text" size="20" class="required" name="country" id="country" value="<?php echo (isset($address_info['country']) ? $address_info['country'] : ''); ?>"/>
	</div>
</div>