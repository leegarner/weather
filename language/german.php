<?php
/**
*   Default german language file for the Weather plugin
*	Translated by matrox66 Feb.2017
*   @author     Lee Garner <lee@leegarner.com>
*   @copyright  Copyright (c) 2011 Lee Garner <lee@leegarner.com>
*   @package    weather
*   @version    1.0.0
*   @license    http://opensource.org/licenses/gpl-2.0.php 
*               GNU Public License v2 or later
*   @filesource
*/

$LANG_WEATHER = array(
'pi_title'				=> 'Wetter',
'version'				=> 'ver.',
'curr_cond_for'			=> 'Aktuelles Wetter für',
'search_instr'			=> 'Die suche über Postleitzahl und Ort führt zu den besten Ergebnissen.<br />Du kannst aber auch Koordinaten eingeben (z.B. 52.507863,13.426145 für Berlin)',
'rem_this_item'			=> 'Eintrag ausblenden',
'wind'					=> 'Wind',
'powered_by'			=> 'Powered by',
'purge_cache'			=> 'Zwischenspeicher löschen',
'err_purge_cache'		=> 'Fehler beim löschen des Zwischenspeicher',
'cache_purged'			=> 'Zwischenspeicher gelöscht',
'menu_hlp'				=> array(
    'default' => 'Drücke "Zwischenspeicher löschen" um alle gespeicherten Einträge zu löschen. Dies sollte bei jeder Änderung des Anbieters durchgeführt werden.',
    ),
);

$PLG_weather_MESSAGE1 = 'Der gesuchte Ort konnte nicht gefunden werden.';
$PLG_weather_MESSAGE2 = 'Es gab Fehler bei der Abfrage der Wetterdaten.';
$PLG_weather_MESSAGE3 = 'API-Key nicht vorhanden';
$PLG_weather_MESSAGE4 = 'Es gab Fehler beim updaten des Plugin';

$LANG_configsubgroups['weather'] = array(
    'sg_main'               => 'Einstellungen',
);

$LANG_fs['weather'] = array(
    'fs_main'               => 'Allgemeine Einstellungen',
    'fs_provider_wwo'       => 'World Weather Online',
    'fs_provider_wu'        => 'Weather Underground',
    'fs_provider_apixu'     => 'APIXU',
);

$LANG_configsections['weather'] = array(
    'label'                 => 'Wetter',
    'title'                 => 'Wetter Konfiguration'
);

$LANG_confignames['weather'] = array(
    'anon_access'       => 'Zugriff für Gäste',
    'displayblocks'     => 'glFusion Blöcke anzeigen',
    'cache_minutes'     => 'Zwischenspeicher in Minuten',
    'default_loc'       => 'Voreingestellter Ort',
    'blk_show_loc'      => 'Wetterdaten im PHP-Block',
    'usermenu_option'   => 'Plugin im "Plugins" Menü anzeigen?',
    'api_key'           => 'API-Key des Anbieter',
    'f_c'               => 'Einheit für Temperatur',
    'k_m'               => 'Einheit für Windgeschwindigkeit',
    'provider'          => 'Anbieter',
    'api_key_wwo'       => 'WWO-API-Key',
    'api_key_wu'        => 'WU-API-Key',
    'ref_key_wu'        => 'Referrer-Key',
    'api_key_apixu'     => 'APIXU-API-Key',
);

$LANG_configselects['weather'] = array(
    0   => array(   'Richtig' => 1, 'Falsch' => 0),
    1   => array(   'Ja' => 1, 'Nein' => 0),
    2   => array(   'Keine' => 0,
                    'Anzeigen'  => 1,
                    'Anzeigen & Suchen' => 2,
            ),
    3   => array(   'Voreingestellter Ort' => 1,
                    'Persönlicher Ort wenn vorhanden' => 2,
                    'Persönlicher Ort sonst Voreingestellter Ort' => 3,
            ),
    13  => array(   'Linke Blöcke' => 1, 
                    'Rechte Blöcke' => 2, 
                    'Linke & Rechte Blöcke' => 3, 
                    'Keine' => 0,
            ),
    14  => array(   'Milen pro Stunde' => 'M', 'Kilometer pro Stunde' => 'K' ),
    15  => array(   'Farenheit' => 'F', 'Celsius' => 'C'),
    16  => array(   'World Weather Online' => 'wwo',
                    'Weather Underground' => 'wu',
                    'APIXU' => 'apixu',
            ),
);

