
<div class="wFormContainer">
	<div class="wForm" id="contact-form">
		<div class="form-breadcrumbs">
			<!-- breadcrumb images -->
			<img src="<?php echo get_template_directory_uri(); ?>/assets/images/icon-map.svg" alt="map icon" id='icon-pg-1'/> 
			<img src="<?php echo get_template_directory_uri(); ?>/assets/images/icon-contact.svg" alt="contact icon" id='icon-pg-2'/>
			<img src="<?php echo get_template_directory_uri(); ?>/assets/images/icon-trip-details.svg" alt="trip details icon" id='icon-pg-3'/>
		</div>
		<form action="form-to-email.php" class="" id="contact-form" method="post" name="contact-form">
			<div class="form-page" id="form-page-1">
				<section id="form-destination">
					<div class="field">
						<div class="control">
							<div class="select">
								<select
									id="choose-a-city" 
									aria-required="true" 
									class="required" 
									name="Choose a City" 
									title="Choose a City"
								>
									<option value="" disabled selected>Choose a City</option>
									<option id="vegas" value="Vegas">Vegas</option>
									<option id="miami" value="Miami">Miami</option>
									<option id="new-york" value="New York">New York</option>
									<option id="los-angeles" value="Los Angeles">Los Angeles</option>
								</select>
							</div>
						</div>
					</div>
					<div class="field">
						<div class="control">
    						<button 
    							class="button is-link to-pg-2"
    							type="button" 
    						>Next</button>
  						</div>
					</div>
				</section>
			</div>
			<div class="form-page" id="form-page-2" style="display: none;">
				<section id="form-contact">
					<div class="field is-grouped">
						<div class="control">
							<input 
								aria-required="true" 
								class="input required" 
								id="first-name" 
								name="first-name" 
								placeholder="First Name" 
								title="First Name" 
								type="text" 
								value="" 
							/>
						</div>
						<div class="control"">
							<input 
								class="input" 
								id="last-name" 
								name="last-name" 
								placeholder="Last Name" 
								title="Last Name" 
								type="text" 
								value=""
							/>
						</div>
					</div>
					<div class="field">
						<div class="control">
							<input 
								aria-required="true" 
								class="input required" 
								id="phone" 
								name="phone" 
								placeholder="Phone Number" 
								title="Phone Number" 
								pattern="/^([\(]{1}[0-9]{3}[\)]{1}[\.| |\-]{0,1}|^[0-9]{3}[\.|\-| ]?)?[0-9]{3}(\.|\-| )?[0-9]{4}$/"
								type="text" 
							/>
						</div>
					</div>
					<div class="control">
						<input 
							aria-required="true" 
							class="input required" 
							id="email" 
							name="email" 
							placeholder="Email Address" 
							title="Email Address" 
							type="email" 
							pattern=".+@.+\..+"
							value=""
						/>
					</div>
					<div class="field is-grouped">
						<div class="control">
							<button 
    							class="button is-link to-pg-1"
    							type="button" 
    						>Previous</button>
    						<button 
    							class="button is-link to-pg-3"
    							type="button" 
    						>Next</button>
  						</div>
					</div>
				</section>
			</div>
			<div class="form-page" id="form-page-3" style="display: none;">
				<section id="form-details">
					<div class="field is-grouped">
						<div class="control">
							<input 
								class="input validate-date" 
								id="arrival-date" 
								name="arrival-date" 
								placeholder="Arrival Date" 
								title="Arrival Date" 
								type="text"
								pattern="[0-9]{1,2}/[0-9]{1,2}/[0-9]{4}|[0-9]{2}" 
							/>
						</div>
						<div class="control">
							<input 
								class="input validate-date" 
								id="departure-date" 
								name="departure-date" 
								placeholder="Departure Date" 
								title="Departure Date" 
								type="text"
								pattern="[0-9]{1,2}/[0-9]{1,2}/[0-9]{4}|[0-9]{2}" 
							/>

						</div>
					</div>
					<div class="dropdown" >
						<div class="dropdown-trigger" id="form-count-dropdown">
							<button class="button" aria-haspopup="true" aria-controls="party-dropdown-menu">
      							<span>How Many are in your Party?</span>
      							<span id="count-total-display">0</span>
      							<span class="icon is-small">
        							<i class="fas fa-angle-down" aria-hidden="true"></i>
      							</span>
    						</button>
						</div>
					  	<div class="dropdown-menu">
					  		<div class="dropdown-content" id="party-dropdown-menu" role="menu">
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
								<div id="count-men-row" class="counter-row">
									<div>Men</div>
									<span id="cm-dn"><i class="fas fa-minus-circle"></i></span>
									<span id="count-men-display" unselectable="on">0</span>
									<span id="cm-up"><i class="fas fa-plus-circle"></i></span>
								</div>
								<div id="count-women-row" class="counter-row">
									<div>Women</div>
									<span id="cw-dn"><i class="fas fa-minus-circle"></i></span>
									<span id="count-women-display" unselectable="on">0</span>
									<span id="cw-up"><i class="fas fa-plus-circle"></i></span>
								</div>
								<div class="field is-horizontal">
									<div class="field-label">
    									<label class="label">Is anyone in your party under 21?</label>
  									</div>
  									<div class="control">
  										<label class="radio">
          									<input type="radio" name="under-21" value="Yes"/>Yes
        								</label>
        								<label class="radio">
          									<input type="radio" name="under21" value="No"/>No
        								</label>
  									</div>
								</div>
							</div>
					  	</div>
					</div>
					<div class="field">
						<div class="control">
							<input 
								class="input" 
								id="occasion" 
								name="occasion" 
								placeholder="What is the occasion?  (E.g. Birthday, Wedding" 
								title="occasion" 
								type="text" 
							/>
						</div>
					</div>
					<div class="field">
						<div class="control">
							<button 
    							class="button is-link to-pg-2"
    							type="button" 
    						>Previous</button>
							<button class="button is-link" id="submit-button" type="submit" value="submit" name='submit'>Submit</button>
						</div>
						
					</div>
				</section>
			</div>
			
		</form>
	</div>
</div>