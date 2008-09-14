<?php
/* the version number here */
$version       = "4.4.2";
$sf_release_id = "558731";

/* uncomment these 2 to have an unstable release appear */
//$version_unstable = "4.5.90";
//$sf_release_id_unstable = "";

/* list of Xfce server */
$servers = array (
  "SourceForge.net"     => "http://sourceforge.net/project/showfiles.php?group_id=19869&package_id=187881&release_id=$sf_release_id",
  "BE - www.xfce.org"   => "http://mocha.xfce.org/archive/xfce-$version/",
  "DE - de.xfce.org"    => "http://www.de.xfce.org/archive/xfce-$version/",
  "FR - p0llux.be"      => "http://www.p0llux.be/xfce/xfce-$version/",
  /*"DE - Hannelore"      => "http://hannelore.f1.fhtw-berlin.de/mirrors/xfce4/xfce-$version/",*/
  "US - us.xfce.org"    => "http://www.us.xfce.org/archive/xfce-$version/",
  "US - ca-us.xfce.org" => "http://www.ca-us.xfce.org/archive/xfce-$version/",
);

$servers_unstable = array(
//  "SourceForge.net"     => "http://sourceforge.net/project/showfiles.php?group_id=19869&package_id=187881&release_id=$sf_release_id_unstable",
  "BE - www.xfce.org"   => "http://mocha.xfce.org/archive/xfce-$version_unstable/",
//  "US - us.xfce.org"    => "http://www.us.xfce.org/archive/xfce-$version_unstable/",
//  "US - ca-us.xfce.org" => "http://www.ca-us.xfce.org/archive/xfce-$version_unstable/",
);

/* combobox */
function printServers($dir, $servers)
{
  echo '<form id="download" method="get" action="/download/">';
  echo '<select name="server">';

  /* choose 1 random item from the servers, this will be the default in the list */
  $rand = array_rand ($servers, 1);

  foreach ($servers as $name => $location)
  {
  	  if ($name != "SourceForge.net" && $dir != "")
  	    $location .= "$dir/";

  	  if ($name == $rand)
  	    $i = "selected";
  	  else
  	    $i = "";

  	  echo "<option value=\"$location\" $i>$name</option>";
  }

  echo '</select>';
  echo '<input type="submit" name="submit" value="Download" />';
  echo '</form>';
}
?>
