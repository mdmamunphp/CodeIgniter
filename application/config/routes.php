<?php
defined('BASEPATH') OR exit('No direct script access allowed');


$route['default_controller'] = 'mastercontroller';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;



//*************admin***********************/Login,Registration,Forget,Recovery Password ,etc.
$route['admin/login'] = 'LoginController/admin';
$route['admin/check'] = 'LoginController/check';
$route['admin/register'] = 'adminregcontroller/register'; 
$route['admin/register-confirm'] = 'adminregcontroller/register_confirm';
$route['admin/forget-password'] = 'LoginController/forget_password';
$route['admin/dashboard'] = 'admincontroller/dashboard';
$route['admin/profile-view/(:num)'] = 'admincontroller/profile_view/$1';

$route['admin/profile-view/(:num)'] = 'admincontroller/profile_view/$1';
$route['all-register/register-confirm'] = 'Register/register_confirm';
$route['admin/account-edit/(:num)'] = 'admincontroller/account_edit/$1';
$route['admin/account-update/(:num)'] = 'admincontroller/account_update/$1';
//*************admin*******************course post,view,edit,update,delete **************
$route['admin/signup_view'] = 'Signup/index';


$route['admin/course-post'] = 'admincontroller/coursepost';
$route['admin/course-view'] = 'admincontroller/courseview';
$route['admin/course-edit/(:num)'] = 'admincontroller/courseedit/$1';
$route['admin/update-confirm/(:num)'] = 'admincontroller/update_confirm/$1';
$route['admin/course-delete/(:num)'] = 'admincontroller/course_delete/$1';

//*************admin*******************lession post,view,edit,update,delete **************
$route['admin/lession-post'] = 'admincontroller/lession_post';
$route['admin/lessionpost-confirm'] = 'adminregcontroller/lessionpost_confirm';
$route['admin/lession-view'] = 'admincontroller/lessionview'; 
$route['admin/lession-edit/(:num)'] = 'admincontroller/lessionedit/$1';
$route['admin/lessionupdate-confirm/(:num)'] = 'admincontroller/lessionupdate_confirm/$1';
$route['admin/lession-delete/(:num)'] = 'admincontroller/lession_delete/$1';

//*************admin*******************categories post,view,edit,update,delete **************
$route['admin/categories-post'] = 'admincontroller/categoriespost';
$route['admin/categoriespost-confirm'] = 'adminregcontroller/categoriespost_confirm';
$route['admin/categories-view'] = 'admincontroller/categoriesview'; 
$route['admin/categories-edit/(:num)'] = 'admincontroller/categoriesedit/$1';
$route['admin/categoriesupdate-confirm/(:num)'] = 'admincontroller/categoriesupdate_confirm/$1';
$route['admin/categories-delete/(:num)'] = 'admincontroller/categories_delete/$1';


//*************admin*******************tags post,view,edit,update,delete **************
$route['admin/tags'] = 'admincontroller/tags';
$route['admin/tags-confirm'] = 'adminregcontroller/tags_confirm';
$route['admin/tags-view'] = 'admincontroller/tags_view'; 
$route['admin/categories-edit/(:num)'] = 'admincontroller/categoriesedit/$1';
$route['admin/categoriesupdate-confirm/(:num)'] = 'admincontroller/categoriesupdate_confirm/$1';
$route['admin/categories-delete/(:num)'] = 'admincontroller/categories_delete/$1';

//*************admin*******************question_bank post,view,edit,update,delete **************

$route['admin/question_bank-post'] = 'admincontroller/question_bank_post';
$route['admin/question_bank-confirm'] = 'adminregcontroller/question_bank_confirm';
$route['admin/question_bank-views'] = 'admincontroller/question_bank_views';
$route['admin/question_bank-edit/(:num)'] = 'admincontroller/question_bank_edit/$1';
$route['admin/question_bank-update/(:num)'] = 'admincontroller/question_bank_update/$1';
$route['admin/question_bank-delete/(:num)'] = 'admincontroller/question_bank_delete/$1';


//*************admin*******************questions_bank_details post,view,edit,update,delete **************

