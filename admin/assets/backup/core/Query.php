<?php  

class Query {
	private $table;
	private $setQuery;
	private $setResult=[];

	public function setQuery($query)
	{
		$this->setQuery = $query;
	}

	public function getQuery()
	{
		$myConnect = new Connect;

		$conn = $myConnect->getConnect("localhost", "root", "", "newskinoc");

		$set = "SELECT * FROM $this->table";

		$this->setQuery = mysqli_query($conn, $set );

	}

	public function setResult($result)
	{
		$this->setResult[] = $result;
	}

	public function getResult()
	{
		while($result = mysqli_fetch_assoc($this->setQuery)):
			$this->result[] = $result;
		endwhile;

		return $this->result;
	}
	

}