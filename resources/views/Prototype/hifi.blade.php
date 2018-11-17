@extends('content.base')
@title('HiFi Prototype')

@section('post_body')
    <div class="review offline showComments noScenarios" tabindex="0">
    <div id="sidepanel" class="close">
        <div id="user-info">
            <input id="user-id" class="hidden"/>
            <div id="user-image"></div>
            <span id="user-name">Anonymous</span>
            <span id="user-email"></span>
            <span id="user-config" class="menu_edituser"></span>
        </div>
        <div id="screenTab" class="sidepanelTab active">
            <div class="sidePanelTabBar brandableBackground"></div>
            <span class="tabImage"></span>
            <span class="tabText">SCREENS</span>
        </div>
        <div class="sectionSeparator"></div>
        <div class="screens section">
            <div id="navigation">
                <ul id="navigationtree">
                    <li class="leaf" title="Splash">
                        <input class="hidden" value="s-d12245cc-1680-458d-89dd-4f0d7fb22724"></input>
                        <div class="top-border"></div>
                        <ins class="icon">&nbsp;</ins><a  href="screens/d12245cc-1680-458d-89dd-4f0d7fb22724" tabindex="-1">Splash</a>
                        <span class="menu_dotred"></span>
                    </li>
                    <li class="leaf" title="SignIn">
                        <input class="hidden" value="s-ef17f5e1-fc88-4262-91de-9a35e7112727"></input>
                        <div class="top-border"></div>
                        <ins class="icon">&nbsp;</ins><a  href="screens/ef17f5e1-fc88-4262-91de-9a35e7112727" tabindex="-1">SignIn</a>
                        <span class="menu_dotred"></span>
                    </li>
                    <li class="leaf" title="NewsFeed">
                        <input class="hidden" value="s-e6b4de06-9473-416c-a777-33c14c84caf5"></input>
                        <div class="top-border"></div>
                        <ins class="icon">&nbsp;</ins><a  href="screens/e6b4de06-9473-416c-a777-33c14c84caf5" tabindex="-1">NewsFeed</a>
                        <span class="menu_dotred"></span>
                    </li>
                    <li class="leaf" title="Settings">
                        <input class="hidden" value="s-d897edba-97e4-46fc-ae38-a7850df3bf9f"></input>
                        <div class="top-border"></div>
                        <ins class="icon">&nbsp;</ins><a  href="screens/d897edba-97e4-46fc-ae38-a7850df3bf9f" tabindex="-1">Settings</a>
                        <span class="menu_dotred"></span>
                    </li>
                    <li class="leaf" title="Campus Directory">
                        <input class="hidden" value="s-059e1423-70e2-4ca3-8ff7-9b4555e68623"></input>
                        <div class="top-border"></div>
                        <ins class="icon">&nbsp;</ins><a  href="screens/059e1423-70e2-4ca3-8ff7-9b4555e68623" tabindex="-1">Campus Directory</a>
                        <span class="menu_dotred"></span>
                    </li>
                    <li class="leaf" title="Campus Maps">
                        <input class="hidden" value="s-a2d965d2-311c-4174-9f0f-9777417eb4ca"></input>
                        <div class="top-border"></div>
                        <ins class="icon">&nbsp;</ins><a  href="screens/a2d965d2-311c-4174-9f0f-9777417eb4ca" tabindex="-1">Campus Maps</a>
                        <span class="menu_dotred"></span>
                    </li>
                    <li class="leaf" title="Shuttle Services">
                        <input class="hidden" value="s-5a16e1a6-7f21-441e-9071-97f456c53522"></input>
                        <div class="top-border"></div>
                        <ins class="icon">&nbsp;</ins><a  href="screens/5a16e1a6-7f21-441e-9071-97f456c53522" tabindex="-1">Shuttle Services</a>
                        <span class="menu_dotred"></span>
                    </li>
                    <li class="leaf" title="Campus Status">
                        <input class="hidden" value="s-7d81144a-bd8e-4a84-83f1-94a7acfef088"></input>
                        <div class="top-border"></div>
                        <ins class="icon">&nbsp;</ins><a  href="screens/7d81144a-bd8e-4a84-83f1-94a7acfef088" tabindex="-1">Campus Status</a>
                        <span class="menu_dotred"></span>
                    </li>
                    <li class="leaf" title="TimeTable">
                        <input class="hidden" value="s-e5c4986d-5cfc-4172-b800-0daeda45b832"></input>
                        <div class="top-border"></div>
                        <ins class="icon">&nbsp;</ins><a  href="screens/e5c4986d-5cfc-4172-b800-0daeda45b832" tabindex="-1">TimeTable</a>
                        <span class="menu_dotred"></span>
                    </li>
                    <li class="leaf last" title="Alerts">
                        <input class="hidden" value="s-3ce1d6ba-3660-41a1-8ed5-d8cfe6aa4186"></input>
                        <div class="top-border"></div>
                        <ins class="icon">&nbsp;</ins><a  href="screens/3ce1d6ba-3660-41a1-8ed5-d8cfe6aa4186" tabindex="-1">Alerts</a>
                        <span class="menu_dotred"></span>
                    </li>
                </ul>
            </div>
        </div>
        <div id="scenarioTab" class="sidepanelTab">
            <div class="sidePanelTabBar brandableBackground"></div>
            <span class="tabImage"></span>
            <span class="tabText">SCENARIOS</span>
        </div>
        <div class="sectionSeparator"></div>
        <div class="scenario section hidden">
            <div id="navigation">
                <ul id="navigationtree">
                    <li title="default">
                        <input class="hidden" value="sc-bb8abf58-f55e-472d-af05-a7d1bb0cc014"></input>
                        <div class="top-border"></div>
                        <a href="scenarios/bb8abf58-f55e-472d-af05-a7d1bb0cc014" tabindex="-1">default</a>
                        <span class="menu_dotred"></span>
                    </li>
                </ul>
            </div>
        </div>
        <div id="requirementsTab" class="sidepanelTab hidden">
            <div class="sidePanelTabBar brandableBackground"></div>
            <span class="tabImage"></span>
            <span class="tabText">REQUIREMENTS</span>
        </div>
        <div class="requirement section hidden">
            <div id="navigation">
            </div>
        </div>
        <div id="comments" class="section">
            <div class="comment-all">
                <div id="comment-grid"></div>
            </div>
        </div>
    </div>
    <div id="jim-mainWindow">
        <div id="thumbnailTriangle" class="hidden"></div>
        <div id="scenarioThumbnail" class="hidden">
            <div id="thumbnailPos">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24">
                    <path style="fill:#E74747" d="M22.453 13.308c-.078-.185-.26-.308-.463-.308h-5.99v-12.5c0-.276-.223-.5-.5-.5h-7c-.276 0-.5.224-.5.5v12.5h-5.989c-.202 0-.385.122-.462.309-.077.186-.035.4.106.544l9.946 10.009c.094.094.222.147.354.147.133 0 .26-.052.354-.146l10.033-10.009c.144-.144.187-.358.111-.546z"/>
                </svg>
            </div>
        </div>
        <div id="topBarInfo" class="open">
            <div id="topCommentsLine" class="brandableBackground "></div>
            <div id="topInfo"class="" onselectstart="return false;">
                <div id="infoContent">
                    <div class="leftcontrols">
                        <div id="logo" class="section"><div alt="logo"></div></div>
                        <div class="comments-separator"></div>
                        <div id="info" class="section info-text-label">
                            <span id="projectname" title="Prototype1">Prototype1</span>
                            <span id="canvasname"></span>
                            <span class="filterText"> - <span id="filterImage"></span>filtered by: <span id="scenarioName" class="brandableText"></span><span id="closefilterImage"></span></span>
                        </div>
                    </div>
                    <div id="top-bar-hide" class="topBarToggle">
                        <span></span>
                        <div id="hidderBackground"></div>
                    </div>
                    <div class="rightcontrols">
                        <div class="webdevice-options section">
                            <div id="webdevice-selector" class="webdevice-selector" onchange="this.blur()">
                                <ul id="webdevice-selector-menu">
                                    <li value="originalwidth" selectorText="ORIGINAL WIDTH">Original screen's width</li>
                                    <li value="fullbrowserwidth" selectorText="FULL BROWSER WIDTH">Full browser width</li>
                                </ul>


                                <div id="webdevice-selector-text">ORIGINAL WIDTH</div>
                                <span id="webdevice-selector-img"></span>
                            </div>
                        </div>
                        <div id="comments-separator1" class="comments-separator"></div>
                        <div id="commentscontrol" class="section">
                            <div id="comments-page-counter-img" class="newcomments_notification_red">
                                <span id="comments-page-counter"></span>
                            </div>
                            <span>COMMENTS</span>
                            <div id="commentsSwitch">
                                <span id="comments-switch-img" class="off"></span>
                            </div>
                        </div>
                        <div class="comments-separator"></div>
                        <div id="toggle-panel-btn"><span class="menu_off"></span></div>
                    </div>
                </div>
            </div>
            <div id="topSeparationLine" class=""></div>
        </div>
        <div id="toppanel" class="open" onselectstart="return false;">
            <div id="control-bar">
                <div id="rotateDevice" class="button">
                    <span>ROTATE</span>
                </div>
                <div class="panel-separator"></div>
                <div class="gesturecontrol">
                    <select id="gestureTool" onchange="this.blur()">
                        <option value="0" selected="selected">One finger</option>
                        <option value="1">Two fingers (pinch)</option>
                        <option value="2">Two fingers (rotate)</option>
                    </select>
                    <span class="customSelectImage"></span>
                </div>
                <div class="panel-separator"></div>
                <div class="zoomcontrol">
                    <span id="zoom-slider-minus"></span>
                    <div id="zoom-slider" zoomValue="100">
                        <div id="zoom-bar-hotspot">
                            <div id="zoom-slider-empty"></div>
                            <div id="zoom-slider-full" class="brandableBackground"></div>
                        </div>
                        <div id="zoom-slider-cursor" class="brandableBackground"></div>
                    </div>
                    <span id="zoom-slider-plus"></span>
                </div>
            </div>
        </div>
        <div id="jim-body" class="controlled">
            <div class="dialogShadow"></div>
            <div class="requirementComponentsDialog">
                <div id="requirementComponentsTitle">Requirement components</div>
                <div id="requirementTableLabels">
                    <span id="requirementComponentLabel">Component</span>
                    <span id="requirementCanvasLabel">Canvas</span>
                </div>
                <div id="requirementComponentsContainer">
                    <div id="requirementColumnSeparator"></div>
                    <div id="requirementComponentsList"></div>
                </div>
                <div id="requirementCloseButton"></div>
            </div>
            <div id="jim-mobile" class="portrait">
                <div id="jim-case" class="portrait">
                    <div id="cc-pieces">
                        <div>
                            <div id="jim-case-top-left"></div>
                            <div id="jim-case-top-center">
                                <div id="jim-case-phone-speaker"></div>
                            </div>
                            <div id="jim-case-top-right"></div>
                        </div>
                        <div>
                            <div id="jim-case-center-left"></div>
                            <div id="jim-case-center-center"></div>
                            <div id="jim-case-center-right"></div>
                        </div>
                        <div>
                            <div id="jim-case-bottom-left"></div>
                            <div id="jim-case-bottom-center"></div>
                            <div id="jim-case-bottom-right"></div>
                        </div>
                    </div>
                </div>
                <div id="jim-container" class="portrait touch">
                    <div id="simulation" class="firer"></div>
                </div>
            </div>
            <div id="jim-web">
                <div id="web-clip-left"></div>
                <div id="web-clip-right"></div>
            </div>

        </div>
        <div id="tutorial-ui">
            <div id="tutorial-grey-layer"></div>
            <div id="tutorial-img-wrap">
                <div id="tutorial-img"></div>
            </div>
        </div>
        <div id="barHotspot">
            <div id="top-bar-show" class="topBarToggle">
                <span></span>
            </div>
        </div>
    </div>
    <div id="chromeTransfer" class="hidden"></div>
    <div id="blockui" class="hidden">
        <div id="dialog" class="hidden">
            <div id="content">
                <textarea class="annotation firer" rows="2" placeholder="Leave a comment..."></textarea>
                <form class="attachment firer" enctype="multipart/form-data" method="post">
                    <span class="attachment-img"></span>
                    <span class="filename"><a class="action">Attach file</a></span><span class="firer delete_attach"></span>
                    <input type="hidden" name="code" value="" />
                    <input type="file" class="file" name="file" size="5" value="" onchange="annotation.updateAttachmentFile(this);" tabindex="-1" />
                </form>
                <button id="dialog-save" class="button firer selected" tabindex="-1">ADD</button>
                <button id="dialog-cancel" class="button firer" tabindex="-1">Cancel</button>
                <div class="clear"></div>
            </div>
        </div>
        <div id="user-dialog" class="hidden">
            <span id="error-insertion"></span>
            <span id="close-button"></span>
            <div id="content">
                <span class="title">User Profile</span>
                <form class="user-profile firer" enctype="multipart/form-data" method="post">
                    <div id="user-img-wrapper">
                        <img id="dialog-user-img" src="./resources/_jim/images/sidepanel/nopicture_icon.png"/>
                        <div id="change-img-clipping">
                            <div id="change-img-button" class="brandableBackground"></div>
                            <span>UPLOAD PICTURE</span>
                        </div>
                        <input type="file" class="input-file" name="file" value="" tabindex="-1" />
                    </div>
                    <span id="remove-button" class="brandableText">Remove Image</span>
                    <input id="dialog-user-name" type="text" class="input-text firer" name="name" placeholder="Set your name"/>
                    <input id="dialog-user-id" type="text" class="hidden" name="userID"/>
                </form>
                <button id="dialog-save" class="button firer selected" tabindex="-1">Save Settings</button>
                <div class="clear"></div>
            </div>
        </div>
    </div>
    <!-- START COMMENT TEMPLATES -->
    <script type="text/x-jquery-tmpl" id="root-template">
            <![CDATA[
            <div class="root {{? it.isRead === false}}unread{{?}} closed firer rounded-border">
                <input type="hidden" id="parentCode" value="{{=it.code}}" />
                <input type="hidden" id="canvasID" value="{{=it.canvasID}}" />
                <input type="hidden" id="elementID" value="{{=it.elementID}}" />
                <input type="hidden" id="canvasURL" value="{{=it.canvasURL}}" />
                {{=annotation.render(it, "comment-template")}}
        <div class="replies"></div>
        <div class="replier">
            <div class="user-comment-img {{? !annotation.hasPicture()}}{{?? true}}userImage{{?}}" {{? !annotation.hasPicture()}}{{?? true}}style="background-image:url('../../../../images/pictures/{{=annotation.getCurrentAuthorID()}}.png')"{{?}}></div>
                    <textarea class="annotation firer">Leave a comment...</textarea>
                    <div class="actions">
                        <form class="attachment firer" enctype="multipart/form-data" method="post">
                            <span class="attachment-img"></span>
                            <span class="filename">Attach file</span><span class="firer delete_attach"></span>
                            <input type="hidden" name="code" value="" />
                            <input type="file" class="file" name="file" size="5" value="" onchange="annotation.updateAttachmentFile(this);" tabindex="-1" />
                        </form>
                        <button id="dialog-save" class="action save button firer selected">ADD</button>
                        <button id="dialog-cancel" class="cancel button firer">Cancel</button>
                    </div>
                    <div class="clear"></div>
                </div>
                </div>
             </div>
             ]]>
        </script>
    <script type="text/x-jquery-tmpl" id="comment-template">
            <![CDATA[
            <div class="comment">
                <input type="hidden" id="userID" value="{{=it.authorID}}" />
                <input type="hidden" id="code" value="{{=it.code}}" />
                <input type="hidden" id="timestamp" value="{{=it.timestamp}}" />
                <div class="comment-content">
                    <div class="user-comment-img{{? annotation.hasPermission(it.author)}} firer{{?}} {{? annotation.hasPicture()}}userImage{{?}}" {{? annotation.hasPermission(it.author) && !annotation.hasPicture()}}{{?? true}}style="background-image:url('../../../../images/pictures/{{=it.authorID}}.png')"{{?}}></div>
                    {{? annotation.hasPermission(it.author)}}<span class="user-comment-img-add user_picture_more firer{{? annotation.hasPicture()}} hidden{{?}}"></span>{{?}}
        <div class="user-comment-content">
            <span class="author brandableText" title="{{=it.author}}">{{=it.author}}</span>{{? annotation.hasPermission(it.author) }}<span class="edit edit_topic firer"></span><span class="delete delete_topic firer"></span>{{?}}
        <span class="date">{{=it.date}}</span>
                        <div class="viewmode">
                            <div class="text">{{=annotation.toHTML(it.content)}}</div>
                            {{? it.fileName !== "" }}{{? annotation.isImage(it.fileName)}}<img src="" class="attachment firer brandableText" onclick="annotation.getAttachmentFile({{=it.code}}, '{{=it.fileName}}');" title="{{=it.fileName}}"></img>{{?? true}}<div class="attachment-wrap"><span class="attachment-img"></span><span class="attachment filename firer brandableText" onclick="annotation.getAttachmentFile({{=it.code}}, '{{=it.fileName}}');" title="{{=it.fileName}}">{{=it.fileName}}</span></div>{{?}}{{?}}
        <div class="actions">
{{? it.parentCode === null || it.parentCode === 0}}<div class="total-wrap"><span class="total-img comments"></span><span class="total"></span></div>{{?}}
        <div class="reply firer"><span class="reply-img"></span><a class="action">Reply</a></div>
    </div>
{{? it.parentCode === null || it.parentCode === 0}}<div class="expand-btn firer"><span class="expand-btn-img expand"></span><span class="expand-btn-text">Expand</span></div>{{?}}
        <div class="clear"></div>
    </div>
    <div class="editormode">
        <textarea class="annotation firer">{{=it.content}}</textarea>
                            <div class="actions">
                                <form class="attachment firer" enctype="multipart/form-data" method="post">
                                    <span class="attachment-img"></span>
                                    <span class="filename"><a class="action">Attach file</a></span><span class="firer delete_attach"></span>
                                    <input type="file" class="file" name="file" size="5" value="" onchange="annotation.updateAttachmentFile(this);" tabindex="-1" />
                                </form>
                                <button id="dialog-save" class="action save button firer selected">OK</button>
                                <button id="dialog-cancel" class="cancel button firer">Cancel</button>
                            </div>
                            <div class="clear"></div>
                        </div>
                    </div>
                 </div>
               </div>
               ]]>
        </script>
    <script type="text/x-jquery-tmpl" id="message-template">
                      <![CDATA[
                      {{? it.type === "error" }}
        <div class="message error">
          <div class="container">
            <span class="warning"></span>
            <div class="notice">{{? it.title }}<strong>{{=it.title}}</strong>{{?}}{{=it.text}}</div>
                          <strong class="close">x</strong>
                        </div>
                      </div>
                      {{?? it.type === "feedback"}}
        <div class="message feedback">
          <div class="container">
            <span class="warning"></span>
            <div class="notice">{{=it.text}}</div>
                          <button type="button" class="ok firer" tabindex="-1">Yes</button>
                          <button type="button" class="cancel firer" tabindex="-1">No</button>
                        </div>
                      </div>
                      {{?}}
        ]]>
</script>
    <!-- END COMMENT TEMPLATES -->
    <script type="text/javascript" src="./review/includes/include-1542420855199.js" class="canvasjs"></script>
    <script type="text/javascript">(function(){jimMain.init("screens/e6b4de06-9473-416c-a777-33c14c84caf5");})();</script>
    </div>

@endsection