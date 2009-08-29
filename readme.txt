=== Hashmask for WordPress ===
Contributors: shamess
Donate link: http://www.shamess.info/business/
Tags: security, login
Requires at least: 2.1
Tested up to: 2.8
Stable tag: trunk

Adding arc90's Hashmask to the login form; a secure way to quickly check you've typed the right password.

== Description ==

A while ago, arc90 decided that having to submit a form to find out if you've entered the right password was inefficient, so they set about finding a quick and secure way of telling you if the password you've entered is correct. They came up with [Hashmask](http://lab.arc90.com/2009/07/hashmask.php) which does that pretty well.

When you enter your password into the field, you'll be shown a little graphic. Remember that graphic! That's the visual representation of your password. For instance, if I enter my password I see a green shape, with two peaks at the beginning. If I type it in, and that's not the graphic I see then I've typed it wrong and know to type it again (without wasting time submitting the page)!

It's completely secure though. Even if someone sees what shape your password makes, there's nothing that can do to convert that image back to a real word.

== Installation ==

Just install the plugin [like you would any other](http://codex.wordpress.org/Managing_Plugins#Installing_Plugins), and then activate it, and you're good to go.

== Frequently Asked Questions ==

= Are you sure no one can work out my password from that image? =

100% sure. It uses a one way encryption method called [SHA1](http://en.wikipedia.org/wiki/SHA1), which means that once the password is encrypted, it can never be converted back to the original word.

== Screenshots ==

1. Here's the word "password", and the image it generates. You'll get a different shape, and probably a different colour.

== Changelog ==

= 0.9 =
Uploaded!