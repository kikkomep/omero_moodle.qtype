<?php
// This file is part of Moodle - http://moodle.org/
//
// Moodle is free software: you can redistribute it and/or modify
// it under the terms of the GNU General Public License as published by
// the Free Software Foundation, either version 3 of the License, or
// (at your option) any later version.
//
// Moodle is distributed in the hope that it will be useful,
// but WITHOUT ANY WARRANTY; without even the implied warranty of
// MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
// GNU General Public License for more details.
//
// You should have received a copy of the GNU General Public License
// along with Moodle.  If not, see <http://www.gnu.org/licenses/>.

/**
 * Defines the editing form for the omeromultichoice question type.
 *
 * @package    qtype
 * @subpackage omeromultichoice
 * @copyright  2015 CRS4
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later //FIXME: check the licence
 */


defined('MOODLE_INTERNAL') || die();

require_once($CFG->dirroot . '/question/type/omerocommon/edit_omerocommon_form.php');

/**
 * omeromultichoice question editing form definition.
 *
 * @copyright  2015 CRS4
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later // FIXME: check the licence
 */
class qtype_omerointeractive_edit_form extends qtype_omerocommon_edit_form
{
    private $localized_strings = array(
        "questiontext", "generalfeedback",
        "correctfeedback", "partiallycorrectfeedback", "incorrectfeedback"
    );

    public function qtype()
    {
        return 'omerointeractive';
    }

    protected function define_requirements()
    {
        parent::define_requirements(); // TODO: Change the autogenerated stub
        init_js_modules("omerointeractive");
    }


