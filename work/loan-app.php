<?php include('../includes/header.php'); ?>

<div class="content">
	<div id="tradesy-checkout" class="page row">
		<div class="page__header">
			<h2>Revamping Tala's loan application flow</h2>
		</div>

		<div class="row">
			<div class="large-7 column">
				<h3 class="subheader">Problem</h3>
				<p>22-31% of users drop off during the loan application and only 21-25% of questions are signals for data science.
				</p>
				<h3 class="subheader">Goal</h3>
				<p>Make it easier for users to access credit and improve our ability to underwrite them.</p>
				<h3 class="subheader">Research Methods</h3>
				<ul>
					<li>Secondary research</li>
					<li>Competitive research</li>
					<li>CX team interviews</li>
					<li>User interviews</li>
					<li>Usability testing</li>
				</ul>
				<h3 class="subheader">Success Metrics</h3>
				<ul>
					<li>Increase conversion from loan application start to submit</li>
					<li>Reduce time to complete the loan application</li>
					<li>Increase repayment rate</li>
				</ul>
			</div>
			<div class="large-4 column">
				<h3 class="subheader">Year Completed</h3>
				<p>2019</p>
				<h3 class="subheader">Services</h3>
				<p>Research & design</p>
			</div>
		</div>

		<h3 class="subheader">Secondary research</h3>
		<div class="row">
			<div class="column">
				<img src="/images/projects/loan-app/loan-app-old.jpg" alt="loan app old">
				<p class="caption">Old Tala loan application designs</p>

				<h3 class="subheader">Usability observation testing learnings</h3>
				<p>We did a global testing of observing 26 users (KE, MX, PH) go through our conversion funnel and learned the following:</p>
				<ul>
					<li>We had tons of usability issues we weren't aware of</li>
					<li>People skim and look for keywords; they don't read</li>
					<li>If someone needs to enter data in a field, it should be really obvious (1) that they need to and (2) how</li>
					<li>Minimize and simplify data entry as much as possible</li>
					<li>Avoid making people re-enter data if at all possible</li>
					<li>People love pushing buttons and will do so even if it may not make sense</li>
					<li>People form their opinions based on the beginning and end of a flow, so if there's something confusing at the end it makes it all seem longer</li>
				</ul>

				<h3 class="subheader">Loan app drop-off survey</h3>
				<p>We looked back at a survey that was run a year before and found that users were dropping off due to confusion and policy issues on the first page</p>
				<ul>
					<li>Most people were dropping off on the first page</li>
					<li>There were policy issues with ID type and National ID confusion</li>
					<li>We were asking for email address when many of our users didn't have an email address</li>
				</ul>
			</div>
		</div>

		<h3 class="subheader">Hypotheses</h3>
		<div class="row">
			<div class="medium-6 column">
				<img src="/images/projects/loan-app/Hypotheses.jpg" alt="loan app drop off Hypotheses">	
				<p class="caption">Hypotheses generating exercise</p>	
			</div>
			<div class="medium-6 column">
				<img src="/images/projects/loan-app/problem-areas.jpg" alt="loan app drop off problem areas">
				<p class="caption">Grouped problem areas</p>
			</div>
			<div class="column">
				<h3 class="subheader">Identified 6 different problem areas</h3>
				<ul>
					<li>Usability: unexpected UX behaviors/standards cause friction and frustration</li>
					<li>Guidance: We don't guide the user through the flow</li>
					<li>Comprehension & understandability: Users don't understand some of the questions</li>
					<li>Length: Users feel that the process is too long</li>
					<li>Lack of motivation/low intent: Users drop off because they are low intent users</li>
					<li>Lack of trust: users don't feel comfortable giving us information</li>
				</ul>
			</div>
		</div>
				

		<h3 class="subheader">3 phases to tackle the problem</h3>
		<p>We decided to split how we tackled the problems into 3 phases in order to start shipping and testing improvements while we spent time researching and prototyping new designs</p>
		<ol>
			<li><b>Phase 1:</b> Remove questions that are not valuable</li>
			<li><b>Phase 2:</b> Design & UX research</li>
			<li><b>Phase 3:</b> Add new and/or revise existing questions</li>
		</ol>

		<hr class="hr--clear">

		<h3 class="subheader">Phase 1: Experiment removing questions</h3>
		<div class="row">
			<div class="medium-6 column">
				<b>Changes we made:</b>
				<ul>
					<li>Mexico: Removed 15 fields (37% shorter)</li>
					<li>Philippines: Removed 15 fields (35% shorter)</li>
					<li>Kenya: Removed 12 fields (38% shorter)</li>
				</ul>
			</div>
			<div class="medium-6 column">
				<b>Outcome of experiment:</b>
				<ul>
					<li>Mexico: 0.1pp increase in conversion; 27% faster to complete</li>
					<li>Philippines: 2.9pp increase in conversion; 28% faster to complete</li>
					<li>Kenya: 1.9pp increase in conversion; 27% faster to complete</li>
				</ul>
			</div>
		</div>
		<h3 class="subheader">Phase 2: Design & UX research</h3>
		<p>We kicked off our Double Diamond research project in all three of our markets. We tested numerous design improvements and made multiple iterations during each research trip, using high fidelity prototypes made through Protopie.</p>

		<div class="row">
			<div class="medium-6 column">
				<img src="/images/projects/loan-app/user-testing-ph.jpg" alt="loan app drop off research ph">
				<p class="caption">User testing in Manila, Philippines</p>	
			</div>
			<div class="medium-6 column">
				<img src="/images/projects/loan-app/user-testing-mx.jpg" alt="loan app drop off research mx">		
				<p class="caption">User testing in Mexico City, Mexico</p>
			</div>
		</div>

		<b>Some of the designs we tested:</b>
		<ul>
			<li>Improved font size and colors on form labels and textfields</li>
			<li>Utilize Google's API to allow users to search for their address</li>
			<li>Break out questions to 1-2 questions per screen</li>
			<li>Provide more guidance upfront with a new "About Tala loans" landing screen</li>
			<li>Added more visuals throughout the loan app to help with comprehension</li>
			<li>Added trust signals in places where trust and privacy really matter</li>
			<li>Reworded some questions users had a hard time comprehending</li>
			<li>Chatbot version of the loan app</li>
			<li>Tips on certain questions where users struggled to complete</li>
		</ul>

		<h3 class="subheader">Final Designs</h3>

		<div class="row">
			<div class="medium-4 column column--no-padding">
				<img src="/images/projects/loan-app/loan-app-new-1-name.jpg" alt="loan app">
			</div>
			<div class="medium-4 column column--no-padding">
				<img src="/images/projects/loan-app/loan-app-new-2-birthday.jpg" alt="loan app">
			</div>
			<div class="medium-4 column column--no-padding">
				<img src="/images/projects/loan-app/loan-app-new-3-address.jpg" alt="loan app">
			</div>
			<div class="medium-4 column column--no-padding">
				<img src="/images/projects/loan-app/loan-app-new-3-address-confirm.jpg" alt="loan app">
			</div>
			<div class="medium-4 column column--no-padding">
				<img src="/images/projects/loan-app/loan-app-new-4-device.jpg" alt="loan app">
			</div>
			<div class="medium-4 column column--no-padding">
				<img src="/images/projects/loan-app/loan-app-new-5-work.jpg" alt="loan app">
			</div>
			<hr class="hr--clear">
			<div class="column">
				<h3 class="subheader">Key Improvements</h3>
				<ul>
					<li>Broke out questions to 1-2 questions per screen to help user focus on one question at a time</li>
					<li>Updated text styles with design system for better legibility and accessibility</li>
					<li>Autosave feature to allow users to save their answers as a draft in case they drop off</li>
					<li>Added icons for better comprehension</li>
					<li>Address search and confirm feature for faster and more accurate address input</li>
					<li>Updated button treatment to disable until user completed all questions on page</li>
					<li>Audited and refactored all error messages</li>
					<li>Removed or improved comprehension on some questions that users struggled with</li>
				</ul>
			</div>
		</div>

		<div class="row">
			<div class="large-7 column">
				<h3 class="subheader">Phase 2 Results</h3>
				<p>We weren't able to do a complete revamp of the loan application designs, but we made over 20 incremental improvements to the loan application based off of our research findings and designs we tested which resulted in an increase in conversion and time to complete rates.</p>
				<ul>
					<li>Increased conversion rate from start loan application to complete by 5-17%</li>
					<li>Increased time to complete by 9-30%</li>
				</ul>
				
			</div>
		</div>

		<div class="row">
			<div class="large-7 column">
				<h3 class="subheader">Contributers</h3>
				<p>
					Product Manager: Rachel Brown<br/>
					Product Designer: Julia Kim<br/>
					User Researcher: Saloni Vaghela, Vanessa Sangalang, Victoria Lorenzana<br/>

				</p>
			</div>
		</div>
	</div>
</div>

<hr>
<div class="work__nav row">
	<ul class="no-bullet">
		<li>Other Projects:</li>
		<li class="work__nav--active"><a href="/work/loan-app" >Loan App</a></li>
		<li><a href="/work/cash-out" >Cash Out</a></li>
		<li><a href="/work/checkout" >Checkout</a></li>
		<li><a href="/work/magic-ruler" class="link--text">AR Magic Ruler</a></li>
		<li><a href="/work/mobile-tablet-filters" class="link--text">Mobile and Tablet Filters</a></li>
		<li><a href="/work/item-page" class="link--text">Item Page</a></li>
	</ul>
</div>

<?php include('../includes/footer.php'); ?>
