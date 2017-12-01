<?php  

class Api{


	public function index($req, $res, $args)
	{
		return $res->write('<h1>This is your API</h1><p>This is an example of how to create a simple api</p>');
	}

	public function foo($req, $res, $args)
	{
		$data = [
			[
				"name" => "Foo",
				"email" => "foo@mail.com",
				"bio" => "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Vitae earum aliquam culpa minima eos suscipit."
			],
			[
				"name" => "Bar",
				"email" => "bar@mail.com",
				"bio" => "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Vitae earum aliquam culpa minima eos suscipit."
			],
			[
				"name" => "Foobar",
				"email" => "foobar@mail.com",
				"bio" => "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Vitae earum aliquam culpa minima eos suscipit."
			]

		];

		return $res->withJson($data);
	}


}

?>