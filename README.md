# Admin Excerpt Letter Count
##### Contributors: Joss Crowcroft
##### Author: Joss Crowcroft
##### Author URI: http://www.josscrowcroft.com
##### Tags: admin, post, edit, letter count, excerpt, post excerpt, character count, length, jquery
##### Requires at least: 3.0
##### Tested up to: 3.1.2
##### Stable tag: 0.1

Adds a simple character counter to the admin post edit screen's "excerpt" field. Highlights red if characters exceed the defined excerpt length (default 55, or theme-controlled.)

## Description

Admin Excerpt Letter Count adds a simple character counter to the admin post edit screen's "excerpt" field. Highlights red if characters exceed the defined excerpt length (default 55, or theme-controlled.)

Perfect for reminding contributors and editors that their excerpt may look shitty in the current theme if they go over the character limit.

## Installation

Pretty much like every other plugin, but ok:

1. Download **Admin Excerpt Letter Count** and upload via the Plugins > Add New page (or search and install inside WordPress)
2. Activate the plugin.
3. The max-characters (and red highlighting) is controlled by WordPress's excerpt length, which can be overridden by WP themes.
4. Leave a comment on the plugin page if you need any help. Let's face it though, if you've got this far, you shouldn't really have any problems.

## Frequently Asked Questions

I think "Frequently" is kinda inaccurate for a first-release of anything, so let's call this "Conceivably Asked Questions:"

### How can I control the maximum characters?

The default excerpt length in WordPress is 55, and so the max chars on the counter are controlled by `<?php echo intval(apply_filters('excerpt_length', 55)); ?>`. Some themes override this via that filter, setting it to 80, or 120, or whatever. I've even seen '99'. Anyhow, check out [the Codex page](http://codex.wordpress.org/Plugin_API/Filter_Reference/excerpt_length) for details.

### Where's the plugin's admin panel?

...

## Screenshots

![Admin Excerpt Letter Count](https://github.com/josscrowcroft/WordPress-Admin-Excerpt-Letter-Count/raw/master/admin-excerpt-letter-count.gif "Admin Excerpt Letter Count")

## Changelog

### 0.1
* First version