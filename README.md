# Action Network Wordpress Plugin

Based on free Wordpress plugin for the [Action Network](https://actionnetwork.org) online organizing tools, originally developed by [Jonathan Kissam](http://jonathankissam.com/).

__Please note that this version is an experimental fork__.

## Usage
Add a Legacy Widget block with the Calendar view to add upcoming events.

By default it will display
Day of Week | Event Title
Date Number | Event Venue (if available)
Start Time  | Event Address (if available)

## Features
* Create a Wordpress shortcode from any Action Network embed code.
* Manage your saved embed codes using the Wordpress backend. Supports sorting by title, type and last modified date, and provides a search function.
* Use `[actionnetwork_calendar]` shortcode and Action Network Calendar widget to show a list of upcoming events. Optionally outputs upcoming events in JSON. The plugin on which this was based was supported by [The People's Lobby](http://www.thepeopleslobbyusa.org/) - if you like it, please consider [making a donation to them](https://actionnetwork.org/fundraising/donate-to-the-peoples-lobby).
* If you are an [Action Network Partner](https://actionnetwork.org/partnerships), use your API key to sync all of your actions from Action Network to Wordpress.
* Create signup widgets which allow visitors to your site to sign up for your email list _without_ using Action Network javascript embeds. This allows you to place a signup form on every page (for example in the sidebar), and still load Action Network embed codes for actions on particular pages (since Action Network's scripts will only load one embed code per page).  This feature does require the API key, so you have to be an [Action Network Partner](https://actionnetwork.org/partnerships) to use it.

Find this plugin useful? Please consider [hiring the original developer or making a donation](http://jonathankissam.com/support).

## Updates

_2022.09.11: Work commences on updating files_
* 🗓️ Calendar Shortcode
 * Default php date format updated to M d D H:i a for example: "Sep 13 Tue 19:00 pm"
 * Added container div elements around Date and Title
	<div class="actionnetwork-calendar-date">{{ event.date }}</div><div class="actionnetwork-calendar-title">{{ event.title }}</div>

_2017.06.28 version 1.0 - last development updates from prior developer_