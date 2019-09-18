<?
namespace App;
require('config.php');
use \PDO;

class DB
{
	private static $connection;

	public function __construct(){}
	
	public static function getInstance()
	{
		if(!self::$connection)
		{
            try
			{
				$dsn = "mysql:host=".DB_HOST.";dbname=".DB_NAME.";charset=".DB_CHARSET;
				$options = [
					PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
					PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_OBJ
			    ];

				self::$connection = new PDO($dsn, DB_USER, DB_PASSWORD, $options);
			}
			catch(PDOException $e)
			{
				echo 'Error : '.$e->getMessage();
				exit();
			}
        }

        return self::$connection;
	}

	public static function getCursFromDB($date)
	{
		$stmt = self::getInstance()->prepare("SELECT * FROM daily_rates WHERE daily_rates.date = ?");
		$stmt->execute(array($date));
		$result = $stmt->fetch();

		return $result->rate;
	}

	public static function saveCursInDB($curs, $date)
	{
		try
		{
			$stmt = self::getInstance()->prepare("INSERT INTO daily_rates VALUES(:date, :rate)");
			$stmt->execute(array('date' => $date, 'rate' => $curs));
		}
		catch(PDOException $e)
		{
			echo 'Error : '.$e->getMessage();
			exit();
		}
	}
}
