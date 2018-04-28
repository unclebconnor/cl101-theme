
<div class="contact-form-container">
	<div class='' id="contact-form">
		<div class="flex-sa is-flex" id="icon-row" style="margin: 10px 0 10px 0;">
			<!-- breadcrumb images -->
			<div class='icon-group has-text-centered is-link to-pg-1' id='icon-pg-1'>
				<img src="<?php echo get_template_directory_uri(); ?>/assets/images/icon-map.svg" alt="map icon" />
				<h5>Destination</h5>
			</div>
			<div class='icon-group has-text-centered is-link to-pg-2' id='icon-pg-2'>
				<img src="<?php echo get_template_directory_uri(); ?>/assets/images/icon-contact.svg" alt="contact icon" style="padding-right: 39px;"/>
				<h5>Contact Info</h5>
			</div>
			<div class='icon-group has-text-centered is-link to-pg-3' id='icon-pg-3'>
				<img src="<?php echo get_template_directory_uri(); ?>/assets/images/icon-trip-details.svg" alt="trip details icon" />
				<h5>Trip Details</h5>
			</div>
		</div>
		<form action="<?php echo get_template_directory_uri(); ?>/assets/process-form.php" class="column is-8 is-offset-2" id="contact-form" method="post" name="contact-form">
			<div class="form-page" id="form-page-1">
				<section id="form-destination">
					<div class="columns">
						<div class="field column is-12">
							<div class="control is-flex flex-sa">
								<div class="select">
									<select
										id="choose-a-city" 
										aria-required="true" 
										class="required" 
										name="choose-a-city" 
										title="Choose a City"
										style="width:300px"
										required
									>
										<option value="" disabled>Choose a City</option>
										<option id="vegas" value="Vegas">Vegas</option>
										<option id="miami" value="Miami">Miami</option>
										<option id="new-york" value="New York">New York</option>
										<option id="los-angeles" value="Los Angeles">Los Angeles</option>
									</select>
								</div>
							</div>
						</div>
					</div>
					<div class="field">
						<div class="control is-flex flex-sa space-around">
    						<button 
    							class="button is-link to-pg-2 form-nav"
    							type="button" 
    						>Next</button>
  						</div>
					</div>
				</section>
			</div>
			<div class="form-page" id="form-page-2" style="display: none;">
				<section id="form-contact">
					<div class="field">
						<label><div id="pg-2-error" ></div></label>
					</div>
					<div class="columns is-multiline">
						<div class="field column is-6">
							<div class="control is-flex flex-sa has-icons-right">
								<input 
									aria-required="true" 
									class="input required" 
									id="first-name" 
									name="first-name" 
									placeholder="First Name" 
									title="First Name" 
									type="text" 
									value=""
									autocomplete='given-name'
									required
									tabindex="1" 
									autofocus
								/>
								<span class="icon is-small is-right  is-invisible" id="name-warning-icon">
      								<i class="fas fa-exclamation-circle" style="color:#9e1726;"></i>
    							</span>
							</div>
						</div>
						<div class="field column is-6">
							<div class="control is-flex flex-sa">
								<input 
									class="input" 
									id="last-name" 
									name="last-name" 
									placeholder="Last Name" 
									title="Last Name" 
									type="text" 
									value=""
									autocomplete='family-name'
									tabindex="2"
								/>
							</div>
						</div>
						<div class="field column is-12">
							<div class="control is-flex flex-sa has-icons-right">
								<input 
									aria-required="true" 
									class="input required" 
									validationMessage="Please enter valid"
									id="phone" 
									name="phone" 
									placeholder="Phone Number" 
									title="Phone Number: xxx-xxx-xxxx" 
									type="tel"
									pattern="^(\+\d{1,2}\s)?\(?\d{3}\)?[\s.-]?\d{3}[\s.-]?\d{4}$"
									autocomplete='tel-national'
									required
									tabindex="3"
								/>
	    						<span class="icon is-small is-right  is-invisible" id="phone-warning-icon">
	      							<i class="fas fa-exclamation-circle" style="color:#9e1726;"></i>
	    						</span>
							</div>
						</div>
						<div class="field column is-12">
							<div class="control is-flex flex-sa has-icons-right">
								<input 
									aria-required="true" 
									class="input required" 
									id="email" 
									name="email" 
									placeholder="Email Address" 
									title="Email Address: example@email.com" 
									type="email" 
									pattern=".+@.+\..+"
									value=""
									autocomplete='email'
									required
									tabindex="4"
								/>
								<span class="icon is-small is-right  is-invisible" id="email-warning-icon">
	      							<i class="fas fa-exclamation-circle" style="color:#9e1726;"></i>
	    						</span>
							</div>
						</div>
					</div>
					<div class="field is-flex flex-sa ">
						<div class="control ">
							<button 
    							class="button is-link to-pg-1 form-nav-small"
    							type="button"
    							tabIndex="-1" 
    						><i class="fas fa-arrow-left"></i></button>
    					</div>
    					<div class="control">
    						<button 
    							class="button is-link to-pg-3 form-nav"
    							type="button"
    							tabindex="5" 
    						>Next</button>
  						</div>
					</div>
				</section>
			</div>
			<div class="form-page" id="form-page-3">
				<section id="form-details">
					<div class="field">
						<label><div id="pg-3-error"></div></label>
					</div>
					<div class="columns is-multiline">
						<div class="field column is-6">
							<div class="control is-flex flex-sa has-icons-right">
								<input 
									class="input validate-date" 
									id="arrival-date" 
									name="arrival-date" 
									placeholder="Arrival Date" 
									title="Arrival Date: mm/dd/yyyy" 
									type="text"
									pattern="[0-9]{1,2}/[0-9]{1,2}/[0-9]{4}|[0-9]{2}" 
									required
									tabindex="6"
								/>
								<span class="icon is-small is-right  is-invisible" id="arrival-warning-icon">
      								<i class="fas fa-exclamation-circle" style="color:#9e1726;"></i>
    							</span>
							</div>
						</div>
						<div class="field column is-6">
							<div class="control is-flex flex-sa has-icons-right">
								<input 
									class="input validate-date" 
									id="departure-date" 
									name="departure-date" 
									placeholder="Departure Date" 
									title="Departure Date: mm/dd/yyyy" 
									type="text"
									pattern="[0-9]{1,2}/[0-9]{1,2}/[0-9]{4}|[0-9]{2}"
									required
									tabindex="7" 
								/>
								<span class="icon is-small is-right  is-invisible" id="departure-warning-icon">
      								<i class="fas fa-exclamation-circle" style="color:#9e1726;"></i>
    							</span>
							</div>
						</div>
						<div class="dropdown is-flex flex-sa field column is-12" >
							<div class="dropdown-trigger full-wide" id="form-count-dropdown" tabindex="8">
								<button class="button full-wide level is-mobile" aria-haspopup="true" aria-controls="party-dropdown-menu">
									<div class="level-left">
										<span class="level-item">Group Size:</span>
      									<span class="level-item" id="count-total-display">0</span>
									</div>
									<div class="level-right">
										<span class="icon is-small level-item">
        									<i class="caret fas fa-angle-down" aria-hidden="true"></i>
      									</span>
									</div>
      								
    							</button>
							</div>
					  		<div class="dropdown-menu full-wide" id="party-dropdown-menu" >
					  			<div class="dropdown-content" role="menu">
					  				<div class="field">
										<div class="control">
											<input id="count-men" name="count-men" title="Men" type="hidden" value="0"/>
										</div>
										<div class="control">
											<input id="count-women" name="count-women" title="Women" type="hidden" value="0"/>
										</div>
										<div class="control">
											<input id="count-total" name="count-total" title="Total" type="hidden" value="0"/>
										</div>
									</div>
									<div id="count-men-row" class="level is-mobile">
										<div class="level-left">
											<div class="level-item lil-side-margin">Men</div>
										</div>
										<div class="level-right lil-side-margin">
											<span class="center level-item" id="cm-dn"><i class=" fas fa-minus-circle" style="color:#9e1726;"></i></span>
											<span class="center level-item" id="count-men-display" class="column is-2" unselectable="on">0</span>
											<span class="center level-item" id="cm-up"><i class="fas fa-plus-circle" style="color:#9e1726;"></i></span>
										</div>
									</div>
									<div id="count-women-row" class="level is-mobile">
										<div class="level-left">
											<div class="level-item lil-side-margin">Women</div>
										</div>
										<div class="level-right lil-side-margin">
											<span class="center level-item" id="cw-dn"><i class="fas fa-minus-circle" style="color:#9e1726;"></i></span>
											<span class="center level-item" id="count-women-display" class="column is-2" unselectable="on">0	</span>
											<span class="center level-item" id="cw-up"><i class="fas fa-plus-circle" style="color:#9e1726;"></i></span>
										</div>
									</div>
									<div class="field is-horizontal level is-mobile">
										<div class="level-left">
    										<span class="level-item lil-side-margin">Is anyone under 21?</span>
  										</div>
  										<div class="control level-right lil-side-margin">
  											<label class="radio level-item">
          										<input type="radio" name="under-21" value="Yes"/>&nbsp;Yes
        									</label>
        									<label class="radio level-item">
          										<input type="radio" name="under-21" value="No" checked/>&nbsp;No
        									</label>
  										</div>
									</div>
									<div class="level is-mobile">
										<div class="level-left" style="visibility: hidden;">
											<span class="level-item">Blank</span>
										</div>
  										<div class="control level-right">
											<button id="form-close" class="level-item button is-text" aria-haspopup="true" aria-controls="party-dropdown-menu">Close</button>
  										</div>
									</div>
								</div>
						  	</div>
						</div>
						<div class="field column is-12">
							<div class="control">
								<input 
									class="input" 
									id="occasion" 
									name="occasion" 
									placeholder="What is the occasion?  (E.g. Birthday, Wedding" 
									title="occasion" 
									type="text"
									tabindex="9" 
								/>
							</div>
							<div class="control is-invisible">
								<input id="redirect-url" name="redirect-url" title="redirect-url" type="hidden" value="<?php print get_permalink($post->post_parent); ?>form-confirmation/"/>
							</div>
						</div>
					</div>
					<div class="field is-flex flex-sa lil-bottom-margin">
						<div class="control ">
							<button 
    							class="button is-link to-pg-2 form-nav-small"
    							type="button"
    							tabIndex="-1"  
    						><i class="fas fa-arrow-left"></i></button>
    					</div>
    					<div class="control">
							<button 
								class="button is-link form-nav" 
								id="submit-button" 
								type="submit" 
								value="submit" 
								name='submit-button'
								tabindex="10"
							>Submit</button>
						</div>
					</div>
				</section>
			</div>
		</form>
	</div>
</div>