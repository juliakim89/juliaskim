<?php include('../includes/header.php'); ?>

<div class="content">
	<div id="tradesy-checkout" class="page row">
		<div class="page__header">
			<h1>Redesigning Tradesy's checkout experience</h1>
		</div>

		<div class="row">
			<div class="large-6 column">
				<h3 class="subheader">Problem</h3>
				<p>Tradesy's web checkout experience was poor and not thought through in over 4 years. We found that it did not follow industry best practices and thus explained the high abandoned cart rate.
				</p>
				<h3 class="subheader">Goal</h3>
				<p>Improve usability and allow for a frictionless checkout experience</p>
				<h3 class="subheader">Research Methods</h3>
				<ul>
					<li>Literature reviews</li>
					<li>Competitive analysis</li>
					<li>User testing</li>
					<li>Stakeholder interviews</li>
					<li>User flows</li>
				</ul>
				<h3 class="subheader">Recommendations</h3>
				<ul>
					<li>Have a sign up/log in screen before entering checkout to avoid confusion and set expectations that the user will need to create an account in order to checkout (Our long term goal was to provide guest checkout)</li>
					<li>Design a multi-step checkout on mobile, and an accordion style checkout on desktop </li>
					<li>Collapse non-required form fields</li>
					<li>Set the right expectations for the user - add a progress bar</li>
					<li>Provide a review screen at the end so the user can confirm that their information was all correct</li>
					<li>Autofill city and state with zip code information</li>
				</ul>
			</div>
			<div class="tradesy-checkout__old large-6 column">
				<img src="/images/projects/checkout/checkout-old.png" alt="old checkout mobile">
			</div>
		</div>

		<h3 class="subheader">Ideation</h3>
		<div class="row">
			<img src="/images/projects/checkout/checkout-wireframe-shipping.jpg" alt="checkout shipping ideation">
			<img src="/images/projects/checkout/checkout-wireframe-payment.jpg" alt="checkout payment ideation">
			<img src="/images/projects/checkout/checkout-wireframe-review.jpg" alt="checkout review ideation">
		</div>


		<h3 class="subheader">Execution</h3>

		<hr class="hr--clear">

		<div class="row">
			<div class="small-4 column column--no-padding">
				<img src="/images/projects/checkout/checkout-new-mobile-shipping.jpg" alt="checkout mobile shipping">
			</div>
			<div class="small-4 column column--no-padding">
				<img src="/images/projects/checkout/checkout-new-mobile-payment.jpg" alt="checkout mobile payment">
			</div>
			<div class="small-4 column column--no-padding">
				<img src="/images/projects/checkout/checkout-new-mobile-review.jpg" alt="checkout mobile review">
			</div>
			<hr class="hr--clear">
			<img src="/images/projects/checkout/thumbnail.jpg" alt="checkout desktop">
		</div>

		<hr class="hr--clear">

		<div class="row">
			<div class="column">
				<h3 class="subheader">Results</h3>
				<p>We rolled out the checkout redesign in 2 different phases. The redesign was being tested against the old checkout design. The new design was a huge improvement and solved a lot of usability issues we were seeing before. However, once we added the login/register screen before starting checking, we saw a dip in checkout started and a slight increase in purchase rate. We knew that we had to continue iterating and take on guest checkout. </p>
				
			</div>
		</div>

		<hr class="hr--clear">

		<h2>Guest Checkout</h2>

		<div class="row">
			<div class="column">
				<h3 class="subheader">User Pain Points</h3>
				<ul>
					<li>35% of the reasons for checkout abandonment is because “the site wanted me to create an account” (Baymard)</li>
					<li>Users are afraid of getting bombarded with marketing spam</li>
					<li>Users are here to buy and not ready for a relationship</li>
				</ul>
				<h3 class="subheader">Best Practices</h3>
				<ul>
					<li>Have guest checkout as the default option.</li>
					<li>Ask customers to start filling in their information immediately. This will increase conversion rate. </li>
					<li>Give them an opportunity to sign up later in the process.</li>
					<li>Avoid using the word ‘register’. Instead offer to save the customer details for future purchases. </li>
					<li>Same email address should work with multiple guest checkouts.</li>
				</ul>
				<h3 class="subheader">Success Metrics</h3>
				<ul>
					<li>Increase filter applied</li>
					<li>Increase sort applied</li>
					<li>Increase purchase rate</li>
				</ul>
				<h3 class="subheader">Designs</h3>
				<p>After multiple iterations, we decided to get rid of the log in/registration page and incorporate the guest checkout/log in step as part of the checkout process, to cause less friction and help users understand that they were in checkout. We moved the email field as part of the shipping form and specfically mentioned that we would only be using their email to send their order confirmation. Users were also able to opt into marketing emails at this step, but it was not required. Once the guest successfully completed checkout, we gave them the option to setup a password to save their information for a faster checkout experience later. For users who still not sign up at this step, we gave them the option to in their order confirmation emails and shipment tracking emails.</p>
			</div>
		</div>

		<h3 class="subheader">Execution</h3>

		<hr class="hr--clear">

		<div class="row">
			<img src="/images/projects/checkout/guest-checkout-desktop.jpg" alt="guest checkout desktop">
		</div>

		<div class="row">
			<div class="column">
				<h3 class="subheader">Results</h3>
				<p>
					After releasing guest checkout and testing it, we saw an immediate lift in checkout started. Overall, we saw signficantly less issues being reported in our feedback channel related to checkout and though we still need to keep iterating to continue to improve the experience, Tradesy's new checkout experience is much more seamless and frictionless than it was before. 
				</p>
				<h3 class="subheader">Contributers</h3>
				<p>
					Product Owner: Bijan Bina<br/>
					User Experience Designer: Amar Singh<br/>
					Product Designers: Julia Kim, Robert Manukyan<br/>
					Frontend Developer: Julia Kim<br/>
					Developer: Tyler Geery, Peppy Sisay
				</p>
			</div>
		</div>
	</div>
</div>

<hr>
<div class="work__nav row">
	<ul class="no-bullet">
		<li><a href="/" class="link--text">Home</a></li>
		<li class="work__nav--active"><a href="/work/checkout" >Checkout</a></li>
		<li><a href="/work/mobile-tablet-filters" class="link--text">Mobile and Tablet Filters</a></li>
		<li><a href="/work/item-page" class="link--text">Item Page</a></li>
		<li><a href="/work/bella-shield" class="link--text">Bella Shield</a></li>
		<li><a href="/work/logos" class="link--text">Logo Designs</a></li>
	</ul>
</div>

<?php include('../includes/footer.php'); ?>
