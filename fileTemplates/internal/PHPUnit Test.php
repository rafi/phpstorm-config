<?php defined('SYSPATH') or die('No direct script access.');
#parse("sortex_project.php")
#parse("sortex_header.php")
#if (${NAMESPACE})
namespace ${NAMESPACE};

#end
class ${NAME} extends#if(${NAMESPACE}) \PHPUnit_Framework_TestCase #else PHPUnit_Framework_TestCase #end{

} // End ${NAME}
