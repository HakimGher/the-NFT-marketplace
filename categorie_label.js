var elements = document.getElementsByClassName("rad-label");
                            for (var i = 0; i < elements.length; i++) {
                                elements[i].addEventListener("click", function() {
                                    var current = document.getElementsByClassName("activate");
                                    current[0].className = current[0].className.replace(" activate", "");
                                    this.className += " activate";
                                });
                            }