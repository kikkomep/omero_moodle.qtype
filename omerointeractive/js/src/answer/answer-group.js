/**
 * Created by kikkomep on 12/2/15.
 */

define("qtype_omerointeractive/answer-group",
    [
        'jquery',
        'qtype_omerocommon/moodle-forms-utils',
        'qtype_omerocommon/answer-base',
        'qtype_omerocommon/multilanguage-element',
        'qtype_omerocommon/multilanguage-attoeditor'
    ],
    function ($, Editor, FormUtils) {
        // Private functions.


        // Public functions
        return {
            initialize: function (str) {
                console.log("Initialized", this);

                // defines the basic package
                M.qtypes = M.qtypes || {};

                // defines the specific package of this module
                M.qtypes.omerocommon = M.qtypes.omerocommon || {};


                /**
                 * Defines MoodleFormUtils class
                 * @type {{}}
                 */
                M.qtypes.omerocommon.AnswerGroup = function (answer_list_container_id) {

                    // the reference to this scope
                    var me = this;

                    // Call the parent constructor
                    M.qtypes.omerocommon.AnswerBase.call(this, answer_list_container_id);


                    /**
                     * Builds the answer
                     *
                     * @private
                     */
                    me._build = function () {
                        me._answer_container = $('<div class="fitem" id="' + me.answerContainerId + '"></div>');
                        me._answer_list_container.append(me._answer_container);

                        me._form_utils.appendElement(me._answer_container, "Text", "<textarea>xxx</textarea>");
                        me._form_utils.appendElement(me._answer_container, "Grade", "<select ><option>1</option></select>");
                        me._form_utils.appendElement(me._answer_container, "Feedback", "<textarea>xxx</textarea>");
                    };
                };


                // inherit
                M.qtypes.omerocommon.AnswerGroup.prototype = new M.qtypes.omerocommon.AnswerBase();

                // correct the constructor
                M.qtypes.omerocommon.AnswerGroup.prototype.constructor = M.qtypes.omerocommon.AnswerGroup;
            }
        };
    }
)
;