$route['admin/questions_bank_details-post'] = 'admincontroller/questions_bank_details_post';
$route['admin/questions_bank_details-confirm'] = 'adminregcontroller/questions_bank_details_confirm';
$route['admin/questions_bank_details-views'] = 'admincontroller/questions_bank_details_views';
$route['admin/questions_bank_details-edit/(:num)'] = 'admincontroller/questions_bank_details_edit/$1';
$route['admin/questions_bank_details-update/(:num)'] = 'admincontroller/questions_bank_details_update/$1';
$route['admin/questions_bank_details-delete/(:num)'] = 'admincontroller/questions_bank_details_delete/$1';


//*************admin*******************quiz_master post,view,edit,update,delete **************

$route['admin/quiz_master-post'] = 'admincontroller/quiz_master_post';
$route['admin/quiz_master-confirm'] = 'adminregcontroller/quiz_master_confirm';
$route['admin/quiz_master-views'] = 'admincontroller/quiz_master_views';
$route['admin/quiz_master-edit/(:num)'] = 'admincontroller/quiz_master_edit/$1';
$route['admin/quiz_master-update/(:num)'] = 'admincontroller/quiz_master_update/$1';
$route['admin/quiz_master-delete/(:num)'] = 'admincontroller/quiz_master_delete/$1';


//*************admin*******************quiz_questions post,view,edit,update,delete **************

$route['admin/quiz_questions-post'] = 'admincontroller/quiz_questions_post';
$route['admin/quiz_questions-confirm'] = 'adminregcontroller/quiz_questions_confirm';
$route['admin/quiz_questions-views'] = 'admincontroller/quiz_questions_views';
$route['admin/quiz_questions-edit/(:num)'] = 'admincontroller/quiz_questions_edit/$1';
$route['admin/quiz_questions-update/(:num)'] = 'admincontroller/quiz_questions_update/$1';
$route['admin/quiz_questions-delete/(:num)'] = 'admincontroller/quiz_questions_delete/$1';

//*************admin*******************question post,view,edit,update,delete **************
$route['admin/question-post'] = 'admincontroller/quetion_post';
$route['admin/questionpost-confirm'] = 'adminregcontroller/questionpost_confirm';
$route['admin/question-view'] = 'admincontroller/questionview';
$route['admin/question-edit/(:num)'] = 'admincontroller/questionedit/$1';
$route['admin/questionupdate-confirm/(:num)'] = 'admincontroller/questionupdate_confirm/$1';
$route['admin/question-delete/(:num)'] = 'admincontroller/question_delete/$1';

$route['admin/logout'] = 'LoginController/logout';
$route['admin/post-confirm'] = 'adminregcontroller/post_confirm';

//*************admin*******************students view,edit,update,delete **************
$route['admin/students/students-view'] = 'studentcontroller/students_view';

$route['admin/students-views'] = 'register/students_views';
$route['admin/instructor-views'] = 'register/instructor_views';
$route['admin/students-edit/(:num)'] = 'register/students_edit/$1';
$route['admin/students-update/(:num)'] = 'register/users_update/$1';
$route['admin/students-delete/(:num)'] = 'register/students_delete/$1';
$route['admin/instructor-edit/(:num)'] = 'register/instructor_edit/$1';
$route['admin/instructor-update/(:num)'] = 'register/users_update/$1';
$route['admin/instructor-delete/(:num)'] = 'register/instructor_delete/$1';



$route['students/dashboard'] = 'studentcontroller/dashboard';


$route['admin/section-post'] = 'admincontroller/section_post';
$route['admin/sectionpost-confirm'] = 'adminregcontroller/sectionpost_confirm';


//*************instructor***********************/Login,Registration,Forget,Recovery Password ,etc.
// $route['instructor/login'] = 'LoginController/instructor';
$route['instructor/inscheck'] = 'LoginController/inscheck';
$route['instructor/master'] = 'instructorcontroller/dashboard';
$route['instructor/logout'] = 'LoginController/logout';
$route['instructor/register'] = 'insregcontroller/register';
$route['instructor/register-confirm'] = 'insregcontroller/register_confirm';
$route['instructor/forget-password'] = 'LoginController/forget_password';
$route['instructor/profile-view/(:num)'] = 'instructorcontroller/profile_view/$1';

$route['instructor/account-edit/(:num)'] = 'instructorcontroller/account_edit/$1';
$route['instructor/account-update/(:num)'] = 'instructorcontroller/account_update/$1';

