<?php
/*Database queries*/

//Events
$SHOW_EVENT_TYPE="SELECT * FROM event_type";

$SHOW_ALL_SPORT_EVENTS="select event_date, event_title, event_description, sport_name, event_type_name, event_flyer from event inner join sport on event.sport=sport.id_sport inner join event_type on event.event_type=event_type.id_event_type where event_type_name='Torneo' or event_type_name='Campionato' or event_type_name='Manifestazione sportiva'";

$SHOW_CAT_EVENTS="select event_date, event_title, event_description, sport_name, event_type_name, event_flyer from event inner join sport on event.sport=sport.id_sport inner join event_type on event.event_type=event_type.id_event_type where event_type_name='".eventType(@$_GET['type'])."'";


