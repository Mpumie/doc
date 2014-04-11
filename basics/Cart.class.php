<?php

	class Cart
	{
		private $_numOfProd;
		private $_totalPrice;
		
		//setting and getting number of prduct
		public function getNumOfProd()
		{
			return $_numOfProd;
		}
		
		public function setNumOfProd($_numOfProd)
		{
			$this->_numOfProd = $numOfProd;
		}
		
		//getting and setting total price
		public function getToatalPrice()
		{
			return $_totalPrice;
		}
		
		public function setTotalPrice($_totalPrice)
		{
			$this->_totalPrice = $totalPrice;
		}
	}
?>