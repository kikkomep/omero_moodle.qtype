// Copyright (c) 2015-2016, CRS4
//
// Permission is hereby granted, free of charge, to any person obtaining a copy of
// this software and associated documentation files (the "Software"), to deal in
// the Software without restriction, including without limitation the rights to
// use, copy, modify, merge, publish, distribute, sublicense, and/or sell copies of
// the Software, and to permit persons to whom the Software is furnished to do so,
// subject to the following conditions:
//
// The above copyright notice and this permission notice shall be included in all
// copies or substantial portions of the Software.
//
// THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
// IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY, FITNESS
// FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE AUTHORS OR
// COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER LIABILITY, WHETHER
// IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM, OUT OF OR IN
// CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN THE SOFTWARE.

M.omero_multichoice_handler = {
    init: function () {

        console.log($);
        //alert("Initialized!");


        // ToDO: change the frameLoaded event
        document.addEventListener("frameLoaded", function (e) {
            var frame_id = e.detail.frame_id;
            var frame = document.getElementById(frame_id);
            var omero_image_viewer_controller = frame.contentWindow.omero_repository_image_viewer_controller;
            if (!omero_image_viewer_controller)
                throw new EventException("omero_repository_image_viewer_controller not found!");

            console.log("Controller loaded!!!", omero_image_viewer_controller);

            omero_image_viewer_controller.getModel().addEventListener(M.omero_multichoice_handler);

        }, true);
    },

    "onImageModelRoiLoaded": function () {
        console.log("Handler: OK!!!");
    }
};