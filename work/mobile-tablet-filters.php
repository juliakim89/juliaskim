<?php include('../includes/header.php'); ?>

<div class="content">
	<div id="tradesy-checkout" class="page row">
		<div class="page__header">
			<h1>Tradesy's Dynamic Mobile and Tablet Filters</h1>
		</div>

		<div class="row">
			<div class="large-9 column">
				<h3 class="subheader">Problem</h3>
				<p>Tradesy is a marketplace filled with over 2 million items. The filter and sort tool should be an intuitive way to be able to sort through the massive inventory and narrow down to a set of items quickly. However, after doing research, we found that our filters did not follow some best practices.
				</p>
				<ul>
					<li>Users weren't able to select multiple filters at one time -- each filter applied would reload the page. </li>
					<li>Our mobile web users (~70% of our traffic) were affected most because it was a huge pain point to shop in non-wifi zones or were experiencing slow internet</li>
					<li>Our filters were not dynamic, so users would often select filters that would end up with no results. </li>
					<li>The sorting dropdown was hidden under the filters toolbar.</li>
				</ul>
				<h3 class="subheader">Goal</h3>
				<p>Build a dynamic filter system on mobile and tablet web to allow users to get to a manageable set of items (5 to 20 according to Baymard).</p>
				<h3 class="subheader">Success Metrics</h3>
				<ul>
					<li>Add to bag conversion rate</li>
					<li>Category page views</li>
					<li>Loves conversion rate</li>
				</ul>
				<h3 class="subheader">Research Methods</h3>
				<ul>
					<li>User interviews</li>
					<li>Site audit</li>
					<li>Filter usage data</li>
					<li>Competitive analysis</li>
					<li>Stakeholder interviews</li>
				</ul>
			</div>
		</div>

		<h3 class="subheader">Ideation</h3>

		<div class="row">
			<img src="/images/projects/mobile-filters/ideate.png" alt="mobile filters ideation">
		</div>


		<div class="row">
			<div class="large-9 column">
				<h3 class="subheader">Validation</h3>
				<p>To validate our initial design concepts, we built a simple prototype on Invision and did some internal user testing with our coworkers who fit our user profile. We made sure to get insight from people across different departments like customer service, shipping and logistics, marketing, design, and taxonomy. Even from this quick user testing, we got valuable insight on the structure and layout of the designs.</p>
			</div>
		</div>

		<h3 class="subheader">Execution</h3>
		<hr class="hr--clear">

		<div class="row">
			<div class="column">
				<img src="/images/projects/mobile-filters/filters-mobile-1.jpg" alt="mobile filters">	
				<img src="/images/projects/mobile-filters/filters-mobile-2.jpg" alt="mobile filters">	
				<img src="/images/projects/mobile-filters/filters-mobile-3.jpg" alt="mobile filters">	
				<img src="/images/projects/mobile-filters/filters-tablet.jpg" alt="tablet filters">
			</div>
		</div>

		<hr class="hr--clear">

		<div class="row">
			<div class="column">
				<h3 class="subheader">Results</h3>
				<p>After releasing the new mobile and tablet filters, we saw a signficant increase in filters and sort being applied. We also saw slight lift in purchase rate.</p>
				<h3 class="subheader">Contributers</h3>
				<p>
					Product Owner: Bijan Bina<br/>
					User Experience Designer: Sash Catanzarite<br/>
					Product Designer: Julia Kim<br/>
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
		<li><a href="/work/checkout" class="link--text">Checkout</a></li>
		<li class="work__nav--active"><a href="/work/mobile-tablet-filters">Mobile and Tablet Filters</a></li>
		<li><a href="/work/item-page" class="link--text">Item Page</a></li>
	</ul>
</div>

<?php include('../includes/footer.php'); ?>
