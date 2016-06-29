<pre>
	<?php
	//#2 Создать класс точка (Point) у нее должны быть свойства x1, y1 и метод display, который должен выводить координаты
	// на экран. имеется ввиду координаты принадлежащие класу, использовать $this, в каждом дочернем классе метод должен
	// быть переопределен правильно.) Инкапсулировать координаты (сделать private), написать get, set методы. Методы set
	// должны любые входящие данные приводить к типу int
	//Создать класс Line, который наследуется от класса Point, у него появляются еще два дополнительных поля x2, y2 и
	// переопределить метод display что бы выводились все координаты (использовать parent). В таком же духе оформить
	// класс Triangle и Rectangle
	class Point {

		protected $x1;
		protected $y1;

		public function display() {
			return "x1 = " . $this -> x1 . " y1 = " . $this -> y1;
		}

		public function setX1($x) {
			$x = (integer) $x;
			$this -> x1 = $x;
			return $this -> x1;
		}

		public function setY1($y) {
			$y = (integer) $y;
			$this -> y1 = $y;
			return $this -> y1;
		}

		public function getX1(){
			return $this -> x1;
		}

		public function getY1(){
			return $this -> y1;
		}
	}

	class Line extends Point {
		protected $x2;
		protected $y2;

		public function display() {
			$coordinates = parent::display();
			return $coordinates ."\n" . "x2 = " . $this -> x2 . " y2 = " . $this -> y2;
		}

		public function setX2($x) {
			$x = (integer) $x;
			$this -> x2 = $x;
			return $this -> x2;
		}

		public function setY2($y) {
			$y = (integer) $y;
			$this -> y2 = $y;
			return $this -> y2;
		}

		public function getX2(){
			return $this -> x2;
		}

		public function getY2(){
			return $this -> y2;
		}
	}

	class Triangle extends Line {
		protected $x4;
		protected $y4;

		public function display() {
			$coordinates = parent::display();
			return $coordinates ."\n" . "x4 = " . $this -> x4 . " y4 = " . $this -> y4;
		}

		public function setX4($x) {
			$x = (integer) $x;
			$this -> x4 = $x;
			return $this -> x4;
		}

		public function setY4($y) {
			$y = (integer) $y;
			$this -> y4 = $y;
			return $this -> y4;
		}

		public function getX4(){
			return $this -> x4;
		}

		public function getY4(){
			return $this -> y4;
		}
	}

	class Rectangle extends Triangle {
		protected $x3;
		protected $y3;

		public function display() {
			$coordinates = parent::display();
			return $coordinates ."\n" . "x3 = " . $this -> x3 . " y3 = " . $this -> y3;
		}

		public function setX3($x) {
			$x = (integer) $x;
			$this -> x3 = $x;
			return $this -> x3;
		}

		public function setY3($y) {
			$y = (integer) $y;
			$this -> y3 = $y;
			return $this -> y3;
		}

		public function getX3(){
			return $this -> x3;
		}

		public function getY3(){
			return $this -> y3;
		}
	}
	?>
</pre>