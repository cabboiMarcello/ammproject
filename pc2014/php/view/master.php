<!DOCTYPE html>

<!-- 
     Pagina master, contiene tutto il layout della applicazione:

- html
    -   head:
            - meta
            - title
            - base
    -   body:
            - header (topdiv, header)
            - startpage (centralbar(centralmenu), leftbar(leftmenu), content, rightbar(extra))
            - footer (bottomdiv1, bottomdiv2, validator)
-->

<html>
    <head>
        <meta http-equiv="content-type" content="text/html; charset=utf-8" />
        <title>PC 2@14</title>
        <meta name="keywords" content="pc vendita notebook tablet" />

    </head>

    <body>

        <header>
            <div class="topdiv">

                <!-- NEWSLETTER -->

                <ul id="links">
                    <li id="google"><a href="http://www.google.com">Google</a></li>
                    <li id="facebook"><a href="http://facebook.com/">Facebook</a></li>
                </ul>
            </div>   


            <!--  header -->
            <div id="header">
                <div id="logo">
                    <h1>PC 2@14</h1>
                </div>
            </div>
        </header>


        <!-- start page -->
        <div id="startpage">

            <!-- centralbar -->    
            <div id="centralbar">
                <ul>
                    <li id="centralmenu">
                        <?php
                        $central = $vd->getCentralBarFile();
                        require "$central";
                        ?>
                    </li>
                </ul>

            </div>

            <!--  leftbar -->
            <div id="leftbar">
                <ul>
                    <li id="leftmenu">
                        <?php
                        $left = $vd->getLeftBarFile();
                        if (isset($left)) {
                            require "$left";
                        }
                        ?>
                    </li>
                </ul>

            </div>

            <!-- contenuto -->
            <div id="content">

                <?php
                $content = $vd->getContentFile();
                require "$content";
                ?>
            </div>

            <!--  uprightbar -->
            <div id="uprightbar">
                <ul>
                    <li id="extra">
                        <?php
                        $upright = $vd->getUpRightBarFile();

                        require "$upright";
                        ?>
                    </li>
                </ul>

            </div>
        </div>

        <!--  ?inserire span? -->
        <footer>

            <div id="bottomdiv2">

                <p>
                    Grazie per averci visitato. Vi auguriamo una buona navigazione <em> Lo staff PC2@14. </em>
                </p>


            </div>

            <div class="validator">
                <p>
                    <a href="http://validator.w3.org/check/referer" class="xhtml" title="Questa pagina contiene HTML valido">
                        <abbr title="eXtensible HyperText Markup Language">HTML</abbr> Valido</a>
                    <a href="http://jigsaw.w3.org/css-validator/check/referer" class="css" title="Questa pagina ha CSS validi">
                        <abbr title="Cascading Style Sheets">CSS</abbr> Valido</a>
                </p>
            </div>

        </footer>


    </body>
</html>






