<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <title>
        Site Básico
    </title>
    <meta name="description" content="Page with empty content">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="shortcut icon" href="assets/favicon.png" />
   
</head>

<body>

    <p>Olá <?= $nome  ?> </p>

    <a id="showTakingsMenu">CLICAR</a>

    <script type="text/javascript" src="https://code.jquery.com/jquery-3.5.1.min.js"></script>

    <script>
        var EchGallery = function() {

            // Private functions
            var _createMainDiv = function(background) {

                var toBeReturned = "";

                toBeReturned = '<div id="echGallery" style="background-image: url(' + background +
                    ');">' +
                    '<div class="echGallery-focus"><div class="echGallery-focus-int"></div></div><span class="echGallery-close"></span><div class="echGallery-row"><ul></ul><div class="clear"></div></div></div>';

                return toBeReturned;

            }

            // Private functions
            var _changeBody = function() {

                var mainDiv = _createMainDiv('img.jpg');

                $("body").append(mainDiv);

                var objeto = {
                    colums: 4,
                    background: 'assets/bgPic.jpg',
                    radius: '0px',
                    animated: 'bounceIn',
                    darkness: false,
                    //
                    list: {
                        item1: {
                            takings: '500',
                            title: 'Compare Takings',
                            nameColor: '#088dff',
                            titleColor: '#525252',
                            descColor: '#565656',
                            desc: 'Compare takings from different periods',
                            image: '',
                            background: '#f5f5f5',
                            link: '#l/🍰/Takings/compareTakings',
                            target: '_self'
                        },
                        item9: {
                            name: 'Table',
                            title: 'Takings Summary Table',
                            nameColor: '#FF8A00',
                            desc: 'Table showing the daily Information for All Shops',
                            image: '',
                            background: '',
                            link: '#l/🍰/takings/dailyTable/yesterday',
                            target: '_self'
                        },
                    },
                };

                console.log(list);

                $.each(list.list, function(key, item){

                    var titleColorProp = "";

                    if(item.titleColor) {

                        titleColorProp = "style='color:"+item.titleColor+"'";

                    }

                    var li = "<li "+titleColorProp+">"+item.title+"</li>";

                    $(".echGallery-row ul").append(li);

                });



            }

            // Public methods
            return {

                prop: function() {
                    return _prop();
                },

                changeBody: function() {
                    return _changeBody();
                }
            };
        }();

        $("#showTakingsMenu").click(function() {

            EchGallery.changeBody();

        });


      

</body>


</html>