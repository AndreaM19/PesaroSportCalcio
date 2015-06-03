<?php
/*Database queries*/

//Events
$SHOW_EVENT_TYPE="SELECT * FROM event_type";

$SHOW_ALL_SPORT_EVENTS="select id_event, event_date, event_title, event_short_description, sport_name, event_type_name, event_flyer from event inner join sport on event.sport=sport.id_sport inner join event_type on event.event_type=event_type.id_event_type where event_type_name='Torneo' or event_type_name='Campionato' or event_type_name='Manifestazione sportiva'";

$SHOW_EVENT_DATA_AND_GALLERY="select id_event, event_date, event_title, event_short_description, sport_name, event_type_name, event_flyer, id_event_gallery from event inner join sport on event.sport=sport.id_sport inner join event_type on event.event_type=event_type.id_event_type inner join event_gallery on event.id_event=event_gallery.event_id_event where id_event='".@$_GET['eventid']."'";

$SHOW_ALL_EVENTS="select id_event, event_date, event_title, event_short_description, sport_name, event_type_name, event_flyer from event inner join sport on event.sport=sport.id_sport inner join event_type on event.event_type=event_type.id_event_type";

$SHOW_CAT_EVENTS="select id_event, event_date, event_title, event_short_description, sport_name, event_type_name, event_flyer from event inner join sport on event.sport=sport.id_sport inner join event_type on event.event_type=event_type.id_event_type where event_type_name='".eventType(@$_GET['type'])."'";

$SHOW_EVENT_DATA="select * from event inner join sport on event.sport=sport.id_sport inner join event_type on event.event_type=event_type.id_event_type where id_event='".@$_GET['eventid']."'";

$SHOW_EVENT_GALLERY="select id_event_image, image_path, id_event from event_image inner join event_gallery on event_gallery=id_event_gallery inner join event on id_event_gallery=event.event_gallery where id_event='".@$_GET['eventid']."'";

$SHOW_EVENT_GALLERY_2="select * from event_gallery where event_id_event='".@$_GET['eventid']."'";

$NEW_EVENT="INSERT INTO event (event_title, event_date, event_short_description, event_flyer, sport, event_type, event_infos) VALUES ('".@$eventTitle."', '".@$eventDate."', '".@$eventShortDesc."', '".@$eventFlyer."', '".@$eventSport."', '".@$eventType."', '".@$eventInfos."')";

$DELETE_EVENT="delete from event where id_event=".@$_GET['eventid']."";

//------------------------------------------------------------------------------------------------
//Gallery
$SHOW_GALLERY="select gallery_name, id_event_gallery from event_gallery inner join event on id_event_gallery=event_gallery where id_event=".@$_GET['eventid']."";

$NEW_GALLERY="";

$DELETE_GALLERY="delete from event_gallery where id_event_gallery=".@$_GET['galleryid']."";

//------------------------------------------------------------------------------------------------
//Images
$DELETE_IMAGE="delete from event_image where id_event_image=".@$_GET['imageid']."";

//------------------------------------------------------------------------------------------------
//Users
$GET_NAME_SURNAME="select name, surname from members";

$GET_USERS_DATA="select id, email, name, surname from members";

$GET_USER_DATA="select id, email, name, surname from members where id=".@$_GET['userid']."";

$DELETE_USER="delete from members where id=".@$_GET['userid']."";

//------------------------------------------------------------------------------------------------
//Sports
$SHOW_SPORT_LIST="select * from sport order by sport_name";

$DELETE_SPORT="delete from sport where id_sport=".@$_GET['sportid']."";

//------------------------------------------------------------------------------------------------
//Sponsor
$SHOW_SPONSOR="select * from sponsor where event_id=".@$_GET['eventid']."";

$DELETE_SPONSOR="delete from sponsor where id_sponsor=".@$_GET['sponsorid']."";
