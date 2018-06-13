
<HTML>
<HEAD>
<TITLE>State Boundaries</TITLE>
</HEAD>
<BODY>
<?php
$mapserver = getenv('MAPSERVER');
if($mapserver == NULL){
    $mapserver = "maps";
    }
$GLOBALS['mapserver'] = $mapserver;
?>
<FORM name="mapserv" method="GET" target=map action="http://<?php echo $mapserver;?>/cgi-bin/mapserv">
<TABLE border=0 cellpadding=0 style='border-collapse: collapse;'>
<TR>
<TD colspan=2 bgcolor=#BF4F51><FONT SIZE=24 COLOR="#FFFFFF">United States - State Locator</FONT></TD>
</TR>
<TR>
<TD>

<IFRAME src="http://<?php echo $mapserver;?>/cgi-bin/mapserv?map=/var/www/html/mapserver/maps/example.map&map_size=700+375&layer=bluemarble&mode=map" name=map width=700 height=375>
</IFRAME>
</TD>
<TD bgcolor=#BF4F51>
    <FONT color="#FFFFFF">Select State:</FONT><BR>
    <SELECT multiple size=25 name="layer">
     <option value="tl_2017_us_state_Alaska">Alaska</option>
     <option value="tl_2017_us_state_Arizona">Arizona</option>
     <option value="tl_2017_us_state_Arkansas">Arkansas</option>
     <option value="tl_2017_us_state_California">California</option>
     <option value="tl_2017_us_state_Colorado">Colorado</option>
     <option value="tl_2017_us_state_Connecticut">Connecticut</option>
     <option value="tl_2017_us_state_Delaware">Delaware</option>
     <option value="tl_2017_us_state_Florida">Florida</option>
     <option value="tl_2017_us_state_Georgia">Georgia</option>
     <option value="tl_2017_us_state_Hawaii">Hawaii</option>
     <option value="tl_2017_us_state_Idaho">Idaho</option>
     <option value="tl_2017_us_state_Illinois">Illinois</option>
     <option value="tl_2017_us_state_Indiana">Indiana</option>
     <option value="tl_2017_us_state_Iowa">Iowa</option>
     <option value="tl_2017_us_state_Kansas">Kansas</option>
     <option value="tl_2017_us_state_Kentucky">Kentucky</option>
     <option value="tl_2017_us_state_Louisiana">Louisiana</option>
     <option value="tl_2017_us_state_Maine">Maine</option>
     <option value="tl_2017_us_state_Maryland">Maryland</option>
     <option value="tl_2017_us_state_Massachusetts">Massachusetts</option>
     <option value="tl_2017_us_state_Michigan">Michigan</option>
     <option value="tl_2017_us_state_Minnesota">Minnesota</option>
     <option value="tl_2017_us_state_Mississippi">Mississippi</option>
     <option value="tl_2017_us_state_Missouri">Missouri</option>
     <option value="tl_2017_us_state_Montana">Montana</option>
     <option value="tl_2017_us_state_Nebraska">Nebraska</option>
     <option value="tl_2017_us_state_Nevada">Nevada</option>
     <option value="tl_2017_us_state_New_Hampshire">New Hampshire</option>
     <option value="tl_2017_us_state_New_Jersey">New Jersey</option>
     <option value="tl_2017_us_state_New_Mexico">New Mexico</option>
     <option value="tl_2017_us_state_New_York">New York</option>
     <option value="tl_2017_us_state_North_Carolina">North Carolina</option>
     <option value="tl_2017_us_state_North_Dakota">North Dakota</option>
     <option value="tl_2017_us_state_Ohio">Ohio</option>
     <option value="tl_2017_us_state_Oklahoma">Oklahoma</option>
     <option value="tl_2017_us_state_Oregon">Oregon</option>
     <option value="tl_2017_us_state_Pennsylvania">Pennsylvania</option>
     <option value="tl_2017_us_state_Rhode_Island">Rhode Island</option>
     <option value="tl_2017_us_state_South_Carolina">South Carolina</option>
     <option value="tl_2017_us_state_South_Dakota">South Dakota</option>
     <option value="tl_2017_us_state_Tennessee">Tennessee</option>
     <option value="tl_2017_us_state_Texas">Texas</option>
     <option value="tl_2017_us_state_Utah">Utah</option>
     <option value="tl_2017_us_state_Vermont">Vermont</option>
     <option value="tl_2017_us_state_Virginia">Virginia</option>
     <option value="tl_2017_us_state_Washington">Washington</option>
     <option value="tl_2017_us_state_West_Virginia">West Virginia</option>
     <option value="tl_2017_us_state_Whisonsin">Wisconsin</option>
     <option value="tl_2017_us_state_Wyoming">Wyoming</option>
    </SELECT>
</TD>
</TR>
<TR>
<TD colspan=2 bgcolor=#BF4F51>
<FONT COLOR="#FFFFFF">
   <INPUT type="checkbox" name="layer" value="tl_2017_us_state">
    State Boundaries
    &nbsp;
   <INPUT type="checkbox" name="layer" value="tl_2017_us_county">
    County Boundaries
    <INPUT type="hidden" name="map" value="/var/www/html/mapserver/maps/example.map">
    <INPUT type="hidden" name="layer" value="bluemarble">
    <INPUT type="hidden" name="mode" value="map">
    <INPUT type="hidden" name="mapext" value="-170 42 -60 50">
    <INPUT type="hidden" name="map_size" value="700 375">
    <INPUT type="submit" name="submit" value="Update">
</FONT>
</TD>
</TR>
</TABLE>
</FORM>
</BODY>
</HTML>


