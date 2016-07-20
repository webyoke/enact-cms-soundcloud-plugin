#Code Plugin for Enact CMS
Plugin for [Enact CMS](https://enactcms.com).

Allows embedding [SoundCloud](https://soundcloud.com) tracks/playlists(sets)/users by providing a custom SoundCloud field
which content authors can paste SoundCloud urls into. 

##Use
Create a SoundCloud field and add it to one of your section layouts, paste in a soundcloud url and your good to go.

Embed the widget by calling the field:
```
{{ entry.yourSoundCloudField }}

{# or #}

{{ entry.yourSoundCloudField.getPlayerHtml }}
```

If you want to embed a SoundCloud widget without using a field you can do so by accessing the plugin:
```
{{ enact.plugin.SoundCloud.embed('https://soundcloud.com/sensisye/classy') }}

{# you can also pass in options (detailed below) #}

{{ enact.plugin.SoundCloud.embed('https://soundcloud.com/sensisye/classy', { 'theme_color' : '#222' } ) }}

```

###Options/Customization
You can customize the player by changing the options provided by the plugin:

| option name | type | description |
| --- | --- | --- |
| visual | checkbox | If true the player is displayed in an integrated format with the song artwork (When this option is used many custom attributes will not be respected ie: custom colors)
| color | color | Color play button and other controls. e.g. "0066CC"
| theme_color | color | Color player background etc.
| text_buy_track | text | e.g. “Tweet” and it points to your “buy” link
| text_buy_set | text | e.g. “Tweet” and it points to your "buy" link
| text_download_track | text | e.g. “Get it” and it points to your “download” link
| buying | checkbox | Show/Hide buy buttons
| sharing | checkbox | Show/Hide share buttons
| download | checkbox | Show/Hide download buttons
| show_bpm | checkbox | Show/Hide bpm display in player
| show_playcount | checkbox | Show/Hide number of track plays
| start_track | number | A number from 0 to the playlist length. preselects a track in a playlist
| default_width | number | A number e.g. 400. Overrides the player’s autoscale useful when embedding in other flash movies
| default_height | number | A number e.g. 500. Overrides the player’s autoscale useful when embedding in other flash movies
| font   | text | A string e.g. “Arial”. Overrides the default font with system font
| enable_api | checkbox | Enable the JavaScript API callbacks
| single_active | checkbox | if set to false the multiple players on the page won’t toggle each other off when playing
| show_user | checkbox | Show or hide the uploader name useful e.g. in tiny players to save space)
| auto_play | checkbox | 
| show_artwork | checkbox | 
| show_comments | checkbox | 
| show_reposts | checkbox | 

These can be set up with defaults on the fields options page, or individually on each field in use in the layout.
