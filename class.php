<?php
	class User
	{
		private $name;
		private $surname;
		private $patronymic;
		
		public function __construct($name, $surname, $patronymic)
		{
			$this->name = $name;
			$this->surname = $surname;
			$this->patronymic = $patronymic;
		}
		
		// Реализуем указанный метод:
		public function __toString()
		{
			return 'Имя ' . $this->name . 'Фамилия ' . $this->surname . 'Отчетство ' . $this->patronymic;
		}
		
		public function getName()
		{
			return $this->name;
		}
		
		public function getAge()
		{
			return $this->age;
		}
	}
?>