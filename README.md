# HMRC MTD API Examples in PHP

Basic PHP examples based on the HMRC MTD API tutorial here:
https://developer.service.hmrc.gov.uk/api-documentation/docs/tutorials

All tested and working.

You will need a developer account from here:
https://developer.service.hmrc.gov.uk/developer/registration

Create a test application, and you will then be able to get the data you need for config.php

Then browse to any of these to test:
hello-world.php
hello-application.php
hello-user.php

## Common issues
If you get invalid return_uri for hello-user, it's likely causes are:
- Not using HTTPS (you have to).
- Not registering your return URL in your application.
