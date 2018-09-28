Exploration #2: Create PHP API that sends emails

Resources

 https://secure.php.net/manual/en/function.mail.php (Links to an external site.)
 http://researchhubs.com/post/computing/linux-basic/enable-php-mail-function-to-work-on-ubuntu.html (Links to an external site.)
 (Links to an external site.) https://secure.php.net/manual/en/reserved.variables.get.php (Links to an external site.)
Components

For this exercise, I used my existing Ubuntu 16.04, installed the 'sendmail' feature, updated my server to be used as an email server, and created an endpoint in PHP to server as a collection for email.

Troubleshooting

I ended up using PHP's default mail() function to finish this task. I originally had planned on using PHPMailer(https://github.com/PHPMailer/PHPMailer (Links to an external site.)) in order to do this. PHPMailer is supposed to handle larger email loads faster and also allows for HTML emails. Unfortunately, even after following the documentation on the Github, I was unable to have PHPMailer use a test Yahoo email account to send messages. This led me to setting up my personal server as an email server. After that, the PHP documentation is rather straight-forward and very helpful.

Links

https://github.com/davidemily/WebDevExploration2 (Links to an external site.)
https://thedavidemily.com/api/email/ (Links to an external site.)
Journal

I've recently been spending time creating HTML emails to send out for the student organizations I'm involved in. Since we've been spending class time going over PHP APIs, I wanted to take this opportunity to explore combining HTML emails and APIs to create an API that sends out emails for me.

As stated above, I spent a large amount of time trying to get a different, more efficient, version of the software to work. Unfortunately, even after following the documentation, I could never get the program to work. I'm not sure if this an issue on my end or my test email address not allowing an outside server to send on my behalf. Since using PHP Mailer and HTML emails was out of the question, I resigned myself to using the default PHP mail() feature and sending out a normal text email.

The documentation for the mail feature is pretty good. I originally had to install the feature on my server as that doesn't come installed by default. I also had to following a guide on how to setup the Ubuntu instance to send email. This I was able to test locally by creating a test script to run on the server.

After verifying that I was able to send emails from my server, I wanted to create an endpoint where users can enter an email address to be sent. This ended up being handled by using PHP's $_GET command to grab whatever string they input, using FILTER_SANITIZE_EMAIL to verify that I'm holding on to valid email addresses, and then sending the details using mail().

While this process works, it's extremely slow. I'm not sure if the speed is due to my server, the filtering done by PHP or what, but it often takes up to a minute to email to an address. Also, the email ALWAYS seems to go to the junk folder. The speed makes it so this endpoint will never be used in production, but this project was a good refresher on PHP and API endpoints -- two things often used in the workforce.