    protected function add_question_specific_fields($mform){

//        $mform->addElement('html', '<div style="margin-top: 50px"></div>');
//        $mform->addElement('header', 'roitableinspectorheader',
//            get_string('roi_shape_inspector', 'qtype_omeromultichoice'), '');
//        $mform->setExpanded('roitableinspectorheader', 1);

        $mform->addElement('html', '


<div class="fitem">
    <div class="fitemtitle"><label for="roiShapeInspectorTable"></label></div>
<div class="felement" style="height: 200px;">


    <div id="toolbar">

        <button id="add-new-roi" class="btn btn-success" disabled>
            <i class="lyphicon glyphicon-plus"></i> Add
        </button>

        <button id="edit-roi" class="btn btn-warning" disabled>
            <i class="glyphicon glyphicon-edit"></i> Edit
        </button>

        <button id="remove" class="btn btn-danger" disabled>
            <i class="glyphicon glyphicon-remove"></i> Delete
        </button>

        <!-- Single button -->
        <div class="btn-group">
          <button type="button" class="btn btn-info  dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Group <span class="caret"></span>
          </button>
          <ul class="dropdown-menu">
            <li><a href="#">0</a></li>
            <li><a href="#">1</a></li>
            <li role="separator" class="divider"></li>
            <li><a href="#">Add Group</a></li>
          </ul>
        </div>
    </div>




    <table id="roiShapeInspectorTable"
           data-toolbar="#toolbar"
           data-search="true"
           data-height="400"
           data-show-refresh="true"
           data-show-toggle="true"
           data-show-columns="true"
           data-show-export="true"
           data-detail-view="true"
           data-minimum-count-columns="2"
           data-show-pagination-switch="true"
           data-pagination="true"
           data-id-field="id"
           data-page-list="[10, 25, 50, 100, ALL]"
           data-show-footer="false"
           data-side-pagination="server">
    </table>
  </div>
</div>

<script src="type/omeromultichoice/js/roi-shape-table.js" type="text/javascript"></script>
<script type="text/javascript">
var tc = new RoiShapeTableController(1);
</script>

<script type="text/javascript">
tc.initTable("roiShapeInspectorTable");
</script>
');

        $mform->addElement('html', '<div style="margin-top: 320px"></div>');
        $mform->addElement('header', 'answergroupshdr',
            get_string('answer_groups', 'qtype_omeromultichoice'), '');
        $mform->setExpanded('answergroupshdr', 1);


        $mform->addElement('html', '
        <div class="panel panel-success">
          <div class="panel-heading">
            <h3 class="panel-title">
                <a href="#" id="username" data-type="text" data-pk="1" data-title="Enter username">SUCCESS</a>
            </h3>
          </div>
          <div class="panel-body">
            Panel content

            <input type="text" class="form-control" aria-label="...">
            <div class="input-group">
  <div class="input-group-btn">
    <!-- Buttons -->
  </div>
  <input type="text" class="form-control" aria-label="...">
</div>

<div class="input-group">
  <input type="text" class="form-control" aria-label="...">
  <div class="input-group-btn">
    <!-- Buttons -->
  </div>
</div>
          </div>
          <div class="panel-footer">Panel footer</div>
        </div>
        ');


        $mform->addElement("html", '<div class="fitem" style="margin-top: 500px">');
        $mform->addElement("html", '<div class="fitemtitle"><label for="myTable">Custom iFrame:</label></div>');
        $mform->addElement("html", '<div class="felement">');

        $mform->addElement("html", '<a href="#" title="Header" data-toggle="popover" data-trigger="hover" data-content="Some content">Hover over me</a>');

        $mform->addElement('html', '
<!-- Button trigger modal -->
<button id="enableModal" type="button" class="btn btn-default btn-lg">
  Launch demo modal
</button>

<!-- Modal -->
<div id="myModal" class="fade modal" tabindex="-1" role="dialog" style="height: 175px;">
  <!--<div class="modal-dialog" style="width: auto; padding: 0" >-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title">Modal title</h4>
      </div>
      <div class="modal-body">
        <p>One fine body&hellip;</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-success" data-dismiss="modal">Save changes</button>
      </div>
    </div><!-- /.modal-content -->
  <!--</div><!-- /.modal-dialog -->
</div><!-- /.modal -->
');
        $mform->addElement("html", "</div></div>");


        //<!-- Structure to embed a new custom element to the form -->
        $mform->addElement("html", '<div class="fitem">');
        $mform->addElement("html", '<div class="fitemtitle"><label for="myTable">Custom iFrame:</label></div>');
        $mform->addElement("html", '<div class="felement"><iframe id="myTable" src=""></iframe></div>');
        $mform->addElement("html", "</div>");


        //<!-- Structure to embed a new custom text element to the form -->
        $mform->addElement("html", '<div class="fitem">');
        $mform->addElement("html", '<div class="fitemtitle"><label for="myCustomTextArea">CustomTextArea:</label></div>');
        $mform->addElement("html", '<div class="felement"><div id="myCustomTextAreaContainer" src=""><textarea id="myCustomTextArea"></textarea></div></div>', "Test");
        $mform->addElement("html", "</div>");


        //<!-- Structure to embed a new custom element to the form -->
        $mform->addElement("html", '<div class="fitem">');
        $mform->addElement("html", '<div class="fitemtitle"><label for="myTable">Prova:</label></div>');
        $mform->addElement("html", '<div class="felement"><iframe id="myTable" src=""></iframe></div>');
        $mform->addElement("html", "</div>");

    }



    /**
     * Language string to use for 'Add {no} more {whatever we call answers}'.
     */
    protected function get_more_choices_string()
    {
        return get_string('add_roi_answer', 'qtype_omeromultichoice');
    }


    /**
     * Build the repeated elements of the form
     * (i.e., form elements for setting answers)
     *
     * @param $mform
     * @param $label
     * @param $gradeoptions
     * @param $repeatedoptions
     * @param $answersoption
     * @return array
     */
    protected function get_per_answer_fields($mform, $label, $gradeoptions,
                                             &$repeatedoptions, &$answersoption)
    {
        if ((isset($_REQUEST['answertype']) && $_REQUEST['answertype'] == qtype_omerointeractive::ROI_BASED_ANSWERS) ||
            (isset($this->question->options) && $this->question->options->answertype == qtype_omerointeractive::ROI_BASED_ANSWERS)
        )
            return $this->get_per_roi_based_answer_fields($mform, $label, $gradeoptions,
                $repeatedoptions, $answersoption);
        else return $this->get_per_plaintext_answer_fields($mform, $label, $gradeoptions,
            $repeatedoptions, $answersoption);
    }

    protected function get_per_plaintext_answer_fields($mform, $label, $gradeoptions,
                                                       &$repeatedoptions, &$answersoption)
    {
        $repeated = array();
        $repeated[] = $mform->createElement('editor', 'answer',
            $label, array('rows' => 1), $this->editoroptions);
        $repeated[] = $mform->createElement('select', 'fraction',
            get_string('grade'), $gradeoptions);
        $repeated[] = $mform->createElement('editor', 'feedback',
            get_string('feedback', 'question'), array('rows' => 1), $this->editoroptions);
        $repeatedoptions['answer']['type'] = PARAM_RAW;
        $repeatedoptions['fraction']['default'] = 0;
        $answersoption = 'answers';

        $languages = get_string_manager()->get_list_of_translations();

        foreach ($languages as $lang_id => $lang_string) {
            $repeated[] = $mform->createElement('textarea', "answer" . "_" . $lang_id,
                "", array("style" => "display: none; margin: 0; padding: 0;", "lang" => $lang_id, "class" => "answer"));
            $repeated[] = $mform->createElement('textarea', "feedback" . "_" . $lang_id,
                "", array("style" => "display: none; margin: 0; padding: 0;", "lang" => $lang_id, "class" => "feedback"));
        }

        return $repeated;
    }


    /**
     * Build the repeated elements of the form
     * (i.e., form elements for setting answers)
     *
     * @param $mform
     * @param $label
     * @param $gradeoptions
     * @param $repeatedoptions
     * @param $answersoption
     * @return array
     */
    protected function get_per_roi_based_answer_fields($mform, $label, $gradeoptions,
                                                       &$repeatedoptions, &$answersoption)
    {
        $repeated = array();

        $repeated[] = $mform->createElement('html', '<div class="fitem roi-based-answer">');

        // ROI choice label
        $repeated[] = $mform->createElement('static', "description", $label);

        $repeated[] = $mform->createElement('html', '<div class="felement felement-roi-based-answer">');

        // Main DIV container
        $repeated[] = $mform->createElement('html', '<div class="omeromultichoice-qanswer-roi-based-answer-container">');


        // hidden field for storing answer/roi ID
        $repeated[] = $mform->createElement('hidden', 'answer', "none");

        // ROI details
        $repeated[] = $mform->createElement('html', '<div class="omeromultichoice-qanswer-container">');
        $repeated[] = $mform->createElement('html', '<div class="omeromultichoice-qanswer-roi-container">');

        // Image container
        //$repeated[] = $mform->createElement('html', '<div class="omeromultichoice-qanswer-roi-image-container">');
        //$repeated[] = $mform->createElement('html', '<img src="" class="roi_thumb shape_thumb" style="vertical-align: top;" color="f00" width="150px" height="150px">');
        //$repeated[] = $mform->createElement('html', '</div>'); // -> Close 'qanswer-roi-image-container

        // ROI description
        $repeated[] = $mform->createElement('html', '<div class="omeromultichoice-qanswer-roi-details-container">');
        $repeated[] = $mform->createElement('html', '<div class="omeromultichoice-qanswer-roi-details-text-container">');
        // Adds ROI description fields
        $roi_description_fields = array("id", "comment", "type", "width", "height");
        foreach ($roi_description_fields as $field) {
            $repeated[] = $mform->createElement('html', '<div class="omeromultichoice-qanswer-roi-details-text">');
            $repeated[] = $mform->createElement('html', '<span class="roi-field-label">' . get_string("roi_" . $field, "qtype_omeromultichoice") . ':</span>');
            $repeated[] = $mform->createElement('html', '<span class="roi-field-value">...</span>');
            $repeated[] = $mform->createElement('html', '</div>');
        }

        $repeated[] = $mform->createElement('html', '</div>'); // -> Close 'details-text-container'
        $repeated[] = $mform->createElement('html', '</div>'); // -> Close 'qanswer-roi-details-container
        $repeated[] = $mform->createElement('html', '</div>'); // -> Close 'qanswer-roi-container'

        // ROI-based answer grade selector
        $repeated[] = $mform->createElement('select', 'fraction', get_string('grade'), $gradeoptions);

        // Feedback editor
        $repeated[] = $mform->createElement('editor', 'feedback',
            get_string('feedback', 'question'), array('rows' => 1), $this->editoroptions);

        $repeated[] = $mform->createElement('html', '</div>'); // -> Close 'qanswer-roi-details-container'
        $repeated[] = $mform->createElement('html', '</div>'); // -> Close 'qanswer-roi-based-answer-container'

        $repeated[] = $mform->createElement('html', '</div>'); // -> Close 'felement'

        $repeated[] = $mform->createElement('html', '</div>'); // -> Close 'fitem'

        // Default values
        $repeatedoptions['answer']['type'] = PARAM_RAW;
        $repeatedoptions['fraction']['default'] = 0;
        $answersoption = 'answers';

        return $repeated;
    }


    protected function data_preprocessing($question)
    {
        $question = parent::data_preprocessing($question);
        if (isset($this->question->options) && $question->options->answertype == qtype_omerointeractive::ROI_BASED_ANSWERS) {
            $question = $this->data_preprocessing_answers($question, false);
        } else {
            $question = $this->data_preprocessing_answers($question, true);
        }
        $question = $this->data_preprocessing_combined_feedback($question, true);
        $question = $this->data_preprocessing_hints($question, true, true);

        if (!empty($question->options)) {
            $question->single = $question->options->single;
            $question->shuffleanswers = $question->options->shuffleanswers;
            $question->answernumbering = $question->options->answernumbering;

            // Prepare the roi_based_answers field
            if (isset($this->question->options)
                && $question->options->answertype == qtype_omerointeractive::ROI_BASED_ANSWERS
            ) {
                $roi_based_answers = [];
                foreach ($question->options->answers as $answer) {
                    array_push($roi_based_answers, $answer->answer);
                }
            }

            $question->visible_rois = $question->options->visiblerois;
            if (isset($roi_based_answers)) {
                $question->roi_based_answers = implode(",", $roi_based_answers);
            }
            $question->answertype = $question->options->answertype;
            $question->omero_image_url = $question->options->omeroimageurl;
        }
        return $question;
    }


    public function get_data()
    {
        $data = parent::get_data();
        $this->update_roi_based_answers($data);
        return $data;
    }


    private function update_roi_based_answers(&$data)
    {
        if (!empty($data) && isset($_REQUEST['answertype']) &&
            $_REQUEST['answertype'] == qtype_omerointeractive::ROI_BASED_ANSWERS
        ) {
            if (is_array($data)) {
                $answers = &$data["answer"];
            } else {
                $answers = &$data->{"answer"};
            }
            if (isset($_POST["roi_based_answers"])) {
                $roi_based_answers_el = $_POST["roi_based_answers"];
                $roi_based_answers = explode(",", $roi_based_answers_el);
                foreach ($roi_based_answers as $k => $a) {
                    $answers[$k] = array("text" => "$a", "format" => 1, "itemid" => "x");
                }
            }
        }
    }



    public function set_data($question)
    {
        foreach ($this->localized_strings as $localized_string)
            $this->set_localized_string($question, $localized_string);

        $count = 0;
        if (isset($question->options) && isset($question->options->answers)) {
            foreach ($question->options->answers as $i => $answer) {
                $matches = $this->getLocaleStrings($answer->answer);
                if (count($matches[0]) > 0) {
                    for ($i = 0; $i < count($matches); $i++) {
                        $language = $matches[$i][0];
                        $localized_string = $matches[$i][1];
                        if (!isset($question->{"answer_" . $language}))
                            $question->{"answer_" . $language} = array();
                        array_push($question->{"answer_" . $language}, $localized_string);
                    }
                } else {
                    $languages = get_string_manager()->get_list_of_translations();
                    foreach ($languages as $language => $lang_name) {
                        if (!isset($question->{"answer_" . $language}))
                            $question->{"answer_" . $language} = array();
                        if (strcmp($language, current_language()) === 0) {
                            array_push($question->{"answer_" . $language}, $answer->answer);
                        } else {
                            array_push($question->{"answer_" . $language}, "");
                        }
                    }
                }
                $count++;
            }
        }

        parent::set_data($question);
    }



    /**
     * Perform the form validation
     *
     * @param $data
     * @param $files
     * @return mixed
     */
    public
    function validation($data, $files)
    {
        if (isset($_REQUEST['answertype']) && $_REQUEST['answertype'] == qtype_omerointeractive::ROI_BASED_ANSWERS) {
            $this->update_roi_based_answers($data);
        }

        if ($_REQUEST['noanswers'] < 3)
            $errors["generic"] = "At least 2 answers";

        // checks specific errors
        $errors = array();
        if (!isset($data["answer"]) || count($data["answer"]) < 3)
            $errors["generic"] = "At least 2 answers";

        // question multichoice validation
        if ($_REQUEST['noanswers'] > 0)
            $errors = parent::validation($data, $files);

        // return found errors
        return $errors;
    }


    ///////////////////////////////////////////////////////////////////////////////////////////////////////////


    /**
     * Add a set of form fields, obtained from get_per_answer_fields, to the form,
     * one for each existing answer, with some blanks for some new ones.
     * @param object $mform the form being built.
     * @param $label the label to use for each option.
     * @param $gradeoptions the possible grades for each answer.
     * @param $minoptions the minimum number of answer blanks to display.
     *      Default QUESTION_NUMANS_START.
     * @param $addoptions the number of answer blanks to add. Default QUESTION_NUMANS_ADD.
     */
    protected
    function add_per_answer_fields(&$mform, $label, $gradeoptions,
                                   $minoptions = QUESTION_NUMANS_START, $addoptions = QUESTION_NUMANS_ADD)
    {
        $mform->addElement('header', 'answerhdr',
            get_string('answers', 'question'), '');
        $mform->setExpanded('answerhdr', 1);
        $answersoption = '';
        $repeatedoptions = array();
        $repeated = $this->get_per_answer_fields($mform, $label, $gradeoptions,
            $repeatedoptions, $answersoption);

        if (isset($this->question->options)) {
            $repeatsatstart = count($this->question->options->$answersoption);
        } else {
            $repeatsatstart = $minoptions;
        }

        $this->repeat_elements($repeated, $repeatsatstart, $repeatedoptions,
            'noanswers', 'addanswers', $addoptions,
            $this->get_more_choices_string(), true);
    }
}

