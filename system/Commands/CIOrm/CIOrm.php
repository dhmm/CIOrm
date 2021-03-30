<?php
/**
 * This file is part of the CodeIgniter 4 framework.
 *
 * (c) CodeIgniter Foundation <admin@codeigniter.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace CodeIgniter\Commands\CIOrm;

use CodeIgniter\CLI\BaseCommand;
use CodeIgniter\CLI\CLI;
use Config\Services;
use Throwable;

/**
 * Orm actions
 *
 * Not testable :-/
 *
 */
class CIOrm extends BaseCommand
{
    /**
     * Internal CIOrm version
     * 
     * @var string
     */
    private $version = '1.0-dev';

    /**
	 * The group the command is lumped under
	 * when listing commands.
	 *
	 * @var string
	 */
	protected $group = 'CIOrm';

    /**
	 * The Command's name
	 *
	 * @var string
	 */
	protected $name = 'ciorm';

    /**
	 * the Command's short description
	 *
	 * @var string
	 */
	protected $description = 'ORM tool for Codeigniter.';

	/**
	 * the Command's usage
	 *
	 * @var string
	 */
	protected $usage = 'ciorm [options]';    
    
	/**
	 * the Command's Options
	 *
	 * @var array
	 */
	protected $options = [
		'-v'    => 'Get the CIOrm\'s version',		
	];    

    public function run(array $params)
	{

        //$db = Services::database();
        CLI::write('CiOrm ('.$this->version.')' , 'white');
        while(true) {
            $command = CLI::input();
            if($command == 'exit'){
                return;
            } else {
                CLI::write("Your command is : $command");
            }
        }
    }
}