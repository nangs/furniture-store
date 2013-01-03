<!DOCTYPE html>
<html>
    <head>
        <title>Chests &#124; DAVA</title>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <link rel="stylesheet" type="text/css" href="css/style.css"/>
        
        <script type="text/javascript" src="javascript/jquery-1.8.3.min.js"></script>
        <script type="text/javascript" src="javascript/jquery.cycle.all.js"></script>
        <script type="text/javascript" src="javascript/jquery.easing.1.3.js"></script>
        
        <script type="text/javascript">
            $(document).ready(
                function()
                {
                    $('#imgSlides').cycle(
                        {
                            fx:     'fade',
                            speed:  'slow',
                            timeout: 0,
                            pager:  '#ulThumbs',
                            pagerAnchorBuilder: function(idx, slide) 
                            {
                                // return sel string for existing anchor
                                return '#ulThumbs li:eq(' + (idx) + ') a';
                            }
                        }
                    );       
                }
            )
        </script>
    </head>
    <body>
        <div id="container">
            <div id="headerPanel">
                <p>
                   <a href="#">login</a>
                   &#124;
                   <a href="#">my account</a>
                   &#124;
                   <a href="#">my cart 0 items</a>
                </p>
            </div>
            <form>
            <div id="navPanel">
                <ul>
                    <li><a class="logo" href="index.html"></a></li>
                    <li><a class="button" href="beds.php">BEDS</a></li>
                    <li><a class="button" href="chairs.php">CHAIRS</a></li>
                    <li><a class="button" href="chests.php">CHESTS</a></li>
                    <li class="txtNav"><input type="text" name="txtSearch"/></li>
                    <li class="searchNav"><input type="submit" name="btnSearch" value=""/></li>
                </ul>
            </div>
            </form>
            <div id="mainPanel">
                <div id="imgSlides">
                    <img class="imgFirst" src="css/images/imgCenter1W650xH366.jpg" width="650" height="366" alt="centerImage"/>
                    <img class="imgFirst" src="css/images/imgCenter2W650xH366.jpg" width="650" height="366" alt="centerImage"/>
                    <img class="imgFirst" src="css/images/imgCenter3W650xH366.jpg" width="650" height="366" alt="centerImage"/>
                    <img class="imgFirst" src="css/images/imgCenter4W650xH366.jpg" width="650" height="366" alt="centerImage"/>
                    <img class="imgFirst" src="css/images/imgCenter5W650xH366.jpg" width="650" height="366" alt="centerImage"/>
                </div>
                
                <ul id="ulThumbs">
                    <li><a href="#"><img src="css/images/imgThumb1W116xH65.jpg" width="116" height="65" alt="thumbImage"/></a></li>
                    <li><a class="middleThumb" href="#"><img src="css/images/imgThumb2W116xH65.jpg" width="116" height="65" alt="thumbImage"/></a></li>
                    <li><a class="middleThumb" href="#"><img src="css/images/imgThumb3W116xH65.jpg" width="116" height="65" alt="thumbImage"/></a></li>
                    <li><a class="middleThumb" href="#"><img src="css/images/imgThumb4W116xH65.jpg" width="116" height="65" alt="thumbImage"/></a></li>
                    <li><a href="#"><img src="css/images/imgThumb5W116xH65.jpg" width="116" height="65" alt="thumbImage"/></a></li>
                </ul>
            </div>
            
            <div id="infoPanel">
                <div id="window1"></div> 
                <div id="window2">
                    <p>
                        
                    </p>
                </div>
            </div>
            
            <div id="infoPane2">
                <h4><img src="css/images/smallLogoW64xH14.jpg" alt=""> House Furniture and House Design Shop</h4>
                <p>   
                    We are one of the most successful retailers of high-end computer components, overclocked Gaming PC, 
                    modding accessories and consumer electronics in the UK and you will find over 6,000 products available to buy online. 
                    Overclockers UK is a leading retailer of computer components and offers a large selection of graphics cards, motherboards, 
                    processors, storage drives and gaming systems. For those, who want to build individual systems, Overclockers UK offers 
                    all the necessities like case fans, fan controllers and CPU coolers from all the best manufacturers in the industry 
                    providing customers with unrivalled choice and peace of mind. With such a large range of components and products 
                    on offer, competitive low prices and a highly knowledgeable sales team, Overclockers UK have renewed their commitment 
                    to providing excellent customer service and have in place an industry leading, 14 day satisfaction guarantee.
                </p>
            </div>
            
            <div id="footer">
                <p>
                    <a href="#">Page Last Updated: December 31, 2012</a>
                    &#124;
                    <a href="#">Page Editor: Davaasuren Dorjdagva</a>
                    &#124;
                    <a href="#">Terms of Use</a>
                    &#124;
                    <a href="#">Privacy Policy</a>
                    &#124;
                    <a href="#">&copy;2013 All Rights Reserved.</a>
                </p>
            </div>
            
            
            
        </div> <!--    end of container   -->
    </body>
</html>
