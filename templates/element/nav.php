<!-- Navigation Bar-->
<header id="topnav" class="defaultscroll fixed-top sticky">
    <div class="container">
        <!-- Logo container-->
        <div class="">
            <a href="javascript:void(0)" onclick="document.getElementById('bb').scrollIntoView();">
             <!-- <a href="/" class="logo zap-logo" style="color:#1F7FBD">
              The Office of Mohammad Solaiman Salim
            </a> -->
            
    <p class="logo zap-logo" style="color:#1F7FBD">

             <?= $this->Html->link(__('The Office of Mohammad Solaiman Salim'), ['controller' => 'fronts', 'action' => 'home']) ?>
    </p>        

            </a>
           
        </div>
        <!-- End Logo container-->
        <div class="menu-extras" style="float: left">
            <div class="menu-item">
                <!-- Mobile menu toggle-->
                <a class="navbar-toggle">
                    <div class="lines">
                        <span></span>
                        <span></span>
                        <span></span>
                    </div>
                </a>
                <!-- End mobile menu toggle-->
            </div>
        </div>
        <div id="navigation">
            <!-- Navigation Menu-->
            <ul class="navigation-menu">
              
                <li class="">
                <?= $this->Html->link(__('Home'), ['controller' => 'fronts', 'action' => 'home'], ) ?>
                </li>
                <li class="">
                <?= $this->Html->link(__('About'), ['controller' => 'fronts', 'action' => 'about'], ) ?>
                </li>
                <li class="">
                <?= $this->Html->link(__('Event'), ['controller' => 'fronts', 'action' => 'event'], ) ?>
                </li>

                <li class="">
                <?= $this->Html->link(__('News'), ['controller' => 'fronts', 'action' => 'news'], ) ?>
                </li>


                <li class="has-submenu">
                    <a href="javascript:void(0)">Media</a>
                    <span class="menu-arrow"></span>
                    <ul class="submenu">
                        
                        <li class="has-submenu">
                        
                        <?= $this->Html->link(__('Speeches'), ['controller' => 'fronts', 'action' => 'speeches'], ) ?>
                        </li>
                        <li class="has-submenu">
            
                        <?= $this->Html->link(__('Interviews'), ['controller' => 'fronts', 'action' => 'interviews'], ) ?>
                        </li>
                        <li class="has-submenu">
                  
                        <?= $this->Html->link(__('Photos'), ['controller' => 'fronts', 'action' => 'photos'], ) ?>
                        </li>
                        
                    </ul>
                </li>
              
                <li class="">
                <?= $this->Html->link(__('Contact'), ['controller' => 'fronts', 'action' => 'contact'], ) ?>
                </li>
                <li class="">
                    <a href="#get-involved" id="involved-btn" class="btn-custom popup-form">Get Involved</a>
                </li>
            </ul>
        </div>
    </div>
</header>