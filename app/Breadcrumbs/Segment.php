<?php

namespace App\Breadcrumbs;

use Illuminate\Http\Request;
use App\Breadcrumbs;

class Segment
{
	
	protected $request;
	protected $segment;
	
	public function __construct(Request $request, $segment)
	{
		$this->request = $request;
		$this->segment = $segment;
	}
	
	public function model()
	{
		return collect($this->request->route()->parameters())->where('id', $this->segment)->first();
	}
	
	public function name()
	{
		return title_case($this->segment);
	}
	
	public function segmentURL()
	{
		return url(implode(array_slice($this->request->segments(), 0, $this->position() + 1), '/'));
	}
	
	public function position()
	{
		return array_search($this->segment, $this->request->segments());
	}
	
	
	
}