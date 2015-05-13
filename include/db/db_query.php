<?php
/*Database queries*/

//Events
$SHOW_EVENT_TYPE="SELECT * FROM event_type";

$SHOW_ALL_SPORT_EVENTS="select id_event, event_date, event_title, event_short_description, sport_name, event_type_name, event_flyer from event inner join sport on event.sport=sport.id_sport inner join event_type on event.event_type=event_type.id_event_type where event_type_name='Torneo' or event_type_name='Campionato' or event_type_name='Manifestazione sportiva'";

$SHOW_ALL_SPORT_EVENTS_GALLERY="select id_event, event_date, event_title, event_short_description, sport_name, event_type_name, event_flyer, id_event_gallery from event inner join sport on event.sport=sport.id_sport inner join event_type on event.event_type=event_type.id_event_type inner join event_gallery on event.id_event=event_gallery.event_id_event where event_type_name='Torneo' or event_type_name='Campionato' or event_type_name='Manifestazione sportiva'";


$SHOW_ALL_EVENTS="select id_event, event_date, event_title, event_short_description, sport_name, event_type_name, event_flyer from event inner join sport on event.sport=sport.id_sport inner join event_type on event.event_type=event_type.id_event_type";

$SHOW_CAT_EVENTS="select id_event, event_date, event_title, event_short_description, sport_name, event_type_name, event_flyer from event inner join sport on event.sport=sport.id_sport inner join event_type on event.event_type=event_type.id_event_type where event_type_name='".eventType(@$_GET['type'])."'";

$SHOW_EVENT_DATA="select id_event, event_date, event_title, event_infos, sport_name, event_type_name, event_flyer from event inner join sport on event.sport=sport.id_sport inner join event_type on event.event_type=event_type.id_event_type where id_event='".@$_GET['eventid']."'";

//User data
$GET_NAME_SURNAME="select name, surname from members";

$GET_USERS_DATA="select id, email, name, surname from members";

$GET_USER_DATA="select id, email, name, surname from members where id=".@$_GET['userid']."";