$route['instructor/course-manager'] = 'instructorcontroller/course_manager';
$route['instructor/earnings'] = 'instructorcontroller/earnings';
$route['instructor/course-edit/(:num)'] = 'instructorcontroller/courseedit/$1';
$route['instructor/update-confirm/(:num)'] = 'instructorcontroller/update_confirm/$1';

$route['instructor/course-post'] = 'instructorcontroller/coursepost';

$route['instructor/messages'] = 'instructorcontroller/messages';

$route['instructor/messages-chat/(:num)'] = 'instructorcontroller/messages_chat/$1';

$route['instructor/messages-confirm'] = 'instructorcontroller/messages_confirm';


$route['instructor/post-confirm'] = 'instructorcontroller/post_confirm';

$route['admin/course-post'] = 'admincontroller/coursepost';
$route['admin/course-view'] = 'admincontroller/courseview';

$route['admin/update-confirm/(:num)'] = 'admincontroller/update_confirm/$1';
$route['admin/course-delete/(:num)'] = 'admincontroller/course_delete/$1';

$route['instructor/quiz-manager'] = 'instructorcontroller/quiz_manager';
$route['instructor/quiz-details/(:num)'] = 'instructorcontroller/quiz_details/$1';
$route['instructor/quiz-singleviews/(:num)'] = 'instructorcontroller/quiz_singleviews/$1';





//*************students***********************/Login,Registration,Forget,Recovery Password ,etc.
// $route['students/login'] = 'loginController/students';
$route['students/check'] = 'logincontroller/stdcheck';
$route['students/master'] = 'studentcontroller/dashboard';
$route['students/logout'] = 'LoginController/logout';

$route['students/account-edit/(:num)'] = 'studentcontroller/account_edit/$1';
$route['students/account-update/(:num)'] = 'studentcontroller/account_update/$1';



//$route['students/account-edit/(:num)'] = 'studentcontroller/account_edit/$1';
$route['students/profile-view/(:num)'] = 'studentcontroller/profile_view/$1';


$route['students/register'] = 'stdregcontroller/register';
$route['students/register-confirm'] = 'stdregcontroller/register_confirm';
$route['students/forget-password'] = 'LoginController/forget_password';
$route['students/course'] = 'studentcontroller/course';
$route['students/mycourse'] = 'studentcontroller/mycourse';
$route['students/lessionview/(:num)'] = 'studentcontroller/lessionview/$1';
$route['students/invoice/(:num)'] = 'studentcontroller/invoice/$1';
$route['students/test_quiz'] = 'studentcontroller/test_quiz';
$route['students/test_quiz_show/(:num)'] = 'studentcontroller/test_quiz_show/$1';
$route['students/quiz_insert'] = 'StudentController/quiz_insert';
$route['students/take_quiz'] = 'StudentController/take_quiz';
$route['students/quiz_papers/(:num)'] = 'StudentController/quiz_papers/$1';


$route['students/messages'] = 'StudentController/messages';

$route['students/messages-chat/(:num)'] = 'StudentController/messages_chat/$1';

$route['students/messages-confirm'] = 'StudentController/messages_confirm';



// $std = [ 
//     "students" => "loginController",
//     "subcategory" => "subcategorycontroller",
//  ];

//  foreach ($std as $key => $value) {
//   //  $route["{$key}"] = "{$value}";
//   $route["{$key}/login"] = "{$value}/students";
  
//   $route["{$key}/check"] = "{$value}/stdcheck";
//   $route["{$key}/logout"] = "{$value}/logout";
//     //$route["{$key}/insert"] = "{$value}/insert";
//   //  $route["{$key}/view"] = "{$value}/view";
//   //  $route["{$key}/edit/(:num)"] = "{$value}/edit/$1";
//   //  $route["{$key}/update"] = "{$value}/update";
//    // $route["{$key}/delete/(:num)"] = "{$value}/delete/$1";
//  }

 

//********************front page */

$route['front/content'] = 'MasterController/content';

$route['front/coursedetails/(:num)'] = 'MasterController/coursedetails/$1';
$route['index'] = 'MasterController/index';
$route['front/header'] = 'MasterController/header';
$route['front/login'] = 'MasterController/login';
$route['front/reg'] = 'MasterController/reg';

$route['front/application-confirm'] = 'mastercontroller/application_confirm';

