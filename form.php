
<div class="contact-form-container">
	<div class='' id="contact-form">
		<div class="flex-sa is-flex">
			<!-- breadcrumb images -->
			<div class='icon-group has-text-centered is-link to-pg-1' id='icon-pg-1'>
				<img src="<?php echo get_template_directory_uri(); ?>/assets/images/icon-map.svg" alt="map icon" />
				<p>Destination</p>
			</div>
			<div class='icon-group has-text-centered is-link to-pg-2' id='icon-pg-2'>
				<img src="<?php echo get_template_directory_uri(); ?>/assets/images/icon-contact.svg" alt="contact icon" />
				<p>Contact Info</p>
			</div>
			<div class='icon-group has-text-centered is-link to-pg-3' id='icon-pg-3'>
				<img src="<?php echo get_template_directory_uri(); ?>/assets/images/icon-trip-details.svg" alt="trip details icon" />
				<p>Trip Details</p>
			</div>
		</div>
		<form action="form-to-email.php" class="column is-8 is-offset-2" id="contact-form" method="post" name="contact-form">
			<div class="form-page" id="form-page-1">
				<section id="form-destination">
					<div class="field">
						<div class="control is-flex flex-sa">
							<div class="select">
								<select
									id="choose-a-city" 
									aria-required="true" 
									class="required" 
									name="Choose a City" 
									title="Choose a City"
									style="width:300px"
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
						<div class="control is-flex flex-sa">
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
					<div class="field">
						<div class="control is-flex flex-sa">
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
					</div>
					<div class="field">
						<div class="control is-flex flex-sa">
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
						<div class="control is-flex flex-sa">
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
					<div class="control is-flex flex-sa">
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
					<div class="field is-flex flex-sa">
						<div class="control">
							<button 
    							class="button is-link to-pg-1"
    							type="button" 
    						>Previous</button>
    					</div>
    					<div class="control">
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
					<div class="field">
						<div class="control is-flex flex-sa">
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
					</div>
					<div class="field">
						<div class="control is-flex flex-sa">
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
					<div class="dropdown is-flex flex-sa field" >
						<div class="dropdown-trigger full-wide" id="form-count-dropdown">
							<button class="button full-wide level" aria-haspopup="true" aria-controls="party-dropdown-menu">
								<div class="level-left">
									<span class="level-item">Group Size:</span>
      								<span class="level-item" id="count-total-display">0</span>
								</div>
								<div class="level-right">
									<span class="icon is-small level-item">
        								<i class="fas fa-angle-down" aria-hidden="true"></i>
      								</span>
								</div>
      							
    						</button>
						</div>
					  	<div class="dropdown-menu full-wide" id="party-dropdown-menu">
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
								<div id="count-men-row" class="level">
									<div class="level-left">
										<div class="level-item lil-side-margin">Men</div>
									</div>
									<div class="level-right lil-side-margin">
										<span class="center level-item" id="cm-dn"><i class=" fas fa-minus-circle"></i></span>
										<span class="center level-item" id="count-men-display" class="column is-2" unselectable="on">0</span>
										<span class="center level-item" id="cm-up"><i class="fas fa-plus-circle"></i></span>
									</div>
								</div>
								<div id="count-women-row" class="level">
									<div class="level-left">
										<div class="level-item lil-side-margin">Women</div>
									</div>
									<div class="level-right lil-side-margin">
										<span class="center level-item" id="cw-dn"><i class="fas fa-minus-circle"></i></span>
										<span class="center level-item" id="count-women-display" class="column is-2" unselectable="on">0</span>
										<span class="center level-item" id="cw-up"><i class="fas fa-plus-circle"></i></span>
									</div>
									
								</div>
								<div class="field is-horizontal level">
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
								<div class="level">
									<div class="level-left" style="visibility: hidden;">
										<span class="level-item">Blank</span>
									</div>
  									<div class="control level-right lil-side-margin">
										<span class="level-item" aria-haspopup="true" aria-controls="party-dropdown-menu">Close (Hover and Click)</button>
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