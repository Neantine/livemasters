<div class="wrap ignitiondeck">
	<div class="icon32" id=""></div><h2 class="title"><?php _e('Google Ecommerce Settings', 'idcommerce'); ?></h2>
	<div class="help">
		<a href="http://forums.ignitiondeck.com" alt="IgnitionDeck Support" title="IgnitionDeck Support" target="_blank"><button class="button button-large button-primary"><?php _e('Support', 'idcommerce'); ?></button></a>
		<a href="http://docs.ignitiondeck.com" alt="IgnitionDeck Documentation" title="IgnitionDeck Documentation" target="_blank"><button class="button button-large button-primary"><?php _e('Documentation', 'idcommerce'); ?></button></a>
	</div>
	<div class="id-settings-container">
		<div class="postbox-container" style="width:95%; margin-right:5%">
			<div class="metabox-holder">
				<div class="meta-box-sortables" style="min-height:0;">
					<div class="postbox">
						<h3 class="hndle"><span><?php _e('Analytics Settings', 'idcommerce'); ?></span></h3>
						<div class="inside" style="width: 50%; min-width: 400px;">
							<form action="" method="POST" id="google_ecommerce_settings">
								<h4><?php _e('Website Profile', 'idcommerce'); ?></h4>
									<div class="form-input">
										<label for="idc_ga_property_code"><?php _e('Google Analytics Property Code (begins with UA, include dashes)', 'idcommerce'); ?></label>
										<input type="text" name="idc_ga_property_code" id="idc_ga_property_code" value="<?php echo (isset($property_code) ? $property_code : ''); ?>"/>
									</div>
									<br/>
									<div class="form-row">
										<button class="button button-primary" id="submit_google_ecommerce_settings" name="submit_google_ecommerce_settings"><?php _e('Save', 'idcommerce'); ?></button>
									</div>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>