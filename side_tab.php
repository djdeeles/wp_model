<h2 class="widgettitle2">İlan Kategorileri</h2>
<div class="yanmenu">
  <div id="TabbedPanels1" class="TabbedPanels">
    <ul class="TabbedPanelsTabGroup">
      <li class="TabbedPanelsTab" >
        <?php $tab1 = get_option('tab1'); echo stripslashes($tab1); ?>
      </li>
      <li class="TabbedPanelsTab" >
        <?php $tab2 = get_option('tab2'); echo stripslashes($tab2); ?>
      </li>
      <!--<li class="TabbedPanelsTab" >
        <?php $tab3 = get_option('tab3'); echo stripslashes($tab3); ?>
      </li>-->
    </ul>
    <div class="TabbedPanelsContentGroup">
      <div class="TabbedPanelsContent">
        <?php wp_nav_menu( array( 'theme_location' => 'tab1' ) ); ?>
      </div>
      <div class="TabbedPanelsContent">
        <?php wp_nav_menu( array( 'theme_location' => 'tab2' ) ); ?>
      </div>
      <!--<div class="TabbedPanelsContent">
        <?php wp_nav_menu( array( 'theme_location' => 'tab3' ) ); ?>
      </div>-->
    </div>
  </div>
</div>
<script type="text/javascript">
var TabbedPanels1 = new Spry.Widget.TabbedPanels("TabbedPanels1");
</script>
<div class="temizle"></div>
