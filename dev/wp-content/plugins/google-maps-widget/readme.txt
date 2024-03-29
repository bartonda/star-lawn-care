=== Google Maps Widget ===
Contributors: WebFactory
Donate link: https://www.paypal.com/cgi-bin/webscr?cmd=_donations&business=paypal%40webfactoryltd%2ecom&lc=US&item_name=Google%20Maps%20Widget&no_note=0&currency_code=USD&bn=PP%2dDonationsBF%3abtn_donateCC_LG%2egif%3aNonHostedGuest
Tags: google maps, maps, gmaps, widget, lightbox, map, google map, fancybox, fancybox2, multilingual, sidebar
License: GPLv2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html
Requires at least: 3.3
Tested up to: 3.6.1
Stable tag: 0.85

Displays a single-image super-fast loading Google map in a widget. A larger map with all the usual features is available on click in a lightbox.

== Description ==

Check out some examples on the <a href="http://www.googlemapswidget.com/">official plugin site</a>, view the [Google Maps Widget video](http://www.youtube.com/watch?v=y1siX9ha7Pw) or give us a shout <a href="http://twitter.com/WebFactoryLtd">@WebFactoryLtd</a>.

http://www.youtube.com/watch?v=y1siX9ha7Pw&hd=1

**General widget options**

* title
* address

**Thumbnail map options**

* map size - width & height
* map type - road, satellite, map or hybrid
* pin color
* pin size
* zoom level
* text above map
* text below map

**Lightbox map options**

* map size - width & height
* map type - road, satellite, map or hybrid
* zoom level
* skin
* show/hide address bubble
* show/hide map title
* header text
* footer text

> If you need a Google Maps shortcode plugin you might be interested in purchasing our premium <a title="5sec Google Maps" href="http://5sec-gmap.webfactoryltd.com/">5sec Google Maps</a> plugin.

The plugin was voted on the <a href="http://themesplugins.com/Plugin-detail/google-maps-widget-google-map-free-plugin-for-wordpress/" title="Top 100 WordPressian plugin">Top 100 List</a> by WordPressian.

**Translator (thank you!)**

* English - original :)
* Swedish - Sofia Asklund
* Spanish - Jesus Garica
* Croatian - Gordan
* German - coming soon
* French - coming soon

== Installation ==

Follow the usual routine;

1. Open WP admin - Plugins - Add New
2. Enter "Google Maps Widget" under search and hit Enter
3. Plugin will show up as the first on the list, click "Install Now"

Or if needed, upload manually;

1. Download the plugin.
2. Unzip it and upload to wp-content/plugin/
3. Open WP admin - Plugins and click "Activate" next to the plugin
4. Configure the plugin under Appearance - Widgets


== Frequently Asked Questions ==

= Who is this plugin for? =

For just about anyone who needs a map on their site.

= It's not working!!! Arrrrrrrrr =

A more detailed help is coming soon. Till then check 2 things: does your theme have wp_footer() function call in the footer and if there are any jQuery errors on the site.
If you can figure it out open a thread in the support forums.

== Screenshots ==

1. Small map is shown as a widget and since it's just one image it loads super-fast
2. Larger map with all features is available in the lightbox
3. Widget options - thumbnail map
4. Widget options - lightbox map

== Changelog ==
= 0.85 =
* 2013/10/03
* added Croatian translation; thank you Gordan

= 0.80 =
* 2013/09/28
* minor translation fixes
* added Spanish translation; thank you Jesus!

= 0.75 =
* 2013/09/24
* map language is autodetected based on user's browser language (HTTP_ACCEPT_LANGUAGE header)
* added Swedish translation; thank you Sofia!
* German and Croatian translations will be up next

= 0.71 =
* 2013/09/17
* few more preparations for translation
* Swedish translation coming in a few days

= 0.70 =
* 2013/09/05
* prepared everything for translation, POT file is available and all strings are wrapped in <i>__()</i>
* protocols should now match http/https for both thumbnail and ligtbox map
* <a href="http://www.googlemapswidget.com/">www.googlemapswidget.com</a> is up and running

= 0.65 =
* 2013/08/05
* updated JS for WP v3.6

= 0.60 =
* 2013/04/06
* fixed zoom bug in lightbox

= 0.55 =
* 2013/04/05
* added 2 new options - text above and below thumbnail map
* updated fancyBox JS to the latest version
* minor code improvements

= 0.50 =
* 2012/12/12
* small WP 3.5 compatibility fixes

= 0.41 =
* 2012/12/03
* removed screenshots from plugin package

= 0.4 =
* 2012/11/28
* fixed non UTF-8 address bug

= 0.37 =
* 2012/11/19
* fixed bug to use google.com instead of google.co.uk

= 0.35 =
* 2012/09/28
* added 4 skins for lightbox

= 0.31 =
* 2012/09/14
* fix for bad themes which don't respect proper sidebar markup

= 0.3 =
* 2012/09/04
* lightbox script changed from jQuery UI Dialog to <a href="http://fancyapps.com/fancybox/">fancyBox2</a>
* added "show map title on lightbox" option
* significant speed improvements
* preparations for lightbox skins

= 0.22 =
* 2012/08/31
* Fixed small JS related GUI bug

= 0.2 =
* 2012/08/28
* Complete GUI rewrite
* Added header text option
* Added address bubble visibility option
* Fixed thumbnail map scaling bug
* Fixed lightbox map size bug

= 0.13 =
* 2012/08/09
* Added pin size for thumbnail map

= 0.12 =
* 2012/08/07
* Added pin color for thumbnail map
* Fixed a few minor bugs

= 0.11 =
* 2012/08/06
* Fixed a few minor bugs

= 0.1 =
* 2012/08/03
* Initial release


== Upgrade Notice ==

= 0.2 =
Due to variable name changes footer text will be reset

= 0.1x =
Upgrade without any fear :)

= 0.1 =
Initial release