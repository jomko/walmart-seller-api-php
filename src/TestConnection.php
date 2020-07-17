<?php
namespace WalmartSellerAPI;

class TestConnection extends AbstractRequest {

	public function doTest(){
		return $this->get();
	}

	public function getEndpoint() {
		return '/v3';
	}

	protected function getResponse() {
		return 'WalmartSellerAPI\ItemResponse';
	}
}
