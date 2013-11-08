<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package waterstreet
 * @since waterstreet 1.0
 */

get_header(); ?>

<div id="primary" class="content-area">
	<div id="content" class="site-content" role="main">

		<section class="center first red group">
			<div class="limiter">
				<h2 class="lowercase">For just $99</h2>
				<h3>We parachute in to make sure your WordPress site is backed-up, secure and up to date.</h3>
			</div>
		</section>
		
		<section class="blue gray group">
			<div class="limiter ">
				<h2 class="center">Just One Plan</h2>
				<div class="col5">
					<div class="epic">$99</div>
					<ul>
						<li> > Setup automated, daily backups</li>
						<li> > Update WordPress</li>
						<li> > Update all plugins and themes</li>
					</ul>
					
				</div>
				<div class="col5 margin2">
					<p>We've got one main plan here at ParachutePress. We want to help you sleep better at night. </p>
					<p>When your site is secure, up to date and backing up to an off-site location every day, you'll sleep like a baby. We promise.  </p>
				</div>
			</div>
		</section>
		
		<section class="why-bother red group">
			<div class="limiter">
				<h2 class="center"> Why Bother</h2>
				<h4 class="center callout-small">All of your hard work could be wiped out in a second. We can make sure everything is safe and sound.</h4>
				 
				<div class="group pad4y keyline-bottom">
					<div class="col5 call">Are you just trying to scare me?</div>
					<div class="col6 margin0">Absolutely. If you care at all about the hard work you put into your site, you need to have it up to date and backed up. Hours and hours of your hard work could be wiped out in a second.</div>
				</div>
				
				<div class="group pad4y keyline-bottom">
					<div class="col5 call">Can't I just do this myself?</div>
					<div class="col6 margin0">Definitely. You can do everything we're going to do on you own. You can use the same process completely. We're here for people who aren't comfortable doing that. Or poeple who haven't updated in a while are nervous about something going wrong.</div>
				</div>
				
				<div class="group pad4y keyline-bottom">
					<div class="col5 call">What if my site is a mess?</div>
					<div class="col6 margin0">If your site is in complete disarray, we can definitely still help with that. It might not be all covered in the $99 PLAN, but we can give you a fair estimate of how long it will take us to get everything fixed. We don't nickel and dime.  </div>
				</div>
				
				<div class="group pad4y keyline-bottom">
					<div class="col5 call">Can I trust you?</div>
					<div class="col6 margin0">We've done this about 1000 times. Moving sites, updating, setting up backups, cleaning up messes, speeding things up — we've done it all. We'll take great care with your site — we know the hard work that goes into them. </div>
				</div>
				
				
			</div>
		</section>





		<section  class="center blue gray">
			<div class="limiter ">
				<h2>Ready</h2>
				<div class="callout-small">The sooner you get your site safely backed up, the better you'll sleep. And you need your sleep.</div> 
				
				<div class="col12 pad4y"> <a href="#" class="button blue">Get started<i class="icon-chevron-right"></i></a></div>
			</div>
			 

 
		</section>



		<section  class="center blue">
			<div class="limiter">
				<h2>Bigger issues?</h2>
				<div class="callout margin4y">Got a disaster brewing?</div> 
				
				<div class="callout-small margin4y">We also offer a range of helpful services if you're looking for something beyond what THE PLAN offers.</div> 
				
				<div class="group pad4 margin1y keyline-top">
					<div class="col6">
						<ul>
							<li>Switch hosts</li>
							<li>Speed things up</li>
							<li>Site hack recovery</li>
						</ul>
						
					</div>
					
					<div class="col6">
						<ul>
							<li>Security checks</li>
							<li>General Consultation</li>
							<li>Muffin baking *</li>
						</ul>
						
						
					</div>
				</div>
				
				<div class="col12"><em>* Delivery fees apply.</em></div>
				
				<div class="group col12">
					<h3 class="callout-small">Any questions?</h3>
					<a href="#" class="button blue">Get in touch <i class="icon-chevron-right"></i></a>
				</div>
				

			</div>
		</section>
		
		

	</div><!-- #content .site-content -->
</div><!-- #primary .content-area -->

<?php get_footer(); ?>