define(['codemirror'], function ()
    {
        return function () {

            require([
                "cm/lib/codemirror", "cm/mode/htmlmixed/htmlmixed"
            ], function(CodeMirror) {
                CodeMirror.fromTextArea(document.getElementById("code"), {
                    lineNumbers: true,
                    mode: "htmlmixed"
                });
            });


            var codeMirror = CodeMirror.fromTextArea(document.getElementById("editor"), {
                lineNumbers: true,
                lineWrapping: true,
                readOnly: false,
                styleActiveLine: true,
                mode: "javascript",
                autofocus: true
            });
            codeMirror.setSize('100%', '100%');

            require(['codemirror-active-line', 'codemirror-javascript'], function () {
1;
            });
        }
    }
);