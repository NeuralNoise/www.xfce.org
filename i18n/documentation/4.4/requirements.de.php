<h1>Systemvoraussetzungen für Xfce</h1>
<p>Alle Pakete (außer xfce4-dev-tools) hängen sowohl von gtk+&nbsp;&gt;=&nbsp;2.6 als auch von glib&nbsp;&gt;=&nbsp;2.6.4 ab.
Die Reihenfolge in der Tabelle entspricht auch der empfohlenen Reihenfolge des Kompilierens.<br />
Außerdem wird empfohlen die einzelne Komponenten nur von ein und derselben Xfce-Version zu kompilieren. </p>

<h2>Tabelle der Paketabhängigkeiten:</h2>
<table width="100%">
  <tr>
    <th width="20%" align="left"><h3>Paket</h3></th>
    <th width="40%" align="left"><h3>Abhängigkeit(en)</h3></th>
    <th width="40%" align="left"><h3>Optionale Abhängigkeit(en)</h3></th>
  </tr>
  <tr bgcolor="#eeeeee">
    <td>xfce4-dev-tools</td>
    <td>autoconf, automake, gettext, libtool, pkgconfig, intltool</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>libxfce4util</td>
    <td>pkgconfig</td>
    <td>&nbsp;</td>
  </tr>
  <tr bgcolor="#eeeeee">
    <td>libxfcegui4</td>
    <td>libxfce4util</td>
    <td>libstartup-notification</td>
  </tr>
  <tr>
    <td>libxfce4mcs</td>
    <td>libx11, libsm, libxfce4util</td>
    <td>libstartup-notification</td>
  </tr>
  <tr bgcolor="#eeeeee">
    <td>libexo</td>
    <td>libxfce4util</td>
    <td>xfce-mcs-manager, python &gt;= 2.2</td>
  </tr>
  <tr>
    <td>xfce-mcs-manager</td>
    <td>libxfcegui4, libxfce4mcs</td>
    <td>&nbsp;</td>
  </tr>
  <tr bgcolor="#eeeeee">
    <td>xfce-mcs-plugins</td>
    <td>libx11, libxfcegui4, xfce-mcs-manager</td>
    <td>libxcursor, libxxf86misc, libxkbfile, libxrandr, libxxf86vm</td>
  </tr>
  <tr>
    <td>xfce4-panel</td>
    <td>libx11, libsm, libxfce4mcs, libxfce4util, libxfcegui4, xfce-mcs-manager</td>
    <td>libstartup-notification</td>
  </tr>
  <tr bgcolor="#eeeeee">
    <td>thunar</td>
    <td>libexo&nbsp;&gt;=&nbsp;0.3.1.4, libpng&nbsp;&gt;=&nbsp;1.2.0, libxfce4util</td>
    <td>dbus&nbsp;&gt;=&nbsp;0.34, gconf&nbsp;&gt;=&nbsp;2.4.0, libjpeg</td>
  </tr>
  <tr>
    <td>xfce4-session</td>
    <td>libx11, libsm, libxfce4util, libxfce4mcs, libxfcegui4, xfce-mcs-manager </td>
    <td>libgnome&nbsp;&gt;=&nbsp;2.4.0</td>
  </tr>
  <tr bgcolor="#eeeeee">
    <td>xfwm4</td>
    <td>libx11, libxpm, libsm, libxfce4mcs, libxfce4util, libxfcegui4, xfce-mcs-manager </td>
    <td>libxrender, libxrandr, libxcomposite, libxfixes, libxdamage</td>
  </tr>
  <tr>
    <td>xfdesktop</td>
    <td>libx11, libsm, libxfce4util, libxfcegui4, libxfce4mcs, xfce-mcs-manager, xfce4-panel</td>
    <td>thunar&nbsp;&gt;=&nbsp;0.2.0, libexo&nbsp;&gt;=&nbsp;0.3.1</td>
  </tr>
  <tr bgcolor="#eeeeee">
    <td>xfce-utils</td>
    <td>libx11, libxfce4mcs, libxfce4util, libxfcegui4, xfce-mcs-manager</td>
    <td>gdm</td>
  </tr>
  <tr>
    <td>xfprint</td>
    <td>libxfcegui4, libxfce4util, libxfce4mcs, xfce-mcs-manager</td>
    <td>cups, bsdlpr</td>
  </tr>
  <tr bgcolor="#eeeeee">
    <td>gtk-xfce-engine-2</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>mousepad</td>
    <td>libxfcegui4, libxfce4util</td>
    <td>&nbsp;</td>
  </tr>
  <tr bgcolor="#eeeeee">
    <td>terminal</td>
    <td>libexo&nbsp;&gt;=&nbsp;0.3.0, vte&nbsp;&gt;=&nbsp;0.11.11</td>
    <td>libstartup-notification, dbus&nbsp;&gt;=&nbsp;0.22 </td>
  </tr>
  <tr>
    <td>xarchiver</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr bgcolor="#eeeeee">
    <td>xfburn</td>
    <td>libxfcegui4, libexo&nbsp;&gt;=&nbsp;0.3.0</td>
    <td>cdrecord, readcd, cdrdao, mkisofs</td>
  </tr>
  <tr>
    <td>xfcalendar</td>
    <td>perl, libxfce4mcs, libxfcegui4, xfce-mcs-manager </td>
    <td>ical, db&nbsp;&gt;=&nbsp;4.0</td>
  </tr>
  <tr bgcolor="#eeeeee">
    <td>xfce4-appfinder</td>
    <td>libxfcegui4</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>xfce4-mixer</td>
    <td>libxml-2&nbsp;&gt;=&nbsp;2.4.0, libxfce4util, libxfcegui4, libxfce4mcs, xfce-mcs-manager</td>
    <td>ossaudio, alsa, sun, sgi, audio</td>
  </tr>
  <tr bgcolor="#eeeeee">
    <td>xfce4-terminal</td>
    <td>libxfcegui4, libxfce4mcs, vte&nbsp;&gt;=&nbsp;0.11.0, xfce-mcs-manager</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>xfmedia</td>
    <td>libx11, libsm, libxfce4util, libxfcegui4, libxine&nbsp;&gt;=&nbsp;1.0.0</td>
    <td>libexo&nbsp;&gt;=&nbsp;0.2.0, libstartup-notification, dbus&nbsp;&gt;=&nbsp;0.22, taglib </td>
  </tr>
</table>

<h2>Empfohlene Pakete:</h2>
<ul>
    <li>librsvg (Unterstützung skalierbarer Symbole)</li>
    <li>hicolor-icon-theme (bessere Unterstützung von Symbolthemen)</li>
    <li>openssh</li>
    <li>xscreensaver (sperrt den Bildschirm)</li>
</ul>