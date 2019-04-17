User Story #1:

    As a Trailhead staff member, I need members to have unique logins to the checkIn system so that I have the data I need to customize member experience with Trailhead.
    
    **Acceptance Criteria:**
    [ ] Given I want to offer perks to certain members, when I select criteria for filtering       			members , then the members that I am looking for are returned
    [ ] Given a non-member is inside Trailhead, when they log into the WiFi, then there should
	    be a prompt to ask for a login or registration as guest.     
    [ ] Given user information is being stored, when the system is breached, then user data is 
        stored in a safe way.
    [ ] Given multiple users may be using multiple devices, when I want to track a user's          			usage, then the data will follow the user, and not just their devices. 

User story #2:

    As a Trailhead staff member, I need to have options for running analytics against
    the data in the Trailhead checkin system.

    **Acceptance Criteria:**
    [ ] Given I am logged into the admin panel, when I request a graph of the usage over time
        there is a peicewise linear graph showing the Trailhead usage.
    [ ] Given I am logged into the admin panel, when I request to see which users are in the space 			concurrently, then the concurrent users are displayed.
    [ ] Given I am logged into the admin panel, when I want to see which users are paying members, then 	the checkin system integrates with Moonclerk for verification.    

User story #3:

    As a Trailhead member, I need to have a way to engage with the Trailhead community so that I can benefit from my membership.

    **Acceptance Criteria:**
    [ ] Given I am on the login page, when I sign in, then points are awarded to my account.
    [ ] Given I am logged into my account, when I click on the My Profile link in the menu at the top of the site, then analytics about my profile will be displayed on the 'My Profile' page
    [ ] Given I am on the 'My Profile' page, when I look at the Interests section of the page, then I can see which Trailhead members share my interests.
	[ ] Given I am on the 'My Profile' page, if I wish to change certain information about My Profile, then I can modify that information.

User story #4:

    As a Trailhead member, I need to have a consistent experience with Trailhead assets so that my user experience is what I am accustom to.

    **Acceptance Criteria:**
    [ ] Given I am a Trailhead member, when I use the checkin portal, then the interface should be 
		intuitive.
    [ ] Given I am a Trailhead member, when I am viewing the new checkin assets, then the marketing 		theme, color scheme, and logos will be consistent with what I am accustom to.
    [ ] Given I am a user of the existing payment portal, when I use the checkin system, then it will 		integrate with the existing payment portal.    

	Members need a way to uniquely log-in to Trailhead
		Login Page
		Logging device connections
		4-digit pin to check-in
		Initial Member registration
		Hashing usernames passwords before storage
		Log-in prompt for unregistered users / devices
		Registration process should be smooth
		Admin panel to see who's logged in
		Sign-up page in a web app
	
	Trailhead Administrators need a way to analyze the usage data
		Should offer some math capabilities
		PWL Usage graph
		JQuery graphs
		DB table that stores each sign-in
		Integration with MoonClerk

	Members should have a way to engage with Trailhead community
		Point system
		Member perks listed on their profile page
		Form member affinity groups
		Create member profile pages
		
	The solution should integrate with existing Trailhead assets
		Integration with existing payment portal
		User friendly inteface
		Use the same theme as the rest of Trailhead marketing materials