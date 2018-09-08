<?php
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
 * External Web Service Template
 *
 * @package    localtestplugin
 * @copyright  2018 Moodle Pty Ltd (http://moodle.com)
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */
require_once($CFG->libdir . "/externallib.php");
class local_testplugin_external extends external_api {
    /**
     * Returns description of method parameters
     * @return external_function_parameters
     */
    public static function obtain_token_parameters() {
        return new external_function_parameters(
                array('tokenmessage' => new external_value(PARAM_TEXT, 'The token message. By default it is "Your token is,"', VALUE_DEFAULT, 'Your token is, '))
        );
    }
    /**
     * Returns welcome message
     * @return string welcome message
     */
    public static function obtain_token($tokenmessage = 'Your token is, ') {
        global $USER;
        //Parameter validation
        //REQUIRED
        $params = self::validate_parameters(self::obtain_token_parameters(),
                array('tokenmessage' => $tokenmessage));
        //Context validation
        //OPTIONAL but in most web service it should present
        $context = get_context_instance(CONTEXT_USER, $USER->id);
        self::validate_context($context);
        //Capability checking
        //OPTIONAL but in most web service it should present

        //right now, let me just return every property of $USER as a start to see its attributes.



        if (!has_capability('moodle/user:viewdetails', $context)) {
            throw new moodle_exception('cannotviewprofile');
        }
        return $params['tokenmessage'] . $USER->firstname ;;
        //return $params['tokenmessage'] . print_r($USER) ;;
    }   
    /**
     * Returns description of method result value
     * @return external_description
     */
    public static function obtain_token_returns() {
        return new external_value(PARAM_TEXT, 'Your token is + user token');
    }
}