$LANG_APIXU_CONDITIONS = array(
'Sunny'											=> 'Sonnig',
'Clear'											=> 'Klar',
'Partly cloudy'									=> 'Leicht bewölkt',
'Cloudy'										=> 'Bewölkt',
'Overcast'										=> 'Bedeckt',
'Mist'											=> 'Leichter Nebel',
'Patchy rain nearby'							=> 'Stellenweise Regenfall',
'Patchy snow nearby'							=> 'Stellenweise Schneefall',
'Patchy sleet nearby'							=> 'Stellenweise Eisregen',
'Patchy freezing drizzle nearby'				=> 'Stellenweise gefrierender Nieselregen',
'Thundery outbreaks in nearby'					=> 'Gewittrige Niederschläge',
'Blowing snow'									=> 'Schneeverwehungen',
'Blizzard'										=> 'Schneesturm',
'Fog'											=> 'Nebel',
'Freezing fog'									=> 'Eisnebel',
'Patchy light drizzle'							=> 'Stellenweise Nieselregen',
'Light drizzle'									=> 'Nieselregen',
'Freezing drizzle'								=> 'Gefrierender Nieselregen',
'Heavy freezing drizzle'						=> 'Starker Nieselregen',
'Patchy light rain'								=> 'Stellenweise leichter Regenfall',
'Light rain'									=> 'Leichter Regenfall',
'Moderate rain at times'						=> 'Zuweilen mäßiger Regenfall',
'Moderate rain'									=> 'Mäßiger Regenfall',
'Heavy rain at times'							=> 'Zeitweise starker Regenfall',
'Heavy rain'									=> 'Starker Regenfall',
'Light freezing rain'							=> 'Leichter Eisregen',
'Moderate or heavy freezing rain'				=> 'Mäßiger bis starker Eisregen',
'Light sleet'									=> 'Leichte Graupelschauer',
'Moderate or heavy sleet'						=> 'Mäßige bis starke Graupelschauer',
'Patchy light snow'								=> 'Stellenweise leichter Schneefall',
'Light snow'									=> 'Leichter Schneefall',
'Patchy moderate snow'							=> 'Stellenweise mäßiger Schneefall',
'Moderate snow'									=> 'Mäßiger Schneefall',
'Patchy heavy snow'								=> 'Stellenweise starker Schneefall',
'Heavy snow'									=> 'Starker Schneefall',
'Ice pellets'									=> 'Hagel',
'Light rain shower'								=> 'Leichte Regenschauer',
'Moderate or heavy rain shower'					=> 'Mäßige bis starke Regenschauer',
'Torrential rain shower'						=> 'Sintflutartige Regenschauer',
'Light sleet showers'							=> 'Leichte Graupelschauer',
'Moderate or heavy sleet showers'				=> 'Mäßige bis starke Graupelschauer',
'Light snow showers'							=> 'Leichte Schneegestöber',
'Moderate or heavy snow showers'				=> 'Mäßige bis starke Schneegestöber',
'Light showers of ice pellets'					=> 'Leichte Hagelschauer',
'Moderate or heavy showers of ice pellets'		=> 'Mäßige bis starke Hagelschauer',
'Patchy light rain in area with thunder'		=> 'Stellenweise leichter Regenfall mit Gewitter',
'Moderate or heavy rain in area with thunder'	=> 'Mäßiger bis starker Regenfall mit Gewitter',
'Patchy light snow in area with thunder'		=> 'Stellenweise leichter Schneefall mit Gewitter',
'Moderate or heavy snow in area with thunder'	=> 'Mäßiger bis starker Schneefall mit Gewitter'
);

$LANG_DIRECTIONS = array(
"E"		=>"O",
"N"		=>"N",
"W"		=>"W",
"S"		=>"S",
"NE"	=>"NO",
"SE"	=>"SO",
"NW"	=>"NW",
"SW"	=>"SW",
"ENE"	=>"ONO",
"WNW"	=>"WNW",
"ESE"	=>"OSO",
"WSW"	=>"WSW",
"NNE"	=>"NNO",
"SSE"	=>"SSO",
"NNW"	=>"NNW",
"SSW"	=>"SSW",
"VAR"	=>"---"
);

?>
