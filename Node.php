<?
namespace Slim\Eloquent;

class Node extends \Baum\Node {

	public function newEloquentBuilder($query)
	{
		return new Builder($query);
	}

}
