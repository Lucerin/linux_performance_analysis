<?php
#This is the navigation bar that appears at the left on linux_performance_tests_page
#Add any link you want, just follow the bootstrap rules
echo '
    <div class="span3" id="sidebar">
                    <ul class="nav nav-list bs-docs-sidenav nav-collapse collapse">
                        <li class="">
                            <a href="index.php"><i class="icon-chevron-right"></i> LTP Results</a>
                        </li>
                        <li class="">
                            <a href="pages/powertop-results.php"><i class="icon-chevron-right"></i> Powertop Results</a>
                        </li>
                        <li class="">
                            <a href="pages/applying_patches.php"><i class="icon-chevron-right"></i> Upload a patch</a>
                        </li>
                    </ul>
                </div>
';
