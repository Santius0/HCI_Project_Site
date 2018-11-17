(function(window, undefined) {
  var dictionary = {
    "d897edba-97e4-46fc-ae38-a7850df3bf9f": "Settings",
    "e6b4de06-9473-416c-a777-33c14c84caf5": "NewsFeed",
    "5a16e1a6-7f21-441e-9071-97f456c53522": "Shuttle Services",
    "3ce1d6ba-3660-41a1-8ed5-d8cfe6aa4186": "Alerts",
    "e5c4986d-5cfc-4172-b800-0daeda45b832": "TimeTable",
    "a2d965d2-311c-4174-9f0f-9777417eb4ca": "Campus Maps",
    "ef17f5e1-fc88-4262-91de-9a35e7112727": "SignIn",
    "d12245cc-1680-458d-89dd-4f0d7fb22724": "Splash",
    "7d81144a-bd8e-4a84-83f1-94a7acfef088": "Campus Status",
    "059e1423-70e2-4ca3-8ff7-9b4555e68623": "Campus Directory",
    "f39803f7-df02-4169-93eb-7547fb8c961a": "Template 1",
    "bb8abf58-f55e-472d-af05-a7d1bb0cc014": "default"
  };

  var uriRE = /^(\/#)?(screens|templates|masters|scenarios)\/(.*)(\.html)?/;
  window.lookUpURL = function(fragment) {
    var matches = uriRE.exec(fragment || "") || [],
        folder = matches[2] || "",
        canvas = matches[3] || "",
        name, url;
    if(dictionary.hasOwnProperty(canvas)) { /* search by name */
      url = folder + "/" + canvas;
    }
    return url;
  };

  window.lookUpName = function(fragment) {
    var matches = uriRE.exec(fragment || "") || [],
        folder = matches[2] || "",
        canvas = matches[3] || "",
        name, canvasName;
    if(dictionary.hasOwnProperty(canvas)) { /* search by name */
      canvasName = dictionary[canvas];
    }
    return canvasName;
  };
})(window);