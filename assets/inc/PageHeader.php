<?php

function PageHeader($title)
{
    return "
        <section class=\"page-header\">
            <div class=\"bg-img\" data-background=\"assets/img/bg-img/page-header-bg.jpg\"></div>
            <div class=\"overlay\"></div>
            <div class=\"shapes\">
                <div class=\"shape shape-1\"><img src=\"assets/img/shapes/pager-header-shape-1.png\" alt=\"shape\"></div>
                <div class=\"shape shape-2\"><img src=\"assets/img/shapes/pager-header-shape-2.png\" alt=\"shape\"></div>
            </div>
            <div class=\"container\">
                <div class=\"page-header-content\">
                    <h1 class=\"title\">{$title}</h1>
                    <h4 class=\"sub-title\">
                        <span class=\"home\">
                            <a href=\"index.php\">
                                <span>Beranda</span>
                            </a>
                        </span>
                        <span class=\"icon\">/</span>
                        <span class=\"inner\">
                            <span>{$title}</span>
                        </span>
                    </h4>
                </div>
            </div>
        </section>
        <!-- ./ page-header -->
";
}
