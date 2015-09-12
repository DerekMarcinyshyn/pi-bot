<!DOCTYPE html>
<html>
<head>
    <title>Pi-Bot</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    
    <link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link type="text/css" rel="stylesheet" href="css/app.css"  media="screen,projection"/>
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col s12">
                <h4>
                    pi bot &nbsp; &nbsp; 
                    <button class="waves-effect waves-light blue-grey darken-3 btn" id="start" autocomplete="off">
                        <i class="material-icons left">videocam</i> Start
                    </button>
                </h4>
            </div>
        </div>
        
        <div class="row">            
            <div class="col s4">
                <h5>Streams &nbsp; &nbsp; <i id="update-streams" class="material-icons" style="cursor:pointer">replay</i></h5>
                <button autocomplete="off" id="watch" class="btn waves-effect waves-light blue-grey darken-3">
                    Watch
                </button>
                <button autocomplete="off"
                        id="streamset"
                        class="dropdown-button btn waves-effect waves-light blue-grey darken-3"
                        data-activates="streamslist"
                        data-beloworigin="true">
                    Streams list
                </button>
                <ul id="streamslist" role="menu" class="dropdown-content"></ul>

                <div class="controls">
                    <button class="waves-effect waves-light blue-grey darken-3 up-button white-text btn-large">
                        <i class="material-icons">keyboard_arrow_up</i>
                    </button>
                    <div class="row no-margin">
                        <button class="waves-effect waves-light blue-grey darken-3 left-button white-text btn-large">
                            <i class="material-icons">keyboard_arrow_left</i>
                        </button>
                        <button class="waves-effect waves-light blue-grey darken-3 center-button white-text btn-large">
                            <i class="material-icons">center_focus_strong</i>
                        </button>
                        <button class="waves-effect waves-light blue-grey darken-3 right-button white-text btn-large">
                        <i class="material-icons">keyboard_arrow_right</i>
                    </button>
                    </div>
                    <button class="waves-effect waves-light blue-grey darken-3 down-button white-text btn-large">
                        <i class="material-icons">keyboard_arrow_down</i>
                    </button>
                </div>

                <div class="lights">
                    <h6><i class="material-icons left">brightness_5</i>LED Lights</h6>
                    <div class="switch">
                        <label for="led-lights">Off<input type="checkbox" id="led-lights" name="led-lights">
                            <span class="lever"></span>On
                        </label>
                    </div>

                    <p>&nbsp;</p>

                    <h6><i class="material-icons left">blur_circular</i>IR Lights</h6>
                    <div class="switch">
                        <label for="ir-lights">Off<input type="checkbox" id="ir-lights">
                            <span class="lever"></span>On
                        </label>
                    </div>                    
                </div>
            </div>    

            <div class="col s8">
                <h4 class="card-title">Stream <span class="label label-info hide" id="status"></span></h4>
                <div class="card blue-grey darken-3">
                    <div class="card-content white-text">                               
                        <div id="stream" class="stream"></div> 
                    </div>                                      
                </div>
            </div>
        </div>    
    </div>    
    <script type="text/javascript" src="jquery.min.js"></script>
    <script type="text/javascript" src="js/materialize.min.js"></script>
    <script type="text/javascript" src="js/spin.min.js"></script>
    <script type="text/javascript" src="js/janus.js" ></script>
    <script type="text/javascript" src="js/streaming.js"></script>
    <script type="text/javascript" src="js/app.js"></script>
</body>
</html>